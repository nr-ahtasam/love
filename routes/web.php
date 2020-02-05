<?php











Route::get('/user/information','InformationController@index');
Route::post('/user/information/create','InformationController@create')->name('information_create');


Route::get('/user/information/list','InformationController@information_list')->name('information_list');























Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::post('/product', 'ProductController@insert');
