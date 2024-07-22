<?php

use App\Http\Controllers\EnterPageController;
use Illuminate\Support\Facades\Route;

Route::get('/enter', [EnterPageController::class, 'index'])->name('enter.index');
Route::get('/logout', [EnterPageController::class, 'exit'])->name('enter.logout');
Route::post('/enter', [EnterPageController::class, 'enter'])->name('enter.post');


Route::view('/', 'lists.index');