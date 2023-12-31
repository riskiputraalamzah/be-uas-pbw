<?php

namespace Database\Seeders;

use App\Models\Category;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $category = ['Category Satu', 'Category Dua', 'Category Tiga'];
        for ($i = 0; $i < count($category); $i++) {
            Category::create([
                'name' => $category[$i],
                'slug' => Str::slug($category[$i])
            ]);
        }
    }
}
