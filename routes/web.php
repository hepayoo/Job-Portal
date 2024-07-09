<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Front\HomeController;
use App\Http\Controllers\Front\CompanyController;
use App\Http\Controllers\Front\OffreController;

Route::get('/', [HomeController::class, 'index'])->name('front.Home');
Route::get('/company/login', [CompanyController::class, 'login'])->name('company.login');
Route::post('/company/doLogin', [CompanyController::class, 'doLogin'])->name('company.doLogin');

Route::get('/company/preconnect', [CompanyController::class, 'preconnect'])->name('company.preconnect');
Route::post('/company/connect', [CompanyController::class, 'connect'])->name('company.connect');

Route::get('/company/dashboard', [CompanyController::class, 'dashboard'])->name('company.dashboard')->middleware('auth:company');
Route::get('login', function() {
    return redirect()->route('company.dashboard');
})->name('dashboard');


Route::middleware('auth:company')->prefix('company')->name('company.')->group(function () {
    Route::resource('offres', OffreController::class);

});

require __DIR__.'/auth.php';