<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
class QuestionTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
       $questions = [    [        'id' => 1,        'content' => 'What is the capital city of France?',        'answer' => 'Paris',        'exam_id' => 1,        'created_at' => '2022-03-17 10:00:00',        'updated_at' => '2022-03-17 10:00:00'    ],
    [        'id' => 2,        'content' => 'What is the largest planet in our solar system?',        'answer' => 'Jupiter',        'exam_id' => 1,        'created_at' => '2022-03-17 10:00:00',        'updated_at' => '2022-03-17 10:00:00'    ],
    [        'id' => 3,        'content' => 'Who is the author of "Pride and Prejudice"?',        'answer' => 'Jane Austen',        'exam_id' => 2,        'created_at' => '2022-03-18 14:00:00',        'updated_at' => '2022-03-18 14:00:00'    ]
];

        DB::table('questions')->insert($questions);
    }
}
