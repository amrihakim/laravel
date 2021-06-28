<?php

use App\Http\Controllers\KelasController;
use App\Http\Controllers\HomeController;
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

Auth::routes();

Route::get('/', [HomeController::class, 'index'])->name('home');
Route::get('/kamar', 'App\Http\Controllers\KamarController@index');
Route::get('/kamar/tambah', 'App\Http\Controllers\KamarController@tambah');
Route::post('/kamar/store', 'App\Http\Controllers\KamarController@store');
Route::get('/kamar/edit/{id}', 'App\Http\Controllers\KamarController@edit');
Route::post('/kamar/update', 'App\Http\Controllers\KamarController@update');
Route::get('/kamar/hapus/{id}', 'App\Http\Controllers\KamarController@hapus');