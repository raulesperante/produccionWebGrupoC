<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class Category extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('categories')->insert([
            'name' => 'Spirit',
            'description' => '',
        ]);
        DB::table('categories')->insert([
            'name' => 'Flash Back',
            'description' => '',
        ]);
    }
}
