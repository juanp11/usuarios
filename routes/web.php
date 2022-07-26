<?php

use App\Http\Controllers\UsuariosController;
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

Route::get('/usuarios',[UsuariosController::class,'index'])->name('usuarios.index');
Route::get('/add',[UsuariosController::class,'add'])->name('usuarios.add');
Route::get('/edit/{id}',[UsuariosController::class,'edit'])->name('usuarios.edit');
Route::get('/delete/{id}',[UsuariosController::class,'delete'])->name('usuarios.delete');
Route::post('/save',[UsuariosController::class,'save'])->name('usuarios.save');
Route::post('/editsave',[UsuariosController::class,'editsave'])->name('usuarios.editsave');
