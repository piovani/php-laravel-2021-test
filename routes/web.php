<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    $clients = \App\Models\Client::all();

    return view('welcome', compact('clients'));
});

Route::get('client/export', \App\Http\Controllers\ClientController::class . '@export');
