<?php

use Illuminate\Support\Facades\Route;
use App\Http\Livewire\ShowEquipos;
use App\Http\Controllers\EquipoController;


//Mostrar Equipos
Route::middleware(['auth', 'verified', 'admin_employees_notificador'])->get('/equipos', ShowEquipos::class)->name('index.equipos');
//Route::get('/equipos', [EquipoController::class, 'index'])->middleware(['auth', 'verified'])->name('index.equipos');

//Crear equipo
Route::get('/create/equipo', [EquipoController::class, 'create'])->middleware(['auth', 'verified','admin_employees_notificador'])->name('create.equipo');

//Editar Equipos
Route::get('/equipos/{idEquipo}/edit', [EquipoController::class, 'edit'])->middleware(['auth', 'verified', 'admin_employees_notificador'])->name('equipos.edit');
Route::put('/equipos/{idEquipo}/update', [EquipoController::class, 'update'])->middleware(['auth', 'verified','admin_employees_notificador'])->name('equipos.update');

//Eliminar Equipos
Route::delete('/equipos/delete/{idEquipo}', [EquipoController::class, 'destroy'])->middleware(['auth', 'verified'])->name('equipos.destroy');
//Route::get('/create/equipo', [EquipoController::class, 'create'])->middleware(['auth', 'verified'])->name('create.equipo');

//Route::get('/create/equipo', [EquipoController::class, 'create'])->middleware(['auth', 'verified'])->name('create.equipo');
