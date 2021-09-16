<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ImageSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('images')->insert([
            [
                'src' => 'art.png',
                'category_id' => 1
            ],
            [
                'src' => 'nature.png',
                'category_id' => 2
            ],
            [
                'src' => 'animal.png',
                'category_id' => 3
            ],
            [
                'src' => 'car.png',
                'category_id' => 4
            ],
            [
                'src' => 'food.png',
                'category_id' => 5
            ],
            [
                'src' => 'building.png',
                'category_id' => 6
            ]
        ]);
    }
}
