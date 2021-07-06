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
use App\Http\Controllers\ChangePasswordController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/nosotros', function () {
    return view('nosotros');
});

Route::get('/psicologia', function () {
    return view('psicologia');
});

Route::get('/computacion', function () {
    return view('computacion');
});

Route::get('/educacion', function () {
    return view('educacion');
});

Route::get('/hacemos', function () {
    return view('hacemos');
});

Route::get('/recuperar', function () {
    return view('recuperar');
});


Route::post('/recuperar/contra',[ChangePasswordController::class, 'process'])->name('recuperar.contra');