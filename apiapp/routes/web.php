<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DashboardController;
use App\Http\controllers\StyleController;




Route::get('/dashboard',[DashboardController::class, 'index'])->name('dashboard');

Route::get('/style',[StyleController::class, 'style'])->name('style');
