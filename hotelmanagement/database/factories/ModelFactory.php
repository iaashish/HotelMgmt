<?php


use Faker\Generator as Faker;
use App\User;

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

$factory->define(User::class, function (Faker $faker) {
    static $password;

    return [
        'name' => $faker->name,
        'email' => $faker->unique()->safeEmail,
        'password' => $password ?: $password = bcrypt('secret'),
        'remember_token' => str_random(10),
    ];
});

$factory->define(App\Staff::class, function (Faker $faker) {
    static $password;
    return [
        'first' => $faker->firstName,
        'last' => $faker->lastName,
        'email' => $faker->unique()->safeEmail,
        'dob' => $faker->unique()->date,
        'dateofhire' => $faker->unique()->date,
        'ssn' => $faker->randomNumber,
        'address' => $faker->unique()->address,
        'phonenumber' => $faker->unique()->phoneNumber,
        'staff_type' => 'Receptionist',
        'password' => $password ?: $password = bcrypt('123456'),
        //can ignore happinessLevel since we defaulted it to 0
    ];
});

$factory->define(App\Admin::class, function (Faker $faker) {
    static $password;
    return [

        'name' => $faker->name,
        'email' => $faker->unique()->safeEmail,
        'job_title' => $faker->jobTitle,
        'password' => $password ?: $password = bcrypt('secret'),
        'remember_token' => str_random(10)

    ];
});