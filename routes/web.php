<?php
use App\Http\Controllers\Admin\{SupportController};
use Illuminate\Support\Facades\Route;

Route::post('/suporte',[SupportController::class, 'store'])->name('supports.store');

Route::get('/', function () {
    return view('welcome');
});

Route::get('/suporte/create', [SupportController::class, 'create'])->name('supports.create');

Route::get('/suporte', [SupportController::class, 'index'])->name('supports.index');

