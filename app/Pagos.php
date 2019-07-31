<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Pagos extends Model
{
    //
    protected $table = 'pagos';
    protected $primaryKey ='id';
    public $timestamps = false;
    protected $fillable = [
    	'id_user',
    	'id_tipo_test',
    	'voucher',
    	'estado',
    	'n_tests_comprados',
    	'fecha'
    ];
    protected $guarded = [
    ];
}
