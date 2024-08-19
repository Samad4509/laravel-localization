<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LangController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\LanguageController;
Route::get('/', function () {
    return view('welcome');
});
Route::view('about','about');

// Route::get('/lang', [LangController::class, 'langchange'])->name('change');
Route::get('/', [HomeController::class, 'index'])->name('home');
Route::get('/about', [HomeController::class, 'about'])->name('about');
Route::get('/contact', [HomeController::class, 'contact'])->name('contact');
Route::get('/lang', [LanguageController::class, 'change'])->name('change');
