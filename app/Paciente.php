<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Paciente extends Model
{
    //
    protected $table = 'paciente';
    protected $primaryKey ='id';
    public $timestamps = false;
    protected $fillable = [
    	'nombre',
    	'dni',
    	'fecha_nac',
    	'lugar_nac',
    	'ocupacion',
    	'estudios',
    	'centro_educ',
    	'padre',
    	'madre',
    	'telefono',
    	'celular',
    	'correo',
    	'direccion'
    ];
    protected $guarded = [
    ];
}
