<?php

use Illuminate\Database\Seeder;

class TimeShiftSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(\App\Models\TimeShift::class,50)->create();
    }
}
