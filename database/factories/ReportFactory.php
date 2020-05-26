<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Models\Report;
use Faker\Generator as Faker;

$factory->define(Report::class, function (Faker $faker) {
    return [
        'user_id' => 1,
        'content' => $faker->paragraph(2, true),
        'post_id' => 1,
    ];
});
