<?php

/** @var Factory $factory */


use App\Task;
use Faker\Generator as Faker;
use Illuminate\Database\Eloquent\Factory;


$factory->define(Task::class, function ( Faker $faker) {
    return [
        'title' => $faker->sentence(3),
        'description' => $faker->text(100),
        'complete' => false
    ];
});
