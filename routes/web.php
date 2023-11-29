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

Route::get('/', [MainController::class, 'index'])->name('home');

Route::get('/dashoverview', [DashboardController::class, 'overview'])->name('dashoverview')->middleware('auth');
Route::get('/dashorders', [DashboardController::class, 'orders'])->name('dashorders')->middleware('auth');
Route::get('/dashshipment', [DashboardController::class, 'shipment'])->name('dashshipment')->middleware('auth');
Route::get('/dashclient', [DashboardController::class, 'client'])->name('dashclient')->middleware('auth');

Route::get('/customerorder', [MainController::class, 'customerOrder']);

Route::get('/adminregister', [RegisterController::class, 'adminRegister'])->middleware('guest');
Route::post('/adminregister', [RegisterController::class, 'adminStore']);

Route::get('/adminlogin', [LoginController::class, 'adminLogin'])->middleware('guest');
Route::post('/adminlogin', [LoginController::class, 'adminAuth']);
Route::post('/adminlogout', [LoginController::class, 'adminLogout']);

Route::get('/userregister', [RegisterController::class, 'userRegister']);

Route::get('/userlogin', [LoginController::class, 'userLogin']);





