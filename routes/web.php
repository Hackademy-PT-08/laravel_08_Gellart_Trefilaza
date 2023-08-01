<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ArticlesController;
use App\Http\Controllers\UserController;


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

Route::get('/', [HomeController::class, 'index'])->name('home.index');

Route::get('/articles/add', [ArticlesController::class, 'create'])->name('articles.create');
Route::post('/articles/add', [ArticlesController::class, 'store'])->name('articles.store');


Route::get('/profile', [UserController::class, 'index'])->name('user.profile')->middleware(['auth', 'verified']);



