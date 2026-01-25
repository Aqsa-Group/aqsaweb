<?php

namespace App\Http\Controllers\ManagementPanel;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;


class AuthController extends Controller
{
    public function showLoginForm()
{
   
    if (Auth::guard('management')->check()) {
        return redirect()->route('management.home');
    }

    return view('Management.Auth.login');
}


    
    public function login(Request $request)
    {
        $credentials = $request->only('username', 'password');

        if (Auth::guard('management')->attempt($credentials)) {
            $request->session()->regenerate();

            /** @var User $user */
            $user = Auth::guard('management')->user();

            if ($user->status === 0) {
                $user->status = 1;
                $user->save();
            }

            return redirect()->route('management.home'); 
        }

        return back()->with('error', 'نام کاربری یا رمز  اشتباه است.');
    }

        public function logout(Request $request)
    {
        $user = Auth::guard('management')->user();
        if ($user) {
        /** @var User $user */     
            $user->status = 0;
            $user->save();
        }

        Auth::guard('management')->logout();

        $request->session()->invalidate();
        $request->session()->regenerateToken();

        if ($request->header('X-Livewire') || $request->ajax()) {
            return response()->json(['redirect' => route('management.login.form')], 401);
        }

        return redirect()->route('management.login.form');
    }

}