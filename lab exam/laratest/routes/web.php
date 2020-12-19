<?php



Route::get('/', function () {
    return view('welcome');
});

Route::get('/login', 'loginController@index');
Route::post('/login', 'loginController@verify');


Route::get('/registration', function () {
    return view('registration');
});

Route::get('/home', 'homeController@index');










    