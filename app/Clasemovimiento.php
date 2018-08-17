<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Clasemovimiento extends Model
{
    //Buscara una tabla en la base de datos con el nombre asignado.
	protected $table = 'CLASE_MOV';
	//Se define la llave primaria si no esta con la covencion
	protected $primaryKey = 'ID_ClaseMov';
	//Se define si es incremental o no
	public $incrementing = false;
	//Define el tipo de variable
	//protected $keyType = 'integer';
	public $timestamps = false;    

	public function tipomovimiento ()
	{
		return $this->belongsToMany(Tipomovimiento::class,'ID_ClaseMov');
	}

}
