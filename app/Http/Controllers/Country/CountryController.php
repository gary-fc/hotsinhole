<?php

namespace App\Http\Controllers\Country;

use App\Http\Controllers\Controller;

class CountryController extends Controller
{
    public function category($subdomain, $category)
    {
        $data = [
            'category' => $category,
            'subdomain' => $subdomain
        ];
        return view('bulletin.index', $data);
    }

    public function categoryCity($subdomain, $category, $cityAbbreviation)
    {
        $data = [
            'category' => $category,
            'cityAbbreviations' => $cityAbbreviation,
            'subdomain' => $subdomain
        ];
        return view('bulletin.index', $data);
    }
}
