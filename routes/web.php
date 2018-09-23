<?php


Route::get('/','TestController@index');

Auth::routes();
Route::get('/home', 'HomeController@index')->name('home');
Route::get('/admin/products','ProductController@index'); // listado
Route::get('/admin/products/create','ProductController@create'); // formulario
Route::post('/admin/products','ProductController@store'); // registrar db.
