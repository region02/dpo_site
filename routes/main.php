<?php

use App\Http\Controllers\CourseController;
use App\Http\Controllers\MainController;
use Illuminate\Support\Facades\Route;


Route::get('/', [MainController::class, 'show'])->name('index.show');
Route::post('/questions-form', [MainController::class, 'feedback'])->name('index.questions');

Route::get('/course', [CourseController::class, 'index'])->name('course.all');





Route::get('/course/{course:slug}', [CourseController::class, 'show'])->name('course.show');

Route::put('/course/{course:slug}', [CourseController::class, 'userPut'])->name('course.user.put');




