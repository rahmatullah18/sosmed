<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Models\Timeline\status;
use Faker\Generator as Faker;

$factory->define(status::class, function (Faker $faker) {
    return [
        'user_id' => rand(1,4),
        'hash' => \Str::random(32),
        'body' => $faker->sentence(),
    ];
});
