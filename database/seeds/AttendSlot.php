<?php

use Illuminate\Database\Seeder;

class AttendSlot extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('attendance_slots')->insert([
            'classId' => 'T1707M',
            'slotId' => '1',
            'subjectId' => 'PHP',
            'attendDate' => '30/05/2018'
        ]);

        DB::table('attendance_slots')->insert([
            'classId' => 'T1708M',
            'slotId' => '2',
            'subjectId' => 'JAVA',
            'attendDate' => '30/05/2018'
        ]);
    }
}
