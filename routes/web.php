<?php

use Illuminate\Support\Facades\Route;
use App\Livewire\Counter;
use App\Livewire\ShowTweets;

Route::get('/', function () {
    return view('welcome');
});

// Exemplo Counter Tutorial Livewire Documentação
Route::get('/counter', function () {
    return view('counter-page');
});

Route::get('/tweets', ShowTweets::class);

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified',
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
});
