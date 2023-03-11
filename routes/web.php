<?php
use App\Http\Controllers\FormularioController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\FormulariodosController;
use App\Http\Controllers\ProfileController;
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


Route::get('/', HomeController::class )->name('home');

Route::get('/dashboard', [FormularioController::class, 'index'])->middleware(['auth', 'verified'])->name('Formulario.index');


Route::get('/Formulario/caracterizacion', [FormularioController::class, 'show'])->middleware(['auth', 'verified'])->name('Formulario.caracterizacion');
Route::get('/Formulario/create', [FormularioController::class, 'create'])->middleware(['auth', 'verified'])->name('Formulario.create');


Route::get('/Formulario/Asociativa-create', [FormulariodosController::class, 'create'])->middleware(['auth', 'verified'])->name('Asociativa.create');
Route::get('/Formulario/Asociativa-index', [FormulariodosController::class, 'show'])->middleware(['auth', 'verified'])->name('Asociativa.index');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
