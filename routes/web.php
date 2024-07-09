<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DashboardController;
use App\Http\controllers\StyleController;
use App\Http\controllers\ClientController;
use App\Http\controllers\StyleparameterController;
use App\Http\controllers\ParameterController;
use App\Http\controllers\AddparameterController;
use App\Http\controllers\projectController;
use App\Http\controllers\ClientContactController;




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
Route::get('/editstyle/{id}',[StyleController::class, 'editstyle'])->name('editstyle');
Route::get('/deletestyle/{id}',[StyleController::class, 'deletestyle'])->name('deletestyle');
Route::post('/updatestyle',[StyleController::class, 'updatestyle'])->name('updatestyle');



//parameter settings
Route::get('/parametersettings',[ParameterController::class, 'index'])->name('parameter');
Route::post('/createparameter',[ParameterController::class, 'saveparameter'])->name('createparameter');
Route::get('/addparameters/{styleid}',[AddparameterController::class, 'index'])->name('addparameters');
Route::get('/editparameter/{id}',[ParameterController::class, 'editparameter'])->name('editparameter');
Route::get('/deleteparameter/{id}',[ParameterController::class, 'deleteparameter'])->name('deleteparameter');
Route::post('/updateparameter',[ParameterController::class, 'updateparameter'])->name('updateparameter');


Route::post('/registerparameter',[StyleParameterController::class, 'savestyleparameter'])->name('registerstyleparameter');

// Clients
Route::get('/client',[ClientController::class, 'index'])->name('client');
Route::get('/clientstyle/{id}',[ClientController::class, 'clientstyle'])->name('clientstyle');
Route::post('/registerclient',[ClientController::class, 'saveclient'])->name('registerclient');
Route::post('/measurement',[ClientController::class, 'measurement'])->name('clientmeasurement');
Route::get('/editclient/{id}',[ClientController::class, 'editclient'])->name('editclient');
Route::get('/deleteclient/{id}',[ClientController::class, 'deleteclient'])->name('deleteclient');
Route::post('/updateclient',[ClientController::class, 'updateclient'])->name('updateclient');

//Clients Contact
Route::get('/contact',[ClientContactController::class, 'index'])->name('clientcontact');



// Project
Route::get('/project',[ProjectController::class, 'index'])->name('project');
Route::post('/registerproject',[ProjectController::class, 'saveproject'])->name('registerproject');
// Route::get('/register',[ClientController::class, 'register'])->name('register');
// Route::post('/submitregister',[ClientController::class, 'submit'])->name('submitregister');


Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
