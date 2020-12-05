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
Route::get('/', function () {
	return view('welcome');
});

Route::get('/about-me', function() {
    return 'Nama Saya <b>Musdayanti</b>';
});

Route::get('/hobby', function () {
    return 'Hobby Musdayanti <b>Menari</b>';
});


Route::get('/ttl', function () {
    return 'TTL <b>Anggana 02022001</b>';
});


Route::get('/jurusan', function () {
        return 'Jurusan <b>S1 Teknik Informatika</b>';
});


Route::get('/alamat', function () {
    return 'Musdayanti berasal dari <b>kota Samarinda</b>';
});

use App\Http\Controllers\MusdayantiController;

Route::get("/Musdayanti/one", [MusdayantiController::class, "one"]);
Route::get("/Musdayanti/two", [MusdayantiController::class, "two"]);
Route::get("/Musdayanti/three", [MusdayantiController::class, "three"]);



use App\Http\Controllers\MusdaController;

Route::get("/Musda/satu", [MusdaController::class, "satu"]);
Route::get("/Musda/dua", [MusdaController::class, "dua"]);
Route::get("/Musda/tiga", [MusdaController::class, "tiga"]);

Route::get("/test-tema", [MusdayantiController::class, "index"]);