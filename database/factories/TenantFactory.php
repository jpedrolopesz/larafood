<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Models\Tenant;
use App\Models\Plan;
use Faker\Generator as Faker;

$factory->define(Tenant::class, function (Faker $faker) {
    return [
        'plan_id' => factory(Plan::class),
        'name' => $faker->unique()->name,
        'email' => $faker->unique()->safeEmail,
    ];
});
