<?php

use App\Http\Controllers\ActivitieController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\CsrController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ServiceController;
use Illuminate\Support\Facades\Route;


Route::get('/', [HomeController::class, 'index'])->name('home');
Route::resource('contact', ContactController::class);
Route::resource('activities', ActivitieController::class);
Route::resource('csr', CsrController::class);
Route::resource('service', ServiceController::class);



