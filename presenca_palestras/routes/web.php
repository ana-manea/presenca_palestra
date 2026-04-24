<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});


Route::get('/inicio',[App\Http\Controllers\SiteController::class, 'index']);

Route::get('/dupla', [App\Http\Controllers\SiteController::class, 'dupla']);