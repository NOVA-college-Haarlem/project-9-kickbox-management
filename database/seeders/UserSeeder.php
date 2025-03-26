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
                'is_instructor' => true
            ]
            ];

            DB::table('users')->insert($users);
    }
}
