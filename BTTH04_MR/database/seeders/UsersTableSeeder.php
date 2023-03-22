<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $users = [
            ['Username' => 'ndp3110', 'Password' => '123456', 'Email' => 'phuong3110@gmail.com', 'Name' => 'Nguyen Dang Phuong'],
            ['Username' => 'dvl0610', 'Password' => '123456', 'Email' => 'linh0610@gmail.com', 'Name' => 'Dinh Van Linh'],
            ['Username' => 'ndp1104', 'Password' => '123456', 'Email' => 'phong1104@gmail.com', 'Name' => 'Nguyen Duc Phong']
        ];

        DB::table('users')->insert($users);
    }
}
