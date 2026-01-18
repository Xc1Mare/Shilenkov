<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\UserController;

Route::get('/', function () {
    return view('welcome');
});

Route::group(['prefix' => 'info'], function() {

    Route::get('/server', [UserController::class, 'getPhpInfo']);
    Route::get('/client', [UserController::class, 'getClientInfo']);
    Route::get('/database', [UserController::class, 'getDatabaseInfo']);

});
