<?php
use App\Http\Controllers\HomeController;

use App\Http\Controllers\UserController;

use App\Models\Incidente;
use Illuminate\Support\Facades\Route;

use App\Http\Controllers\SalidaMaterialesController;
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

//Incidentes
require __DIR__ . '/all_routes/incidentes.php';


// Perfil
Route::get('/perfil', [UserController::class, 'perfil'])->middleware(['auth', 'verified'])->name('perfil');
Route::post('/perfil/change', [UserController::class, 'changeUser'])->middleware(['auth', 'verified'])->name('perfil.change');

//************ Salidas Materiales */
Route::get('/salida/materiales/{idSalida}/{opcional}', [SalidaMaterialesController::class, 'index'])->middleware(['auth', 'verified'])->name('salida.materiales.index');
Route::post('/salidas/materiales', [SalidaMaterialesController::class, 'store'])->middleware(['auth', 'verified'])->name('salida.materiales.store');

/********************* */
//Materiales
require __DIR__ . '/all_routes/materiales.php';

//Equipos
require __DIR__ . '/all_routes/equipos.php';

//Usuarios
require __DIR__ . '/all_routes/users.php';

require __DIR__ . '/auth.php';
