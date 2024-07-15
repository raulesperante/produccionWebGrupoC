<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Support\Facades\Hash;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class User extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('roles')->insert([
            'id' => 1,
            'name' => 'admin',
        ]);
        DB::table('roles')->insert([
            'id' => 2,
            'name' => 'user',
        ]);
        DB::table('users')->insert([
            'name' => 'admin',
            'surname' => 'admin',
            'email' => 'admin@example.com',
            'password' => Hash::make('admin1234'),
            'role_id' => 1,
        ]);
        DB::table('users')->insert([
            'name' => 'userTest',
            'surname' => 'userTest',
            'email' => 'userTest@example.com',
            'password' => Hash::make('user1234'),
            'role_id' => 2,
        ]);
    }
}
