<?php



Auth::routes();
Route::get('/', 'HomeController@index')->name('index');
Route::get('/index', 'HomeController@index')->name('index');
Route::get('/home', 'HomeController@home')->name('home');
Route::post('post_res','HomeController@post_res')->name('post_res');
Route::post('post_numero','HomeController@post_numero')->name('post_numero');
Route::post('post_options','HomeController@post_options')->name('post_options');
Route::post('post_res_text','HomeController@post_res_text')->name('post_res_text');
Route::get('pdf','Pdf@makepdf')->name('pdf');
Route::post('formulario_cliente','HomeController@formulario_cliente')->name('form_cliente');
Route::get('formulario_cliente','HomeController@formulario_cliente')->name('form_cliente');
Route::post('post_informe','HomeController@post_informe')->name('post_informe');
Route::get('post_informe','HomeController@post_informe')->name('post_informe');


//Admin
Route::get('adm', function () {
    return view('adm');
});
//



Route::get('perfil', function () {   
    return view('perfil');
});

Route::get('evaluaciones','CompraController@evaluaciones')->name('evaluaciones');

Route::get('informes', 'HomeController@informes')->name('informes');

Route::get('compras','CompraController@miscompras')->name('compras');


Route::get('comofunciona', function () {   
    return view('comofunciona');
});

Route::get('catalogo','HomeController@catalogo')->name('catalogo');
Route::post('catalogo','HomeController@catalogopost')->name('catalogo');
Route::get('investigacion', function () {   
    return view('investigacion');
});

Route::get('empresas', function () {   
    return view('empresas');
});

Route::get('pagos', function () {   
    return view('pagos');
});

Route::get('contactanos', function () {   
    return view('contactanos');
});
Route::get('comprar/{test}','CompraController@vistacomprar')->name('compratepsi');

/*Vistas Tepsi*/

Route::get('tepsi', function () {   
    return view('tepsi/tepsi');
});

Route::get('tepsi/antes', function () {   
    return view('tepsi/antes'); 
});

Route::post('calcular','CompraController@calcular_total')->name('calcular_precio');
//Route::get('calcular','CompraController@calcular_total')->name('calcular_precio');
Route::post('subir_voucher','CompraController@subir_voucher')->name('subir_voucher');
Route::get('tepsi/formulario', 'CompraController@formulario')->name('formulario');
    

Route::get('tepsi/informeprevio','Pdf@precalculo')->name('informeprevio');


Route::get('tepsi/informe', function () {
    return view('tepsi/informeprevio');
})->name('informe');



Route::get('tepsi/item1','HomeController@primera_t')->name('item1')->middleware('auth');;

Route::get('tepsi/item2', function () {
    return view('tepsi/item2');
})->name('item2');


Route::get('tepsi/item3', function () {
    return view('tepsi/item3');
})->name('item3');


Route::get('tepsi/item4', function () {
    return view('tepsi/item4');
})->name('item4');


Route::get('tepsi/item5', function () {
    return view('tepsi/item5');
})->name('item5');


Route::get('tepsi/item6', function () {
    return view('tepsi/item6');
})->name('item6');

Route::get('tepsi/item7', function () {
    return view('tepsi/item7');
})->name('item7');

Route::get('tepsi/item8', function () {
    return view('tepsi/item8');
})->name('item8');

Route::get('tepsi/item9', function () {
    return view('tepsi/item9');
})->name('item9');

Route::get('tepsi/item10', function () {
    return view('tepsi/item10');
})->name('item10');

Route::get('tepsi/item11', function () {
    return view('tepsi/item11');
})->name('item11');


Route::get('tepsi/item12', function () {
    return view('tepsi/item12');
})->name('item12');

Route::get('tepsi/item13', function () {
    return view('tepsi/item13');
})->name('item13');

/*Los items del 13-15 se unen en uno solo*/
Route::get('tepsi/item13-15', function () {
    return view('tepsi/item13-15');
})->name('item13-15');


Route::get('tepsi/item16', function () {
    return view('tepsi/item16');
})->name('item16');


Route::get('tepsi/item17', function () {
    return view('tepsi/item17');
})->name('item17');

Route::get('tepsi/item18', function () {
    return view('tepsi/item18');
})->name('item18');


Route::get('tepsi/item19', function () {
    return view('tepsi/item19');
})->name('item19');
 


Route::get('tepsi/item20', function () {
    return view('tepsi/item20');
})->name('item20');
 

Route::get('tepsi/item21', function () {
    return view('tepsi/item21');
})->name('item21');
 

Route::get('tepsi/item22', function () {
    return view('tepsi/item22');
})->name('item22');
 

Route::get('tepsi/item23', function () {
    return view('tepsi/item23');
})->name('item23');
 

Route::get('tepsi/item24', function () {
    return view('tepsi/item24');
})->name('item24');

Route::get('tepsi/item25', function () {
    $cli =\Session::get('cliente');
    $cli = $cli['nombre'];
    return view('tepsi/item25',compact('cli'));
})->name('item25');
 

Route::get('tepsi/item26', function () {
    return view('tepsi/item26');
})->name('item26');
 

Route::get('tepsi/item27', function () {
     $cli =\Session::get('cliente');
    return view('tepsi/item27',compact('cli'));
})->name('item27');
 

Route::get('tepsi/item28', function () {
    return view('tepsi/item28');
})->name('item28');
 


Route::get('tepsi/item29', function () {
    return view('tepsi/item29');
})->name('item29');
 

Route::get('tepsi/item30', function () {
    return view('tepsi/item30');
})->name('item30');
 


Route::get('tepsi/item31', function () {
    return view('tepsi/item31');
})->name('item31');
 

Route::get('tepsi/item32', function () {
    return view('tepsi/item32');
})->name('item32');
 

Route::get('tepsi/item33', function () {
    return view('tepsi/item33');
})->name('item33');
 

Route::get('tepsi/item34', function () {
    return view('tepsi/item34');
})->name('item34');
 

Route::get('tepsi/item35', function () {
    return view('tepsi/item35');
})->name('item35');
 

Route::get('tepsi/item36', function () {
    return view('tepsi/item36');
})->name('item36');
 

Route::get('tepsi/item37', function () {
    return view('tepsi/item37');
})->name('item37');
 

Route::get('tepsi/item38', function () {
    return view('tepsi/item38');
})->name('item38');
 

Route::get('tepsi/item39', function () {
    return view('tepsi/item39');
})->name('item39');
 

Route::get('tepsi/item40', function () {
    return view('tepsi/item40');
})->name('item40');
 

Route::get('tepsi/item41', function () {
    return view('tepsi/item41');
})->name('item41');
 

Route::get('tepsi/item42', function () {
    return view('tepsi/item42');
})->name('item42');
 

Route::get('tepsi/item43', function () {
    return view('tepsi/item43');
})->name('item43');
 

Route::get('tepsi/item44', function () {
    return view('tepsi/item44');
})->name('item44');
 

Route::get('tepsi/item47', function () {
    return view('tepsi/item47');
})->name('item47');
 

Route::get('tepsi/item48', function () {
    return view('tepsi/item48');
})->name('item48');
 

Route::get('tepsi/item49', function () {
    return view('tepsi/item49');
})->name('item49');
 

Route::get('tepsi/item50', function () {
    return view('tepsi/item50');
})->name('item50');
 

Route::get('tepsi/item51', function () {
    return view('tepsi/item51');
})->name('item51');
 

Route::get('tepsi/item52', function () {
    return view('tepsi/item52');
})->name('item52');
 

/*end*/

