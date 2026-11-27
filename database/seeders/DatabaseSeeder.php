<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    public function run(): void
    {
        // Mengisi data kategori terlebih dahulu
        $this->call([
            CategorySeeder::class,
            ProductSeeder::class,
        ]);
    }
}
