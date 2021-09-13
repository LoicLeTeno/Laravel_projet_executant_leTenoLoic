<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //

        DB::table('users')->insert([
            [
                'name' => 'le Téno',
                'nickName' => 'Loïc',
                'year' => 25,
                'email' => 'loic@gmail.com',
                'password' => bcrypt('987654321'),
    
                'role_id' => 1,
                'avatar_id' => 1,
            ],
            [
                'name' => 'de Gaule',
                'nickName' => 'Andy',
                'year' => 52,
                'email' => 'andy@gmail.com',
                'password' => bcrypt('123456789'),
    
                'role_id' => 2,
                'avatar_id' => 3,
            ],
            [
                'name' => "Frogy's",
                'nickName' => 'Tanya',
                'year' => 23,
                'email' => 'tania@gmail.com',
                'password' => bcrypt('123456789'),
    
                'role_id' => 2,
                'avatar_id' => 4,
            ],
        ]);
    }
}
