<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\FirstController;

// Route::get('toController', [FirstController::class, "index"])->name("first.idx");
// Route::get('layout', [FirstController::class, "showLayout"]);
// Route::get('toController/{number}', [FirstController::class, "getParams"]);

Route::get('/', function () {
    return view('welcome');
});



use App\Http\Controllers\CompanyController;
Route::get('company', [CompanyController::class,'index']);

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified',
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
});
