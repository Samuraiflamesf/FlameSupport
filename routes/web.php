<?php

use App\Http\Controllers\Admin\{SupportController};
use Illuminate\Support\Facades\Route;

//Rotar generciar para retornar home
Route::get('/', function () {
    return view('welcome');
})->name('index');

//Rotar para atulizar duvidas(Update)
Route::put('/supports/{id}',[SupportController::class,'update'])->name('supports.update');

//Rotar para cadastrar duvidas
Route::post('/suporte', [SupportController::class, 'store'])->name('supports.store');

//Rotar para index admin, principal
Route::get('/suporte', [SupportController::class, 'index'])->name('supports.index');

//Rotar para criar novas duvidas
Route::get('/suporte/create', [SupportController::class, 'create'])->name('supports.create');

//Rotar para ver detalhes das duvidas
Route::get('/suporte/{id}', [SupportController::class, 'show'])->name('supports.show');

//Rotar para editar as duvidas
Route::get('/suporte/{id}/edit', [SupportController::class, 'edit'])->name('supports.edit');
