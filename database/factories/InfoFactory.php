<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Model;
use Faker\Generator as Faker;



$factory->define(App\Info::class, function (Faker $faker) {
    return [
    	 'descripcion' => $faker->realText(55),
         'tipo' =>  $faker->randomElement(['TURNO','SERV. MED LEGAL','JUEZ TURNO']),
         'fiscalia' => $faker->randomElement(['VALPARAISO','VIÑA DEL MAR','SAN ANTONIO']),
         'estado' => 'ACTIVO',
         'fec_vigencia_ini' => $faker->dateTimeBetween('this week', '+6 days'),
         'fec_vigencia_fin' => $faker->dateTimeBetween('+30 days', '+90 days'),
         'user_id' => 1 
    ];
});
