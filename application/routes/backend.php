<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Backend\SocialAuthController;
use App\Http\Controllers\Backend\JobCategoryController;

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


Route::controller(JobCategoryController::class)->group(function(){

    Route::get('/backend/job-categories', 'index')->name('backend.job.categories');
    Route::post('/backend/job-categories/store', 'store')->name('backend.job.categories.store');
    Route::post('/autocategories', 'autocategories')->name('autocategories');

});
