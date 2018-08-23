<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Tipomovimiento;
use App\Clasemovimiento;
use DB;
class ModuserController extends Controller
{
 
//ENTRADA DE SUMINISTROS
    public function indexEntradas() 
    {


}
     public function createRestaurants()
    {
   
        $sql = "EXEC SP_MOVIMIENTO_DIA ?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?";
            $result = DB::statement($sql,array('I',11000001,200,1,1,NULL,NULL,NULL,'','0011-2233',0,8,1,'20120618',100104,'20120618',0));
                var_dump($result);

    //     return redirect()->route('restaurants.edit', $product->id)
    //         ->with('info', 'Restaurante agregado con éxito');
    }

    
//IMPORTACIONES DE VENTAS DE ORIGENES EXTERNOS
    public function indexImpexternas()
    {
        return view('userestaurant/impexternas.index');
    }
//SALIDA DE SUMINISTROS
    public function indexSalidas()
    {
        return view ("userestaurant/salidas.index");
    }
//DESTRUIR
    public function indexDestruidos()
    {
        return view ("userestaurant/destruidos.index");
    }
//DESCARGA DE INVENTARIOS
    public function indexDescargas()
    {
        return view ("userestaurant/descargas.index");
    }

//REPORTES
    public function indexReportes()
    {
        return view ("userestaurant/reportes.index");
    }
//EXISTENCIA FINAL   
    public function indexExistentes()
    {
        return view ("userestaurant/existentes.index");
    }
//CUADRATURA
       public function indexCuadraturas()
    {
        return view ("userestaurant/cuadraturas.index");
    }
//CIERRE DE INVENTARIO
        public function indexCierres()
    {
        return view ("userestaurant/cierres.index");
    }

      
    /**
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     
    public function create()
    {
       //
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
