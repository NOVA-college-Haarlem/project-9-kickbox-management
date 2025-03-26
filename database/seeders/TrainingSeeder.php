<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class TrainingSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $trainings = 
        [
                [
                    'name' => 'Kickboxing Fundamentals Training',
                    'description' => 'A training session focused on basic punches, kicks, and defensive movements designed for newcomers to kickboxing.',
                    'start_date' => '2025-04-01 14:00:00',
                    'end_date' => '2025-04-01 16:00:00',
                    'user_id' => 1,
                    'difficulty' => 'Beginner',
                    'capacity' => 30,
                    'is_recurring' => true
                ],
                [
                    'name' => 'Elite Kickboxing Technique Training',
                    'description' => 'A high-intensity training program focusing on perfecting advanced strikes, combinations, and tactical sparring.',
                    'start_date' => '2025-06-01 10:00:00',
                    'end_date' => '2025-06-01 13:00:00',
                    'user_id' => 2,
                    'difficulty' => 'Advanced',
                    'capacity' => 20,
                    'is_recurring' => false
                ]
            ];
            
            DB::table('trainings')->insert($trainings);
    }
}
