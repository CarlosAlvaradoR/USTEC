<?php

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

//incidentes
Route::get('/incidentes/create/{tipo}', [IncidenteController::class, 'create'])->middleware(['auth', 'verified'])->name('incidentes.create');



require __DIR__ . '/auth.php';
