<?php

use Illuminate\Database\Seeder;
use App\Models\Employees;
class EmployeeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(Employees::class, 10)->create();
    }
}
