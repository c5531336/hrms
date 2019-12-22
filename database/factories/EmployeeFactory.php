<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Models\Employees;
use Faker\Generator as Faker;

$factory->define(Employees::class, function (Faker $faker) {
    return [
        'BranchId'        => 1,
        'FullName'        => $faker->name(),
        'DepartmentId'    => $faker->numberBetween(2, 3),
        'EmployeeLevelId' => $faker->numberBetween(1, 2),
        'gender'          =>'Nam'
    ];
});
