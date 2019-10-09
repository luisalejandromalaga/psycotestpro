<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Image;
use Illuminate\Support\Facades\DB;
use App;
use Auth;
class CompraController extends Controller
{
	public function __construct()
    {
         $this->middleware('auth');
         if(!\Session::has('total_dinero')) \Session::put('total_dinero',0);
         
    }

   public function calcular_total(Request $request){
  
		$cantidad = $request->input('numero');
      $test = $request->input('name_test');
	   	\Session::put('total_dinero',$cantidad);
         //return $test;
	   	return redirect()->route('compratepsi',$test); 
   }
   public function vistacomprar($test = 0){

   		$subtotal =\Session::get('total_dinero');
   	   $total = $subtotal*1.1;
        
         $tests = DB::table('tipo_test')->where('url',$test)->get();
         
   		return view('comprar',compact('total','subtotal','tests'));
   }
   public function formulario(){
      $id_user =Auth::user()->id;
         
      $tipo_test =App\Tipo_test::get();
         //print_r($tipo_test[0]->titulo);
     
      $var = App\Tests::where('id_user',$id_user)->where('id_tipo_test','1')->count();
      $pa = App\Pagos::where('id_user',$id_user)->where('id_tipo_test','1')->where('estado','Validado')->get();
      $sum_comprados= 0;
      
      foreach ($pa as $val) {
               $sum_comprados +=$val->n_tests_comprados;
            
           
            
      } 
      $total=$sum_comprados-$var ;
      $this->middleware('auth');

      if($total > 0){
         return view('tepsi/formulario');
      }
      else
      {
         return redirect()->route('compratepsi','tepsi');
      }

   }
   public function subir_voucher(Request $request){
   		$subtotal =\Session::get('total_dinero');
   		//$total = DB::select('select count(*) from pagos');
   		$total = App\Pagos::count();
   		//rankana\Pagos::insert($array); 
   	   $ruta = public_path().'/vouchers/';
   		$imagenOriginal =$request->file('voucher');
   		$imagen = Image::make($imagenOriginal->getRealPath());
   		//print_r( $imagenOriginal);
   		$imagen->resize(200,200);
   		$imagen->save($ruta ."voucher".$total.".jpeg", 100);
   		
   		$array = array(
   			"id_user"=> Auth::user()->id,
   			"id_tipo_test"=> $request->input('tipo_test'),
   			"voucher"=> "voucher".$total.".jpeg",
   			"n_tests_comprados"=> $subtotal,
   			"precio"=> $subtotal*1.1,
   		);
   		App\Pagos::insert($array);
   		return redirect()->route('compras');
   }
   public function miscompras(){
   		$id_user =Auth::user()->id;

   		$pagos =DB::table('pagos')->where('id_user',$id_user)->get();
   		$var = 0;
   		foreach ($pagos as $key) {
   			$id_tipo_test = DB::table('tipo_test')->where('id_tipo_test',$key->id_tipo_test)->first();
   			//print_r($id_tipo_test->titulo);
   			$pagos[$var]->id_tipo_test =$id_tipo_test->titulo;
   			$var++;
   		}
   		//$id_tipo_test = DB::table('tipo_test')->where('id_tipo_test',$pagos->id_tipo_test)->get();
   		//print_r($pagos);
   		//$id_tipo_test = $id_tipo_test->titulo;
   		//$array = array($pagos->voucher,$pagos->estado,$pagos->fecha,$id_tipo_test,$pagos->precio);	
   		//print_r($array);
   		return view('compras',compact('pagos'));
   			
   }
   public function evaluaciones(){
   		$id_user =Auth::user()->id;
   		
   		$tipo_test =App\Tipo_test::get();
   		//print_r($tipo_test[0]->titulo);
   		$array = array();
   		$arraytotal = array();
   		foreach ($tipo_test as $key) {
   			$var = App\Tests::where('id_user',$id_user)->where('id_tipo_test',$key->id_tipo_test)->count();
   			$pa = App\Pagos::where('id_user',$id_user)->where('id_tipo_test',$key->id_tipo_test)->where('estado','Validado')->get();
   			$sum_comprados= 0;
   			foreach ($pa as $val) {
   				$sum_comprados +=$val->n_tests_comprados;
   			}
   			array_push($array,$sum_comprados-$var) ;
   			array_push($arraytotal,$var) ;
   		}
   		return view('evaluaciones',compact('tipo_test','array','arraytotal'));

   }
}
