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

$factory->define(App\Users::class, function (Faker\Generator $faker) {
    return [
        'id_number' => $faker->numberBetween(1,10000000),
        'first_name' => $faker->name,
        'last_name' => $faker->lastName,
    ];
});

$factory->define(App\Types::class, function (Faker\Generator $faker) {
    return [
        'type' => $faker->country,
        'description' => $faker->text,
        'delete' => 0,
    ];
});

$factory->define(App\Profiles::class, function (Faker\Generator $faker) {
    return [
        'user_id' => factory(App\Users::class)->create()->id,
        'types_id' => factory(App\Types::class)->create()->id,
        'value' => $faker->numberBetween(1,5000)
    ];
});


