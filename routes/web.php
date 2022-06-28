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



Auth::routes();

Route::get('/', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/facility/{id}', [App\Http\Controllers\HomeController::class, 'facility'])->name('facility');
Route::get('/suscriptions', [App\Http\Controllers\HomeController::class, 'suscriptions'])->name('suscriptions');
Route::get('/bookings', [App\Http\Controllers\HomeController::class, 'bookings'])->name('bookings');
Route::get('/classes', [App\Http\Controllers\HomeController::class, 'classes'])->name('classes');
Route::get('/dashboard', [App\Http\Controllers\HomeController::class, 'dashboard'])->name('dashboard');

// crear una instalacion
Route::post('/facility/crear', [App\Http\Controllers\HomeController::class, 'crearFacility'])->name('crearFacility');
// crear una reserva
Route::post('/facility/{id}', [App\Http\Controllers\HomeController::class, 'crearFacility_Booking'])->name('crearFacility_Booking');
// eliminar restaurante
Route::get('/facility/{id}/eliminar',  [App\Http\Controllers\HomeController::class, 'eliminarFacility'])->name('eliminarFacility');

// editar perfil usuario
Route::post('/profile',  [App\Http\Controllers\HomeController::class, 'editProfile'])->name('editProfile');
