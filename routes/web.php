<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminPanel\AdminController;
use App\Http\Controllers\NormalController\PageController;
use App\Http\Controllers\NormalController\TaskController;

Route::get('/', function () { 
    return view('normal.home');
})->name('normal.home');

// --------------- REDIRECT TO ADMIN OR NORMAL ---------------
Route::get('/dashboard',[PageController::class,'redirect'])->middleware('auth','verified')->name('dashboard');

// --------------- NORMAL USER ---------------
Route::get('/about',[PageController::class, 'about'])->name('normal.about');
Route::get('/contact',[PageController::class, 'contact'])->name('normal.contact');

// --------------- AUTH WITH TASK (NORMAL USER) ---------------
Route::middleware('auth')->group(function () {
    Route::get('/task',[TaskController::class, 'task'])->name('normal.task');
    Route::get('/add-task',[TaskController::class, 'add_task'])->name('normal.add_task');
    Route::post('/store-task',[TaskController::class, 'store_task'])->name('normal.store_task');
    Route::get('/edit-task/id-{id}',[TaskController::class, 'edit_task'])->name('normal.edit_task');
    Route::put('/update-task/{id}', [TaskController::class, 'update_task'])->name('normal.update_task');
    Route::delete('/delete-task/{id}', [TaskController::class, 'delete_task'])->name('normal.delete_task');
});

// --------------- ADMIN ---------------
Route::middleware(['auth','role:admin'])->group(function () {
    Route::get('admin/dashboard',[AdminController::class, 'index'])->name('admin.dashboard');
});


require __DIR__.'/auth.php';