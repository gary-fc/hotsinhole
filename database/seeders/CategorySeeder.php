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
            array('category_name' => 'escorts', 'category_url' => 'escorts'),
            array('category_name' => 'escorts men', 'category_url' => 'escorts-men'),
            array('category_name' => 'trans and transvestites', 'category_url' => 'trans'),
            array('category_name' => 'chance encounters', 'category_url' => 'chance-encounters'),

        );
        foreach ($categories as $category) {
            $find = Category::where('category_name', $category['category_name']);
            if (!$find->first()) {
                Category::create([
                    'category_name' => $category['category_name'],
                    'category_url' => $category['category_url'],
                ]);
            } else {
                $find->update([
                    'category_name' => $category['category_name'],
                    'category_url' => $category['category_url'],
                ]);
            }
        }
    }
}
