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
Route::get('/services', [\App\Http\Controllers\services::class, 'index'])->name('services');
Route::get('/services/{name}', [\App\Http\Controllers\services::class, 'service'])->name('service');

