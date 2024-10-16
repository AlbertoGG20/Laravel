<?php
use App\Models\House; // Importar el modelo House
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HouseController;

Route::get('/', function () {
  $houses = House::all();
    return view('welcome',['houses' => $houses]);
})-> name('home');


Route::resource('houses', HouseController::class);
