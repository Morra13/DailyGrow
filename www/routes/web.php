<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AnalyticsController;
use App\Http\Controllers\ClientController;
use App\Http\Controllers\MailingController;
use App\Http\Controllers\PublicController;
use App\Http\Controllers\Auth\AuthController;

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

Route::get('/auth',             [PublicController::class, 'auth']               )->name(PublicController::ROUTE_AUTH);
Route::get('/register',         [PublicController::class, 'register']           )->name(PublicController::ROUTE_REGISTER);
Route::post('/auth',            [AuthController::class, 'auth']                 )->name(AuthController::ROUTE_AUTH);
Route::post('/register',        [AuthController::class, 'register']             )->name(AuthController::ROUTE_REGISTER);

Route::group(
    ['middleware' => 'auth'],
    function () {
        Route::get('/?{period}',        [AnalyticsController::class, 'analytics']       )->name(AnalyticsController::ROUTE_ANALYTICS);
        Route::get('/clients',          [ClientController::class, 'clients']            )->name(ClientController::ROUTE_CLIENTS);
        Route::get('/addClients',       [ClientController::class, 'addClients']         )->name(ClientController::ROUTE_ADD_CLIENTS);
        Route::get('/addClientsXlsCvs', [ClientController::class, 'addClientsXlsCvs']   )->name(ClientController::ROUTE_ADD_CLIENTS_XLS_CVS);
        Route::get('/mailing',          [MailingController::class, 'mailing']           )->name(MailingController::ROUTE_MAILING);
        Route::get('/addMailing',       [MailingController::class, 'addMailing']        )->name(MailingController::ROUTE_ADD_MAILING);
        Route::get('/addSegment',       [MailingController::class, 'addSegment']        )->name(MailingController::ROUTE_ADD_SEGMENT);
        Route::get('/logout',           [AuthController::class, 'logout']               )->name(AuthController::ROUTE_LOGOUT);
    }
);

