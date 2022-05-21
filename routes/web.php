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

Route::get('/', \App\Http\Livewire\Authentication::class);

Route::get('login/', [\App\Http\Livewire\Authentication::class, 'login'])->name('login.google');
Route::get('login/google/callback', [\App\Http\Livewire\Authentication::class, 'login']);

