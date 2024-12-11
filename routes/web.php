<?php

use App\Http\Controllers\OcjeneController;
use Illuminate\Support\Facades\Route;

Route::get('/', [OcjeneController::class, 'index']  )->name('index');
Route::get('/dodaj-ocjenu', [OcjeneController::class, 'create'])->name('dodaj-ocjenu');
Route::post('/store-ocjenu', [OcjeneController::class, 'store'])->name('store-ocjenu');
