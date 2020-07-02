<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Product;
use Faker\Generator as Faker;
use App\Category;

$factory->define(Product::class, function (Faker $faker) {

	$listCateIDs= Category::pluck('id');
    return [
        'name' => $faker->name,
        'quantity' => rand(1,100),
        'price' => rand(1000, 100000),
        'category_id' => $faker->randomElement($listCateIDs)
    ];
});
