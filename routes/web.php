<?php
//Ruta de acceso al home
//
Route::get ('/', function() {

	return view('welcome');

});




//Route::get('/home','PagesController@index')->name('home');

// //Ruta para enviar a mostrar el formulario
// Route::get('/registro', 'PagesController@showForm')->name('registro.showForm');

// //Ruta para enviar a validar los campos del formulario
// Route::post('/registro','PagesController@val')->name('registro.val');

// //Ruta para validar los campos del login y el acceso al CRUD
// Route::get('/login','PagesController@showLogin')->name('login.showLogin');

// Route::post('/login','PagesController@vallog')->name('auth.login')->middleware("idrol");

// //Ruta para administrar los recursos
// Route::resource('usuarios', 'CrudController');
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');


Route::middleware(['auth'])->group(function(){

//Roles
//
Route::post('roles/store', 'RoleController@store')->name('roles.store')->middleware('permission:roles.create');

Route::get('roles', 'RoleController@index')->name('roles.index')->middleware('permission:roles.index');

Route::get('roles/create', 'RoleController@create')->name('roles.create')->middleware('permission:roles.create');

Route::put('roles/{role}', 'RoleController@update')->name('roles.update')->middleware('permission:roles.edit');

Route::get('roles/{role}', 'RoleController@show')->name('roles.show')->middleware('permission:roles.show');

Route::delete('roles/{role}', 'RoleController@destroy')->name('roles.destroy')->middleware('permission:roles.destroy');

Route::get('roles/{role}/edit', 'RoleController@edit')->name('roles.edit')->middleware('permission:roles.edit');

//Products

Route::post('products/store', 'ProductController@store')->name('products.store')->middleware('permission:products.create');

Route::get('products', 'ProductController@index')->name('products.index')->middleware('permission:products.index');

Route::get('products/create', 'ProductController@create')->name('products.create')->middleware('permission:products.create');

Route::put('products/{product}', 'ProductController@update')->name('products.update')->middleware('permission:products.edit');

Route::get('products/{product}', 'ProductController@show')->name('products.show')->middleware('permission:products.show');

Route::delete('products/{product}', 'ProductController@destroy')->name('products.destroy')->middleware('permission:products.destroy');

Route::get('products/{product}/edit', 'ProductController@edit')->name('products.edit')->middleware('permission:products.edit');

//Users

Route::get('users', 'UserController@index')->name('users.index')->middleware('permission:users.index');

Route::put('users/{user}', 'UserController@update')->name('users.update')->middleware('permission:users.edit');

Route::get('users/{user}', 'UserController@show')->name('users.show')->middleware('permission:users.show');

Route::delete('users/{user}', 'UserController@destroy')->name('users.destroy')->middleware('permission:users.destroy');

Route::get('users/{user}/edit', 'UserController@edit')->name('users.edit')->middleware('permission:users.edit');



});

Route::get('restaurants.index', 'RestaurantController@index')->name('restaurants.index')->middleware('permission:restaurants.index');

Route::get('empresas.index', 'EmpresaController@index')->name('empresas.index')->middleware('permission:empresas.index');