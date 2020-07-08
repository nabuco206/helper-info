<?php

use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('Users')->truncate();
        App\User::create([
        'name' => 'Cristian Rojas Maraboli',
        'email' => 'rojas.maraboli@gmail.com',
        'fiscalia'=>'REGIONAL',
        'rol' =>  'ADMIN' ,
        'email_verified_at' => now(),
        'password' => bcrypt('123456789'), 
        'remember_token' => Str::random(10)
        ]);
    }
}
