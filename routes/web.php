<?php

use App\Http\Controllers\Admin\UsersController;
use App\Http\Controllers\PageController;
use Illuminate\Support\Facades\Route;

// Rotta Homepage
Route::get('/', [PageController::class, 'index'])->name('homepage');

//Pannello Admin
Route::middleware(['auth', 'admin'])
    ->prefix('admin')
    ->name('admin.')
    ->group(function () {

        Route::get('/users', [UsersController::class, 'index'])
            ->name('users.index');

    });
