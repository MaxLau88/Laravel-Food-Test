<?php

use Faker\Generator as Faker;

/**
 * factory per creare un utente admin
 */
$factory->define(App\User::class, function (Faker $faker) {
    return [
        'name' => "Admin",
        'email' => "admin@food.it",
        'password' => '$2y$10$TKh8H1.PfQx37YgCzwiKb.KjNyWgaHb9cbcoQgdIVFlYg7B77UdFm', // secret
        'remember_token' => str_random(10),
    ];
});
