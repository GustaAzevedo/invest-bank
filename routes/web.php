<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Usuarios;

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

Route::get('/', [Usuarios::class, 'index'])->name('usuario.index');

Route::get('/create', [Usuarios::class, 'create'])->name('usuario.create');

Route::post('/store', [Usuarios::class, 'store'])->name('usuario.store');

Route::get('/edit/{usuario}', [Usuarios::class, 'edit'])->name('usuario.edit');

Route::post('/update/{usuario}', [Usuarios::class, 'update'])->name('usuario.update');

Route::get('/delete/{usuario}', [Usuarios::class, 'delete'])->name('usuario.delete');