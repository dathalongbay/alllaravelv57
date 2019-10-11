<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class StudentsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //

        for($i = 1; $i <= 20; $i++) {
            DB::table('students')->insert([
                'student_name' => Str::random(10),
                'student_location' => Str::random(10).'@gmail.com',
            ]);
        }

    }
}
