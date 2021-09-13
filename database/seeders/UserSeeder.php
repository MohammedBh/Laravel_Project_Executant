<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            [
                'name' => 'Mohammed',
                'lastname' => 'Bhm',
                'age' => '23',
                'avatar_id' => 1,
                'role_id' => 1,
                'email' => 'admin@admin.com',
                'password' => Hash::make('admin')
            ],
            [
                'name' => 'Issam',
                'lastname' => 'Elk',
                'age' => '24',
                'avatar_id' => 1,
                'role_id' => 2,
                'email' => 'member@member.com',
                'password' => Hash::make('member')
            ]
        ]);
    }
}
