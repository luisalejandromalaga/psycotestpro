<?php

namespace App\Http\Controllers;


use App\Contacto;
use Illuminate\Http\Request;

class contactoController extends Controller
{
    public function store(Request $request)
    {
    	$contacto = new Contacto;
    	$contacto->name = $request->input('name');

    	$contacto->save();

    	return 'se han guardado'; 

    }
}
