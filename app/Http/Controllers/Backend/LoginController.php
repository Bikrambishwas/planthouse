<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    protected $guard = 'admin';
    public function login()
    {
        if (Auth::guard('admin')->check()) {
            return redirect()->route('admin.home');
        } else {
            return view('backend.login.index');
        }
    }

    public function backoffice(Request $request): RedirectResponse
    {

        $credentials = $request->validate([
            'email' => ['required', 'email', 'string'],
            'password' => ['required', 'string'],
        ]);
        if (Auth::guard('admin')->attempt($credentials)) {
            $request->session()->regenerate();
            $request->get('remember');
            return redirect()->intended(RouteServiceProvider::Admin_Home);
        }

        return back()->withErrors([
            'email' => 'The provided credentials do not match our records.',
        ])->onlyInput('email');
        //$request->adminAuthenticate();
        // $request->session()->regenerate();
        //$request->get('remember');
        //return redirect()->intended(RouteServiceProvider::Admin_Home);
    }


    public function logout(Request $request)
    {
        Auth::guard('admin')->logout();
        return redirect()->route('adminlogin');
    }

    // public function loginAsUser(Request $request, $userId)
    // {
    //     if (Auth::check()) {
    //         $user = User::findOrFail($userId);
    //         Auth::guard('user')->login($user);
    //         return redirect()->intended(RouteServiceProvider::User_Home);
    //     }
    //  }
}
