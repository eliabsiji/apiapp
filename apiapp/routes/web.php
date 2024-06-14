<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DashboardController;
use App\Http\controllers\StyleController;
use App\Http\controllers\ClientController;
use App\Http\controllers\StyleparameterController;
use App\Http\controllers\projectController;




Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('/dashboard',[DashboardController::class, 'index'])->name('dashboard');
Route::get('/style',[StyleController::class, 'style'])->name('style');
Route::post('/registerstyle',[StyleController::class, 'savestyle'])->name('registerstyle');
Route::get('/client',[ClientController::class, 'index'])->name('client');
Route::post('/registerclient',[ClientController::class, 'saveclient'])->name('registerclient');
Route::get('/styleparameter',[StyleparameterController::class, 'index'])->name('styleparameter');
Route::get('/project',[ProjectController::class, 'index'])->name('project');
// Route::get('/register',[RegisterController::class, 'register'])->name('register');
// Route::post('/submitregister',[RegisterController::class, 'submit'])->name('submitregister');

