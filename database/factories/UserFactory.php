<?php

use App\Invoice;
use App\Loading;
use App\Product;
use App\Unit;
use App\UnitPricing;
use App\Van;
use App\VanDetails;
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

/*$factory->define(App\User::class, function (Faker $faker) {
    return [
        'name' => $faker->name,
        'email' => $faker->unique()->safeEmail,
        'password' => '$2y$10$TKh8H1.PfQx37YgCzwiKb.KjNyWgaHb9cbcoQgdIVFlYg7B77UdFm', // secret
        'remember_token' => str_random(10),
    ];
});*/

/*$factory->define(Unit::class, function (Faker $faker) {
    return [
        'name' => $faker->word,
    ];
});

$factory->define(Product::class, function (Faker $faker) {
    return [
        'name' => $faker->ran


    ];
});*/

$factory->define(VanDetails::class, function (Faker $faker) {
    return [
        'van_id' => Van::All()->random()->id,
        'product_id' => Product::All()->random()->id,
        'quantity' => $faker->numberBetween(1, 500),
    ];
});
$factory->define(Van::class, function (Faker $faker) {
    return [
        'loading_id' => Loading::All()->random()->id,
        'van_no' => $faker->creditCardNumber,
        'seal_no' => $faker->creditCardNumber,
    ];
});

$factory->define(Loading::class, function (Faker $faker) {
    return [
        'productionWeek' => $faker->numberBetween(1, 30),
        'carrier' => $faker->name,
        'ETD' => $faker->date(),
        'ETA' => $faker->date(),
        'voyage_no' => $faker->numberBetween(10000, 99999),
        'POD' => $faker->city,
        'POL' => $faker->city,
        'status' => Loading::APPROVED,
        'year' => 2018,
        'vesselName' => $faker->name
    ];
});

$factory->define(UnitPricing::class, function (Faker $faker) {
    return [
        'unit_id' => Unit::All()->random()->id,
        'price' => $faker->numberBetween(5, 20),
        'invoice_id' => Invoice::All()->random()->id,
    ];
});

$factory->define(Invoice::class, function (Faker $faker) {
    return [
        'loading_id' => Loading::All()->random()->id,
        'BL_no' => $faker->numberBetween(1000, 9999),
    ];
});
