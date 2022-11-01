<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HeloController;
use App\Http\Controllers\BookController;
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

// Route::get('halo', function(){
    // return ['me' => 'guanteng'];
// });

//Route::get('helocontroller', [HeloController::class, 'index']);
//Route::post('helocontroller', [HeloController::class, 'store']);
//Route::get('helocontroller', [HeloController::class, 'show']);
//Route::put('helocontroller', [HeloController::class, 'update']);
//Route::delete('helocontroller', [HeloController::class, 'destroy']);
// Route::resource('helocontroller', HeloController::class);
Route::apiResource('siswa', SiswaController::class);
Route::apiResource('book', BookController::class);