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

<<<<<<< HEAD
<<<<<<< HEAD
Route::get('/', "CarController@index")->name('home');
=======
Route::get('/', function () {
    return view('home');
});
>>>>>>> 45edd410d52d5c3522ba31b383d279a9d5badf40
=======
Route::get('/', "CarController@index")->name('home');
>>>>>>> c731dc1284ea487151a1c9a0a0a2555358091a74
