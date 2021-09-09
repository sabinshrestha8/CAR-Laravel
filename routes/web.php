<?php

use Illuminate\Support\Facades\Route;

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

// Route::get('/', function () {
//     return view('welcome');
// });

// Route::get('/cars', 'App\Http\Controllers\CarController@index');

// Route::get('/create', 'App\Http\Controllers\CarController@create');
// Route::post('/create', 'App\Http\Controllers\CarController@store');


// Route::get('/car/{id}', 'App\Http\Controllers\CarController@show');

Route::resource('cars', 'App\Http\Controllers\CarController');
