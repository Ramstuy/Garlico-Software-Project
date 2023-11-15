<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MainController;

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

Route::get('/', [MainController::class, 'index']);
Route::get('/user', [MainController::class, 'signup']);
Route::get('/regist', [MainController::class, 'register']);
Route::get('/loginform', [MainController::class, 'login']);
Route::get('/shipment', [MainController::class, 'ship']);
