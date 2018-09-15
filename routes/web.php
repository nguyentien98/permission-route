<?php

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

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::get('/permission-denied', function () {
    return view('permission-failed');
})->name('permission');

Route::group(['middleware' => ['framgia-permission', 'auth'], 'prefix' => 'admin', 'as' => 'admin.'], function () {
    Route::group(['prefix' => 'permission', 'as' => 'permission.'], function () {
        Route::get('/', 'PermissionController@list')->name('list');
        Route::post('/', 'PermissionController@save')->name('save');
    });
    Route::group(['prefix' => 'role', 'as' => 'role.'], function () {
        Route::get('/', 'RoleController@list')->name('list');
        Route::get('/add', 'RoleController@add')->name('add');
        Route::get('/{role}/edit', 'RoleController@edit')->name('edit');
        Route::post('/save', 'RoleController@save')->name('save');
        Route::delete('/{role}/delete', 'RoleController@delete')->name('delete');
    });
    Route::group(['prefix' => 'user', 'as' => 'user.'], function () {
        Route::get('/', 'UserController@list')->name('list');
        Route::get('/add', 'UserController@add')->name('add');
        Route::get('/{user}/edit', 'UserController@edit')->name('edit');
        Route::post('/save', 'UserController@save')->name('save');
        Route::delete('/{user}/delete', 'UserController@delete')->name('delete');
    });
    Route::group(['prefix' => 'post', 'as' => 'post.'], function () {
        Route::get('/', 'PostController@list')->name('list');
        Route::get('/add', 'PostController@add')->name('add');
        Route::get('/{post}/edit', 'PostController@edit')->name('edit');
        Route::post('/save', 'PostController@save')->name('save');
        Route::delete('/{post}/delete', 'PostController@delete')->name('delete');
    });
});
