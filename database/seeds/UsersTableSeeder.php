<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class UsersTableSeeder extends Seeder
{
    public function run()
    {
        DB::table('users')->insert(
            [
                'name' => 'Seyi Adeleke', 
                'email' => 'seyiadeleke42@yahoo.com',
                'password' => 'adeleke'
            ]
        );
        DB::table('posts')->insert([
            [
                'title' => 'My First Post', 
                'content' => 'lorem ipsum dolor sit ammet',
                'user_id' => 1
            ], [
                'title' => 'My second Post', 
                'content' => 'lorem ipsum dolor sit ammet',
                'user_id' => 1
            ], [
                'title' => 'My third Post', 
                'content' => 'lorem ipsum dolor sit ammet',
                'user_id' => 1
            ]
        ]);
    }

}
