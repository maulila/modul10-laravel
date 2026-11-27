<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Category;

class CategorySeeder extends Seeder
{
    public function run(): void
    {
        Category::create([
            'category_name' => 'Makanan',
            'description' => 'Kategori produk makanan',
        ]);

        Category::create([
            'category_name' => 'Minuman',
            'description' => 'Kategori produk minuman',
        ]);

        Category::create([
            'category_name' => 'Elektronik',
            'description' => 'Kategori produk elektronik',
        ]);
    }
}
