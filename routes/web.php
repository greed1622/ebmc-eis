<?php

use App\Livewire\Test;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});
Auth::routes();


Route::middleware(['auth', 'check.role:patient'])->group(function () {
    Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

});

Route::middleware(['auth', 'check.role:admin'])->group(function(){
    Route::get('/test', Test::class);
});