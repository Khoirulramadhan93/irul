<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\KakiController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\MesinController;

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

Route::get('/home', [HomeController::class, 'index'])->name('home');
Route::get('/mesin', [MesinController::class, 'mesin'])->name('mesin');
Route::get('/kaki', [HomeController::class, 'kaki'])->name('kaki');
Route::get('/tambah', [MesinController::class, 'tambah'])->name('tambah');
Route::get('/dashboard', [HomeController::class, 'dashboard'])->name('dashboard');
Route::get('/bengkel', [HomeController::class, 'bengkel'])->name('bengkel');



Route::post('/post', [PostController::class, 'post'])->name('post');

Route::get('/delete/{id}', [PostController::class, 'delete'])->name('delete');

