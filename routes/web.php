<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TareaController;
use App\Http\Controllers\AlumnosController;

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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';

Route::get('tarea/{tarea}/ver', [TareaController::class, 'show'])->name('Tarea.show');
Route::get('tarea/registrar', [TareaController::class, 'create'])->name('Tarea.create');
Route::post('tarea/guardar', [TareaController::class,'store'])->name('Tarea.store');
Route::get('tarea/listar', [TareaController::class,'index'])->name('Tarea.index');
Route::get('tarea/vista', [TareaController::class,'inndextarea'])->name('Tarea.inndextarea');
Route::get('tarea/{tarea}/editar', [TareaController::class,'edit'])->name('Tarea.edit');
Route::put('tarea/{tarea}/actualizar', [TareaController::class,'update'])->name('Tarea.update');
Route::delete('tarea/{tarea}/eliminar',[TareaController::class,'destroy'])->name('Tarea.destroy');
Route::get('tarea/asistencia', [TareaController::class,'asis'])->name('Tarea.asis');
Route::post('alumnos/guardar', [AlumnosController::class, 'store'])->name('Alumnos.store');
Route::get('alumnos/listar', [AlumnosController::class,'index'])->name('Asis.list');
//
