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
            array('country_name' => 'Argentina', 'abbreviation' => 'AR', 'subdomain' => 'ar', 'enabled' => 0),
            array('country_name' => 'Bolivia', 'abbreviation' => 'BO', 'subdomain' => 'bo', 'enabled' => 0),
            array('country_name' => 'Brazil', 'abbreviation' => 'BR', 'subdomain' => 'br', 'enabled' => 0),
            array('country_name' => 'Chile', 'abbreviation' => 'CL', 'subdomain' => 'cl', 'enabled' => 0),
            array('country_name' => 'Colombia', 'abbreviation' => 'CO', 'subdomain' => 'co', 'enabled' => 0),
            array('country_name' => 'Ecuador', 'abbreviation' => 'EC', 'subdomain' => 'ec', 'enabled' => 0),
            array('country_name' => 'Guayana Francesa', 'abbreviation' => 'GF', 'subdomain' => 'gf', 'enabled' => 0),
            array('country_name' => 'Guayana', 'abbreviation' => 'GY', 'subdomain' => 'gy', 'enabled' => 0),
            array('country_name' => 'Paraguay', 'abbreviation' => 'PY', 'subdomain' => 'py', 'enabled' => 0),
            array('country_name' => 'Perú', 'abbreviation' => 'PE', 'subdomain' => 'pe', 'enabled' => 0),
            array('country_name' => 'Surinam', 'abbreviation' => 'SR', 'subdomain' => 'sr', 'enabled' => 0),
            array('country_name' => 'Uruguay', 'abbreviation' => 'UY', 'subdomain' => 'uy', 'enabled' => 0),
            array('country_name' => 'Venezuela', 'abbreviation' => 'VE', 'subdomain' => 've', 'enabled' => 0),
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
