<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Livewire\ShowUsers;

Route::middleware(['auth', 'verified', 'admin'])->get('/users', ShowUsers::class)->name('users.index');
//Route::get('/users', [ShowPosts::class],'render')->middleware(['auth', 'verified', 'admin'])->name('users.index');
Route::get('/users/create', [UserController::class, 'create'])->middleware(['auth', 'verified', 'admin'])->name('users.create');
Route::get('/users/{idUser}/edit', [UserController::class, 'edit'])->middleware(['auth', 'verified','admin'])->name('users.edit');
Route::put('/users/{idUser}/update', [UserController::class, 'update'])->middleware(['auth', 'verified','admin'])->name('users.update');
Route::delete('/users/delete/{idUser}', [UserController::class, 'destroy'])->middleware(['auth', 'verified', 'admin'])->name('users.destroy');