<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use App\Material;

class AutocompleteController extends Controller
{
   function index(Material $materials)
    {
    	$materials = Material::paginate();
        // return view('autoindex', compact('materials'));
     return view('autocomplete');
    }

    function fetch(Request $request)
    {
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
      					$values = ['I',$row->CODPRO, $request->Cantidad,1,1,NULL,NULL,NULL,NULL,$request->NumDoc,0,8,1,'20120618',100104, '20120618',0];
        	$sql = "EXEC SP_MOVIMIENTO_DIA ?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?";
        		$movdia = DB::statement($sql,$values);  
        		// return redirect()->route('entradas.create')->with('info', 'Suministro agregado con éxito');      
     	}
     	
        		
    }

        
}
