<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminproductController extends Controller
{
 
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    //restaurants
//RESTAURANTES
    public function indexRestaurants()
    {
        return view ("restaurants.index");        
    }

    //  public function createRestaurants()
    // {
    //     return view('restaurants.create');
    // }

    // public function store(Request $request)
    // {
    //     $product = Product::create($request->all());

    //     return redirect()->route('restaurants.edit', $product->id)
    //         ->with('info', 'Restaurante agregado con éxito');
    // }

    
//EMPRESAS
    public function indexEmpresas()
    {
        return view('empresas.index');
    }
//PLUS
    public function indexPlus()
    {
        return view ("plus.index");
    }
//RECETAS
    public function indexRecetas()
    {
        return view ("recetas.index");
    }
//Unidades de Medida
    public function indexUnidades()
    {
        return view ("unidades.index");
    }

//Canales de Venta
    public function indexCanales()
    {
        return view ("canales.index");
    }
//Fechas de inventario
    public function indexFechas()
    {
        return view ("fechas.index");
    }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //recetas.create
        //recetas.show
        //recetas.edit
        //recetas.destroy
        //recetas.index
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
