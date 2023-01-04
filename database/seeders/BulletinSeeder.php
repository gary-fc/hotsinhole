<?php

namespace Database\Seeders;

use App\Models\Bulletin;
use Illuminate\Database\Seeder;

class BulletinSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $bulletins = array(
            array(
                'bulletin_title' => '🔥💋Sexy choca tetona , con curvas de infarto🔥💋',
                'bulletin_description' => 'Hola amor me llamo karly soy una scort recien llegada dispuesta a llenarte de placer y lujuria cumolir todos tus deseos 😋🔥soy choquita de senos grandes , cuerpo bien formado y una buena cola😋🔥me gusta pasarla bien , soy cariñosa , caliente ..
Atiendo en mi depa y tmb hago salidas a hoteles , moteles , deoartamentos atiendo 24horas',
                'bulletin_phone' => '+591 76365960',
                'bulletin_direction' => 'Charcas',
                'bulletin_year' => '30',
                'bulletin_postal_code' => '0000',
                'bulletin_zone' => 'Equipetrol',
                'status' => Bulletin::STATUS_DRAFT,
                'type' => Bulletin::TYPE_FREE,
                'user_id' => 1,
                'category_id' => 1,
                'city_id' => 1,
                'country_id' => 1,
            ),
            array(
                'bulletin_title' => '🔥💋Sexy choca tetona , con curvas de infarto🔥💋',
                'bulletin_description' => 'Hola amor me llamo karly soy una scort recien llegada dispuesta a llenarte de placer y lujuria cumolir todos tus deseos 😋🔥soy choquita de senos grandes , cuerpo bien formado y una buena cola😋🔥me gusta pasarla bien , soy cariñosa , caliente ..
Atiendo en mi depa y tmb hago salidas a hoteles , moteles , deoartamentos atiendo 24horas',
                'bulletin_phone' => '+591 76365960',
                'bulletin_direction' => 'Charcas',
                'bulletin_year' => '30',
                'bulletin_postal_code' => '0000',
                'bulletin_zone' => 'Equipetrol',
                'status' => Bulletin::STATUS_DRAFT,
                'type' => Bulletin::TYPE_TOP,
                'user_id' => 1,
                'category_id' => 1,
                'city_id' => 1,
                'country_id' => 1,
            ),
            array(
                'bulletin_title' => '🔥💋Sexy choca tetona , con curvas de infarto🔥💋',
                'bulletin_description' => 'Hola amor me llamo karly soy una scort recien llegada dispuesta a llenarte de placer y lujuria cumolir todos tus deseos 😋🔥soy choquita de senos grandes , cuerpo bien formado y una buena cola😋🔥me gusta pasarla bien , soy cariñosa , caliente ..
Atiendo en mi depa y tmb hago salidas a hoteles , moteles , deoartamentos atiendo 24horas',
                'bulletin_phone' => '+591 76365960',
                'bulletin_direction' => 'Charcas',
                'bulletin_year' => '30',
                'bulletin_postal_code' => '0000',
                'bulletin_zone' => 'Equipetrol',
                'status' => Bulletin::STATUS_DRAFT,
                'type' => Bulletin::TYPE_PREMIUM,
                'user_id' => 1,
                'category_id' => 1,
                'city_id' => 1,
                'country_id' => 1,
            ),
            array(
                'bulletin_title' => '🔥💋Sexy choca tetona , con curvas de infarto🔥💋',
                'bulletin_description' => 'Hola amor me llamo karly soy una scort recien llegada dispuesta a llenarte de placer y lujuria cumolir todos tus deseos 😋🔥soy choquita de senos grandes , cuerpo bien formado y una buena cola😋🔥me gusta pasarla bien , soy cariñosa , caliente ..
Atiendo en mi depa y tmb hago salidas a hoteles , moteles , deoartamentos atiendo 24horas',
                'bulletin_phone' => '+591 76365960',
                'bulletin_direction' => 'Charcas',
                'bulletin_year' => '30',
                'bulletin_postal_code' => '0000',
                'bulletin_zone' => 'Equipetrol',
                'status' => Bulletin::STATUS_DRAFT,
                'type' => Bulletin::TYPE_HOT,
                'user_id' => 1,
                'category_id' => 1,
                'city_id' => 1,
                'country_id' => 1,
            ),
        );

        foreach ($bulletins as $bulletin) {
            Bulletin::create([
                'bulletin_title' => $bulletin['bulletin_title'],
                'bulletin_description' => $bulletin['bulletin_description'],
                'bulletin_phone' => $bulletin['bulletin_phone'],
                'bulletin_direction' => $bulletin['bulletin_direction'],
                'bulletin_year' => $bulletin['bulletin_year'],
                'bulletin_postal_code' => $bulletin['bulletin_postal_code'],
                'bulletin_zone' => $bulletin['bulletin_zone'],
                'status' => $bulletin['status'],
                'type' => $bulletin['type'],
                'user_id' => $bulletin['user_id'],
                'category_id' => $bulletin['category_id'],
                'city_id' => $bulletin['city_id'],
                'country_id' => $bulletin['country_id'],
            ]);
        }
    }
}
