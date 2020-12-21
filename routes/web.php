<?php

use Illuminate\Support\Facades\Route;
use  App\Http\Controllers\PraticalController;
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

Route::get('/', [PraticalController::class , 'recent']);

Route::post('/store', [PraticalController::class , 'store'])->name("pratical.store");

