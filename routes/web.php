<?php

use Illuminate\Support\Facades\Route;
use App\Http\Livewire\Counter;
use App\Livewire\ShowTweets;

Route::get('/', function () {
    return view('welcome');
});

// Exemplo Counter Tutorial Livewire Documentação
Route::get('/counter', function () {
    return view('counter-page');
});

Route::get('/tweets', ShowTweets::class);
