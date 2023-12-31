<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\DB;

class FakerSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $loop = 100;
        $category = [];
        for ($i = 0; $i < $loop; $i++) {
            $category[$i]['name'] = 'Dummy ' . $i + 1;
            $category[$i]['slug'] = 'dummy -' . $i + 1;
            $category[$i]['created_at'] = Carbon::now();
        }

        DB::table('categories')->insert($category);
    }
}
