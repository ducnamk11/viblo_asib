<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Models\Post;
use Faker\Generator as Faker;

$factory->define(Post::class, function (Faker $faker) {
    return [
        'user_id' => '5ecd72131f7a2e641c40bea2',
        'title' => $faker->paragraph(1, true),
        'content' => $faker->paragraph(5, true),
        'image' => '1.png',
        'status' => true,
        'publish_at' => null,
    ];
});
