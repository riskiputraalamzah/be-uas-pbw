<?php

namespace Database\Seeders;

use App\Models\Gallery;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class GallerySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Gallery::create([
            'category_id' => 1,
            'foto' => '1.jpg',
            'judul' => 'Lorem ipsum dolor sit amet.',
            'deskripsi' => 'Lorem ipsum dolor sit amet consectetur, adipisicing elit. Quam, vel.'
        ]);
        Gallery::create([
            'category_id' => 2,
            'foto' => '2.jpg',
            'judul' => 'Lorem ipsum dolor sit amet.',
            'deskripsi' => 'Lorem ipsum dolor sit amet consectetur, adipisicing elit. Quam, vel.'
        ]);
        Gallery::create([
            'category_id' => 1,
            'foto' => '3.jpg',
            'judul' => 'Lorem ipsum dolor sit amet.',
            'deskripsi' => 'Lorem ipsum dolor sit amet consectetur, adipisicing elit. Quam, vel.'
        ]);
    }
}
