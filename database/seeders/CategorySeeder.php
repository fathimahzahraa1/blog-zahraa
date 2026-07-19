<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
    \App\Models\Category::create([
        'user_id' => 2,
        'name' => 'Teknologi',
        'slug' => 'teknologi',
        'description' => 'Artikel seputar teknologi dan gadget terbaru.',
    ]);

    \App\Models\Category::create([
        'user_id' => 2,
        'name' => 'Kuliner',
        'slug' => 'kuliner',
        'description' => 'Review makanan dan resep masakan.',
    ]);

    \App\Models\Category::create([
        'user_id' => 2,
        'name' => 'Travel',
        'slug' => 'travel',
        'description' => 'Cerita perjalanan dan tips wisata.',
    ]);
    }
}
