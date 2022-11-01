<?php

use App\Http\Controllers\CandidateController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;


Route::prefix('candidate')->controller(CandidateController::class)->group(function(){

    Route::post('/store', 'store')->name('candidate.store');
    Route::get('/profile/{id}', 'profile')->name('candidate.profile');


});
