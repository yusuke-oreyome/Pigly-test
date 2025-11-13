<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $param = [
            'id' => 1,
            'name' => 'Test User',
            'email' => '1337910@gmail.com',
            'password' => 'asdfghjkl1234567890',
        ];

    }
}    DB::table('users')->insert($param);

