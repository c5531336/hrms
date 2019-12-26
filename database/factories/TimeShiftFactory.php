<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Models\TimeShift;
use Faker\Generator as Faker;

$factory->define(TimeShift::class, function (Faker $faker) {
    return [
        'BranchId'=>$faker->numberBetween(1,3),
        'Name'=>$faker->domainName,
        'FoodAllowance'=>$faker->numberBetween('10000','20000'),
        'TimeAllowance'=>$faker->numberBetween('10000','50000'),
        'MinHourForFoodAllowance'=>$faker->numberBetween(8,12),
        'StandardWorkingTime'=>$faker->numberBetween(8,12),
    ];
});
