<?php

use Illuminate\Support\Facades\Route;
use App\Info;
use Illuminate\Support\Facades\DB;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

/*
Route::get('/', function () {
    return view('welcome');
});
//Route::get('/', 'InfoController@index');
*/
//https://demos.creative-tim.com/argon-dashboard/docs/plugins/datepicker.html

Auth::routes();
 
Route::get('/', 'InfoController@home')->name('home');



Route::middleware(['auth', 'admin'])->group(function () {
   	Route::get('/index', 'InfoController@index')->name('index');

	Route::get('/info/create', 'InfoController@create'); // form registro
	Route::post('/info', 'InfoController@store');

	Route::get('/info/update', 'InfoController@update');

	Route::get('/info/{info}/edit', 'InfoController@edit');
	Route::put('/info/{info}', 'InfoController@update');

	Route::delete('/info/{info}', 'InfoController@destroy');



});


//Route::get('/specialties/{specialty2}/edit', 'SpecialtyController@edit');
//Route::put('/specialties/{specialty}', 'SpecialtyController@update');




