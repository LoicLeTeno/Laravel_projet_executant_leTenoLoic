<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class AvatarSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('avatars')->insert([
            [
                'src' => 'admin.png',
            ],
            [
                'src' => 'anonyme.png',
            ],
            [
                'src' => 'membre-1.jpg',
            ],
            [
                'src' => 'membre-2.jpg',
            ],
            [
                'src' => 'membre-3.jpg',
            ],
            [
                'src' => 'membre-4.jpg',
            ],
        ]);
    }
}
