<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Api\Auth\RegisterController;
use App\Http\Controllers\Api\ClientController;
use App\Http\Controllers\Api\MailingController;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::post('/auth',                    [RegisterController::class, 'auth']                 )->name(RegisterController::ROUTE_AUTH);
Route::post('/register',                [RegisterController::class, 'register']             )->name(RegisterController::ROUTE_REGISTER);
Route::post('/addClient',               [ClientController::class, 'addClient']              )->name(ClientController::ROUTE_ADD_CLIENT);
Route::post('/addClientXlsCvs',         [ClientController::class, 'addClientXlsCvs']        )->name(ClientController::ROUTE_ADD_CLIENT_XLS_CVS);
Route::post('/addMailing',              [MailingController::class, 'addMailing']            )->name(MailingController::ROUTE_ADD_MAILING);
Route::post('/addSegment',              [MailingController::class, 'addSegment']            )->name(MailingController::ROUTE_ADD_SEGMENT);
Route::get('/changeMailingStatus/{id}', [MailingController::class, 'changeMailingStatus']   )->name(MailingController::ROUTE_CHANGE_MAILING_STATUS);
