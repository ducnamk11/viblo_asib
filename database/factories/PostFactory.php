<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Models\Post;
use Faker\Generator as Faker;
use Illuminate\Support\Str;
$factory->define(Post::class, function (Faker $faker) {
   
    $title = $faker->sentence;
    $slug = Str::slug($title,'-');
    return [
        'user_id' => '5ed9df2b042e3a779e12ad72',
        'title' => $title,
        'slug' => $slug,
        'content' => $faker->paragraph(5, true),
        'image' => '1.png',
        'status' => 1,
        'publish_at' => null,
    ];
});