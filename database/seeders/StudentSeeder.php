<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Student;

class StudentSeeder extends Seeder
{

    /**
     * Run the database seeds.
     *
     * @return void
     */

    public function run()
    {
        Student::create([
                "name" => "Hardik Savani",
                "email" => "admin@gmail.com",
                "password" => "123456",
                "phone" => "1234567890",
                "division" => "2",
                "gender" => "male",
                "hobby" => "dancing,cricket",
            ],
            [
                "name" => "Savani Hardik",
                "email" => "admin@gmail.com",
                "password" => "123456",
                "phone" => "1234567890",
                "division" => "2",
                "gender" => "male",
                "hobby" => "dancing,cricket",
            ],
            [
                "name" => "Mahesh Savani",
                "email" => "mahesh@gmail.com",
                "password" => "123456",
                "phone" => "1234567890",
                "division" => "2",
                "gender" => "male",
                "hobby" => "dancing,cricket",
            ],
            [
                "name" => "Hardik Savani",
                "email" => "admin@gmail.com",
                "password" => "123456",
                "phone" => "1234567890",
                "division" => "2",
                "gender" => "male",
                "hobby" => "dancing,cricket",
            ]);
    }

}
