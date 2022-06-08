<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});
Route::post('/servicesApi/socialprotection/{id}',[\App\Http\Controllers\ServicesApiController::class,'socialProtectionApi']);
Route::post('/services/social-protection',[\App\Http\Controllers\services\ProtectionSocialController::class,'updateStatusApi']);
Route::post('/servicesApi/familialprotection/{id}',[\App\Http\Controllers\ServicesApiController::class,'familialProtectionApi']);
Route::post('/services/familial-protection',[\App\Http\Controllers\services\ProtectionFamilialeController::class,'updateStatusApi']);
Route::post('/servicesApi/bourse/{id}',[\App\Http\Controllers\ServicesApiController::class,'bourseApi']);
Route::post('/services/bourse',[\App\Http\Controllers\services\BourseController::class,'updateStatusApi']);
Route::post('/suivie/search',[\App\Http\Controllers\suivieController::class,'search']);
