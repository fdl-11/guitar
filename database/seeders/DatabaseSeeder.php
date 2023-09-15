<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\Product;
use App\Models\Category;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        Category::create([
            'name' => 'guitar',
            'slug' => 'guitar'
        ]);
        
        Category::create([
            'name' => 'capo',
            'slug' => 'capo'
        ]);

        Category::create([
            'name' => 'string',
            'slug' => 'string'
        ]);

        // Konfigurasi Factory
        Product::factory(20)->create();
    }
}
