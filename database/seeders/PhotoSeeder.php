<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PhotoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('photos')->insert([
            [
                'src' => 'car-1.jpg',
                'category_id' => 1,
            ],
            [
                'src' => 'car-2.jpg',
                'category_id' => 1,
            ],
            [
                'src' => 'tech-1.jpg',
                'category_id' => 2,
            ],
            [
                'src' => 'tech-2.jpg',
                'category_id' => 2,
            ],
            [
                'src' => 'art-1.jpg',
                'category_id' => 3,
            ],
            [
                'src' => 'art-2.jpg',
                'category_id' => 3,
            ],
            [
                'src' => 'animal-1.jpg',
                'category_id' => 4,
            ],
            [
                'src' => 'animal-2.jpg',
                'category_id' => 4,
            ],
            [
                'src' => 'plant-1.jpg',
                'category_id' => 5,
            ],
            [
                'src' => 'plant-2.jpg',
                'category_id' => 5,
            ],
        ]);
    }
}
