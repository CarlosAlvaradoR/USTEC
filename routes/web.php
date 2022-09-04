<?php

use App\Http\Controllers\EquipoController;
use App\Http\Controllers\HardwareController;
use App\Http\Controllers\IncidenteController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return redirect('login');
});

Route::get('/dashboard', [IncidenteController::class, 'index'])->middleware(['auth', 'verified'])->name('dashboard');

//** Incidentes
Route::get('/incidentes/create/{tipo}', [IncidenteController::class, 'create'])->middleware(['auth', 'verified'])->name('incidentes.create');

//buscar tipo hardware - abre form de busqueda 
Route::get('/incidentes/create/hardware/{equipo}', [HardwareController::class, 'create'])->middleware(['auth', 'verified'])->name('incidentes.create.hardware');
//crear incidente de un equipo tipo hardware
Route::get('/{equipo:codigo}/create/hardware/incidente', [HardwareController::class, 'createIncidente'])->middleware(['auth', 'verified'])->name('equipo.create.incidentes');

//Crear equipo
Route::get('/create/equipo', [EquipoController::class, 'create'])->middleware(['auth', 'verified'])->name('create.equipo');




require __DIR__ . '/auth.php';
