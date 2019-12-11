<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call(BranchSeeder::class);
        $this->call(DepartmentSeeder::class);
        $this->call(EmployeeLevelSeeder::class);
        $this->call(TimeShiftSeeder::class);
        $this->call(EmployeeSeeder::class);
    }
}
