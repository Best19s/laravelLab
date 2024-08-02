<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\FirstController;

Route::get('toController', [FirstController::class, "index"])->name("first.idx");
Route::get('layout', [FirstController::class, "showLayout"]);
Route::get('toController/{number}', [FirstController::class, "getParams"]);

Route::get('/', function () {
    return view('welcome');
});

Route::get('/FirstPage', [FirstController::class,'dashboard']);


