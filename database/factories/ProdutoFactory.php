<?php

/* @var $factory \Illuminate\Database\Eloquent\Factory */

use App\Produto;
use Faker\Generator as Faker;

$factory->define(Produto::class, function (Faker $faker) {
    return [
        'nome' => $faker->name,
        'descricao' => Str::random(10)
    ];
});
