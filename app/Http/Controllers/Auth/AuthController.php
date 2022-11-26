<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class AuthController extends Controller
{

    public function __constructor()
    {
        $this->middleware('guest')->except('logout');
    }

    public function createRegister($subdomain)
    {
        $data = [
            'subdomain' => $subdomain
        ];
        return view('auth.register', $data);
    }

    public function createLogin($subdomain)
    {
        $data = [
            'subdomain' => $subdomain
        ];
        return view('auth.login', $data);
    }

    public function login(Request $request)
    {
        $request->validate(['email' => 'required|string|email', 'password' => 'required|string']);

        $credentials = $request->only('email', 'password');
        if (Auth::attempt($credentials)) {
            return redirect()->intended('/');
        }
        return redirect('auth/login')->with('error', 'Ops');
    }

    public function register(Request $request)
    {
        $request->validate([
            'name' => 'required|string',
            'email' => 'required|string|email',
            'password' => 'required|string',
            'repeat_password' => 'required'
        ]);
        User::insert([
            'name' => $request->name,
            'email' => $request->email,
            'password' => Hash::make($request->password)
        ]);
        return redirect('auth/login');

    }

    public function logout()
    {
        Auth::logout();
        return redirect('auth/login');
    }
}
