<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Busqueda extends Model
{
    //
    protected $table = 'busqueda';
    protected $primaryKey ='id_busqueda';
    public $timestamps = false;
    protected $fillable = [
        'nombre',
        'busqueda',
        'fecha'
    ];
    protected $guarded = [
    ];
}
