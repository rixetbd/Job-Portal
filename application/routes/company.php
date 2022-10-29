<?php

use App\Http\Controllers\CompanyController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;


Route::prefix('company')->controller(CompanyController::class)->group(function(){

    Route::post('/store', 'store')->name('company.store');

});
