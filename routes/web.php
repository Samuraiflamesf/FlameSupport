<?php

use App\Http\Controllers\Admin\SupportController;
use Illuminate\Support\Facades\Route;

// Rota genérica para retornar à página inicial (home)
Route::get('/', function () {
    return view('welcome');
})->name('index'); 

// Rota para Deletar dúvidas (DELETE)
Route::delete('/suporte/{id}',[SupportController::class, 'destroy'])->name('supports.destroy');
// Nome da rota: 'supports.destroy'

// Rota para atualizar dúvidas (Update)
Route::put('/suporte/{id}', [SupportController::class, 'update'])->name('supports.update');
// Nome da rota: 'supports.update'

// Rota para cadastrar dúvidas
Route::post('/suporte', [SupportController::class, 'store'])->name('supports.store');
// Nome da rota: 'supports.store'

// Rota para a página principal de administração (listagem)
Route::get('/suporte', [SupportController::class, 'index'])->name('supports.index');
// Nome da rota: 'supports.index'

// Rota para criar novas dúvidas
Route::get('/suporte/create', [SupportController::class, 'create'])->name('supports.create');
// Nome da rota: 'supports.create'

// Rota para visualizar detalhes de uma dúvida
Route::get('/suporte/{id}', [SupportController::class, 'show'])->name('supports.show');
// Nome da rota: 'supports.show'

// Rota para editar dúvidas
Route::get('/suporte/{id}/edit', [SupportController::class, 'edit'])->name('supports.edit');  
// Nome da rota: 'supports.edit'
