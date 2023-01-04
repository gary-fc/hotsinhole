<?php

use App\Http\Controllers\Auth\AuthController;
use App\Http\Controllers\Country\CountryController;
use App\Http\Controllers\Home\HomeController;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('locale/{locale}', function ($locale) {
    session()->put('locale', $locale);
    return Redirect::back();
})->name('localization.set');

Route::domain('{subdomain}.' . env('APP_URL'))->group(function () {

    Route::group(['prefix' => 'auth'], function () {
        Route::get('login', [AuthController::class, 'createLogin'])->name('createLogin');
        Route::post('login', [AuthController::class, 'login'])->name('login');
        Route::get('register', [AuthController::class, 'createRegister'])->name('createRegister');
        Route::post('register', [AuthController::class, 'register'])->name('register');
        Route::get('logout', [AuthController::class, 'logout'])->name('logout');
    });

    Route::get('/', [HomeController::class, 'index'])->name('home');
    Route::get('/{category}', [CountryController::class, 'category'])->name('category');
    Route::get('/{category}/{city}', [CountryController::class, 'categoryCity'])->name('categoryCity');
});

Route::get('/', [HomeController::class, 'index']);




