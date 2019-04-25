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

Route::get('/',function (){
    return view('admin.register');
});

Route::group(['prefix'=>'admin'],function (){
    Route::get('/register','AdminLoginController@register')->name('admin.regiter');
    Route::get('/logout','AdminLoginController@index')->name('admin.logout');
    Route::get('/login','AdminLoginController@index')->name('admin.login');
    Route::post('/login','AdminLoginController@index')->name('admin.login.attempt');


});