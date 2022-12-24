<?php

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

Route::group(['namespace' => 'App\Http\Controllers'], function()
{
    /**
     * Home Routes
     */
    Route::get('/', 'HomeController@index')->name('home.index');

    Route::group(['middleware' => ['guest']], function() {
        /**
         * Register Routes
         */
        Route::get('/register', 'RegisterController@show')->name('register');
        Route::post('/register', 'RegisterController@register')->name('register.perform');

        /**
         * Login Routes
         */
        Route::get('/login', 'LoginController@show')->name('login');
        Route::post('/login', 'LoginController@login')->name('login.perform');

    });

    Route::group(['middleware' => ['auth', 'permission']], function() {
        /**
         * Logout Routes
         */
        Route::get('/logout', 'LogoutController@perform')->name('logout.perform');

        /**
         * User Routes
         */
        Route::group(['prefix' => 'users'], function() {
            Route::get('/', 'UserController@index')->name('users.index');
            Route::get('/create', 'UserController@create')->name('users.create');
            Route::post('/create', 'UserController@store')->name('users.store');
            Route::get('/{user}/show', 'UserController@show')->name('users.show');
            Route::get('/{user}/edit', 'UserController@edit')->name('users.edit');
            Route::patch('/{user}/update', 'UserController@update')->name('users.update');
            Route::delete('/{user}/delete', 'UserController@destroy')->name('users.destroy');
        });

        /**
         * User Routes
         */
        Route::group(['prefix' => 'facilities'], function() {
            Route::get('/', 'FacilityController@index')->name('facilities.index');
            Route::get('/list', 'FacilityController@list')->name('facilities.list');
            Route::get('/create', function() {
                return view('facilities.create');
            })->name('facilities.create');
            Route::post('/create', 'FacilityController@store')->name('facilities.store');
            Route::get('/{facility}/detail', 'FacilityController@detail')->name('facilities.detail');
            Route::get('/{facility}/edit', 'FacilityController@edit')->name('facilities.edit');
            Route::patch('/{facility}/update', 'FacilityController@update')->name('facilities.update');
            Route::delete('/{facility}/delete', 'FacilityController@destroy')->name('facilities.destroy');
        });

        Route::group(['prefix' => 'requests'], function() {
            Route::get('/', 'RequestController@index')->name('requests.index');
            Route::get('/list', 'RequestController@list')->name('requests.list');
            Route::get('/create', 'RequestController@create')->name('requests.create');
            Route::post('/create', 'RequestController@store')->name('requests.store');
            Route::patch('/{request}/approve', 'RequestController@approve')->name('requests.approve');
            Route::patch('/{request}/reject', 'RequestController@reject')->name('requests.reject');
            Route::delete('/{request}/delete', 'RequestController@destroy')->name('requests.destroy');
        });

        Route::delete('/deleteimage/{id}', 'RequestController@deleteimage')->name('images.destroy');
    });
});
