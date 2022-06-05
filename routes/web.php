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
Route::get('/suivie', [\App\Http\Controllers\suivieController::class, 'index'])->name('suivie');
Route::prefix('/services')->group(function(){
    Route::get('/social-protection', [\App\Http\Controllers\services\ProtectionSocialController::class, 'index'])->name('social-protection');
    Route::post('/social-protection/create', [\App\Http\Controllers\services\ProtectionSocialController::class, 'store'])->name('store');
    Route::get('/familial-protection', [\App\Http\Controllers\services\ProtectionFamilialeController::class, 'index'])->name('familial-protection');
    Route::post('/familial-protection/create', [\App\Http\Controllers\services\ProtectionFamilialeController::class, 'store'])->name('store');

});


Auth::routes();

Route::get('/admin', [App\Http\Controllers\AdminController::class, 'index'])->name('admin/admin');
Route::prefix('/admin')->group(function(){
    Route::get('/social-protection', [\App\Http\Controllers\AdminController::class, 'socialProtection'])->name('admin-social-protection');
    Route::get('/familial-protection', [\App\Http\Controllers\AdminController::class, 'familalProtection'])->name('admin-familial-protection');

});
