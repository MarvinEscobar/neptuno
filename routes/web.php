<?php
Route::get('/','PagesController@home');

Route::get('/registro', 'PagesController@showForm')->name('registro.showForm');
Route::post('/registro','PagesController@store')->name('registro.store');
Route::get('/login','PagesController@login');

//Route::resource('usuarios', 'CrudController');