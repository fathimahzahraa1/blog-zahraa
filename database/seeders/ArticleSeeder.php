<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ArticleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
    \App\Models\Article::create([
        'user_id' => 2,
        'category_id' => 1,
        'title' => 'Tren Teknologi AI di Tahun 2026',
        'slug' => 'tren-teknologi-ai-di-tahun-2026',
        'content' => 'Perkembangan teknologi AI semakin pesat, mulai dari asisten virtual hingga otomasi industri...',
        'thumbnail' => null,
        'status' => 'published',
    ]);

    \App\Models\Article::create([
        'user_id' => 2,
        'category_id' => 1,
        'title' => 'Cara Kerja Machine Learning untuk Pemula',
        'slug' => 'cara-kerja-machine-learning-untuk-pemula',
        'content' => 'Machine learning adalah cabang dari kecerdasan buatan yang memungkinkan komputer belajar dari data...',
        'thumbnail' => null,
        'status' => 'published',
    ]);

    \App\Models\Article::create([
        'user_id' => 2,
        'category_id' => 2,
        'title' => 'Resep Rendang Padang Asli',
        'slug' => 'resep-rendang-padang-asli',
        'content' => 'Rendang adalah salah satu masakan khas Minangkabau yang sudah mendunia...',
        'thumbnail' => null,
        'status' => 'published',
    ]);

    \App\Models\Article::create([
        'user_id' => 2,
        'category_id' => 2,
        'title' => '5 Kafe Instagramable di Kota Kamu',
        'slug' => '5-kafe-instagramable-di-kota-kamu',
        'content' => 'Berikut rekomendasi kafe dengan interior menarik dan menu enak untuk healing...',
        'thumbnail' => null,
        'status' => 'draft',
    ]);

    \App\Models\Article::create([
        'user_id' => 2,
        'category_id' => 3,
        'title' => 'Panduan Backpacking ke Yogyakarta',
        'slug' => 'panduan-backpacking-ke-yogyakarta',
        'content' => 'Yogyakarta menawarkan wisata budaya, alam, dan kuliner yang lengkap dengan budget terbatas...',
        'thumbnail' => null,
        'status' => 'published',
    ]);
    }
}
