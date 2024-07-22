<?php

use App\Http\Controllers\EnterPageController;
use Illuminate\Support\Facades\Route;

Route::get('/enter', [EnterPageController::class, 'index'])->name('enter.index');
Route::get('/enter', [EnterPageController::class, 'enter'])->name('enter.post');