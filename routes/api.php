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

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

Route::get('/cases', [\App\Http\Controllers\CovidCaseController::class, 'index']);
Route::get('/surah',function(){
    $response = \Illuminate\Support\Facades\Http::get('http://api.alquran.cloud/v1/surah');
    return $response->status();
});
