<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
})-> name('home');

use App\Http\Controllers\HouseController;

Route::resource('houses', HouseController::class);
