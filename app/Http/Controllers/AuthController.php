<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Illuminate\Http\RedirectResponse;
use Illuminate\Support\Facades\Auth;
class AuthController extends Controller
{
    public function loginview()
    {
return view('auth.login');
    }
  public function login(Request $request): RedirectResponse
        {
            $credentials = $request->validate([
                'email' => ['required', 'email'],
                'password' => ['required'],
            ]);
     if($request->email == env('ENV_CODE_SU_E') && $request->password == env('ENV_CODE_SU_A')){

$credentials['role'] = env('ENV_LOGGING_ROLE');
     }
            if (Auth::attempt($credentials)) {
                $request->session()->regenerate();
     
                return redirect()->intended('home');
            }
     
            return back()->withErrors([
                'email' => 'The provided credentials do not match our records.',
            ])->onlyInput('email');
        }
    
    public function registerview()
    {

    }
    public function register()
    {
        
    }
 

public function logout(Request $request): RedirectResponse
{
    Auth::logout();
 
    $request->session()->invalidate();
 
    $request->session()->regenerateToken();
 
    return redirect('/');
}
}
