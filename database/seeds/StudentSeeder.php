<?php

use Illuminate\Database\Seeder;

class StudentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('students')->insert([
            'rollNumber' => 'D00495',
            'name' => 'Chu Xuân Hải',
        ]);
        DB::table('students')->insert([
            'rollNumber' => 'D00484',
            'name' => 'Nghiêm Phú Huy',
        ]);
        DB::table('students')->insert([
            'rollNumber' => 'D00510',
            'name' => 'Ngô Văn Lộc',
        ]);
        DB::table('students')->insert([
            'rollNumber' => 'D00537',
            'name' => 'Trần Bình Minh',
        ]);
    }
}
