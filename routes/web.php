<?php

use App\Http\Controllers\CourseController;
use App\Http\Controllers\LessonController;
use Illuminate\Support\Facades\Route;

Route::view('/', 'home', ['title' => 'Gestion des présences'])
    ->name('home');
Route::middleware('auth')->group(function () {
    Route::get('/courses', [CourseController::class, 'index'])
        ->name('courses.index');
    Route::get('/courses/{course}', [CourseController::class, 'show'])
        ->name('courses.show');
    Route::get('/lessons/{lesson}', [LessonController::class, 'show'])
        ->name('lessons.show');
    Route::view('/lessons/{lesson}/attendances', 'attendances.edit', ['title' => 'Gestion des présences']);
});
