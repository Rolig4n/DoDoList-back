<?php

use App\Http\Controllers\TarefaController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return ['Laravel' => app()->version()];
});

// Routes importadas do repostitório de teste

Route::get('/tarefas', [TarefaController::class, 'index'])->name('tarefas.index');

Route::get('/tarefas/{id}', [TarefaController::class, 'show'])->name('tarefas.show');

// so functiona para projeto front-end
// Route::get('/tarefas/create', [TarefaController::class, 'create'])->name('tarefas.create');

Route::post('/tarefas', [TarefaController::class, 'store'])->name('tarefas.store');

Route::get('/tarefas/{tarefa}/edit', [TarefaController::class, 'edit'])->name('tarefas.edit');

Route::get('/tarefas/{tarefa}/update', [TarefaController::class, 'update'])->name('tarefas.update');

Route::delete('/tarefas/{tarefa}/destroy', [TarefaController::class, 'destroy'])->name('tarefas.destroy');

require __DIR__.'/auth.php';
