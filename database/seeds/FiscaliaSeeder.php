<?php

use Illuminate\Database\Seeder;

class FiscaliaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
         DB::table('Fiscalias')->truncate();

          App\Fiscalia::create([
        'cod_fiscalia' => 5,
        'gls_fiscalia' => 'Regional',
        ]);


        App\Fiscalia::create([
        'cod_fiscalia' => 501,
        'gls_fiscalia' => 'Valparaiso',
        ]);

        App\Fiscalia::create([
        'cod_fiscalia' => 502,
        'gls_fiscalia' => 'Viña del Mar',
        ]);

        App\Fiscalia::create([
        'cod_fiscalia' => 503,
        'gls_fiscalia' => 'San Antonio',
        ]);

        App\Fiscalia::create([
        'cod_fiscalia' => 504,
        'gls_fiscalia' => 'San Felipe',
        ]);

         App\Fiscalia::create([
        'cod_fiscalia' => 505,
        'gls_fiscalia' => 'Quilpue',
        ]);

          App\Fiscalia::create([
        'cod_fiscalia' => 506,
        'gls_fiscalia' => 'Los Andes',
        ]);

           App\Fiscalia::create([
        'cod_fiscalia' => 507,
        'gls_fiscalia' => 'Villa Alemana',
        ]);

            App\Fiscalia::create([
        'cod_fiscalia' => 508,
        'gls_fiscalia' => 'Quillota',
        ]);

             App\Fiscalia::create([
        'cod_fiscalia' => 509,
        'gls_fiscalia' => 'La Calera',
        ]);

              App\Fiscalia::create([
        'cod_fiscalia' => 510,
        'gls_fiscalia' => 'La Ligua',
        ]);

               App\Fiscalia::create([
        'cod_fiscalia' => 511,
        'gls_fiscalia' => 'Limache',
        ]);

                App\Fiscalia::create([
        'cod_fiscalia' => 512,
        'gls_fiscalia' => 'Quintero',
        ]);

                 App\Fiscalia::create([
        'cod_fiscalia' => 513,
        'gls_fiscalia' => 'Isla de Pascua',
        ]);

                   App\Fiscalia::create([
        'cod_fiscalia' => 515,
        'gls_fiscalia' => 'Casablanca',
        ]);

                    App\Fiscalia::create([
        'cod_fiscalia' => 516,
        'gls_fiscalia' => 'SACFI',
        ]);

       
    }
}


