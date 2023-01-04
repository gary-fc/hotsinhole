<?php

namespace Database\Seeders;

use App\Models\Country;
use Illuminate\Database\Seeder;

class CountrySeeder extends Seeder
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
        $countries = array(
            array('country_name' => 'Argentina', 'abbreviation' => 'argentina', 'subdomain' => 'ar', 'enabled' => 0),
            array('country_name' => 'Bolivia', 'abbreviation' => 'bolivia', 'subdomain' => 'bo', 'enabled' => 0),
            array('country_name' => 'Brazil', 'abbreviation' => 'brazil', 'subdomain' => 'br', 'enabled' => 0),
            array('country_name' => 'Chile', 'abbreviation' => 'chile', 'subdomain' => 'cl', 'enabled' => 0),
            array('country_name' => 'Colombia', 'abbreviation' => 'colombia', 'subdomain' => 'co', 'enabled' => 0),
            array('country_name' => 'Ecuador', 'abbreviation' => 'ecuador', 'subdomain' => 'ec', 'enabled' => 0),
            array('country_name' => 'Guayana Francesa', 'abbreviation' => 'guayana francesa', 'subdomain' => 'gf', 'enabled' => 0),
            array('country_name' => 'Guayana', 'abbreviation' => 'GY', 'subdomain' => 'guayana', 'enabled' => 0),
            array('country_name' => 'Paraguay', 'abbreviation' => 'PY', 'subdomain' => 'paraguay', 'enabled' => 0),
            array('country_name' => 'Perú', 'abbreviation' => 'PE', 'subdomain' => 'peru', 'enabled' => 0),
            array('country_name' => 'Surinam', 'abbreviation' => 'SR', 'subdomain' => 'surinam', 'enabled' => 0),
            array('country_name' => 'Uruguay', 'abbreviation' => 'UY', 'subdomain' => 'uruguay', 'enabled' => 0),
            array('country_name' => 'Venezuela', 'abbreviation' => 'VE', 'subdomain' => 'venezuela', 'enabled' => 0),
        );
        foreach ($countries as $country) {
            $find = Country::where('country_name', $country['country_name']);
            if (!$find->first()) {
                Country::create([
                    'country_name' => $country['country_name'],
                    'abbreviation' => $country['abbreviation'],
                    'subdomain' => $country['subdomain'],
                    'enabled' => $country['enabled']
                ]);
            } else {
                $find->update([
                    'country_name' => $country['country_name'],
                    'abbreviation' => $country['abbreviation'],
                    'subdomain' => $country['subdomain'],
                    'enabled' => $country['enabled']
                ]);
            }
        }

    }
}
