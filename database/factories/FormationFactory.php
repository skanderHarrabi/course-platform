<?php

$factory->define(App\Formation::class, function (Faker\Generator $faker) {
    return [
        "title" => $faker->name,
        "category_id" => factory('App\Categorie')->create(),
        "date_debut_formation" => $faker->date("d-m-Y", $max = 'now'),
        "duree" => $faker->randomNumber(2),
        "place_id" => factory('App\Place')->create(),
        "description" => $faker->name,
    ];
});
