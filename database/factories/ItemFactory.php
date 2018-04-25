<?php

use Faker\Generator as Faker;


$factory->define(App\Item::class, function (Faker $faker) {
    return [
        'user_id' => $faker->numberBetween($min= 1 ,$max = 20),
        'title' => $faker->text($maxNBChars=15),
        'description' =>  $faker->text($maxNBChars=100),
        'location' => $faker->text($maxNBChars=50),
        'category_id' => 1,
        'delivery_Location' => 'Kabul',
        'status' => 'found'
    ];
});
