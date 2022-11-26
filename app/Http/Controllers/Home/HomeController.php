<?php

namespace App\Http\Controllers\Home;

use App\Http\Controllers\Controller;

class HomeController extends Controller
{
    public function index($subdomain)
    {
        $data = ['subdomain' => $subdomain];
        return view('home.home', $data);
    }
}
