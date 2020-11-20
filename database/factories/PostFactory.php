<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Post;
use Faker\Generator as Faker;

$factory->define(App\Post::class, function (Faker $faker) {
    return [
        'title' => $faker->text(50),
        'body' => $faker->text(200),
        'image' => '6a6f3190a894b450a92b96658d5aeb10.jpg',
        'cat_id' => 8,
        'post_type' => 1,
        'author' => 'News247',
        'status' => 1,
        'hp_section1' => 3
    ];
});
