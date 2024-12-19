<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ItemSeeder extends Seeder
{
    public function run()
    {
        DB::table('items')->insert([
            ['name' => 'Laptop', 'description' => 'High-performance laptop'],
            ['name' => 'Smartphone', 'description' => 'Latest model smartphone'],
            ['name' => 'Tablet', 'description' => '10-inch display tablet'],
            ['name' => 'Headphones', 'description' => 'Noise-cancelling headphones'],
        ]);
    }
}
