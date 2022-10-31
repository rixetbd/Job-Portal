<?php

use App\Http\Controllers\CustomAuthController;
use App\Http\Controllers\Frontend\BasicController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
*/
Route::post('/custom/login', [CustomAuthController::class, 'custom_login'])->name('custom.login');

Route::controller(BasicController::class)->group(function(){

    Route::get('/', 'index')->name('frontend.index');
    Route::get('/contact', 'contact')->name('frontend.contact');
    Route::get('/2', function(){
        return view('frontend.index2');
    });
});

