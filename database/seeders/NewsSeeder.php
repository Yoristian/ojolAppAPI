<?php

namespace Database\Seeders;
use App\Models\News;


use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class NewsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        News::create([
            'title' => 'Aman dan Nyaman di Era New Normal',
            'content' => 'Di era new normal, keamanan dan kenyamanan menjadi prioritas utama...',
            'image' => 'img/folder-berita/amannyaman.png',
        ]);

        News::create([
            'title' => 'Cara Daftar Driver',
            'content' => 'Ingin bergabung menjadi bagian dari tim kami? Pelajari langkah-langkah...',
            'image' => 'img/folder-berita/drivers.jpg',
        ]);
    }
}
