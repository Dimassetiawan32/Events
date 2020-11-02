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

Route::group(['prefix' => 'kegiatan'], function(){
    Route::get('index', 'KegiatanController@index')->name('backend.kegiatan.index');
    Route::get('create', 'KegiatanController@create')->name('backend.kegiatan.create');
    Route::post('save','KegiatanController@store')->name('kegiatan.save'); 
    Route::get('formEdit/{kegiatan}','KegiatanController@edit')->name('backend.kegiatan.formEdit');
    Route::patch('update/{kegiatan}','KegiatanController@update')->name('backend.kegiatan.update');
    Route::delete('delete/{kegiatan}','KegiatanController@destroy')->name('backend.kegiatan.delete');

});

Route::group(['prefix' => 'users'], function(){
    Route::get('index', 'User\UserController@index')->name('users');
}); 

Route::group(['prefix' => 'registers'], function(){
    Route::get('index', 'Register\RegisterController@index')->name('registers');
    Route::get('ambil-formulir', 'Register\RegisterController@create')->name('registers.ambil-formulir');
    Route::get('show', 'Register\RegisterController@show')->name('registers.show');
});