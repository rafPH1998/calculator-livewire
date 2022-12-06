<?php

use App\Http\Livewire\Todo;
use Illuminate\Support\Facades\Route;


Route::get('/', Todo::class);

Route::view('calculator', 'welcome');


