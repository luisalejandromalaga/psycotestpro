<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Storage;
use Illuminate\Http\Request;
use App\FPDF;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
class pdf extends Controller 
{

////////////////////////////////////////////

	public function calcular_edad($fecha_n){

			$todayh = getdate();

			$d = $todayh['mday'];
		    $m = $todayh['mon'];
		    $y = $todayh['year'];
		    
		    $fecha_n;

		    
		    list($año,$mes,$dia ) = explode('-', $fecha_n,3);
		    
		    // $año=2014;
		    //$mes=10;
		    //$dia=22;
		    
		    if($d < $dia){
		      $GLOBALS['edad_d'] = ($d + 30)- $dia;
		     
		     	$m = $m-1;

		     	if($m < $mes){
		     		  $GLOBALS['edad_m']= ($m + 12)- $mes;
		     		  $y = $y-1;

		     		  $GLOBALS['edad_y']= $y-$año; 
		     	}

		     	if($m >= $mes){
		     		  $GLOBALS['edad_m'] = $m - $mes;
					  $GLOBALS['edad_y'] = $y-$año; 
		     	}
		    }




		    if($d >= $dia){
		     
		     $GLOBALS['edad_d'] = $d - $dia;
		     	

		     	if($m < $mes){
		     		  $GLOBALS['edad_m']=  $m + 12- $mes;
		     		  $y = $y-1;
		     		  $GLOBALS['edad_y']= $y-$año; 
		     	}

		     	if($m >= $mes){
					  $GLOBALS['edad_m'] = $m - $mes;
					  $GLOBALS['edad_y']= $y-$año; 
		     	}
		    }

//Esto convierte a días////////////////////////////////////////////////////////////////////
		    
		    $GLOBALS['days'] = ((12*$GLOBALS['edad_y'])*30)+ ($GLOBALS['edad_m']*30)+$GLOBALS['edad_d'];
//////////////////////////////////////////////////////////////////////////////////////////		    

		    //echo $GLOBALS['edad_y'], $GLOBALS['edad_m'], $GLOBALS['edad_d'], $GLOBALS['days'] ;


			/*$todayh = getdate();
			$d = $todayh['mday'];
		    $m = $todayh['mon'];
		    $y = $todayh['year'];
		     $fecha_n;
		    list($año,$mes, $dia ) = explode('-', $fecha_n,3);
			$dias = $dia+($mes-1)*30;
			$dias_ahora =$d+($m-1)*30;
			$dias_r = $dias_ahora- $dias+(($y-$año)*360);
			$GLOBALS['edad_y']=floor($dias_r/360);
			$GLOBALS['edad_m']=floor(($dias_r%360)/30);*/
	}





