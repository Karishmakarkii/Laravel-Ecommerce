<?php

namespace Database\Seeders;

use App\Models\Category;
use App\Models\Product;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $category = Category::create([
            'name' => 'Accesories',
            'description' => 'This is access category contains the lappy',

        ]);
        // \App\Models\User::factory(10)->create();
        // Product::create([
        //     'product_name' => 'Iphone x',
        //     'product_desc' => 'This is a iphone ',
        //     'price' => '100000',
        //     'category_id'=> $category->id,
            
        // ]);
        Product::factory(5)->create([
            "category_id" => 3
        ]);
    }
}
