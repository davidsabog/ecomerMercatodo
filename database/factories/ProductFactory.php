<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Product;
use Faker\Generator as Faker;

$factory->define(Product::class, function (Faker $faker) {
    return [
        //
        'category_id' => factory(\App\ProductCategory::class),
        'title'=>$faker->sentence(2),
        'slug'=>$faker->slug(2),
        'image' => $faker->randomElement(['img1.jpg', 'img2.jpg', 'img3.jpg', 'img4.jpg']),
        'description' => $faker->paragraph,
    ];
 
});
