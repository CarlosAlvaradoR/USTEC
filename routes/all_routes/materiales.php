<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MaterialesController;
use App\Http\Livewire\ShowMateriales;

/**Crear Materiales */
Route::middleware(['auth', 'verified','adminemployees'])->get('/materiales', ShowMateriales::class)->name('index.materiales');
//Route::get('/materiales', [ShowMateriales::class])->middleware(['auth', 'verified'])->name('index.materiales');
Route::get('/materiales/create', [MaterialesController::class, 'create'])->middleware(['auth', 'verified','adminemployees'])->name('materiales.create');
Route::post('/materiales/store', [MaterialesController::class, 'store'])->middleware(['auth', 'verified', 'adminemployees'])->name('materiales.store');
Route::get('/materiales/{idMaterial}/edit', [MaterialesController::class, 'edit'])->middleware(['auth', 'verified', 'adminemployees'])->name('materiales.edit');
Route::put('/materiales/{idMaterial}/update', [MaterialesController::class, 'update'])->middleware(['auth', 'verified', 'adminemployees'])->name('materiales.update');
Route::delete('/materiales/delete/{idMaterial}', [MaterialesController::class, 'destroy'])->middleware(['auth', 'verified', 'adminemployees'])->name('materiales.destroy');
Route::get('/materiales/stock/create/{idMaterial}', [MaterialesController::class, 'createStock'])->middleware(['auth', 'verified', 'adminemployees'])->name('materiales.create.stock');
Route::post('/materiales/stock/create/store/{idMaterial}', [MaterialesController::class, 'storeStock'])->middleware(['auth', 'verified', 'adminemployees'])->name('materiales.store.stock');
Route::get('/materiales/stock/create/diminish/{idMaterial}', [MaterialesController::class, 'diminishView'])->middleware(['auth', 'verified', 'adminemployees'])->name('materiales.diminish.stock');
Route::post('/materiales/stock/diminish/store/{idMaterial}', [MaterialesController::class, 'diminishStock'])->middleware(['auth', 'verified', 'adminemployees'])->name('materiales.diminish.stock.store');