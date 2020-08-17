<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Models\Contact;
use Faker\Generator as Faker;

$factory->define(Contact::class, function (Faker $faker) {
    return [
        'contact_name'  => $faker->name,
        'phone_no'      => $faker->phoneNumber,
        'users_id'      => function() {
            return factory(\App\Models\User::class)->create()->id;
        },
    ];
});
