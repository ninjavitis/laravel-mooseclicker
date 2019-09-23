<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Model;
use Faker\Generator as Faker;

$factory->define(Model::class, function (Faker $faker) {
    return [
        //
    ];
});

$factory->define(Moose::class, function ($name, $image, $user_id) {
    return [
        'name' => $name,
        'image' => $image,
        'user_id' => $user_id,
    ];
});