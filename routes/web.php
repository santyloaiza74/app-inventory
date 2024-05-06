<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\CursoController;

Route::get('/', HomeController::class);

Route::prefix('cursos')->group(function () {
    Route::get('/', [CursoController::class, 'index'])->name('cursos.index');
    Route::get('/create', [CursoController::class, 'create'])->name('cursos.create');
    Route::get('/{curso}', [CursoController::class, 'show'])->name('cursos.show');
});