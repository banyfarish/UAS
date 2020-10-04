<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Articles;
use Faker\Generator as Faker;

$factory->define(Articles::class, function (Faker $faker) {
    return [
        'title' => $faker->sentence(),
        'content' => $faker->realText(2000),
        'featured_image' => $faker->imageurl(750, 300, true)
    ];
});
