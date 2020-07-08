<?php

use Illuminate\Database\Seeder;

class TipoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
         DB::table('Tipos')->truncate();

          App\Tipo::create([
        'desc_tipo' => 'ORG. Auxiliar'
        ]);

           App\Tipo::create([
        'desc_tipo' => 'TURNO TRIBUNAL'
        ]);


    }
}
