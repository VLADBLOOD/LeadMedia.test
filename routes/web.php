<?php

use Illuminate\Support\Facades\Route;

Route::view('/', 'dashboard')->name('dashboard');

Route::view('login', 'auth.login')->name('login');
Route::post('login', 'AuthController@login')->name('login');

Route::view('registration', 'auth.registration')->name('registration');
Route::post('registration', 'AuthController@registrate')->name('registration');

Route::group(['middleware' => 'auth'], function () {
    Route::get('logout', 'AuthController@logout')->name('logout');

    Route::resources([
        'posts' => PostController::class,
        'tags' => TagController::class,
    ]);
});
