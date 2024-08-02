<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\FirstController;

// Route::get('toController', [FirstController::class, "index"])->name("first.idx");
// Route::get('layout', [FirstController::class, "showLayout"]);
// Route::get('toController/{number}', [FirstController::class, "getParams"]);

Route::get('/', function () {
    return view('welcome');
});

use App\Http\Controllers\CourseController;
Route::get('/course/{nameCourse}', [CourseController::class, 'getCourse']);

use App\Http\Controllers\InformationController;
use App\Http\Controllers\AboutController;
Route::get('/info', [InformationController::class, 'index']);
Route::get('/about', [AboutController::class, 'index']);

