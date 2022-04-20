<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AppController;

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
Route::get('projects', [AppController::class, 'projects'])->name('projects');
Route::get('roadmap', [AppController::class, 'roadmap'])->name('roadmap');
Route::get('contact', [AppController::class, 'contact'])->name('contact');

//Back-end
Route::get('admin', [AppController::class, 'index'])->name('admin');
