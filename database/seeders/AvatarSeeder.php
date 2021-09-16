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
                'name' => 'Male',
                'src' => 'male.png'
            ],
            [
                'name' => 'Male 2',
                'src' => 'male2.png'
            ],
            [
                'name' => 'Male 3',
                'src' => 'male3.png'
            ],
            [
                'name' => 'Female',
                'src' => 'female.png'
            ],
            [
                'name' => 'Female 2',
                'src' => 'female2.png'
            ],
            [
                'name' => 'Female 2',
                'src' => 'female3.png'
            ],
        ]);
    }
}
