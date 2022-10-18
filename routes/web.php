<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', [\App\Http\Controllers\AboutController::class,'show'])->name('about');
Route::get('/contact', [\App\Http\Controllers\ContactController::class,'show'])->name('contact');
Route::get('/resume', [\App\Http\Controllers\ResumeController::class,'show'])->name('resume');
Route::get('/projects', [\App\Http\Controllers\ProjectController::class,'show'])->name('projects');
