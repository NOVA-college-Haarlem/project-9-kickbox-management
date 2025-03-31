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
        $trainings = [
            [
                'name' => 'Kickboxing Fundamentals',
                'description' => 'Learn the basics of kickboxing.',
                'start_date' => '2025-04-01 14:00:00',
                'end_date' => '2025-04-01 16:00:00',
                'user_id' => 1,
                'difficulty' => 'Beginner',
                'capacity' => 20,
                'is_recurring' => 'not recurring',
            ],
            [
                'name' => 'Advanced Kickboxing',
                'description' => 'Advanced techniques for experienced kickboxers.',
                'start_date' => '2025-04-02 18:00:00',
                'end_date' => '2025-04-02 20:00:00',
                'user_id' => 2,
                'difficulty' => 'Advanced',
                'capacity' => 15,
                'is_recurring' => '2x per week',
            ],
            [
                'name' => 'Weekly Sparring Session',
                'description' => 'Weekly sparring for all levels.',
                'start_date' => '2025-04-03 17:00:00',
                'end_date' => '2025-04-03 19:00:00',
                'user_id' => 2, 
                'difficulty' => 'Intermediate',
                'capacity' => 25,
                'is_recurring' => '1x per week',
            ],
        ];
            
            DB::table('trainings')->insert($trainings);
    }
}
