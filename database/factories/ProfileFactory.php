<?php

/* @var $factory \Illuminate\Database\Eloquent\Factory */

use App\Model;
use App\Profile;
use Faker\Generator as Faker;

$factory->define(Profile::class, function (Faker $faker) {
    return [
        'user_id' => factory(App\User::class)->create()->id,
        'location' => $faker->address
    ];
});
