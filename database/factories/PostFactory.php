<?php
$factory->define(App\Post::class, function (Faker\Generator $faker) {
    $faker = Faker\Factory::create('fr_FR');
    $title = $faker->sentence($nbWords = 6, $variableNbWords = true);
    return [
        'title' => $title,
        'slug' => str_slug($title),
        'body' => $faker->realText($maxNbChars = 200, $indexSize = 2),
        'online' => $faker->boolean(75)
    ];
});
