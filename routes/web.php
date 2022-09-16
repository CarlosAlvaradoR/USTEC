<?php

use App\Http\Controllers\APIIncidentes;
use App\Http\Controllers\EquipoController;
use App\Http\Controllers\HardwareController;
use App\Http\Controllers\IncidenteController;
use App\Http\Controllers\SalidaController;
use App\Models\Incidente;
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
//listar incidentes
Route::get('/incidentes/show', [IncidenteController::class, 'show'])->middleware(['auth', 'verified'])->name('incidentes.show');
//buscar tipo hardware - abre form de busqueda 
Route::get('/incidentes/create/hardware/{equipo}', [HardwareController::class, 'create'])->middleware(['auth', 'verified'])->name('incidentes.create.hardware');
//crear incidente de un equipo tipo hardware
Route::get('/{equipo:codigo}/create/hardware/incidente', [HardwareController::class, 'createIncidente'])->middleware(['auth', 'verified'])->name('equipo.create.incidentes');
// ** Editar incidente ....con equipo  
Route::get('/{incidente}/edit/{tipo}/incidente', [IncidenteController::class, 'editIncidente'])->middleware(['auth', 'verified'])->name('edit.incidentes');
// ** editar incidente sin equipo
// Route::get('/{incidente}/edit/{tipo}/incidente', [IncidenteController::class, 'editIncidente'])->middleware(['auth', 'verified'])->name('edit.incidente');
// ** muestra un incidente
Route::get('/{incidente}/show/incidente', [IncidenteController::class, 'incidente'])->middleware(['auth', 'verified'])->name('show.incidente');
//** descarga el historial en pdf */
Route::get('/{equipo}/historial', [IncidenteController::class, 'createHistorialPDF'])->middleware(['auth', 'verified'])->name('historial.incidente');
//Crear equipo
Route::get('/create/equipo', [EquipoController::class, 'create'])->middleware(['auth', 'verified'])->name('create.equipo');

//Salidas o soluciones
Route::get('/salida/{incidente}', [SalidaController::class, 'index'])->name('salida.index');
Route::post('/salida/{incidente}', [SalidaController::class, 'store'])->name('salida.store');

//** API 's */
Route::get('/api/incidentes', [APIIncidentes::class, 'index'])->name('api.incidentes');



require __DIR__ . '/auth.php';
