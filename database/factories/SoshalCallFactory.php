<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\SoshalCall;
use Faker\Generator as Faker;

$factory->define(SoshalCall::class, function (Faker $faker) {
    return [
        'user_id' => factory(App\User::class),
        'body' => $faker->sentence
    ];
});
