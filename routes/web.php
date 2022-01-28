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

Auth::guest();

Route::get('/', 'GuestController@background');
Route::get('/herbs', 'GuestController@herbs')->name('herbs');


Auth::routes();

//Route for normal user
Route::group(['middleware' => ['auth']], function () {
    Route::get('/home', 'HomeController@profile')->name('home');
    Route::post('/home/update/{id}', 'HomeController@update')->name('update-profile');
});

//Route for admin
Route::group(['prefix' => 'admin'], function () {

    Route::group(['middleware' => ['admin']], function () {
        Route::get('/dashboard', 'admin\AdminController@index')->name('admin');

        //herb
        Route::group(['prefix' => 'herbs'], function () {
            Route::get('/', 'HerbController@index')->name('herb');
            Route::get('add', 'HerbController@add')->name('add-herb');
            Route::post('create', 'HerbController@create')->name('create-herb');
            Route::post('edit/{id}', 'HerbController@update')->name('update-herb');
            Route::get('edit/{id}', 'HerbController@edit')->name('edit-herb');
            Route::get('delete/{id}', 'HerbController@delete');
        });


        //Content
        Route::group(['prefix' => 'contents'], function () {
            Route::get('/', 'ContentController@index')->name('content');
            Route::get('add', 'ContentController@add')->name('add-content');
            Route::post('create', 'ContentController@create')->name('create-content');
            Route::get('edit/{id}', 'ContentController@edit')->name('edit-content');
            Route::post('edit/{id}', 'ContentController@update')->name('update-content');
            Route::get('delete/{id}', 'ContentController@delete');
        });
        //Background
        Route::group(['prefix' => 'background'], function () {
            Route::get('/', 'BackgroundController@index')->name('background');
            Route::get('add', 'BackgroundController@add')->name('add-background');
            Route::post('create', 'BackgroundController@create')->name('create-background');
            Route::get('edit/{id}', 'BackgroundController@edit')->name('edit-background');
            Route::post('edit/{id}', 'BackgroundController@update')->name('update-background');
            Route::get('delete/{id}', 'BackgroundController@delete');
        });


        //User
        Route::group(['prefix' => 'users'], function () {
            Route::get('/', 'admin\AdminController@user')->name('user');
            Route::post('edit/{id}', 'admin\AdminController@status_update')->name('update-user');
        });


        Route::get('chat', function () {
            return view('admin/chat');
        })->name('chat');
    });
});
