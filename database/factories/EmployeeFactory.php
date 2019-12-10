<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Models\Employees;
use Faker\Generator as Faker;

$factory->define(Employees::class, function (Faker $faker) {
    return [
        'employee_id'     => '0' . $faker->unique()->numberBetween(100, 200),
        'BranchId'        => $faker->numberBetween(1, 3),
        'FullName'        => $faker->name(),
        'DepartmentId'    => $faker->numberBetween(2, 3),
        'EmployeeLevelId' => $faker->numberBetween(1, 50),
        'gender'          => 'Nam',
        'basicSalary'     => $faker->numberBetween(1000000, 4000000),
    ];
});
