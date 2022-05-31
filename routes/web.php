<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AppController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\AuthController;

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

//Auth
Route::get('acceder', [AuthController::class, 'acceder'])->name('acceder');

//Back-end Home
Route::get('admin/home', [AdminController::class, 'index'])->name('admin');

