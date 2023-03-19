<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
class UserExamTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        $user_exams = [    [        'id' => 1,        'user_id' => 1,        'exam_id' => 1,        'started_at' => '2023-03-18 10:00:00',        'finished_at' => '2023-03-18 11:00:00',        'created_at' => '2023-03-18 10:00:00',        'updated_at' => '2023-03-18 11:00:00'    ],
    [        'id' => 2,        'user_id' => 2,        'exam_id' => 1,        'started_at' => '2023-03-19 11:00:00',        'finished_at' => '2023-03-19 12:30:00',        'created_at' => '2023-03-19 11:00:00',        'updated_at' => '2023-03-19 12:30:00'    ],
    [        'id' => 3,        'user_id' => 1,        'exam_id' => 2,        'started_at' => '2023-03-20 12:00:00',        'finished_at' => '2023-03-20 14:00:00',        'created_at' => '2023-03-20 12:00:00',        'updated_at' => '2023-03-20 14:00:00'    ]
];
    DB::table('user_exam')->insert($user_exams);
    }
}
