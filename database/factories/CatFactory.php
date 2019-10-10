<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Model;
use Faker\Generator as Faker;
use App\Cat;

$factory->define(Cat::class, function (Faker $faker) {
    return [
      'name' => $faker -> lastName,
      'race' => $faker -> timezone,
      'cat_rfid' => $faker -> ean8
    ];
});
