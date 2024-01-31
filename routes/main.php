<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

//Route::view('/', 'main.index')->name('main');
Route::get('/', [\App\Http\Controllers\MainController::class, 'show']);
Route::get('/courses', [\App\Http\Controllers\CoursesController::class, 'show']);
//Route::get('/course/{course:slug}', [\App\Http\Controllers\CourseController::class, 'show']);
Route::get('/course', [\App\Http\Controllers\CourseController::class, 'show']);




