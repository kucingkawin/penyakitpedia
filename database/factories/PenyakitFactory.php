<?php

/* @var $factory \Illuminate\Database\Eloquent\Factory */

use App\Penyakit;
use Illuminate\Support\Str;
use Faker\Generator as Faker;

$factory->define(Penyakit::class, function (Faker $faker) {
    return [
        'nama' => $faker->name,
        'deskripsi' => Str::random(10),
    ];
});
