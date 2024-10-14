<?php

use App\Http\Controllers\Controller;
use App\Http\Controllers\userController;
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

Route::get('/', [userController::class, 'index']);
Route::post('/upstan', [Controller::class, 'uploadStanMeter']);
Route::get('/jalan', [Controller::class, 'getJalan']);
Route::get('/bacaan', [Controller::class, 'getBacaan']);
Route::get('/detail/{id?}', [Controller::class, 'getBacaan']);
Route::get('/jadwal', [Controller::class, 'getJadwal']);
Route::post('/upbaca', [Controller::class, 'uploadStanMeter']);