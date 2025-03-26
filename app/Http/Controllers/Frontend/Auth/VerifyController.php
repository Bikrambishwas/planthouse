<?php

namespace App\Http\Controllers\Frontend\Auth;

use App\Http\Controllers\Controller;
use App\Mail\VerificationMail;
use App\Models\User;
use App\Repository\Backend\Sitesetting\Sitesetting;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Validator;

class VerifyController extends Controller
{
    protected $sitesetting;
    public function __construct(Sitesetting $sitesetting)
    {
        $this->sitesetting = $sitesetting;
    }

    public function verify(Request $request)
    {
        $user_id = $request->session()->get('user_id');
        $intended = $request->session()->get('intended');
        // dd($user_id);
        return view('frontend.auth.verify',compact('user_id','intended'));
    }

    public function verifyotp(Request $request)
    {
        $user = User::where('id', $request->input('user_id'))->first();
        if (!$user) {
            return response()->json(['message' => 'User not found'], 404);
        }

        if ($user->email_or_otp_verified === true) {
            return response()->json(['message' => 'User is already verified'], 200);
        }

        $inputOTP = $request->input('otp');
        $otpCreatedAt = $user->otp_created_at;
        // $otpExpirationTime = now()->subMinutes(config('auth.otp_expiration'));

        // if ($otpCreatedAt < $otpExpirationTime) {
        //     return response()->json(['message' => 'OTP has expired'], 400);
        // }
        $created_at = now();
        if ($user->verification_code === $inputOTP) {
            // OTP matches, mark the user as verified
            $user->update(['email_or_otp_verified' => true]);
            // Clear the stored OTP and OTP creation timestamp
            $user->update(['verification_code' => null, 'otp_created_at' => $created_at , 'status' => 'Active']);
            Auth::login($user);
            // return redirect()->route('user.dashboard');
            return redirect()->to($request->input('intended') ?: '/user/dashboard');
        } else {
            return response()->json(['message' => 'Incorrect OTP'], 400);
        }
    }

    public function resendotp(Request $request)
    {
       $settings = [
           'contact_email' => $this->sitesetting->get_value('contact_email'),
           'website_name' => $this->sitesetting->get_value('website-name'),
           'instagram_url' => $this->sitesetting->get_value('instagram_url'),
           'facebook_url' => $this->sitesetting->get_value('facebook_url'),
           'website_logo' => $this->sitesetting->get_value('website_logo')

           ];

       $user = User::where('id',$request->input('user_id'))->first();
       if (!$user) {
           return response()->json(['message' => 'User not found'], 404);
        }

       $otp = '';
       $length = 6;
       for ($i = 0; $i < $length; $i++) {
           $otp .= rand(0, 9);
       }
       $created_at = now();
       $mailInfo = new \stdClass();
       $mailInfo->website_name = $settings['website_name'];
       $mailInfo->facebook_url = $settings['facebook_url'];
       $mailInfo->instagram_url = $settings['instagram_url'];
       $mailInfo->contact_email = $settings['contact_email'];
       $mailInfo->website_logo = $settings['website_logo'];

       $mailInfo->name = $user->name;
       $mailInfo->otp = $otp;
       $mailInfo->currentday = Carbon::now()->format('l, j F');
       Mail::to($user->email)->send(new verificationMail($mailInfo));
       $user->update(['verification_code' => $otp, 'otp_created_at' => $created_at]);
       return response()->json(['message' => 'OTP has been sent.']);
    }

      //  forgot pass blade
      public function forgetpassword_view(Request $request)
      {
         return view('frontend.auth.forgetpassword');

      }
      public function forgetpassword(Request $request)
      {
         $settings = [
             'contact_email' => $this->sitesetting->get_value('contact_email'),
             'website_name' => $this->sitesetting->get_value('website-name'),
             'instagram_url' => $this->sitesetting->get_value('instagram_url'),
             'facebook_url' => $this->sitesetting->get_value('facebook_url'),
             'website_logo' => $this->sitesetting->get_value('website_logo')
             ];

             $validator = Validator::make($request->all(),[
                    'email' => 'required|email'
             ]);
             if ($validator->fails()) {
                  return response()->json([
                     'status' => 400,
                     'errors' => $validator->getMessageBag(),
                     'message' => 'Unable to process'
                  ]);
             }
          $user = User::where('email',$request->input('email'))->first();
          if ($user && $user->status == 'Inactive'){
              return response()->json(['message' => 'User not found'], 404);
          }
          if (!$user) {
                  return response()->json(['message' => 'User not found'], 404);
          }

         $otp = '';
          $length = 6;
          for ($i = 0; $i < $length; $i++) {
              $otp .= rand(0, 9);
          }

          $created_at = now();
          $mailInfo = new \stdClass();
          $mailInfo->website_name = $settings['website_name'];
          $mailInfo->facebook_url = $settings['facebook_url'];
          $mailInfo->instagram_url = $settings['instagram_url'];
          $mailInfo->contact_email = $settings['contact_email'];
          $mailInfo->website_logo = $settings['website_logo'];
          $mailInfo->currentday = Carbon::now()->format('l, j F');
          $mailInfo->name = $user->name;
          $mailInfo->otp = $otp;
          Mail::to($user->email)->send(new VerificationMail($mailInfo));
          $user->update(['verification_code' => $otp, 'otp_created_at' => $created_at]);
          $request->session()->put('user_id', $user->id);
          return redirect()->route('resetpassword_view');
      }

     //  reset password balde
      public function resetpassword_view(Request $request)
      {
          $user_id = $request->session()->get('user_id');
          $row = User::find($user_id);
          $email = $row->email;
          return view('frontend.auth.resetpassword',compact('email'));
      }

     //  resetpassword function
      public function resetpassword(Request $request)
      {
         $validator = Validator::make($request->all(),[
               'otp' => 'required',
               'password' => 'required',
               'c_password' => 'required|same:password'
         ]);

         if ($validator->fails()) {
              return response()->json([
                 'status' => 400,
                 'errors' => $validator->getMessageBag(),
                 'message' => 'Unable to process'

              ]);
         }
                $user = User::where('email',$request->input('email'))->first();
                if ($user && $user->status == 'Inactive'){
                    return response()->json(['message' => 'User not found'], 404);

                }
              if (!$user) {
                  return response()->json(['message' => 'User not found'], 404);
              }
              $inputOTP = $request->input('otp');
              $pass = bcrypt($request->input('password'));

              $otpCreatedAt = $user->otp_created_at; // This should be a timestamp in your databasedd
              // dd($otpCreatedAt);
              $otpExpirationTime = now()->subMinutes(config('auth.otp_expiration')); // Adjust the expiration time as needed

              if ($otpCreatedAt < $otpExpirationTime) {
                  return response()->json(['message' => 'OTP has expired'], 400);
              }
              $created_at = now();

              if ($user->verification_code === $inputOTP) {
                  $user->update(['verification_code' => null, 'otp_created_at' => $created_at, 'password' => $pass]);
                  return response()->json(['message' => 'Password change successfully.']);
              } else {
                  return response()->json(['message' => 'Incorrect OTP'], 400);
              }
      }
}
