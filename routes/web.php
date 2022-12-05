<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;


Route::get('/', function () {
    return view('welcome');
});

Route::get('/todos', function () {
    echo 'opa';
});


require __DIR__.'/auth.php';
