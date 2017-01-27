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

$factory->define(App\Entities\User::class, function (Faker\Generator $faker) {
    return [
        'email' => $faker->unique()->email,
        'role'   => 'student',
        'nickName' => $faker->unique()->userName,
        'password' => bcrypt('sexto'),
        'remember_token' => str_random(10),
        'unity_id'  => '1',
        'active' => true
    ];
});

$factory->define(\App\Entities\Grade::class, function(Faker\Generator $faker){
    return [
        'grade' => $faker->name
    ];
});

$factory->define(\App\Entities\Especialty::class, function(Faker\Generator $faker){
    return [
        'especialty' => $faker->name
    ];
});

$factory->define(\App\Entities\City::class, function(Faker\Generator $faker){
    return [
        'id'   => 'SC',
        'city' => $faker->city
    ];
});

$factory->define(\App\Entities\Unity::class, function(Faker\Generator $faker){
    return [
        'unity' => $faker->name
    ];
});

$factory->define(\App\Entities\Month::class, function(Faker\Generator $faker){
    return [
        'month' => $faker->monthName
    ];
});

$factory->define(\App\Entities\Cargo::class, function(Faker\Generator $faker){
    return [
        'name_cargo'    => $faker->name,
        'unity_id'      => 1,
        'cargo'         => 'director',
        'year'          => $faker->year,
    ];
});

$factory->define(\App\Entities\Person::class, function(Faker\Generator $faker){
    return [
        'ci'        => null,
        'tin'       => null,
        'paterno'   => $faker->lastName,
        'materno'   => $faker->lastName,
        'nombres'   => $faker->firstName,
        'city_id'   => 'LP'
    ];
});