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

Route::get('/dashoverview', [DashboardController::class, 'overview'])->name('dashoverview')->middleware('auth', 'admin');

Route::get('/dashorders', [DashboardController::class, 'orders'])->name('dashorders')->middleware('auth', 'admin');
Route::get('/paidstatus/{id}', [DashboardController::class, 'paidStatus'])->name('paidstatus')->middleware('auth', 'admin');
Route::get('/cancelstatus/{id}', [DashboardController::class, 'cancelStatus'])->name('cancelstatus')->middleware('auth', 'admin');

Route::get('/dashshipment', [DashboardController::class, 'shipment'])->name('dashshipment')->middleware('auth', 'admin');
Route::get('/shipstatus/{id}', [DashboardController::class, 'shipStatus'])->name('shipstatus')->middleware('auth', 'admin');

Route::get('/dashclient', [DashboardController::class, 'client'])->name('dashclient')->middleware('auth', 'admin');

Route::get('/customerorder/{id}', [MainController::class, 'customerOrder'])->name('custorder')->middleware('auth');
Route::post('/customerorder', [MainController::class, 'store'])->name('orderdetails');

Route::get('/ordersummary', [MainController::class, 'orderSummary'])->name('ordersummary')->middleware('auth');

Route::get('/deletecustomer/{id}', [MainController::class, 'delete'])->name('deletecustomer');

Route::get('/register', [RegisterController::class, 'register'])->middleware('guest');
Route::post('/register', [RegisterController::class, 'store']);

Route::get('/login', [LoginController::class, 'login'])->name('loginpage')->middleware('guest');
Route::post('/login', [LoginController::class, 'authenticate']);
Route::post('/logout', [LoginController::class, 'logout']);







