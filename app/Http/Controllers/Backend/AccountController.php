<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\Admin\Admins;
use App\Repository\Backend\Admin\Admin;
use App\Repository\Backend\Sitesetting\Sitesetting;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class AccountController extends Controller
{
    protected $admin;
    protected $sitesetting;
    public function __construct(Admin $admins, Sitesetting $sitesetting)
    {
        $this->admin = $admins;
        $this->sitesetting = $sitesetting;
        $this->middleware('auth:admin')->except('logout');
    }
  // profile change and updated section
  public function change_profile()
  {
      return view('backend.profile.changeprofile');
  }
  // profile update section
  public function update_profile(Request $request)
  {

      $validatedData = $request->validate([
          'name' => 'required',
          'email' => 'required',
          'phone' => 'required',
          'address' => 'required',
      ]);

      $admin = Admins::find(Auth::id());
      $admin->name = $request->name;
      $admin->email = $request->email;
      $admin->phone = $request->phone;
      $admin->address = $request->address;

      $admin->update();
      return redirect()->back()
          ->with('success', 'profile has been updated successfully');
  }
  // Change password of admin
  public function change_password()
  {
      return view('backend.profile.changepassword');
  }

  // update password of admdin
  public function update_password(Request $request)
  {
      $validatedData = $request->validate([
          'old_password' => 'required',
          'new_password' => 'required',
          'confirm_password' => 'required|same:new_password',
      ]);

      $hashedPassword = Auth::user()->password;
      if (Hash::check($request->old_password, $hashedPassword)) {
          $admin = Admins::find(Auth::id());
          $admin->password = bcrypt($request->new_password);
          $admin->save();
          session()->flash('message', 'Password updated successfully');
          return redirect()->back();
      } else {
          session()->flash('message', 'Old password didnt match');
          return redirect()->back();
      }
  }

}