	public function precalculo(){
		//$id_user =Auth::user()->id;
		//$pagos =DB::table('pagos')->where('id_user',$id_user)->get();
		$res =\Session::get('respuestas');
		
		$informe = \Session::get('informe');
		$datos = \Session::get('cliente');
		$fecha_n =$datos['fecha_nac'];//"2015-04-03";
		$dni=$datos['dni'];
		$nombre_m=$datos['madre'];
		$nombre_p=$datos['padre'];
		$telefono=$datos['telefono'];
		$grado=$datos['estudios'];
		$ocupacion=$datos['ocupacion'];
		$motivo=$datos['motivo'];
		$conclusion=$informe['conclusiones'];
		$observacion=$informe['observacion'];
		$recomendacion = $informe['recomendaciones'];
		
		$this->calcular_edad($fecha_n);		

		$edad_y = $GLOBALS['edad_y'];
		$edad_m = $GLOBALS['edad_m'];
		$edad_d = $GLOBALS['edad_d'];
		$days = $GLOBALS['days'];

		//$edad_y = $GLOBALS['edad_y'];
		//$edad_m = $GLOBALS['edad_m'];	


		         
		         $coordinacion = 0;
		         $lenguaje = 0;
		         $motricidad = 0;
		         $contador = 0;
		         $coordinacion_b = 0;
		         $lenguaje_b = 0;
		         $motricidad_b = 0;

		         $sumatoria = 0;
		              // output data of each row

		            foreach ($res as $key) {
		            
			            	$contador++;
			            	$sumatoria = $sumatoria + $key ;
			        		$id_contador = "t_"; 
			        		
			        		if($contador == 16 ){
			        			$coordinacion = $sumatoria;
			        			$sumatoria = 0 ;
			        		}
			        		else if($contador == 40 ){
			        			$lenguaje = $sumatoria;
			        			$sumatoria = 0 ;
			        		}
			        		else if($contador == 52 ){
			        			$motricidad = $sumatoria;
			        			$sumatoria = 0 ;
			        		}
		        			
		        	}
		        	//return $motricidad;
		         $coordinacion_b = $coordinacion;
		         $lenguaje_b = $lenguaje ;
		         $motricidad_b = $motricidad;
		         //print_r($res);






/////////////////////////////////////////////////////////////////////////////////
//
//		Formulas generales 
// 		____________________
//
//		->Las puntuaciones T tienen media (prom=50) y Desviación estandar (DS=10)
//
//		Cumplen esta propiedad general -> (T-promT)/DST=(x-prom)/DS
//
//		z=(x-prom)/DS
//
//		T=promT+(z*DST)
//
//		x es el puntaje bruto
//
////////////////////////////////////////////////////////////////////////////////


///////////////////2 a 2,6 

		         
		         $lengProm226= 3.355;
		         $lengDS226=2.964009154;


				 $corProm226= 2.675;
		         $corDS226=1.448924;


				 $motProm226= 2.46;
		         $motDS226=1.731360568;


		         $totalProm226=8.485;
		         $totalDS226=4.88;



///////////////////2,6,1 a 3 

		         $lengProm2613= 9.81;
		         $lengDS2613=4.455;


				 $corProm2613= 5.41;
		         $corDS2613= 2.11;


				 $motProm2613= 4.6;
		         $motDS2613= 2.31;


		         $totalProm2613=19.825;
		         $totalDS2613=6.99;

///////////////////3,0,1 a 3,6,0


		         $lengProm30136= 13.14;
		         $lengDS30136=4.595;


				 $corProm30136= 7.535;
		         $corDS30136=2.33;


				 $motProm30136= 6.075;
		         $motDS30136=1.995;


		         $totalProm30136=26.76;
		         $totalDS30136=7.245;

///////////////////3,6,1 a 4


		         $lengProm3614= 16.635;
		         $lengDS3614=3.455;


				 $corProm3614= 9.42;
		         $corDS3614=1.985;


				 $motProm3614= 7.69;
		         $motDS3614=1.915;


		         $totalProm3614=33.745;
		         $totalDS3614=5.645;

///////////////////4,0,1 a 4,6


		         $lengProm40146= 18.325;
		         $lengDS40146=2.915;


				 $corProm40146= 10.8;
		         $corDS40146=1.76;


				 $motProm40146= 8.44;
		         $motDS40146=1.845;

		         $totalProm40146=35.065;
		         $totalDS40146=4.585;		         


///////////////////4,6,1 a 5



		         $lengProm4615= 19.845;
		         $lengDS4615=2.475;


				 $corProm4615= 12.48;
		         $corDS4615=1.85;


				 $motProm4615= 9.51;
		         $motDS4615=1.715;


		         $totalProm4615=41.92;
		         $totalDS4615=4.795;		


////////////////////////////////////////////////////////////////////////////////




///////////////////calcular 2,0,0 a 2,6,0 //prom=2.68 DS= 1.6//
		         if($days<=900/*$edad_y==2 && $edad_m<=6 && $edad_d<=0*/){

			     	 $lenguaje = ceil(((($lenguaje-$lengProm226)/$lengDS226)*10)+50);
			     	 
			     	 $coordinacion = ceil(((($coordinacion-$corProm226)/$corDS226)*10)+50);
			     	 
			     	 $motricidad = ceil(((($motricidad-$motProm226)/$motDS226)*10)+50);


		         


			         /*if($lenguaje <= 0 ){
			         	$lenguaje = 38;
			     	 }

			     	 else if($lenguaje > 0){
			     	 	$lenguaje = ($lenguaje*3)+38;
			     	 }
			     	 if($coordinacion <= 0 ){
			         	$coordinacion = 31;
			     	 }
			     	 else if($coordinacion > 0){
			     	 	$coordinacion = ($coordinacion*7)+ 31;
			     	 }
			     	 if($motricidad <= 0 ){
			         	$motricidad = 35;
			     	 }
			     	 else if($motricidad > 0){
			     	 	$motricidad = ($motricidad*6)+ 35;
			     	 }*/
		     	 }
/////////////////////////////////////////////////////////



//////////////////////calcular 2,6,1 a 3,0,0
		     	 else if(901<=$days && $days<=1080/*$edad_y>=2 && $edad_m>5 || $edad_d>=0 && $edad_y<=3*/){
			         
			     	 $lenguaje = ceil(((($lenguaje-$lengProm2613)/$lengDS2613)*10)+50);
			     	 
			     	 $coordinacion = ceil(((($coordinacion-$corProm2613)/$corDS2613)*10)+50);
			     	 
			     	 $motricidad = ceil(((($motricidad-$motProm2613)/$motDS2613)*10)+50);


			         /*if($lenguaje <= 0 ){
			         	$lenguaje = 30;
			     	 }
			     	 else if($lenguaje > 0){
			     	 	$lenguaje = ($lenguaje*2)+30;
			     	 }
			     	 if($coordinacion <= 0 ){
			         	$coordinacion = 27;
			     	 }
			     	 else if($coordinacion > 0){
			     	 	$coordinacion = ($coordinacion*4)+ 27;
			     	 }
			     	 if($motricidad <= 0 ){
			         	$motricidad = 29;
			     	 }
			     	 else if($motricidad > 0){
			     	 	$motricidad = ($motricidad*5)+ 29;
			     	 }*/
		     	 }





		     	 //calcular 3,0,1 a 3,6,0
		     	 else if(1081<=$days && $days<=1260/*$edad_y==3 && $edad_d >= 1 || $edad_d <= 0 && $edad_m < 6 */){
			         
			     	 $lenguaje = ceil(((($lenguaje-$lengProm30136)/$lengDS30136)*10)+50);
			     	 
			     	 $coordinacion = ceil(((($coordinacion-$corProm30136)/$corDS30136)*10)+50);
			     	 
			     	 $motricidad = ceil(((($motricidad-$motProm30136)/$motDS30136)*10)+50);


			         /*if($lenguaje <= 0 ){
			         	$lenguaje = 24;
			     	 }
			     	 else if($lenguaje > 0){
			     	 	$lenguaje = ($lenguaje*2)+24;
			     	 }
			     	 if($coordinacion <= 0 ){
			         	$coordinacion = 20;
			     	 }
			     	 else if($coordinacion > 0){
			     	 	$coordinacion = ($coordinacion*4)+ 20;
			     	 }
			     	 if($motricidad <= 0 ){
			         	$motricidad = 20;
			     	 }
			     	 else if($motricidad > 0){	
			     	 	$motricidad = ($motricidad*5)+ 20;
			     	 }*/
		     	 }



		     	 //calcular 3,6,1 a 4,0,0
		     	 
		     	 
		     	 else if(1261<=$days && $days<=1440/*$edad_y >= 3 && $edad_m> 6 && $edad_y <= 4*/ ){
			         
			     	 $lenguaje = ceil(((($lenguaje-$lengProm3614)/$lengDS3614)*10)+50);
			     	 
			     	 $coordinacion = ceil(((($coordinacion-$corProm3614)/$corDS3614)*10)+50);
			     	 
			     	 $motricidad = ceil(((($motricidad-$motProm3614)/$motDS3614)*10)+50);

			         
			         /*if($lenguaje <= 4 ){
			         	$lenguaje = 20;
			     	 }
			     	 else if($lenguaje > 4){
			     	 	$lenguaje = (($lenguaje-4)*2)+20;
			     	 }
			     	 if($coordinacion <= 3 ){
			         	$coordinacion = 18;
			     	 }
			     	 else if($coordinacion > 3){
			     	 	$coordinacion = (($coordinacion-3)*5)+ 18;
			     	 }
			     	 if($motricidad <= 1 ){
			         	$motricidad = 17;
			     	 }
			     	 else if($motricidad > 1){
			     	 	$motricidad = (($motricidad-1)*5)+ 17;
			     	 }*/
		     	 }




		     	 //calcular 4,0,1 a 4,6,0
		     	 else if(1441<=$days && $days<=1620/*$edad_y==4 && $edad_m <6*/){


			     	 $lenguaje = ceil(((($lenguaje-$lengProm40146)/$lengDS40146)*10)+50);
			     	 
			     	 $coordinacion = ceil(((($coordinacion-$corProm40146)/$corDS40146)*10)+50);
			     	 
			     	 $motricidad = ceil(((($motricidad-$motProm40146)/$motDS40146)*10)+50);


			         /*if($lenguaje <= 8 ){
			         	$lenguaje = 18;
			     	 }
			     	 else if($lenguaje > 8){
			     	 	$lenguaje = (($lenguaje-8)*3)+18;
			     	 }
			     	 if($coordinacion <= 5 ){
			         	$coordinacion = 19;
			     	 }
			     	 else if($coordinacion > 5){
			     	 	$coordinacion = (($coordinacion-5)*5)+ 19;
			     	 }
			     	 if($motricidad <= 3 ){
			         	$motricidad = 20;
			     	 }
			     	 else if($motricidad > 3){	
			     	 	$motricidad = (($motricidad-3)*6)+ 20;
			     	 }*/
		     	 }




		     	 //calcular 4,5 a 5
		     	 else if(1621<=$days && $days<=1800/*$edad_y >=4 && $edad_m > 5 && $edad_y <= 5*/){

			         
			     	 $lenguaje = ceil(((($lenguaje-$lengProm4615)/$lengDS4615)*10)+50);
			     	 
			     	 $coordinacion = ceil(((($coordinacion-$corProm4615)/$corDS4615)*10)+50);
			     	 
			     	 $motricidad = ceil(((($motricidad-$motProm4615)/$motDS4615)*10)+50);


			         /*if($lenguaje <= 10 ){
			         	$lenguaje = 18;
			     	 }
			     	 else if($lenguaje > 10){
			     	 	//$lenguaje = ($lenguaje*2)+1;
			     	 	$lenguaje = (($lenguaje-10)*3)+18;
			     	 }
			     	 if($coordinacion <= 6 ){
			         	$coordinacion = 17;
			     	 }
			     	 else if($coordinacion > 6){
			     	 	//$coordinacion = ($coordinacion*3)+($coordinacion-5);
			     	 	$coordinacion = (($coordinacion-6)*5)+ 17;
			     	 }
			     	 if($motricidad <= 4 ){
			         	$motricidad = 18;
			     	 }
			     	 else if($motricidad > 4){
			     	 	//$motricidad = ($motricidad*5)+ ($motricidad - 7);
			     	 	$motricidad = (($motricidad-4)*6)+ 18;
			     	 }*/
		     	 }





		     	 $lenguaje_t = "Normal";
		     	 $coordinacion_t = "Normal";
		     	 $motricidad_t = "Normal";

		     	 if($lenguaje <= 30 ){
		         	$lenguaje_t = "Retraso";
		     	 }
		     	 else if($lenguaje < 40){
		     	 	$lenguaje_t = "Riesgo";
		     	 }
		     	 if($coordinacion <= 30 ){
		         	$coordinacion_t = "Retraso";
		     	 }
		     	 else if($coordinacion < 40){
		     	 	$coordinacion_t = "Riesgo";
		     	 }
		     	 if($motricidad <= 30 ){
		         	$motricidad_t = "Retraso";
		     	 }
		     	 else if($motricidad < 40){
		     	 	$motricidad_t = "Riesgo";
		     	 }


		$todayh = getdate();
			$d = $todayh['mday'];
		    $m = $todayh['mon'];
		    $y = $todayh['year'];
		    $array_r = array();
		       $array_r[0]=$coordinacion_b;
		       $array_r[1]=$coordinacion;
		       $array_r[2]=$coordinacion_t;

		       $array_r[3]=$lenguaje_b;
		       $array_r[4]= $lenguaje;
		       $array_r[5]=$lenguaje_t;

		       $array_r[6]=$motricidad_b;
		       $array_r[7]=$motricidad;
		       $array_r[8]= $motricidad_t;
		      
		       return view('tepsi/informeprevio', compact('array_r'));
	}


/////////////////////////////////////////////////////////////////////////////////////////////////////




