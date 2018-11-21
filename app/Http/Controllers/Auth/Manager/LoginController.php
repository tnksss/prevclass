<?php

namespace App\Http\Controllers\Auth\Manager;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Auth;

class LoginController extends Controller
{
    public function __construct()
    {
        $this->middleware('guest:manager', ['except' => ['logout']]);
    }
    public function showLoginForm()
    {
        return view('auth.manager.login');
    }
    public function login(Request $request)
    {
        $this->validate($request, [
            'email' => 'required|email',
            'password'  =>  'required|min:6'
        ]);
        
        if (Auth::guard('manager')->attempt(['email' => $request->email,
                                        'password' => $request->password],
                                                      $request->remember))
            return redirect()->intended(route('manager.home'));
            
        $manager = \App\Models\Users\Manager::where('email', $request->email)->first();
        
        if (!$manager)
            $errors = ['email' => 'E-Mail ou Senha Incorreto.'];
        else if (!(\Hash::check($request->password, $manager->password)))
            $errors = ['email' => 'E-Mail ou Senha Incorreto.'];
        
        return redirect()
                        ->back()
                        ->withInput($request->only('email', 'remember'))
                        ->withErrors($errors);
    }
    public function logout()
    {
        Auth::guard('manager')->logout();
        return redirect('/');
    }
}
