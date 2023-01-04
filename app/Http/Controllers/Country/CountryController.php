<?php

namespace App\Http\Controllers\Country;

use App\Http\Controllers\Controller;
use App\Models\Category;

class CountryController extends Controller
{
    public function category($subdomain, $category)
    {
        $category = Category::where('category_url', $category)->first();
        $bulletins = \App\Models\Bulletin::where('category_id', $category->id)->get();
        $data = [
            'category' => $category,
            'subdomain' => $subdomain,
            'bulletins' => $bulletins
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
