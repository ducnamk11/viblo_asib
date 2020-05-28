<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Models\Comment;
use Faker\Generator as Faker;

$factory->define(Comment::class, function (Faker $faker) {
    return [
        'content' => $faker->paragraph(2, true),
        'user_id' => '5ecd72131f7a2e641c40bea2',
        'post_id' => '5ecd72131f7a2e641c40bea2',
    ];
});
