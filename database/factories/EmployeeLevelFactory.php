<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Models\EmployeeLevel;
use Faker\Generator as Faker;

$factory->define(EmployeeLevel::class, function (Faker $faker) {
    return [
        'Name'=>$faker->firstName,
        'Level'=>$faker->numberBetween(1,5),
        'BranchId'=>$faker->numberBetween(1,3),
        'Code'=>$faker->text(5),
        'BasicSalaryByHour'=>$faker->numberBetween(0,50000),
        'ProbationSalaryByHour'=>$faker->numberBetween(0,50000),
        'BasicSalaryByMonth'=>$faker->numberBetween(0,10000000),
        'BasicFoodAllowance'=>$faker->numberBetween(10000,50000),
        'BasicFuelAllowance'=>$faker->numberBetween(10000,50000),
        'BasicHouseholdAllowance'=>$faker->numberBetween(10000,50000),
        'BasicPhoneAllowance'=>$faker->numberBetween(10000,50000),
        'BasicResponseAllowance'=>$faker->numberBetween(10000,50000)
    ];
});
