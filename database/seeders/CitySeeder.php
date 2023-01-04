<?php

namespace Database\Seeders;

use App\Models\City;
use App\Models\Country;
use Illuminate\Database\Seeder;

class CitySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $this->syncronize();
    }

    public function syncronize()
    {
        $this->addCitiesArgentina();
    }

    public function addCitiesArgentina()
    {
        $country = Country::where('abbreviation', 'argentina')->first();

        $cities = array(
            array('city_name' => 'Avellaneda', 'abbreviation' => 'avellaneda', 'subdomain' => 'ar', 'enabled' => 0, 'country_id' => $country->id),
            array('city_name' => 'Bahía Blanca', 'abbreviation' => 'bahiablanca', 'subdomain' => 'ar', 'enabled' => 0, 'country_id' => $country->id),

        );
        foreach ($cities as $city) {
            $find = City::where('city_name', $city['city_name']);
            if (!$find->first()) {
                City::create([
                    'city_name' => $city['city_name'],
                    'abbreviation' => $city['abbreviation'],
                    'subdomain' => $city['subdomain'],
                    'enabled' => $city['enabled'],
                    'country_id' => $country->id
                ]);
            } else {
                $find->update([
                    'city_name' => $city['city_name'],
                    'abbreviation' => $city['abbreviation'],
                    'subdomain' => $city['subdomain'],
                    'enabled' => $city['enabled'],
                    'country_id' => $country->id
                ]);
            }
        }
    }
}
