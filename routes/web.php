<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\StudentController;
use App\Http\Controllers\ClassController;

Route::get('/', function () {
    return redirect()->route('students.index');
});

Route::get('/classes', [ClassController::class, 'index'])->name('classes.index');
Route::resource('students', StudentController::class);

