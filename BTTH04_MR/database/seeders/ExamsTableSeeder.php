<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ExamsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $exams = [
            ['ExamName' => 'Đề thi số 1', 'TotalMarks' => '100', 'Duration' => '90', 'PassingMarks' => '75'],
            ['ExamName' => 'Đề thi số 2', 'TotalMarks' => '50', 'Duration' => '60', 'PassingMarks' => '35'],
            ['ExamName' => 'Đề thi số 3', 'TotalMarks' => '100', 'Duration' => '70', 'PassingMarks' => '75']
        ];

        DB::table('exams')->insert($exams); 
    }
}
