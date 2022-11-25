<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Auth\Request\RegisterRequest;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class AuthController extends Controller
{
    public function createRegister()
    {
        return view('auth.register');
    }

    public function createLogin()
    {
        return view('auth.login');
    }

    public function login(Request $request)
    {
        dd($request->request);

    }

    public function register(RegisterRequest $request)
    {
        dd($request->request);

    }

    protected function prepareForValidation()
    {

    }
}
