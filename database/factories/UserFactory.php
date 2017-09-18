<?php

use Faker\Generator as Faker;

/*
|--------------------------------------------------------------------------
| Model Factories
|--------------------------------------------------------------------------
|
| This directory should contain each of the model factory definitions for
| your application. Factories provide a convenient way to generate new
| model instances for testing / seeding your application's database.
|
*/

$factory->define(App\User::class, function (Faker $faker) {
    static $password;

    return [
        'pseudo' => $faker->pseudo,
        'email' => $faker->unique()->safeEmail,
        'password' => $password ?: $password = bcrypt('secret'),
        'lastname' => $faker->lastname,
        'firstname' => $faker->firstname,
        'birthdate' => $faker->birthdate,
        'description' => $faker->description,
        'adressename' => $faker->adressname,
        'pc' => $faker->pc,
        'city' => $faker->city,
        'department' => $faker->department,
        'region' => $faker->region,
        'remember_token' => str_random(10),
    ];
});
