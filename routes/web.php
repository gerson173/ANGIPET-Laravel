<?php

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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('/users/create', [App\Http\Controllers\UserController::class, 'create']);
Route::get('/mascota/create', [App\Http\Controllers\MascotaController::class, 'create'])->name('mascota.create');
Route::post('/users', [App\Http\Controllers\UserController::class, 'store'])->name('users.store');
Route::post('/mascota', [App\Http\Controllers\MascotaController::class, 'store'])->name('mascota.store');
Route::get('/mascota', [App\Http\Controllers\MascotaController::class, 'index'])->name('mascota.index');
Route::get('/mascota/{mascota}', [App\Http\Controllers\MascotaController::class, 'show'])->name('mascota.show');
Route::get('/users/{user}/edit', [App\Http\Controllers\UserController::class, 'edit'])->name('users.edit');
Route::put('/users/{user}', [App\Http\Controllers\UserController::class, 'update'])->name('users.update');