<?php
use App\Http\Controllers\Admin\{SupportController};
use Illuminate\Support\Facades\Route;


Route::get('/', function () {
    return view('welcome');
});


Route::get('/suporte', [SupportController::class, 'index'])->name('supports.index');

