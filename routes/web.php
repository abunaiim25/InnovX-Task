<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminPanel\AdminController;
use App\Http\Controllers\NormalController\PageController;


Route::get('/', function () { 
    return view('normal.home');
})->name('normal.home');

// --------------- REDIRECT TO ADMIN OR NORMAL ---------------
Route::get('/dashboard',[PageController::class,'redirect'])->middleware('auth','verified')->name('dashboard');

// --------------- NORMAL USER ---------------
Route::get('/about',[PageController::class, 'about'])->name('normal.about');
Route::get('/contact',[PageController::class, 'contact'])->name('normal.contact');

// --------------- ADMIN ---------------
Route::middleware(['auth','role:admin'])->group(function () {
    Route::get('admin/dashboard',[AdminController::class, 'index'])->name('admin.dashboard');
});


require __DIR__.'/auth.php';