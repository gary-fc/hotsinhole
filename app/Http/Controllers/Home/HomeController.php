<?php

namespace App\Http\Controllers\Home;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\City;

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
        $category = 'escorts';
        $data = ['category' => $category, 'subdomain' => $subdomain];
        return view('home.home', $data);
    }

    public function subdomains($subdomain)
    {
        $categories = Category::all();
        $cities = City::where('subdomain', $subdomain)->paginate(3);
        $data = ['subdomain' => $subdomain, 'categories' => $categories, 'cities' => $cities];
        return view('country.index', $data);
    }
}
