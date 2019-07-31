<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Tests extends Model
{
    //
    protected $table = 'tests';
    protected $primaryKey ='id_test';
    public $timestamps = false;
    protected $fillable = [
    	'id_paciente',
    	'id_user',
    	'id_tipo_test',
    	'pdf',
    	'respuestas'
    ];
    protected $guarded = [
    ];
}
