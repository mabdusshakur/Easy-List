<?php

use App\Http\Controllers\EnterPageController;
use App\Http\Controllers\Lists\ListController;
use Illuminate\Support\Facades\Route;

Route::group(['middleware' => ['preventPinAuth']], function () {
    Route::get('/enter', [EnterPageController::class, 'index'])->name('enter.index');
    Route::post('/enter', [EnterPageController::class, 'enter'])->name('enter.post');
});

Route::group(['middleware' => ['pinAuth']], function () {
    Route::get('/{status?}', [ListController::class, 'index'])->name('list.index');
    Route::post('/', [ListController::class, 'store'])->name('list.post');
    Route::patch('/{listItem}', [ListController::class, 'update'])->name('list.patch');
    Route::delete('/{listItem}', [ListController::class, 'destroy'])->name('list.delete');

    Route::get('/logout', [EnterPageController::class, 'exit'])->name('enter.logout');
});