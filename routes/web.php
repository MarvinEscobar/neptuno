<?php
//Ruta de acceso al home
//
Route::get ('/', function() {

	return view('welcome');

});


Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');


Route::middleware(['auth'])->group(function(){

//Roles
Route::resource('/roles', 'RoleController');

//Products
Route::resource('products', 'ProductController');

//Users
Route::resource('users', 'UserController');

//Administracion de productos
Route::get('restaurants.index', 'AdminproductController@indexRestaurants')->name('restaurants.index')->middleware('permission:restaurants.index');
		
Route::get('empresas.index', 'AdminproductController@indexEmpresas')->name('empresas.index')->middleware('permission:empresas.index');

Route::get('plus.index', 'AdminproductController@indexPlus')->name('plus.index')->middleware('permission:plus.index');

Route::get('recetas.index', 'AdminproductController@indexRecetas')->name('recetas.index')->middleware('permission:recetas.index');

Route::get('unidades.index', 'AdminproductController@indexUnidades')->name('unidades.index')->middleware('permission:unidades.index');

Route::get('canales.index', 'AdminproductController@indexCanales')->name('canales.index')->middleware('permission:canales.index');

Route::get('fechas.index', 'AdminproductController@indexFechas')->name('fechas.index')->middleware('permission:fechas.index');



//Entrada de suministros
Route::get('userestaurant/entradas.index','ModuserController@indexEntradas')->name('entradas.index')->middleware('permission:entradas.index');
Route::get('userestaurant/entradas.show','ModuserController@showEntradas')->name('entradas.show')->middleware('permission:entradas.show');

Route::get('userestaurant/entradas.create', 'ModuserController@createEntradas')->name('entradas.create')->middleware('permission:entradas.create');
Route::get('userestaurant/entradas.edit', 'ModuserController@editEntradas')->name('entradas.edit')->middleware('permission:entradas.edit');



//importaciones de algo
Route::get('userestaurant/impexternas.index', 'ModuserController@indexImpexternas')->name('impexternas.index')->middleware('permission:impexternas.index');
		
Route::get('userestaurant/salidas.index', 'ModuserController@indexSalidas')->name('salidas.index')->middleware('permission:salidas.index');

Route::get('userestaurant/destruidos.index', 'ModuserController@indexDestruidos')->name('destruidos.index')->middleware('permission:destruidos.index');

Route::get('userestaurant/descargas.index', 'ModuserController@indexDescargas')->name('descargas.index')->middleware('permission:descargas.index');

Route::get('userestaurant/reportes.index', 'ModuserController@indexReportes')->name('reportes.index')->middleware('permission:reportes.index');

Route::get('userestaurant/existentes.index', 'ModuserController@indexExistentes')->name('existentes.index')->middleware('permission:existentes.index');

Route::get('userestaurant/cuadraturas.index', 'ModuserController@indexCuadraturas')->name('cuadraturas.index')->middleware('permission:cuadraturas.index');

Route::get('userestaurant/cierres.index', 'ModuserController@indexCierres')->name('cierres.index')->middleware('permission:cierres.index');
});

