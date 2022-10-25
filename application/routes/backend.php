<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Backend\SocialAuthController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
*/

Route::controller(SocialAuthController::class)->group(function(){
    Route::get('/google/login', 'login_google')->name('login.google');
    Route::get('/login/google/callback', 'callback_google')->name('callback.google');
    Route::get('/facebook/login', 'login_facebook')->name('login.facebook');
    Route::get('/login/facebook/callback', 'callback_facebook')->name('callback.facebook');
});

