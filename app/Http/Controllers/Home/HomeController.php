<?php

namespace App\Http\Controllers\Home;

use App\Http\Controllers\Controller;

class HomeController extends Controller
{
    const _WWW = 'www';
    const _EMPTY = '';

    public function index($subdomain = self::_EMPTY)
    {
        if ($subdomain === self::_WWW || $subdomain === self::_EMPTY) {
            return $this->mainDomain($subdomain);
        }
        return $this->subdomains($subdomain);
    }

    public function mainDomain($subdomain)
    {
        $data = ['subdomain' => $subdomain];
        return view('home.home', $data);
    }

    public function subdomains($subdomain)
    {
        $data = ['subdomain' => $subdomain];
        return view('home.subdomain.index', $data);
    }
}
