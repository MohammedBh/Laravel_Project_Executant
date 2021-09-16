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
                'avatar_id' => 2,
                'role_id' => 1,
                'email' => 'admin@admin.com',
                'password' => Hash::make('admin')
            ],
            [
                'name' => 'Admin2',
                'lastname' => 'Adm',
                'age' => '24',
                'avatar_id' => 2,
                'role_id' => 1,
                'email' => 'admin2@admin.com',
                'password' => Hash::make('member')
            ],
            [
                'name' => 'Member',
                'lastname' => 'Mmb',
                'age' => '29',
                'avatar_id' => 3,
                'role_id' => 2,
                'email' => 'member@member.com',
                'password' => Hash::make('member')
            ],
            [
                'name' => 'Member2',
                'lastname' => 'Mmb',
                'age' => '32',
                'avatar_id' => 4,
                'role_id' => 2,
                'email' => 'member2@member.com',
                'password' => Hash::make('member')
            ],
            [
                'name' => 'Member3',
                'lastname' => 'Mmb',
                'age' => '20',
                'avatar_id' => 5,
                'role_id' => 2,
                'email' => 'member3@member.com',
                'password' => Hash::make('member')
            ]
        ]);
    }
}
