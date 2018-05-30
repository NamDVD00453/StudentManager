<?php

use Illuminate\Database\Seeder;

class StudentClassSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('student_classes')->insert([
            'rollNumber' => 'D00495',
            'classId' => 'T1707M',
            'createdAt' => '30/05/2018',
            'status' => 1,
        ]);

        DB::table('student_classes')->insert([
            'rollNumber' => 'D00453',
            'classId' => 'T1707M',
            'createdAt' => '30/05/2018',
            'status' => 1,
        ]);

        DB::table('student_classes')->insert([
            'rollNumber' => 'D00479',
            'classId' => 'T1707M',
            'createdAt' => '30/05/2018',
            'status' => 1,
        ]);

        DB::table('student_classes')->insert([
            'rollNumber' => 'D00504',
            'classId' => 'T1707M',
            'createdAt' => '30/05/2018',
            'status' => 1,
        ]);
    }
}
