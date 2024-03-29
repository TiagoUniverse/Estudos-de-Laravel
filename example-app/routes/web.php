<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\ClientesController;
use Illuminate\Support\Facades\Route;

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

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('inicio');



Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');


Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');


    Route::get('clientes', [ClientesController::class, 'index'])->name('clientes');
    Route::get('clientes/novo', [ClientesController::class, 'novo'])->name('novoCliente');
    Route::get('clientes/{cliente}/editar', [ClientesController::class, 'editar'])->name('editarCliente');
    Route::post('clientes/salvar', [ClientesController::class, 'salvar'])->name('salvarCliente');
    Route::patch('clientes/{cliente}', [ClientesController::class, 'atualizar'])->name('atualizarCliente');
    Route::delete('clientes/{cliente}', [ClientesController::class, 'deletar'])->name('deletarCliente');
});


require __DIR__ . '/auth.php';
