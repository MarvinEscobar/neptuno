<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\MovDia;
use DB;
class ModuserController extends Controller
{ 
//ENTRADA DE SUMINISTROS
    public function indexEntradas() 
    {
        $movdias = MovDia::paginate();
        return view('userestaurant\entradas.index', compact('movdias'));
    }
//MUESTRA LA INFORMACIÓN DEL SUMUNISTRO SELECIONADO
    public function showEntradas(Request $request, $NumDoc)
    {   
        $movdia = MovDia::findOrFail($NumDoc);
        // $values = ['S',$movdia->CODPRO, $request->Cantidad,$movdia->ID_TipoMov,$movdia->ID_ClaseMov,$movdia->RestEnvia,$movdia->RestRecibe,$movdia->noProveedor,$movdia->ID_TipoDoc,$movdia->NumDoc,$movdia->Estado,$movdia->RestGra,$movdia->ID_Empresa,$movdia->Fecha,$movdia->Usuario, $movdia->Fecha_Doc,0];
        // $sql = "EXEC SP_MOVIMIENTO_DIA ?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?";
        // $movdias = DB::statement($sql,$values); 
        return view('userestaurant\entradas.show', compact('movdia'));
    }
//ENVIA AL FORMULARIO PARA INGRESAR LOS SUMINITROS
    public function createEntradas()
    {
        return view('userestaurant\entradas.create');
    }
//GUARDAR DATOS ENVIADOS 
    public function storeEntradas(Request $request)
    {//(@CODPRO,@Cantidad,@ID_TipoMov,@ID_ClaseMov,@RestEnvia,@RestRecibe,@noProveedor,@ID_TipoDoc,@NumDoc,@Estado,@RestGra,@ID_Empresa,@Fecha,CONVERT(TIME,GETDATE()), @Usuario, @Fecha_Doc)
    // 'I',11000001,200,1,1,NULL,NULL,NULL,'','0011-2233',0,8,1,'20120618',100104,'20120618',0 
 
        $values = ['I',$request->CODPRO, $request->Cantidad,1,1,NULL,NULL,NULL,NULL,$request->NumDoc,0,8,1,'20120618',100104, '20120618',0];
        $sql = "EXEC SP_MOVIMIENTO_DIA ?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?";
        $movdias = DB::statement($sql,$values);        
        return redirect()->route('entradas.create')->with('info', 'Suministro agregado con éxito');
    }
//ENVIA AL FORMULARIO PARA EDITAR EL SUMINISTRO SELECIONADO      
    public function editEntradas($NumDoc)
    {
        $movdia = MovDia::findOrFail($NumDoc);
        return view('userestaurant\entradas.edit', compact('movdia'));
    }
//EDITA EL SUMINISTRO QUE FUE SELECCIONADO
    public function updateEntradas(Request $request, $NumDoc)
    {      
        $movdia =MovDia::findOrFail($NumDoc);
        var_dump($movdia);
        // $movdia->update($request->all());
        // $values = ['M',$movdia->CODPRO, $request->Cantidad,$movdia->ID_TipoMov,$movdia->ID_ClaseMov,$movdia->RestEnvia,$movdia->RestRecibe,$movdia->noProveedor,$movdia->ID_TipoDoc,$movdia->NumDoc,$movdia->Estado,$movdia->RestGra,$movdia->ID_Empresa,$movdia->Fecha,$movdia->Usuario, $movdia->Fecha_Doc,0];
        // $sql = "EXEC SP_MOVIMIENTO_DIA ?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?";
        // $movdias = DB::statement($sql,$values);
        // return redirect()->route('entradas.edit', $movdia->NumDoc)
        // ->with('info', 'Suministro guardado con éxito');  
    }
//ELIMINA EL SUMINISTRO SELECCIONADO
    public function destroyEntradas($CODPRO)
    {
        $movdia = MovDia::find($CODPRO);
         var_dump($movdia);

        // $values = ['D',$movdia->CODPRO, $movdia->Cantidad,$movdia->ID_TipoMov,$movdia->ID_ClaseMov,$movdia->RestEnvia,$movdia->RestRecibe,$movdia->noProveedor,$movdia->ID_TipoDoc,$movdia->NumDoc,$movdia->Estado,$movdia->RestGra,$movdia->ID_Empresa,$movdia->Fecha,$movdia->Usuario, $movdia->Fecha_Doc,0];

        // $sql = "EXEC SP_MOVIMIENTO_DIA ?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?";

        // $movdias = DB::statement($sql,$values);

        // return back()->with('info', 'Suministro eliminado correctamente');
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
