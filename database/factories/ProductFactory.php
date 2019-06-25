<?php

use Faker\Generator as Faker;


/*
|--------------------------------------------------------------------------
| Model Factories
|--------------------------------------------------------------------------
|
| This directory should contain each of the model factory definitions for
| your application. Factories provide a convenient way to generate new
| model instances for testing / seeding your application's database.
|
*/

$factory->define(App\Product::class, function (Faker $faker) {
    return [
        'photo' => $faker->imageUrl($width = 300, $height = 300) , 
        'nama_produk' => $faker->name,
        'kategori' =>  $faker->randomElement($array = array ('Mens Wear','Women Wear','Smartphone & Tablet','Computer & Laptop','Stationery','Gaming','Kesehatan','Makanan & Minuman','Elektronik')),
        'harga' => $faker->randomElement($array = array ('1125000','23000','27000','83000','97000','49000','38300','540500','34200','222000','436000')),
        'kondisi' => $faker->randomElement($array = array ('Baru','Bekas')),
        'size' => $faker->century,
        'panjang' => $faker->randomElement($array = array ('15 CM','30 CM','23 CM')),
        'lebar' => $faker->randomElement($array = array ('15 CM','30 CM','23 CM')),
        'tinggi' => $faker->randomElement($array = array ('15 CM','30 CM','23 CM')),
        'berat' => $faker->randomElement($array = array ('5 kg','60 g','3 kg')),
        'warna' => $faker->safeColorName,
        'deskripsi_produk' => $faker->sentence(20),
        'alamat' => $faker->city

    ];
});
