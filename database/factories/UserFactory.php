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

$factory->define(conexaovida\Doador::class, function (Faker $faker) {
    return [
        'nome' => $faker->name,
        'cpf' => $faker->numerify(),
        'nascimento' => $faker->date(),
        'estado' => $faker->country,
        'cidade' => $faker->city, 
        'endereco' => $faker->streetName,
        'genero' => $faker->boolean,
        'tiposanguineo' => $faker->title,
        'emailprincipal' => $faker->email,
        'emailalternativo' => $faker->email,
        'numerowhatsapp' => $faker->phoneNumber,
        'outrocontato' => $faker->phoneNumber,
        'dataultimadoacao' => $faker->date(),
        'localultimadoacao' => $faker->locale,
    ];
});

$factory->define(conexaovida\Orgaos::class, function (Faker $faker) {
    return [
        'nome' => $faker->name,
        'cpf' => $faker->numerify(),
        'nascimento' => $faker->date(),
        'estado' => $faker->country,
        'cidade' => $faker->city, 
        'endereco' => $faker->streetName,
        'genero' => $faker->boolean,
        'tiposanguineo' => $faker->text,
        'orgaos' => $faker->text,
        'observacoes' => $faker->boolean,
        'emailprincipal' => $faker->email,
        'emailalternativo' => $faker->email,
        'numerowhatsapp' => $faker->phoneNumber,
        'outrocontato' => $faker->phoneNumber,
       
    ];
});
