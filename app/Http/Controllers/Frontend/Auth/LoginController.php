<?php

namespace App\Http\Controllers\Frontend\Auth;

use App\Http\Controllers\Controller;
use App\Mail\VerificationMail;
use App\Models\User;
use App\Providers\RouteServiceProvider;
use App\Repository\Backend\Sitesetting\Sitesetting;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Str;

class LoginController extends Controller
{
    protected $sitesetting;
    public function __construct(Sitesetting $sitesetting)
    {
        $this->sitesetting = $sitesetting;
    }

    public function signin()
    {
        // dd(session('url.intended'));

        if (auth()->check()) {
            return redirect()->intended(RouteServiceProvider::User_Home);
        }
        return view('frontend.auth.login');
    }

    public function userlogin(Request $request)
    {
        // for mail
        $settings = [
            'contact_email' => $this->sitesetting->get_value('contact_email'),
            'webapp_name' => $this->sitesetting->get_value('website-name'),
            'instagram_url' => $this->sitesetting->get_value('instagram_url'),
            'facebook_url' => $this->sitesetting->get_value('facebook_url'),
            'facebook_url' => $this->sitesetting->get_value('facebook_url'),
            'website_logo' => $this->sitesetting->get_value('website_logo')
            ];

            // Creditnal valdiation login
        $credentials = $request->validate([
            'email' => ['required', 'email', 'string'],
            'password' => ['required', 'string'],
        ],[
            'email.required' => 'The email field is required.',
            'password.required' => 'The password field is required.',
        ]);

        // If the user is not verified it redirect to verify page and sent an mail with verification code
        $row = User::where('email',$request->input('email'))->get();

        if (!empty($row)) {
            if ($row[0]['email_or_otp_verified'] != 1) {
                $otp = '';
                $length = 6;
                for ($i = 0; $i < $length; $i++) {
                    $otp .= rand(0, 9);
                }
                $user = User::find($row[0]['id']);
                $user->update(['verification_code' => $otp]);
                $mailInfo = new \stdClass();
                $mailInfo->webapp_name = $settings['webapp_name'];
                $mailInfo->facebook_url = $settings['facebook_url'];
                $mailInfo->instagram_url = $settings['instagram_url'];
                $mailInfo->contact_email = $settings['contact_email'];
                $mailInfo->website_logo = $settings['website_logo'];
                $mailInfo->currentday = Carbon::now()->format('l, j F');
                $mailInfo->name = $user->name;
                $mailInfo->otp = $otp;
                Mail::to($row[0]['email'])->send(new VerificationMail($mailInfo));
                $request->session()->put('user_id', $row[0]['id']);
                $request->session()->put('intended', $request->intended);
                 return redirect()->route('verify');
             }

            if (auth()->attempt($credentials)) {
                    $request->session()->regenerate();
                    if ($request->has('remember')) {
                        auth()->user()->setRememberToken(Str::random(60));
                        auth()->user()->save();
                    }
                    return redirect()->to($request->input('intended') ?: '/user/dashboard');

            }
        }

        return back()->withErrors([
            'email' => 'The provided credentials do not match our records.',
        ])->onlyInput('email');
    }

    public function signup()
    {
        return view('frontend.auth.register');
    }

    public function userregister(Request $request)
    {
        $settings = [
            'contact_email' => $this->sitesetting->get_value('contact_email'),
            'website_name' => $this->sitesetting->get_value('website-name'),
            'instagram_url' => $this->sitesetting->get_value('instagram_url'),
            'facebook_url' => $this->sitesetting->get_value('facebook_url'),
            'facebook_url' => $this->sitesetting->get_value('facebook_url'),
            'website_logo' => $this->sitesetting->get_value('website_logo')
            ];

         $request->validate([
                'name' => 'required',
                'email' => 'required|email|unique:users,email',
                'password' => 'required',
                'c_password' => 'required|same:password',
                'email_or_otp_verified' => '',
                'verification_code' => '',
                'otp_created_at' => '',
                'phone' => ''
        ],[

            'name.required' => 'The name field is required.',
            'email.required' => 'The email field is required.',
            'email.unique' => 'This email is already been used.',
            'c_password.same' => 'The confirm password doesnt match.',
            'c_password.required' => 'The confirm password field is required.',
            'password.required' => 'The password field is required.',
        ]);


        $input = $request->all();
        $input['password'] = bcrypt($input['password']);

        $otp = '';
        $length = 6;
        for ($i = 0; $i < $length; $i++) {
            $otp .= rand(0, 9);
        }
        $input['verification_code'] = $otp;
        $input['otp_created_at'] = now();

        $mailInfo = new \stdClass();
        $mailInfo->webapp_name = $settings['website_name'];
        $mailInfo->facebook_url = $settings['facebook_url'];
        $mailInfo->instagram_url = $settings['instagram_url'];
        $mailInfo->contact_email = $settings['contact_email'];
        $mailInfo->website_logo = $settings['website_logo'];
        $mailInfo->currentday = Carbon::now()->format('l, j F');
        $mailInfo->name = $input['name'];
        $mailInfo->otp = $otp;
        Mail::to($input['email'])->send(new VerificationMail($mailInfo));
        $user = User::create($input);
        $request->session()->put('user_id', $user->id);
        $request->session()->put('intended', $request->intended);
        return redirect()->route('verify');
    }

    public function logout()
    {
        Auth::logout();
        return redirect()->route('signin');
    }

}
