<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Models\Report;
use Faker\Generator as Faker;

$factory->define(Report::class, function (Faker $faker) {
    return [
        'user_id' => '5ecd72131f7a2e641c40bea2',
        'content' => $faker->paragraph(2, true),
        'post_id' => '5ecd72131f7a2e641c40bea2',
    ];
});
