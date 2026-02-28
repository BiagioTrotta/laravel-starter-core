<?php

use App\Http\Controllers\PageController;
use Illuminate\Support\Facades\Route;

// Rotta Homepage
Route::get('/', [PageController::class, 'index'])->name('homepage');
