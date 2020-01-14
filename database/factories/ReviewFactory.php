<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Model\Review;
use Faker\Generator as Faker;
use App\Model\Product;

$factory->define(App\Model\Review::class, function (Faker $faker) {
    return [
'product_id' => function(){
    return Product::all()->random();
},
'cutomer'=> $faker->name,
'review'=> $faker->paragraph,
'star' => $faker->numberBetween(0,5)    ];
});
