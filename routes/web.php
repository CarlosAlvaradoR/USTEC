<?php

use App\Http\Controllers\APIIncidentes;
use App\Http\Controllers\EquipoController;
use App\Http\Controllers\HardwareController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\IncidenteController;
use App\Http\Controllers\SalidaController;
use App\Models\Incidente;
use App\Http\Controllers\MaterialesController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;
use App\Http\Livewire\ShowUsers;
use App\Http\Livewire\ShowMateriales;
use App\Http\Livewire\ShowEquipos;
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

Route::get('/',  [HomeController::class, 'index'])->name('home');

Route::get('/dashboard', [IncidenteController::class, 'index'])->middleware(['auth', 'verified'])->name('dashboard');

//** Incidentes
Route::get('/incidentes/create/{tipo}', [IncidenteController::class, 'create'])->middleware(['auth', 'verified'])->name('incidentes.create');
//listar incidentes
Route::get('/incidentes/show', [IncidenteController::class, 'show'])->middleware(['auth', 'verified'])->name('incidentes.show');
//buscar tipo hardware - abre form de busqueda 
Route::get('/incidentes/create/hardware/{equipo}', [HardwareController::class, 'create'])->middleware(['auth', 'verified'])->name('incidentes.create.hardware');


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
//**Crear equipo
Route::get('/create/equipo', [EquipoController::class, 'create'])->middleware(['auth', 'verified'])->name('create.equipo');

//Salidas o soluciones
Route::get('/salida/{incidente}', [SalidaController::class, 'index'])->name('salida.index');
Route::post('/salida/{incidente}', [SalidaController::class, 'store'])->name('salida.store');

//** API 's */
Route::get('/api/incidentes', [APIIncidentes::class, 'index'])->name('api.incidentes');

//Mostrar Equipos
Route::middleware(['auth', 'verified'])->get('/equipos', ShowEquipos::class)->name('index.equipos');
//Route::get('/equipos', [EquipoController::class, 'index'])->middleware(['auth', 'verified'])->name('index.equipos');

//Crear equipo
Route::get('/create/equipo', [EquipoController::class, 'create'])->middleware(['auth', 'verified'])->name('create.equipo');

//Editar Equipos
Route::get('/equipos/{idEquipo}/edit', [EquipoController::class, 'edit'])->middleware(['auth', 'verified'])->name('equipos.edit');
Route::put('/equipos/{idEquipo}/update', [EquipoController::class, 'update'])->middleware(['auth', 'verified'])->name('equipos.update');

//Eliminar Equipos
Route::delete('/equipos/delete/{idEquipo}', [EquipoController::class, 'destroy'])->middleware(['auth', 'verified'])->name('equipos.destroy');


/**Crear Materiales */
Route::middleware(['auth', 'verified'])->get('/materiales', ShowMateriales::class)->name('index.materiales');
//Route::get('/materiales', [ShowMateriales::class])->middleware(['auth', 'verified'])->name('index.materiales');
Route::get('/materiales/create', [MaterialesController::class, 'create'])->middleware(['auth', 'verified'])->name('materiales.create');
Route::post('/materiales/store', [MaterialesController::class, 'store'])->middleware(['auth', 'verified'])->name('materiales.store');
Route::get('/materiales/{idMaterial}/edit', [MaterialesController::class, 'edit'])->middleware(['auth', 'verified'])->name('materiales.edit');
Route::put('/materiales/{idMaterial}/update', [MaterialesController::class, 'update'])->middleware(['auth', 'verified'])->name('materiales.update');
Route::delete('/materiales/delete/{idMaterial}', [MaterialesController::class, 'destroy'])->middleware(['auth', 'verified'])->name('materiales.destroy');
Route::get('/materiales/stock/create/{idMaterial}', [MaterialesController::class, 'createStock'])->middleware(['auth', 'verified'])->name('materiales.create.stock');
Route::post('/materiales/stock/create/store/{idMaterial}', [MaterialesController::class, 'storeStock'])->middleware(['auth', 'verified'])->name('materiales.store.stock');
Route::get('/materiales/stock/create/diminish/{idMaterial}', [MaterialesController::class, 'diminishView'])->middleware(['auth', 'verified'])->name('materiales.diminish.stock');
Route::post('/materiales/stock/diminish/store/{idMaterial}', [MaterialesController::class, 'diminishStock'])->middleware(['auth', 'verified'])->name('materiales.diminish.stock.store');

// Perfil
Route::get('/perfil', [UserController::class, 'perfil'])->middleware(['auth', 'verified'])->name('perfil');
Route::post('/perfil/change', [UserController::class, 'changeUser'])->middleware(['auth', 'verified'])->name('perfil.change');

//Usuarios
Route::middleware(['auth', 'verified', 'admin'])->get('/users', ShowUsers::class)->name('users.index');
//Route::get('/users', [ShowPosts::class],'render')->middleware(['auth', 'verified', 'admin'])->name('users.index');
Route::get('/users/create', [UserController::class, 'create'])->middleware(['auth', 'verified', 'admin'])->name('users.create');
Route::delete('/users/delete/{idUser}', [UserController::class, 'destroy'])->middleware(['auth', 'verified', 'admin'])->name('users.destroy');

require __DIR__ . '/auth.php';
