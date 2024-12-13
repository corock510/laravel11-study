<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TopController;
use App\Livewire\TopCounter;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/top', [TopController::class, 'show']);
Route::get('/counter', TopCounter::class);
