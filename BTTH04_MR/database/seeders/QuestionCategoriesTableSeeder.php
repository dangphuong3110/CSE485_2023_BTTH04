<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class QuestionCategoriesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $question_categories = [
            ['CategoryName' => 'Danh muc 1'],
            ['CategoryName' => 'Danh muc 2'],
            ['CategoryName' => 'Danh muc 3']
        ];
    }
}
