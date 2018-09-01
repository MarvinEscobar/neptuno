<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\MovDia;
use DB;
use App\User;
class ModuserController extends Controller
{ 
//ENTRADA DE SUMINISTROS
    public function indexEntradas() 
    {
        $movdias = MovDia::paginate();
        return view('userestaurant\entradas.index', compact('movdias'));
    }
//MUESTRA LA INFORMACIÓN DEL SUMUNISTRO SELECIONADO
    public function showEntradas(MovDia $movdia)
    {   
        return view('userestaurant\entradas.show', compact('movdia'));
    }
//ENVIA AL FORMULARIO PARA INGRESAR LOS SUMINITROS
    public function createEntradas()
    {
        return view('userestaurant\entradas.create');
    }
//GUARDAR DATOS ENVIADOS 
    public function storeEntradas(Request $request)
    {   
        // $values = ['I',$request->CODPRO, $request->Cantidad,1,1,NULL,NULL,NULL,NULL,$request->NumDoc,0,8,1,'20120618',100104, '20120618',0];
        // $sql = "EXEC SP_MOVIMIENTO_DIA ?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?";
        // $movdia = DB::statement($sql,$values);        
        // return redirect()->route('entradas.create')->with('info', 'Suministro agregado con éxito');
        // 
        // 
         if($request->get('query'))
        {
            $query = $request->get('query');
                $data = DB::table('MAE_MATERIAL')
                    ->where('Descripcion', 'LIKE', "%{$query}%")
                        ->take(10)
                            ->get();
        $output = '<ul class="dropdown-menu" style="display:block; position:relative">';
            foreach($data as $row)
                {
                    $output .= '
                    <li>'.$row->Descripcion.'</li>                          
                        ';
                }
                    $output .= '</ul>';
                        echo $output;
                        $values = ['I',$row->CODPRO, $request->Cantidad,1,1,NULL,NULL,NULL,NULL,$request->NumDoc,0,12,$row->ID_Empresa,'20120618',100104, '20120618',0];
                             $sql = "EXEC SP_MOVIMIENTO_DIA ?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?";
                                $movdia = DB::statement($sql,$values);        
                                    var_dump($$row->Descripcion);   
        }

        // return redirect()->route('entradas.create')->with('info', 'Suministro agregado con éxito');

    }
//ENVIA AL FORMULARIO PARA EDITAR EL SUMINISTRO SELECIONADO      
    public function editEntradas(MovDia $movdia)
    {
        return view('userestaurant\entradas.edit', compact('movdia'));
    }
//EDITA EL SUMINISTRO QUE FUE SELECCIONADO
    public function updateEntradas(Request $request, MovDia $movdia)
    {      
        $movdia->update($request->all());
        $values = ['M',$movdia->CODPRO, $request->Cantidad,$movdia->ID_TipoMov,$movdia->ID_ClaseMov,$movdia->RestEnvia,$movdia->RestRecibe,$movdia->noProveedor,$movdia->ID_TipoDoc,$movdia->NumDoc,$movdia->Estado,$movdia->RestGra,$movdia->ID_Empresa,$movdia->Fecha,$movdia->Usuario, $movdia->Fecha_Doc,0];
        $sql = "EXEC SP_MOVIMIENTO_DIA ?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?";
        $movdias = DB::statement($sql,$values);
        return redirect()->route('entradas.edit', $movdia->NumDoc)
        ->with('info', 'Suministro guardado con éxito');  
    }
//ELIMINA EL SUMINISTRO SELECCIONADO
    public function destroyEntradas(MovDia $movdia)
    {
        // var_dump($movdia);
         $values = ['D',$movdia->CODPRO, $movdia->Cantidad,$movdia->ID_TipoMov,$movdia->ID_ClaseMov,$movdia->RestEnvia,$movdia->RestRecibe,$movdia->noProveedor,$movdia->ID_TipoDoc,$movdia->NumDoc,$movdia->Estado,$movdia->RestGra,$movdia->ID_Empresa,$movdia->Fecha,$movdia->Usuario, $movdia->Fecha_Doc,0];
        $sql = "EXEC SP_MOVIMIENTO_DIA ?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?";
        $movdias = DB::statement($sql,$values);

        return back()->with('info', 'Usurio eliminado correctamente');
    }
  
}
