<?php

Route::get('/', 'PagesController@home');

Route::get('/registro', 'PagesController@registro');

Route::get('/login', 'PagesController@login')->name('auth.login');

Route::get('/login', function()
{
	return 'pagina de login';
})->name('auth.login');


Route::get('/contacto', 'ContactController@showForm');

Route::post('/contacto', 'ContactController@store')->name('contacto.store');

