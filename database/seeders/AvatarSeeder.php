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
                'src' => 'membre-1.png',
            ],
            [
                'src' => 'membre-2.png',
            ],
            [
                'src' => 'membre-3.png',
            ],
        ]);
    }
}
