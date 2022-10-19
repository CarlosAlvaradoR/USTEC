<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\IncidenteController;
use App\Http\Controllers\HardwareController;
use App\Http\Controllers\SalidaController;
use App\Http\Controllers\APIIncidentes;



Route::get('/dashboard', [IncidenteController::class, 'index'])->middleware(['auth', 'verified'])->name('dashboard');



//** Incidentes
Route::get('/incidentes/create/{tipo}', [IncidenteController::class, 'create'])->middleware(['auth', 'verified'])->name('incidentes.create');
//listar incidentes
Route::get('/incidentes/show', [IncidenteController::class, 'show'])->middleware(['auth', 'verified','adminemployees'])->name('incidentes.show');


//buscar tipo hardware - abre form de busqueda 
Route::get('/incidentes/create/hardware/{equipo}', [HardwareController::class, 'create'])->middleware(['auth', 'verified'])->name('incidentes.create.hardware');
//crear incidente de un equipo tipo hardware
Route::get('/{equipo:codigo}/create/hardware/incidente', [HardwareController::class, 'createIncidente'])->middleware(['auth', 'verified'])->name('equipo.create.incidentes');


//**crear incidente de un equipo tipo hardware
Route::get('/{equipo}/create/hardware/incidente', [HardwareController::class, 'createIncidente'])->middleware(['auth', 'verified'])->name('equipo.create.incidentes');
// ** Editar incidente ....con equipo  
Route::get('/{incidente}/edit/{tipo}/incidente', [IncidenteController::class, 'editIncidente'])->middleware(['auth', 'verified'])->name('edit.incidentes');
// ** editar incidente sin equipo
// Route::get('/{incidente}/edit/{tipo}/incidente', [IncidenteController::class, 'editIncidente'])->middleware(['auth', 'verified'])->name('edit.incidente');
// ** muestra un incidente
Route::get('/{incidente}/show/incidente', [IncidenteController::class, 'incidente'])->middleware(['auth', 'verified'])->name('show.incidente');
//** descarga el historial en pdf */
Route::get('/{equipo}/historial', [IncidenteController::class, 'createHistorialPDF'])->middleware(['auth', 'verified'])->name('historial.incidente');


//Salidas o soluciones
Route::get('/salida/{incidente}', [SalidaController::class, 'index'])->name('salida.index');
Route::post('/salida/{incidente}', [SalidaController::class, 'store'])->name('salida.store');

//** API 's */
Route::get('/api/incidentes', [APIIncidentes::class, 'index'])->name('api.incidentes');



// ** Editar incidente ....con equipo  
Route::get('/{incidente}/edit/{tipo}/incidente', [IncidenteController::class, 'editIncidente'])->middleware(['auth', 'verified'])->name('edit.incidentes');
// ** editar incidente sin equipo
// Route::get('/{incidente}/edit/{tipo}/incidente', [IncidenteController::class, 'editIncidente'])->middleware(['auth', 'verified'])->name('edit.incidente');
// ** muestra un incidente
Route::get('/{incidente}/show/incidente', [IncidenteController::class, 'incidente'])->middleware(['auth', 'verified'])->name('show.incidente');
//** descarga el historial en pdf */
Route::get('/{equipo}/historial', [IncidenteController::class, 'createHistorialPDF'])->middleware(['auth', 'verified'])->name('historial.incidente');
//Crear equipo

//Salidas o soluciones
Route::get('salida/{incidente}', [SalidaController::class, 'index'])->name('salida.index');
Route::post('salida/{incidente}', [SalidaController::class, 'store'])->name('salida.store');
