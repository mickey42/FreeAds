<?php

use Illuminate\Http\Request;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|


// Authentication Routes...
Route::prefix('connexion')->group(function () {
    Route::get('/', 'Auth\LoginController@showLoginForm')->name('login');
    Route::post('/', 'Auth\LoginController@login');
});
Route::post('deconnexion', 'Auth\LoginController@logout')->name('logout');
// Registration Routes...
Route::prefix('enregistrement')->group(function () {
    Route::get('/', 'Auth\RegisterController@showRegistrationForm')->name('register');
    Route::post('/', 'Auth\RegisterController@register');
});
// Password Reset Routes...
Route::prefix('passe')->group(function () {
    Route::get('change', 'Auth\ForgotPasswordController@showLinkRequestForm')->name('password.request');
    Route::post('email', 'Auth\ForgotPasswordController@sendResetLinkEmail')->name('password.email');
    Route::get('change/{token}', 'Auth\ResetPasswordController@showResetForm')->name('password.reset');
    Route::post('change', 'Auth\ResetPasswordController@reset')->name('password.update');
});*/

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});