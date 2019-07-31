<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Tipo_test extends Model
{
    //
    protected $table = 'tipo_test';
    protected $primaryKey ='id_tipo_test';
    public $timestamps = false;
    protected $fillable = [
    	'titulo'
    ];
    protected $guarded = [
    ];
}
