<?php

use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\URL;

if (App::environment('production')) {
    URL::forceScheme('https');
}

Route::get('/', \App\Http\Livewire\Authentication::class)->name('authenticate');

Route::get('auth/google', [\App\Http\Livewire\Authentication::class, 'redirectToGoogle'])->name('login.google');
Route::get('login/google/callback', [\App\Http\Livewire\Authentication::class, 'handleGoogleCallback']);

Route::group(['middleware' => 'auth'], function () {
    Route::get('/dashboard', [\App\Http\Livewire\User\Dashboard::class, 'render'])->name('home');
    Route::post('logout/', [\App\Http\Livewire\User\Dashboard::class, 'logout'])->name('logout');
});