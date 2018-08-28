<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class MovDia extends Model
{
 //Buscara una tabla en la base de datos con el nombre asignado.
	protected $table = 'MOVIMIENTO_DIA';
	protected $primaryKey = 'NumDoc';	
	protected $keyType = 'nvarchar';	
	public $incrementing = false;
	public $timestamps = false;

	
}
