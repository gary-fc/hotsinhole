<?php

namespace Database\Seeders;

use App\Models\Category;
use Illuminate\Database\Seeder;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $this->addCategories();
    }

    public function addCategories()
    {
        $categories = array(
            array('category_name' => 'escorts', 'category_url' => 'escorts', 'category_image_url' => 'https://images.pexels.com/photos/2805050/pexels-photo-2805050.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1'),
            array('category_name' => 'escorts men', 'category_url' => 'escorts-men', 'category_image_url' => 'https://images.pexels.com/photos/8132002/pexels-photo-8132002.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1'),
            array('category_name' => 'trans and transvestites', 'category_url' => 'trans', 'category_image_url' => 'https://images.pexels.com/photos/1412136/pexels-photo-1412136.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1'),
            array('category_name' => 'chance encounters', 'category_url' => 'chance-encounters', 'category_image_url' => 'https://images.pexels.com/photos/3641322/pexels-photo-3641322.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1'),

        );
        foreach ($categories as $category) {
            $find = Category::where('category_name', $category['category_name']);
            if (!$find->first()) {
                Category::create([
                    'category_name' => $category['category_name'],
                    'category_url' => $category['category_url'],
                    'category_image_url' => $category['category_image_url'],
                ]);
            } else {
                $find->update([
                    'category_name' => $category['category_name'],
                    'category_url' => $category['category_url'],
                    'category_image_url' => $category['category_image_url'],
                ]);
            }
        }
    }
}
