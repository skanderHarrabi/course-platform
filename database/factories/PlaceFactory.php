<?php

$factory->define(App\Place::class, function (Faker\Generator $faker) {
    return [
        "nom" => $faker->name,
        "nombre_de_place" => $faker->randomNumber(2),
        "disponibilite" => 1,
    ];
});
