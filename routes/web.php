<?php

use App\Http\Controllers\Admin\{SupportController};
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
})->name('index');

Route::get('/suporte', [SupportController::class, 'index'])->name('supports.index');

Route::post('/suporte', [SupportController::class, 'store'])->name('supports.store');

Route::get('/suporte/create', [SupportController::class, 'create'])->name('supports.create');

Route::get('/suporte/{id}', [SupportController::class, 'show'])->name('supports.show');
