<?php

use App\Http\Controllers\Auth\AuthController;
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

Route::domain('{subdomain}.' . env('APP_URL'))->group(function () {

    Route::get('/', function ($subdomain) {
        dd($subdomain);
    });

    Route::group(['prefix' => 'auth'], function () {
        Route::get('login', [AuthController::class, 'loginView'])->name('loginView');
    });
});

Route::get('/', function () {
    return view('welcome');
});


Route::get('locale/{locale}', function ($locale) {
    session()->put('locale', $locale);
    return Redirect::back();
})->name('localization.set');

