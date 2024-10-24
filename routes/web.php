<?php

use Illuminate\Support\Facades\Route;
use App\Http\Livewire\Counter;

Route::get('/', function () {
    return view('welcome');
});

// Exemplo Counter Tutorial Livewire Documentação
Route::get('/counter', function () {
    return view('counter-page');
});
