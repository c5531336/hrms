<?php

use Illuminate\Database\Seeder;
use App\Models\EmployeeLevel;
class EmployeeLevelSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(EmployeeLevel::class, 50)->create();
    }
}
