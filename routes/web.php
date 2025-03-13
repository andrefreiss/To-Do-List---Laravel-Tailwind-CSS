<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TodoController;


Route::get('/', [TodoController::class, 'index']);
Route::post('/', [TodoController::class, 'store']);
Route::patch('/toggle/{id}', [TodoController::class, 'toggleStatus'])->name('todos.complete');
Route::delete('/{todo}', [TodoController::class, 'destroy'])->name('todos.destroy');