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

// Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
//     return $request->user();
// });

Route::get('peribahasa', 'App\Http\Controllers\PeribahasaController@index');
Route::get('peribahasa/random', 'App\Http\Controllers\PeribahasaController@random');
Route::get('peribahasa/search', 'App\Http\Controllers\PeribahasaController@search');
Route::get('peribahasa/{slug}', 'App\Http\Controllers\PeribahasaController@show');
