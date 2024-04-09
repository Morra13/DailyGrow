<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AnalyticsController;
use App\Http\Controllers\ClientController;
use App\Http\Controllers\MailingController;
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

Route::get('/',                 [AnalyticsController::class, 'analytics']       )->name(AnalyticsController::ROUTE_ANALYTICS);
Route::get('/clients',          [ClientController::class, 'clients']            )->name(ClientController::ROUTE_CLIENTS);
Route::get('/addClients',       [ClientController::class, 'addClients']         )->name(ClientController::ROUTE_ADD_CLIENTS);
Route::get('/addClientsXlsCvs', [ClientController::class, 'addClientsXlsCvs']   )->name(ClientController::ROUTE_ADD_CLIENTS_XLS_CVS);
Route::get('/mailing',          [MailingController::class, 'mailing']           )->name(MailingController::ROUTE_MAILING);
Route::get('/addMailing',       [MailingController::class, 'addMailing']        )->name(MailingController::ROUTE_ADD_MAILING);
Route::get('/auth',             [RegisterController::class, 'auth']             )->name(RegisterController::ROUTE_AUTH);
Route::get('/register',         [RegisterController::class, 'register']         )->name(RegisterController::ROUTE_REGISTER);
