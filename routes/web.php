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
})->name('welcome');

Route::group(['namespace' => 'App'], function() {
    Route::get('/about','Aboutcontroller@index')->name('pages.about');

    Route::group(['prefix' => '/contact'],function (){
        Route::get('/','ContactController@index')->name('contact.index');
        Route::get('/all','ContactController@getData')->name('contact.getData');
        Route::get('/all/{id}','ContactController@showData')->name('contact.showData');
    });
});

Auth::routes();

Route::group(['middleware' => ['auth','admin'],'namespace' => 'Admin','prefix' => '/admin'],function(){
        Route::get('/','IndexController@index')->name('index');

        Route::get('/users','UserController@users')->name('users');
        Route::get('/user-edit/{id}','UserController@EditUser')->name('editUser');
        Route::post('/user-update/{id}','UserController@UpdateUser')->name('updateUser');
        Route::get('/user-delete/{id}','UserController@DeleteUser')->name('deleteUser');

        Route::get('/create','DashboardController@create')->name('create');
        Route::post('/submit','DashboardController@submit')->name('submit');
        Route::get('/dashboard', 'DashboardController@index')->name('dashboard'); 
        Route::get('/contact-edit/{id}', 'DashboardController@EditFeed')->name('editFeed'); 
        Route::post('/contact-update/{id}', 'DashboardController@UpdateFeed')->name('updateFeed'); 
        Route::get('/contact-delete/{id}', 'DashboardController@DeleteFeed')->name('deleteFeed');
});

Route::group(['middleware' => 'auth','namespace' => 'User','prefix' => '/user'],function(){
    Route::get('/','IndexController@user')->name('index');
    Route::get('/update','IndexController@update')->name('update');
    Route::post('/submit','IndexController@submit')->name('submit');

});
