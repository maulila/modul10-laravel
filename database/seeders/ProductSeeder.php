<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Product;

class ProductSeeder extends Seeder
{
    public function run(): void
    {
        Product::create([
            'name_product' => 'Little Bacon Burger',
            'stock_product' => 19,
            'price_product' => 96000,
            'desc_product' => 'Burger dengan daging bacon yang lezat.',
            'id_category' => 1,
        ]);

        Product::create([
            'name_product' => 'Little Hamburger',
            'stock_product' => 25,
            'price_product' => 75000,
            'desc_product' => 'Hamburger dengan daging sapi.',
            'id_category' => 1,
        ]);

        Product::create([
            'name_product' => 'Cheeseburger',
            'stock_product' => 30,
            'price_product' => 85000,
            'desc_product' => 'Burger dengan tambahan keju.',
            'id_category' => 1,
        ]);
    }
}
