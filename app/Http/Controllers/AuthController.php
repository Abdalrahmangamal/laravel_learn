<?php

namespace App\Http\Controllers;
use App\Http\Requests\SignupRequest;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    public function showSignupForm()
    {
        return view('auth.signup', [
            'pagetitle' => 'Signup'
        ]);
    }
    public function signup(SignupRequest $request)
    {
        $user = new User();
        $user->name = $request->name;
        $user->email = $request->email;
        $user->password = $request->password;
        $user->save();
        Auth::login($user);
        return redirect('/');
    }

    public function showLoginForm()
    {
        return view('auth.login', [
            'pagetitle' => 'Login'
        ]);
    }
    public function login() {
        $credentials=request()->only('email','password');
        if(Auth::attempt($credentials)) {
            request()->session()->regenerate();
            return redirect('/');
        }
        return back()->withErrors([
            'email'=>'Invalid credentials'
        ])->onlyInput('email');
    }
    public function logout() {
        Auth::logout();
        return redirect('/');
    }
}
