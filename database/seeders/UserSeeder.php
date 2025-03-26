<?php

namespace Database\Seeders;

use Illuminate\support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $users = 
        [
            [
                'name' => 'John Doe',
                'email' => '123@gmail.com',
                'password' => bcrypt('Kaas'),
                'is_instructor' => 1
            ],
            [
                'name' => 'Jane Doe',
                'email' => '321@gmail.com',
                'password' => bcrypt('Kroket'),
                'is_instructor' => 1
            ]
            ];

            DB::table('users')->insert($users);
    }
}
