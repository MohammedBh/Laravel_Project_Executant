<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('categories')->insert([
            [
                'name' => 'Art'
            ],
            [
                'name' => 'Nature'
            ],
            [
                'name' => 'Animals'
            ],
            [
                'name' => 'Vehicles'
            ],
            [
                'name' => 'Food'
            ],
            [
                'name' => 'Buildings'
            ],
        ]);
    }
}
