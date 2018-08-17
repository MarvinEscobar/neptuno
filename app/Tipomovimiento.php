<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Tipomovimiento extends Model
{
	//Buscara una tabla en la base de datos con el nombre asignado.
	protected $table = 'TIPO_MOV';
	//Se define la llave primaria si no esta con la covencion
	protected $primaryKey = 'ID_TipoMov';
	//Se define si es incremental o no
	public $incrementing = false;
	//Define el tipo de variable
	//protected $keyType = 'integer';
	public $timestamps = false;    

	// public function clasemovimiento ()
	// {
	// 	return $this->hasOne(Clasemovimiento::class,'ID_TipoMov','ID_TipoMov');
	// }
	public function clasemovimiento ()
	{
		return $this->hasMany(Clasemovimiento::class,'ID_TipoMov','ID_TipoMov');
	}
}
