<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App;
class HomeController extends Controller
{

    public function __construct()
    {
         $this->middleware('auth');
         if(!\Session::has('respuestas')) \Session::put('respuestas',array());
         
    }
    public function home()
    {
        $this->middleware('auth');
         return view('home');
    }
    public function pdf(){
        $res =\Session::get('respuestas');
        return view('pdf',compact($res));
    }
    public function index()
    {
        return view('index');
    }
     public function formulario_cliente (Request $request)
    {
        $array = array();
        $array['nombre'] = $request->input('name');
        $array['dni'] = $request->input('dni');
        $array['fecha_nac'] = $request->input('fecha_nac');
        $array['lugar_nac'] = $request->input('lugar_nac');
        $array['ocupacion'] = $request->input('ocupacion');
        $array['estudios'] = $request->input('estudios');
        $array['centro_educ'] = $request->input('centro_educ');
        $array['padre'] = $request->input('padre');
        $array['madre'] = $request->input('madre');
        $array['telefono'] = $request->input('telefono');
        $array['celular'] = $request->input('celular');
        $array['correo'] = $request->input('correo');
        $array['direccion'] = $request->input('direccion');
        $array['motivo'] = $request->input('motivo');
        if(!\Session::has('cliente')) \Session::put('cliente',$array);
       
        return redirect()->route('item1');
    }
    public function post_informe(Request $request)
    {
        return redirect()->route('pdf');
    }
    public function primera_t(){
        $this->middleware('auth');
        return view('tepsi/item1');
    }
     public function obtener($id = null){
        $res =\Session::get('respuestas');
        $val = 0;
        if(sizeof($res) > $id-1){
            $val = 1;
        }
        $nombreitem = "tepsi/item".$id;
        return view($nombreitem,compact('val'));
    }
    public function post_res(Request $request){
        
         $id =$request->input('id');
         $respuesta = $request->input('res');
         $res =\Session::get('respuestas');
         $res[$id] = $respuesta;
         \Session::put('respuestas',$res);
         $nombreitem = "item".($id+1);
         return redirect()->route($nombreitem);
    }
    public function post_res_text(Request $request){
        
         $id =$request->input('id');
         $respuesta = $request->input('options');
         $text1 =$request->input('text-1');
         $text2 =$request->input('text-2');
         $text3 =$request->input('text-3');
         $text4 =$request->input('text-4');
         $text5 =$request->input('text-5');
         $texto = $text1.$text2.$text3.$text4.$text5;
         
         $res =\Session::get('respuestas');
         $res[$id] = $respuesta;
         \Session::put('respuestas',$res);
         $nombreitem = "item".($id+1);
         return redirect()->route($nombreitem);
    }
    public function post_numero(Request $request){
        
         $id =$request->input('id');
         $respuesta = $request->input('numero');
         $res =\Session::get('respuestas');
         $nombreitem = "item";
         switch ($id) {
             case 41:
                 if($respuesta > 1)
                    $res[$id]  = 1;
                 else
                    $res[$id]  = 0;
                 $nombreitem =$nombreitem.($id+1);
                 break;
             case 47:
                 if($respuesta > 2)
                    $res[$id]  = 1;
                 else
                    $res[$id]  = 0;
                 $nombreitem =$nombreitem.($id+1);
                 break; 
              case 49:
              case 50:
                 if($respuesta > 3)
                    $res[$id]  = 1;
                 else
                    $res[$id]  = 0;

                 $nombreitem =$nombreitem.($id+1);
                 if($id == 50)
                    return redirect()->route('informe');
                 break; 
             case 42:
             case 45:
                 if($respuesta > 5)
                    $res[$id]  = 1;
                 else
                    $res[$id]  = 0;
                 $nombreitem =$nombreitem.($id+1);
                 break;   
             case 3:
                 if($respuesta > 7)
                    $res[$id]  = 1;
                 else
                    $res[$id]  = 0;
                 $nombreitem =$nombreitem.($id+1);
                 break;
             case 44:
                 if($respuesta > 9)
                    $res[$id]  = 1;
                 else
                    $res[$id]  = 0;
                 $nombreitem =$nombreitem.($id+1);
                 break;
             case 13:
                 $nombreitem =$nombreitem.($id+3);
                 if($respuesta > 8){
                    $res[$id] = 1;
                    $res[$id+1] = 1;
                    $res[$id+2] = 1;
                 }
                 else if($respuesta > 3 && $respuesta < 9 ){
                    $res[$id] = 0;
                    $res[$id+1] = 1;
                    $res[$id+2] = 1;
                 }
                 else if($respuesta < 4){
                    $res[$id] = 0;
                    $res[$id+1] = 0;
                    $res[$id+2] = 1;
                 }
                 else{
                    $respuesta = 0;
                 }
                 
                 break;
             default:
                 # code...
                 break;
         }
         \Session::put('respuestas',$res);
         
         return redirect()->route($nombreitem);
    }

