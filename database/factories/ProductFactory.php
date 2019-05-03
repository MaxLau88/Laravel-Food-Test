<?php

use Faker\Generator as Faker;

/**
 * factory per testare la tabella dei prodotti
 */
$factory->define(App\Food\Product::class, function (Faker $faker) {
    return [
        'name' => $faker->name,
        'taxable_price' => $faker->randomFloat(2, 10, 90),
        'rate' => random_int(4, 22)
    ];
});
