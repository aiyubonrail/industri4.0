<?php

use Faker\Generator as Faker;

$factory->define(App\Model\Company::class, function (Faker $faker) {
    return [
        //
        'nama_perusahaan' => $faker->word,
        'bidang' => 
    ];
});
