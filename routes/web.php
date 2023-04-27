<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TareaController;

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

Route::get('tarea/{tarea}/ver', [TareaController::class, 'show'])->name('tarea.show');
Route::get('tarea/registrar', [TareaController::class, 'create'])->name('tarea.create');
Route::post('tarea/guardar', [TareaController::class,'store'])->name('tarea.store');
Route::get('tarea/listar', [TareaController::class,'index'])->name('tarea.index');
Route::get('tarea/vista', [TareaController::class,'inndextarea'])->name('tarea.inndextarea');
Route::get('tarea/{tarea}/editar', [TareaController::class,'edit'])->name('tarea.edit');
Route::put('tarea/{tarea}/actualizar', [TareaController::class,'update'])->name('tarea.update');
Route::delete('tarea/{tarea}/eliminar',[TareaController::class,'destroy'])->name('tarea.destroy');
Route::get('tarea/asistencia', [TareaController::class,'asis'])->name('tarea.asis');
