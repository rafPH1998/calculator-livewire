<?php

use App\Http\Livewire\Todo;
use Illuminate\Support\Facades\Route;


Route::get('/', Todo::class)->middleware('auth');

Route::view('calculator', 'welcome');


require __DIR__.'/auth.php';