    public function makepdf(){
    	$res =\Session::get('respuestas');
		$informe = \Session::get('informe');
		$datos = \Session::get('cliente');
		$nombre = $datos['nombre'];
		$fecha_n =$datos['fecha_nac'];//"2015-04-03";
		$dni=$datos['dni'];
		$nombre_m=$datos['madre'];
		$nombre_p=$datos['padre'];
		$telefono=$datos['telefono'];
		$grado=$datos['estudios'];
		$ocupacion=$datos['ocupacion'];
		$motivo=$datos['motivo'];
		$conclusion=$informe['conclusiones'];
		$observacion=$informe['observacion'];
		$recomendacion = $informe['recomendaciones'];
		
		$this->calcular_edad($fecha_n);		

		$edad_y = $GLOBALS['edad_y'];
		$edad_m = $GLOBALS['edad_m'];
		$edad_d = $GLOBALS['edad_d'];
		$days = $GLOBALS['days'];		


		         
		         $coordinacion = 0;
		         $lenguaje = 0;
		         $motricidad = 0;
		         $contador = 0;
		         $coordinacion_b = 0;
		         $lenguaje_b = 0;
		         $motricidad_b = 0;

		         $sumatoria = 0;
		              // output data of each row

		            foreach ($res as $key) {
		            
			            	$contador++;
			            	$sumatoria = $sumatoria + $key ;
			        		$id_contador = "t_"; 
			        		
			        		if($contador == 16 ){
			        			$coordinacion = $sumatoria;
			        			$sumatoria = 0 ;
			        		}
			        		else if($contador == 40 ){
			        			$lenguaje = $sumatoria;
			        			$sumatoria = 0 ;
			        		}
			        		else if($contador == 52 ){
			        			$motricidad = $sumatoria;
			        			$sumatoria = 0 ;
			        		}
		        			
		        	}
		         $coordinacion_b =$coordinacion;
		         $lenguaje_b =$lenguaje ;
		         $motricidad_b = $motricidad;
	


/////////////////////////////////////////////////////////////////////////////////
//
//		Formulas generales 
// 		____________________
//
//		->Las puntuaciones T tienen media (prom=50) y Desviación estandar (DS=10)
//
//		Cumplen esta propiedad general -> (T-promT)/DST=(x-prom)/DS
//
//		z=(x-prom)/DS
//
//		T=promT+(z*DST)
//
//		x es el puntaje bruto
//
////////////////////////////////////////////////////////////////////////////////


///////////////////2 a 2,6 

		         
		         $lengProm226= 3.355;
		         $lengDS226=2.964009154;


				 $corProm226= 2.675;
		         $corDS226=1.448924;


				 $motProm226= 2.46;
		         $motDS226=1.731360568;


		         $totalProm226=8.485;
		         $totalDS226=4.88;



///////////////////2,6,1 a 3 

		         $lengProm2613= 9.81;
		         $lengDS2613=4.455;


				 $corProm2613= 5.41;
		         $corDS2613= 2.11;


				 $motProm2613= 4.6;
		         $motDS2613= 2.31;


		         $totalProm2613=19.825;
		         $totalDS2613=6.99;

///////////////////3,0,1 a 3,6


		         $lengProm30136= 13.14;
		         $lengDS30136=4.595;


				 $corProm30136= 7.535;
		         $corDS30136=2.33;


				 $motProm30136= 6.075;
		         $motDS30136=1.995;


		         $totalProm30136=26.76;
		         $totalDS30136=7.245;

///////////////////3,6,1 a 4


		         $lengProm3614= 16.635;
		         $lengDS3614=3.455;


				 $corProm3614= 6.92;
		         $corDS3614=1.985;


				 $motProm3614= 7.69;
		         $motDS3614=1.915;


		         $totalProm3614=33.745;
		         $totalDS3614=5.645;

///////////////////4,0,1 a 4,6


		         $lengProm40146= 18.325;
		         $lengDS40146=2.915;


				 $corProm40146= 10.8;
		         $corDS40146=1.76;


				 $motProm40146= 8.44;
		         $motDS40146=1.845;

		         $totalProm40146=35.065;
		         $totalDS40146=4.585;		         


///////////////////4,6,1 a 5



		         $lengProm4615= 19.845;
		         $lengDS4615=2.475;


				 $corProm4615= 12.48;
		         $corDS4615=1.85;


				 $motProm4615= 9.51;
		         $motDS4615=1.715;


		         $totalProm4615=41.92;
		         $totalDS4615=4.795;		


////////////////////////////////////////////////////////////////////////////////




///////////////////calcular 2,0,0 a 2,6,0 //prom=2.68 DS= 1.6//
		         if($days<=900/*$edad_y==2 && $edad_m<=6 && $edad_d<=0*/){

			     	 $lenguaje = ceil(((($lenguaje-$lengProm226)/$lengDS226)*10)+50);
			     	 
			     	 $coordinacion = ceil(((($coordinacion-$corProm226)/$corDS226)*10)+50);
			     	 
			     	 $motricidad = ceil(((($motricidad-$motProm226)/$motDS226)*10)+50);


		         


			         /*if($lenguaje <= 0 ){
			         	$lenguaje = 38;
			     	 }

			     	 else if($lenguaje > 0){
			     	 	$lenguaje = ($lenguaje*3)+38;
			     	 }
			     	 if($coordinacion <= 0 ){
			         	$coordinacion = 31;
			     	 }
			     	 else if($coordinacion > 0){
			     	 	$coordinacion = ($coordinacion*7)+ 31;
			     	 }
			     	 if($motricidad <= 0 ){
			         	$motricidad = 35;
			     	 }
			     	 else if($motricidad > 0){
			     	 	$motricidad = ($motricidad*6)+ 35;
			     	 }*/
		     	 }
/////////////////////////////////////////////////////////



//////////////////////calcular 2,6,1 a 3,0,0
		     	 else if(901<=$days && $days<=1080/*$edad_y>=2 && $edad_m>5 || $edad_d>=0 && $edad_y<=3*/){
			         
			     	 $lenguaje = ceil(((($lenguaje-$lengProm2613)/$lengDS2613)*10)+50);
			     	 
			     	 $coordinacion = ceil(((($coordinacion-$corProm2613)/$corDS2613)*10)+50);
			     	 
			     	 $motricidad = ceil(((($motricidad-$motProm2613)/$motDS2613)*10)+50);


			         /*if($lenguaje <= 0 ){
			         	$lenguaje = 30;
			     	 }
			     	 else if($lenguaje > 0){
			     	 	$lenguaje = ($lenguaje*2)+30;
			     	 }
			     	 if($coordinacion <= 0 ){
			         	$coordinacion = 27;
			     	 }
			     	 else if($coordinacion > 0){
			     	 	$coordinacion = ($coordinacion*4)+ 27;
			     	 }
			     	 if($motricidad <= 0 ){
			         	$motricidad = 29;
			     	 }
			     	 else if($motricidad > 0){
			     	 	$motricidad = ($motricidad*5)+ 29;
			     	 }*/
		     	 }





		     	 //calcular 3,0,1 a 3,6,0
		     	 else if(1081<=$days && $days<=1260/*$edad_y==3 && $edad_d >= 1 || $edad_d <= 0 && $edad_m < 6 */){
			         
			     	 $lenguaje = ceil(((($lenguaje-$lengProm30136)/$lengDS30136)*10)+50);
			     	 
			     	 $coordinacion = ceil(((($coordinacion-$corProm30136)/$corDS30136)*10)+50);
			     	 
			     	 $motricidad = ceil(((($motricidad-$motProm30136)/$motDS30136)*10)+50);


			         /*if($lenguaje <= 0 ){
			         	$lenguaje = 24;
			     	 }
			     	 else if($lenguaje > 0){
			     	 	$lenguaje = ($lenguaje*2)+24;
			     	 }
			     	 if($coordinacion <= 0 ){
			         	$coordinacion = 20;
			     	 }
			     	 else if($coordinacion > 0){
			     	 	$coordinacion = ($coordinacion*4)+ 20;
			     	 }
			     	 if($motricidad <= 0 ){
			         	$motricidad = 20;
			     	 }
			     	 else if($motricidad > 0){	
			     	 	$motricidad = ($motricidad*5)+ 20;
			     	 }*/
		     	 }



		     	 //calcular 3,6,1 a 4,0,0
		     	 
		     	 
		     	 else if(1261<=$days && $days<=1440/*$edad_y >= 3 && $edad_m> 6 && $edad_y <= 4*/ ){
			         
			     	 $lenguaje = ceil(((($lenguaje-$lengProm3614)/$lengDS3614)*10)+50);
			     	 
			     	 $coordinacion = ceil(((($coordinacion-$corProm3614)/$corDS3614)*10)+50);
			     	 
			     	 $motricidad = ceil(((($motricidad-$motProm3614)/$motDS3614)*10)+50);

			         
			         /*if($lenguaje <= 4 ){
			         	$lenguaje = 20;
			     	 }
			     	 else if($lenguaje > 4){
			     	 	$lenguaje = (($lenguaje-4)*2)+20;
			     	 }
			     	 if($coordinacion <= 3 ){
			         	$coordinacion = 18;
			     	 }
			     	 else if($coordinacion > 3){
			     	 	$coordinacion = (($coordinacion-3)*5)+ 18;
			     	 }
			     	 if($motricidad <= 1 ){
			         	$motricidad = 17;
			     	 }
			     	 else if($motricidad > 1){
			     	 	$motricidad = (($motricidad-1)*5)+ 17;
			     	 }*/
		     	 }




		     	 //calcular 4,0,1 a 4,6,0
		     	 else if(1441<=$days && $days<=1620/*$edad_y==4 && $edad_m <6*/){


			     	 $lenguaje = ceil(((($lenguaje-$lengProm40146)/$lengDS40146)*10)+50);
			     	 
			     	 $coordinacion = ceil(((($coordinacion-$corProm40146)/$corDS40146)*10)+50);
			     	 
			     	 $motricidad = ceil(((($motricidad-$motProm40146)/$motDS40146)*10)+50);


			         /*if($lenguaje <= 8 ){
			         	$lenguaje = 18;
			     	 }
			     	 else if($lenguaje > 8){
			     	 	$lenguaje = (($lenguaje-8)*3)+18;
			     	 }
			     	 if($coordinacion <= 5 ){
			         	$coordinacion = 19;
			     	 }
			     	 else if($coordinacion > 5){
			     	 	$coordinacion = (($coordinacion-5)*5)+ 19;
			     	 }
			     	 if($motricidad <= 3 ){
			         	$motricidad = 20;
			     	 }
			     	 else if($motricidad > 3){	
			     	 	$motricidad = (($motricidad-3)*6)+ 20;
			     	 }*/
		     	 }




		     	 //calcular 4,5 a 5
		     	 else if(1621<=$days && $days<=1800/*$edad_y >=4 && $edad_m > 5 && $edad_y <= 5*/){

			         
			     	 $lenguaje = ceil(((($lenguaje-$lengProm4615)/$lengDS4615)*10)+50);
			     	 
			     	 $coordinacion = ceil(((($coordinacion-$corProm4615)/$corDS4615)*10)+50);
			     	 
			     	 $motricidad = ceil(((($motricidad-$motProm4615)/$motDS4615)*10)+50);


			         /*if($lenguaje <= 10 ){
			         	$lenguaje = 18;
			     	 }
			     	 else if($lenguaje > 10){
			     	 	//$lenguaje = ($lenguaje*2)+1;
			     	 	$lenguaje = (($lenguaje-10)*3)+18;
			     	 }
			     	 if($coordinacion <= 6 ){
			         	$coordinacion = 17;
			     	 }
			     	 else if($coordinacion > 6){
			     	 	//$coordinacion = ($coordinacion*3)+($coordinacion-5);
			     	 	$coordinacion = (($coordinacion-6)*5)+ 17;
			     	 }
			     	 if($motricidad <= 4 ){
			         	$motricidad = 18;
			     	 }
			     	 else if($motricidad > 4){
			     	 	//$motricidad = ($motricidad*5)+ ($motricidad - 7);
			     	 	$motricidad = (($motricidad-4)*6)+ 18;
			     	 }*/
		     	 }



		     	 $lenguaje_t = "Normal";
		     	 $coordinacion_t = "Normal";
		     	 $motricidad_t = "Normal";

		     	 if($lenguaje <= 30 ){
		         	$lenguaje_t = "Retraso";
		     	 }
		     	 else if($lenguaje < 40){
		     	 	$lenguaje_t = "Riesgo";
		     	 }
		     	 if($coordinacion <= 30 ){
		         	$coordinacion_t = "Retraso";
		     	 }
		     	 else if($coordinacion < 40){
		     	 	$coordinacion_t = "Riesgo";
		     	 }
		     	 if($motricidad <= 30 ){
		         	$motricidad_t = "Retraso";
		     	 }
		     	 else if($motricidad < 40){
		     	 	$motricidad_t = "Riesgo";
		     	 }
		$todayh = getdate();
			$d = $todayh['mday'];
		    $m = $todayh['mon'];
		    $y = $todayh['year'];

		$header = array('SubTest', 'Puntaje Bruto', 'Puntaje T', 'Categoria');
		// Creación del objeto de la clase heredada
		$pdf = app('FPDF');
			
		$pdf->SetMargins(20,10);
		$pdf->AliasNbPages();
		$pdf->AddPage();	
		$pdf->SetFont('Arial','',12);
		$titulo = "INFORME DE EVALUACIÓN";

		$pdf->Image('https://fotos.subefotos.com/2c92e0dce3aadadd24a73e7d2bd2f4f8o.jpg',160,null,-2000);
		//$pdf->Cell(0,10,utf8_decode('TEPSI'),0,2);		
		$pdf->Cell(0,10,utf8_decode($titulo),0,1,'C');
		$pdf->Cell(0,10,'Nombre: '.$nombre,0,1);
		$pdf->Cell(0,10,utf8_decode('Edad cronológica: '.$edad_y.' años, '.$edad_m.' meses y '.$edad_d.' días'),0,1);
		$pdf->Cell(0,10,utf8_decode('Fecha de Nacimiento: '.$fecha_n),0,1);
		$pdf->Cell(0,10,'Lugar de Nacimiento: Arequipa ',0,1);
		$pdf->Cell(0,10,'Nombre del Padre: '.$nombre_p,0,1);
		$pdf->Cell(0,10,'Nombre de la Madre: '.$nombre_m,0,1);
		$pdf->Cell(0,10,utf8_decode('Teléfono: '.$telefono),0,1);
		$pdf->Cell(0,10,utf8_decode('Nivel de escolaridad: '.$grado),0,1);
		$pdf->Cell(0,10,utf8_decode('Ocupación: '.$ocupacion),0,1);
		$pdf->Cell(0,10,'Evaluador: '.'Luis',0,1);
		$pdf->SetFont('Arial','B',12); 
		$pdf->Cell(0,10,'Motivo de consulta:',0,1);
		$pdf->SetFont('Arial','',12); 
		$pdf->Cell(0,10,utf8_decode($motivo),0,1);
		$pdf->SetFont('Arial','B',12); 
		$pdf->Cell(0,10,'Intrumentos aplicados:',0,1);
		$pdf->SetFont('Arial','',12); 
		$pdf->Cell(0,10,utf8_decode('Test de Desarrollo Psicomotor TEPSI'),0,1);
		$pdf->SetFont('Arial','B',12); 
		$pdf->Cell(0,10,'Observacion de la conducta:',0,1);
		$pdf->SetFont('Arial','',12); 
		$pdf->Cell(0,10,utf8_decode($observacion),0,1);
		$pdf->SetFont('Arial','B',12); 
		$pdf->AddPage();
		
		$pdf->Cell(0,10,'Resultados obtenidos:',0,1);

		$pdf->SetFont('Arial','B',10); 
		$pdf->Cell(0,10,'Resultados Cuantitativos:',0,1);
		$pdf->Image('http://psycotestpro.com/assets/img/tabla.png',null,null,-100);
		$pdf->Ln();
		$pdf->SetFont('Arial','',12); 
		//tabla inicio
		$w = array(40, 35, 40, 45);
		    // Header
		    for($i=0;$i<count($header);$i++)
		        $pdf->Cell($w[$i],7,$header[$i],1,0,'C');
		    $pdf->Ln();
		    // Data
		    
		        $pdf->Cell($w[0],6,'Coordinacion','LR');
		        $pdf->Cell($w[1],6,$coordinacion_b,'LR');
		        $pdf->Cell($w[2],6,$coordinacion,'LR',0,'R');
		        $pdf->Cell($w[3],6,$coordinacion_t,'LR',0,'R');
		        $pdf->Ln();
		        $pdf->Cell($w[0],6,'Lenguaje','LR');
		        $pdf->Cell($w[1],6,$lenguaje_b,'LR');
		        $pdf->Cell($w[2],6,$lenguaje,'LR',0,'R');
		        $pdf->Cell($w[3],6,$lenguaje_t,'LR',0,'R');
		        $pdf->Ln();
		        $pdf->Cell($w[0],6,'Motricidad','LR');
		        $pdf->Cell($w[1],6,$motricidad_b,'LR');
		        $pdf->Cell($w[2],6,$motricidad,'LR',0,'R');
		        $pdf->Cell($w[3],6,$motricidad_t,'LR',0,'R');
		        $pdf->Ln();

		    
		    // Closing line
		$pdf->Cell(array_sum($w),0,'','T');
		//tabla fin
		$pdf->Ln();

		// Inserta una imagen dinámica a través de una URL
		$pdf->SetFont('Arial','B',10); 
		$pdf->Cell(0,10,'Resultados Cualitativos:',0,1);

		$pdf->SetFont('Arial','B',8); 
		$pdf->Cell(0,10,utf8_decode('Puntuación total:'),0,1);
		if($coordinacion_t == "Normal"){
		$pdf->MultiCell(180,8,utf8_decode('Acorde a lo que se espera para un niño de su edad, es capaz de realizar satisfactoriamente la mayoría de los ítems de la prueba.'),0,1);
		}
		elseif ($coordinacion_t == "Riesgo") {
			# code...
			$pdf->MultiCell(180,8,utf8_decode('Por debajo de los niños de su edad. El área en la que presenta más dificultades es “coordinacion”, seguida de “lenguaje”.'),0,1);
		}
		elseif ($coordinacion_t == "Retraso") {
			# code...
			$pdf->MultiCell(180,8,utf8_decode('Su puntuación esta muy por debajo de lo que se espera para un niño de su edad. El área en la que presenta más dificultades es La que presenta más dificultades "cooridnacion", seguida de “lenguaje” y “motricidad”.'),0,1);
		}
		$pdf->SetFont('Arial','B',10); 
		$pdf->Cell(0,10,utf8_decode('Sub-test de coordinación :'),0,1);
		$pdf->SetFont('Arial','',12); 
		if($coordinacion_t == "nNrmal"){
		$pdf->MultiCell(180,8,utf8_decode('Acorde a lo que se espera para un niño de su edad. Solo respondió erróneamente a las siguientes tareas:'),0,1);
		}
		elseif ($coordinacion_t == "Riesgo") {
			# code...
			$pdf->MultiCell(180,8,utf8_decode('Se encuentra por debajo de los niños de su misma edad, presenta dificultades para realizar las siguientes tareas:'),0,1);
		}
		elseif ($coordinacion_t == "Retraso") {
			# code...
			$pdf->MultiCell(180,8,utf8_decode('Se encuentra muy por debajo de los niños de su edad, presenta dificultades para realizar las siguientes tareas:'),0,1);
		}
		$pdf->SetFont('Arial','B',10); 
		$pdf->Cell(0,10,utf8_decode('Sub-test de Lenguaje :'),0,1);
		$pdf->SetFont('Arial','',12); 
		if($lenguaje_t == "normal"){
		$pdf->MultiCell(180,8,utf8_decode('Acorde a lo que se espera para un niño de su edad. Solo respondió erróneamente a las siguientes tareas:'),0,1);
		}
		elseif ($lenguaje_t == "Riesgo") {
			# code...
			$pdf->MultiCell(180,8,utf8_decode('Se encuentra por debajo de los niños de su misma edad, presenta dificultades para realizar las siguientes tareas:'),0,1);
		}
		elseif ($lenguaje_t == "Retraso") {
			# code...
			$pdf->MultiCell(180,8,utf8_decode('Se encuentra muy por debajo de los niños de su edad, presenta dificultades para realizar las siguientes tareas:'),0,1);
		}
		$pdf->SetFont('Arial','B',10); 
		$pdf->Cell(0,10,utf8_decode('Sub-test de Motricidad :'),0,1);
		$pdf->SetFont('Arial','',12); 
		if($motricidad_t == "Normal"){
		$pdf->MultiCell(180,8,utf8_decode('Acorde a lo que se espera para un niño de su edad. Solo respondió erróneamente a las siguientes tareas:'),0,1);
		}
		elseif ($motricidad_t == "Riesgo") {
			# code...
			$pdf->MultiCell(180,8,utf8_decode('Se encuentra por debajo de los niños de su misma edad, presenta dificultades para realizar las siguientes tareas:'),0,1);
		}
		elseif ($motricidad_t == "Retraso") {
			# code...
			$pdf->MultiCell(180,8,utf8_decode('Se encuentra muy por debajo de los niños de su edad, presenta dificultades para realizar las siguientes tareas:'),0,1);
		}
		$pdf->SetFont('Arial','B',12); 
		$pdf->Cell(0,10,utf8_decode('Conclusiones'),0,1);
		$pdf->SetFont('Arial','',12); 
		$pdf->Cell(0,10,utf8_decode($conclusion),0,1);

		$pdf->Cell(100, 8, utf8_decode ('Firma del Psicologo '." ".'C.PS.P .'), 10,8, 'C');

		$pdf->Line(38,240,100,240);
		//$pdf->Cell(0,10,'Fecha de Informe:'.$y.'-'.$m.'-'.$d.'-',0,1);

		print_r(implode(",", $res));
		array_pop($datos);
		$dni = $datos['dni'];
		$bool = DB::table('paciente')->where('dni', $dni)->first();
		if($bool==""){
			DB::table('paciente')->insert($datos);

		}
		else{
			DB::table('paciente')
            		->where('id', $bool->id)
            		->update($datos);
			//print_r($bool->id);
		}
		$max = DB::table('tests')->count();
		$max_pas = DB::table('paciente')->count();
		$id_pac=$max_pas;
		if($bool!=""){
			$id_pac=$bool->id;
		}
		$array_test = array(
		    "id_paciente" => $id_pac,
		    "id_user" => Auth::user()->id,
		    "id_tipo_test" => 1,
		    "pdf"=> ("resultados_".($max+1).".pdf"),
		    "respuestas" => implode(",", $res),
		);
		DB::table('tests')->insert($array_test);
		
		$pdf->Output("resultados_".($max+1).".pdf",'F');
		return redirect("resultados_".($max+1).".pdf");
		exit;
    }
}
