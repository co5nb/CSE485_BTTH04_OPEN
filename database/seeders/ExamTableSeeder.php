<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
class ExamTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        $exams = [
            ['title' =>'Câu 1', 'description' => '1+1 = ?', 'duration'=>'2', 'user_id'=>'1','created_at'=>'2023-04-01', 'updated_at' =>'2023-04-01'],
            ['title' =>'Câu 1', 'description' => '1+1 = ?', 'duration'=>'2', 'user_id'=>'1','created_at'=>'2023-04-01', 'updated_at' =>'2023-04-01'],
            ['title' =>'Câu 1', 'description' => '1+1 = ?', 'duration'=>'2', 'user_id'=>'1','created_at'=>'2023-04-01', 'updated_at' =>'2023-04-01'],
            ['title' =>'Câu 1', 'description' => '1+1 = ?', 'duration'=>'2', 'user_id'=>'1','created_at'=>'2023-04-01', 'updated_at' =>'2023-04-01'],
            ['title' =>'Câu 1', 'description' => '1+1 = ?', 'duration'=>'2', 'user_id'=>'1','created_at'=>'2023-04-01', 'updated_at' =>'2023-04-01']
        ];
        DB::table('exams')->insert($exams);
    }
}
