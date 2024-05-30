<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Demo\DemoController;

Route::get('/', function () {
    return view('welcome');
});

Route::controller(DemoController::class)->group(function(){
    Route::get('/about','Index');
    Route::get('/contact','CIndex')->name('contact.page');
    Route::get('/random','RIndex');
});
