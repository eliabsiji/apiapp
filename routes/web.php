<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DashboardController;
use App\Http\controllers\StyleController;
use App\Http\controllers\ClientController;
use App\Http\controllers\StyleparameterController;
use App\Http\controllers\ParameterController;
use App\Http\controllers\AddparameterController;
use App\Http\controllers\projectController;




Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('/dashboard',[DashboardController::class, 'index'])->name('dashboard');
// Style Settings
Route::get('/stylesettings',[StyleController::class, 'index'])->name('style');
Route::post('/registerstyle',[StyleController::class, 'savestyle'])->name('registerstyle');
Route::get('/stylesparametersettings',[StyleparameterController::class, 'index'])->name('styleparameter');
Route::post('/addstylesparametersettings',[StyleparameterController::class, 'addstyleparameter'])->name('styleparameter.addstyleparameter');

//parameter settings
Route::get('/parametersettings',[ParameterController::class, 'index'])->name('parameter');
Route::post('/createparameter',[ParameterController::class, 'saveparameter'])->name('createparameter');
Route::get('/addparameters/{styleid}',[AddparameterController::class, 'index'])->name('addparameters');


Route::post('/registerparameter',[StyleParameterController::class, 'savestyleparameter'])->name('registerstyleparameter');

// Clients
Route::get('/client',[ClientController::class, 'index'])->name('client');
Route::get('/clientstyle',[ClientController::class, 'clientstyle'])->name('clientstyle');
Route::post('/registerclient',[ClientController::class, 'saveclient'])->name('registerclient');


// Project
Route::get('/project',[ProjectController::class, 'index'])->name('project');
Route::post('/registerproject',[ProjectController::class, 'saveproject'])->name('registerproject');
// Route::get('/register',[RegisterController::class, 'register'])->name('register');
// Route::post('/submitregister',[RegisterController::class, 'submit'])->name('submitregister');

