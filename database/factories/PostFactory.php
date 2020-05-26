<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Models\Post;
use Faker\Generator as Faker;

$factory->define(Post::class, function (Faker $faker) {
    return [
        'user_id' => 1,
        'content' => $faker->paragraph(2, true),
        'image' => '1.png',
        'status' => true,
        'publish_at' => null,
    ];
});
