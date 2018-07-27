<?php

//neptuno o 127.0.0.1:8000

Route::get('/', function () {

	$name="Valor de variable";

	//return view('home',['name' => $name]);
	//return view('home')-> with("name", $name);
	return view('home', compact("name")); //funcion php
});



Route::get('post', function () {

	return view('pages.index');
});

// Route::get("/registro", function(){

// return "Pagina de registro";

// })->name("f_registro"); //formulario registro


// Route::get("/login", function(){

// return "Pagina de login";

// })->name("login"); //formulario login


