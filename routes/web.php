<?php

use App\Http\Controllers\EnterPageController;
use App\Http\Controllers\Lists\ListController;
use Illuminate\Support\Facades\Route;

Route::get('/enter', [EnterPageController::class, 'index'])->name('enter.index');
Route::get('/logout', [EnterPageController::class, 'exit'])->name('enter.logout');
Route::post('/enter', [EnterPageController::class, 'enter'])->name('enter.post');


Route::get('/', [ListController::class, 'index']);
Route::post('/', [ListController::class, 'store']);
Route::patch('/', [ListController::class, 'update']);
Route::delete('/', [ListController::class, 'destroy']);