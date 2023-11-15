<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MainController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\LoginController;
use SebastianBergmann\CodeCoverage\Report\Html\Dashboard;

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

Route::get('/dashoverview', [DashboardController::class, 'overview']);
Route::get('/dashorders', [DashboardController::class, 'orders']);
Route::get('/dashshipment', [DashboardController::class, 'shipment']);
Route::get('/dashclient', [DashboardController::class, 'client']);

Route::get('/customerorder', [MainController::class, 'customerOrder']);

Route::get('/adminregister', [RegisterController::class, 'adminRegister']);
Route::get('/userregister', [RegisterController::class, 'userRegister']);

Route::get('/adminlogin', [LoginController::class, 'adminLogin']);
Route::get('/userlogin', [LoginController::class, 'userLogin']);





