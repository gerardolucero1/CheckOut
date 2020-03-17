<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */
use App\Hotel;
use Illuminate\Support\Str;
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

$factory->define(Hotel::class, function (Faker $faker) {
    $name = $faker->company;
    return [
        'name' => $name,
        'adress' => $faker->address,
        'CP' => $faker->postcode,
        'RFC' => $faker->iban('GB'),
        'fiscalName' => $name,
        'telephone' => $faker->tollFreePhoneNumber,
        'corporation' => $faker->word,
        'email' => $faker->companyEmail,
        'status' => true,
    ];
});

