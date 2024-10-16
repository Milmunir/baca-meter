<?php

use App\Http\Controllers\Controller;
use App\Http\Controllers\userController;
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
Route::get('/main', function () {
    return view('/main');
});
Route::get('/bacaan/{jalan}/detail/{id?}', [Controller::class, 'getBacaan']);
Route::get('/bacaan/{jalan}', [Controller::class, 'getBacaan']);
Route::get('/jalan', [Controller::class, 'getJalan']);
Route::get('/detail/{id}', [Controller::class, 'getBacaan']);
Route::get('/login', [userController::class, 'login']);
Route::post('/login', [userController::class, 'login']);




