<?php

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


use App\Http\Controllers\HelloController;
use App\Http\Middleware\HelloMiddleware;

Route::get('hello', [HelloController::class, 'index']);
Route::post('hello', [HelloController::class, 'post']);

