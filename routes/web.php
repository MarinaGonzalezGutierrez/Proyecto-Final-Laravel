<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\AgendaController;
use App\Http\Controllers\ImagenController;

Route::get('/', [ImagenController::class, 'index']) -> name('imagen.index');
Route::get('/agenda', [AgendaController::class, 'index']);
Route::post('/agenda', [AgendaController::class, 'store']);
Route::get('/agenda/show', [AgendaController::class, 'show']) -> name('agenda.show');

Route::get('/agenda/create', [AgendaController::class, 'create']) -> name('agenda.create');

