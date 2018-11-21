<?php

namespace App\Http\Controllers\Auth\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Auth;

class LoginController extends Controller
{
    public function __construct()
    {
        $this->middleware('guest:admin', ['except' => ['logout']]);
    }
    public function showLoginForm()
    {
        return view('auth.admin.login');
    }
    public function login(Request $request)
    {
        $this->validate($request, [
            'email' => 'required|email',
            'password'  =>  'required|min:6'
        ]);
        if (Auth::guard('admin')->attempt(['email' => $request->email,
                                        'password' => $request->password],
                                                      $request->remember))
            return redirect()->intended(route('admin.home'));
        $admin = \App\Models\Users\Admin::where('email', $request->email)->first();
        
        if (!$admin)
            $errors = ['email' => 'E-Mail ou Senha Incorreto.'];
        else if (!(\Hash::check($request->password, $admin->password)))
            $errors = ['email' => 'E-Mail ou Senha Incorreto.'];
        
        return redirect()
                        ->back()
                        ->withInput($request->only('email', 'remember'))
                        ->withErrors($errors);
    }
    public function logout()
    {
        Auth::guard('admin')->logout();
        return redirect('/');
    }


}
