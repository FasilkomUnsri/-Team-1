<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PegawaiController;


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
    return view('beranda');
});
Route::get('/film', function () {
    return view('film');
});
Route::get('/kontak', function () {
    return view('kontak');
});
Route::resource('tiket', PegawaiController::class);

