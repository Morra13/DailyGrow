<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PublicController;
use App\Http\Controllers\Auth\RegisterController;

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

Route::get('/',         [PublicController::class, 'analytics']  )->name(PublicController::ROUTE_ANALYTICS);
Route::get('/clients',  [PublicController::class, 'clients']    )->name(PublicController::ROUTE_CLIENTS);
Route::get('/mailing',  [PublicController::class, 'mailing']    )->name(PublicController::ROUTE_MAILING);

Route::get('/auth',     [RegisterController::class, 'auth']  )->name(RegisterController::ROUTE_AUTH);
Route::get('/register', [RegisterController::class, 'register'] )->name(RegisterController::ROUTE_REGISTER);
