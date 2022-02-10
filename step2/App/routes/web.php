<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\StudentController;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
*/

Route::get('/', function () { return view('welcome'); });

Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');

Route::get('/students',                 [StudentController::class,'index'])->name('students');
Route::get('/students/store',           [StudentController::class,'store'])->name('store');
Route::get('/students/store/profile',   [StudentController::class,'store_profile'])->name('storeProfile');
