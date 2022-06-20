<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AppController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\ProjectosController;

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

//Front-end
Route::get('/', [AppController::class, 'index'])->name('home');
Route::get('portfolio', [AppController::class, 'portfolio'])->name('portfolio');
Route::get('portfolio/{proyecto}', [AppController::class, 'proyecto'])->name('proyecto');
Route::get('roadmap', [AppController::class, 'roadmap'])->name('roadmap');
Route::get('contact', [AppController::class, 'contact'])->name('contact');
Route::post('contact', [AppController::class, 'enviar'])->name('enviar');

//Back-end
Route::get('admin', [AdminController::class, 'index'])->name('admin');
Route::get('admin/proyectos', [ProjectosController::class, 'index'])->middleware('role:proyectos');
Route::get('admin/proyectos/crear', [ProjectosController::class, 'crear'])->middleware('role:proyectos');
Route::post('admin/proyectos/guardar', [ProjectosController::class, 'guardar'])->middleware('role:proyectos');
Route::get('admin/proyectos/editar/{id}', [ProjectosController::class, 'editar'])->middleware('role:proyectos');
Route::post('admin/proyectos/actualizar/{id}', [ProjectosController::class, 'actualizar'])->middleware('role:proyectos');
Route::get('admin/proyectos/activar/{id}', [ProjectosController::class, 'activar'])->middleware('role:proyectos');
Route::get('admin/proyectos/home/{id}', [ProjectosController::class, 'home'])->middleware('role:proyectos');
Route::get('admin/proyectos/borrar/{id}', [ProjectosController::class, 'borrar'])->middleware('role:proyectos');


//Auth
Route::get('acceder', [AuthController::class, 'acceder'])->name('acceder');
Route::post('autenticar', [AuthController::class, 'autenticar'])->name('autenticar');
Route::post('salir', [AuthController::class, 'salir'])->name('salir');