    public function post_options(Request $request){
        
         $id =$request->input('id');
        
         $res =\Session::get('respuestas');
         $nombreitem = "item";
         switch ($id) {
             case 17:
             case 18:
             case 21:
             case 24:
                 
                 $opt1 = "".$request->input('opt-1');
                 $opt2 = "".$request->input('opt-2');
                
                 if($opt1 == "on" && $opt2 == "on")
                    $res[$id]  = 1;   
                 else
                    $res[$id]  = 0;
                 $nombreitem =$nombreitem.($id+1);
                 break;
             case 32:
             case 34:  
                 $opt1 = "".$request->input('opt-1');
                 $opt2 = "".$request->input('opt-2');
                 $opt3 = "".$request->input('opt-3');
                
                 if(($opt1 == "on" && $opt2 == "on") ||($opt2 == "on" && $opt3 == "on") ||($opt1 == "on" && $opt3 == "on") )
                    $res[$id]  = 1;   
                 else
                    $res[$id]  = 0;
                 $nombreitem =$nombreitem.($id+1);
                 break;
             case 19:
             case 20:
                 $t1 = "".$request->input('text-1');
                 $t2 = "".$request->input('text-2');
                 $t3 = "".$request->input('text-3');
                 $t4 = "".$request->input('text-4');
                 $t5 = "".$request->input('text-5');
                 $t6 = "".$request->input('text-6');
                 $t7 = "".$request->input('text-7');
                 $t8 = "".$request->input('text-8');
                 $texto = $t1 ."/". $t2 ."/". $t3 ."/". $t4 ."/".$t5 ."/". $t6 ."/". $t7 ."/". $t8;

                 $o1 = $request->input('options-1');
                 $o2 = $request->input('options-2');
                 $o3 = $request->input('options-3');
                 $o4 = $request->input('options-4');
                 $o5 = $request->input('options-5');
                 $o6 = $request->input('options-6');
                 $o7 = $request->input('options-7');
                 $o8 = $request->input('options-8');
                 $sum = $o1 + $o2 + $o3 + $o4 +$o5 + $o6 + $o7 + $o8;
                 
                 if($sum > 4)
                    $res[$id]  = 1;   
                 else
                    $res[$id]  = 0;
                 $nombreitem =$nombreitem.($id+1);
                
                 break;
             case 22:
             case 39:
                 $t1 = "".$request->input('text-1');
                 $t2 = "".$request->input('text-2');
                 $t3 = "".$request->input('text-3');
                 $t4 = "".$request->input('text-4');
                
                 $texto = $t1 ."/". $t2 ."/". $t3 ."/". $t4;

                 $o1 = $request->input('options-1');
                 $o2 = $request->input('options-2');
                 $o3 = $request->input('options-3');
                 $o4 = $request->input('options-4');
                 
                 $sum = $o1 + $o2 + $o3 + $o4;
                 if($sum > 2)
                    $res[$id]  = 1;   
                 else
                    $res[$id]  = 0;
                 $nombreitem =$nombreitem.($id+1);
                
                 break;
             case 23:
                 $t1 = "".$request->input('text-1');
                 $t2 = "".$request->input('text-2');
                 $t3 = "".$request->input('text-3');
                 $t4 = "".$request->input('text-4');
                 $t5 = "".$request->input('text-5');
                 $t6 = "".$request->input('text-6');
                
                 $texto = $t1 ."/". $t2 ."/". $t3 ."/". $t4 ."/".$t5 ."/". $t6;

                 $o1 = $request->input('options-1');
                 $o2 = $request->input('options-2');
                 $o3 = $request->input('options-3');
                 $o4 = $request->input('options-4');
                 $o5 = $request->input('options-5');
                 $o6 = $request->input('options-6');
                 
                 $sum = $o1 + $o2 + $o3 + $o4 +$o5 + $o6;
                 if($sum > 3)
                    $res[$id]  = 1;   
                 else
                    $res[$id]  = 0;
                 $nombreitem =$nombreitem.($id+1);
                
                 break;
             case 28:
             case 29:
             case 30:
             case 33:
             case 40:
                 $t1 = "".$request->input('text-1');
                 $t2 = "".$request->input('text-2');
                 $t3 = "".$request->input('text-3');
                
                
                 $texto = $t1 ."/". $t2 ."/". $t3;

                 $o1 = $request->input('options-1');
                 $o2 = $request->input('options-2');
                 $o3 = $request->input('options-3');
                
                    
                 $sum = $o1 + $o2 + $o3;
                 if($sum > 1)
                    $res[$id]  = 1;   
                 else
                    $res[$id]  = 0;
                 $nombreitem =$nombreitem.($id+1);
                 
                 break;
             default:
                 # code...
                 break;
         }
         \Session::put('respuestas',$res);
         
         return redirect()->route($nombreitem);
    }
}
