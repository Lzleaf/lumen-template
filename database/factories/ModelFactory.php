<?php

/*
|--------------------------------------------------------------------------
| Model Factories
|--------------------------------------------------------------------------
|
| Here you may define all of your model factories. Model factories give
| you a convenient way to create models for testing and seeding your
| database. Just tell the factory how a default model should look.
|
*/

$factory->define(App\Models\User::class, function (Faker\Generator $faker) {
    return [
        'name' => $faker->name,
        'avatar' => $faker->imageUrl(320, 320),
        'phone' => $faker->phoneNumber,
        'username' => $faker->userName,
        'password' => app('hash')->make('123456')
    ];
});
