<?php

use Illuminate\Support\Facades\Auth;
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

// Route::get('/', function () {
//     return view('admin.dashboard');

// });

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('/dashboard', [App\Http\Controllers\DashboardController::class, 'dashboard']);

Route::get('/initiate', [\App\Http\Controllers\DashboardController::class, 'initiate']);

// add capital
Route::post('/addcapital', [\App\Http\Controllers\DashboardController::class, 'addcapital']);

/// STOCK ROUTES

//get stocks
Route::get('/stock', [App\Http\Controllers\StocksController::class, 'stocks']);

//add stock
Route::post('/addstock', [\App\Http\Controllers\StocksController::class, 'addstock']);

