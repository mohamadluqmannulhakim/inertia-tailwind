<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Models\ToDoList;
use Faker\Generator as Faker;

$factory->define(ToDoList::class, function (Faker $faker) {
    return [
        'title'         => $faker->sentence(6, true),
        'date_time'     => $faker->dateTimeBetween('-30 days', '+30 days', null),
        'priority_level'=> $faker->numberBetween(1, 5),
        'status'        => $faker->randomElement(array ('pending', 'completed', 'expired')),
        'users_id'      => function() {
            return factory(\App\Models\User::class)->create()->id;
        },
    ];
});
