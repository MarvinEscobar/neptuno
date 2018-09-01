<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Material extends Model
{
   protected $table = 'MAE_MATERIAL';
	//Se define la llave primaria si no esta con la covencion
	protected $primaryKey = 'CODPRO';
	//Se define si es incremental o no
	public $incrementing = true;
	//Define el tipo de variable
	//protected $keyType = 'integer';
	public $timestamps = false;

	protected $fillable = [
        'CODPRO', 'Descripcion',
    ];    
}
