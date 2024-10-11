<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TaskController;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/',[TaskController::class,'fetchAllTasks'])->name('index');

Route::get('/create',[TaskController::class,'createTask'])->name('create');

Route::post('/addTask',[TaskController::class,'addTask'])->name('addTask');

Route::get('/done/{id}',[TaskController::class,'doneTask'])->name('done');

Route::get('edit/{id}',[TaskController::class,'editTask'])->name('edit');

Route::put('updateTask/{id}',[TaskController::class,'updateTask'])->name('updateTask');

Route::delete('delete/{id}',[TaskController::class,'deleteTask'])->name('delete');