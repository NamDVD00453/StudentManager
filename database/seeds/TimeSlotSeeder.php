<?php

use Illuminate\Database\Seeder;

class TimeSlotSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('time_slots')->insert([
            'slotId' => 1,
            'slotTime' => '8h - 12h',
        ]);

        DB::table('time_slots')->insert([
            'slotId' => 2,
            'slotTime' => '1h30 - 5h30',
        ]);

        DB::table('time_slots')->insert([
            'slotId' => 3,
            'slotTime' => '5h30 - 9h30',
        ]);
    }
}
