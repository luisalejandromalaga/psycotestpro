<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Storage;
use Illuminate\Http\Request;
use App\FPDF;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
class pdf extends Controller 
{
	public function calcular_edad($fecha_n){
			$todayh = getdate();
			$d = $todayh['mday'];
		    $m = $todayh['mon'];
		    $y = $todayh['year'];
		     $fecha_n;
		    list($año,$mes, $dia ) = explode('-', $fecha_n,3);
			$dias = $dia+($mes-1)*30;
			$dias_ahora =$d+($m-1)*30;
			$dias_r = $dias_ahora- $dias+(($y-$año)*360);
			$GLOBALS['edad_y']=floor($dias_r/360);
			$GLOBALS['edad_m']=floor(($dias_r%360)/30);
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
		$edad_y = 4;
		$edad_m = 3;
		
		$this->calcular_edad($fecha_n);

		         
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
		         $coordinacion_b =$coordinacion;
		         $lenguaje_b =$lenguaje ;
		         $motricidad_b = $motricidad;
		         //print_r($res);

		         //calcular 2 a 2,6
		         if($edad_y==2 && $edad_m <6){
			         if($lenguaje <= 0 ){
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
			     	 }
		     	 }
		     	 //calcular 2,6 a 3
		     	 else if($edad_y>=2 && $edad_m > 5 && $edad_y <= 3 ){
			         if($lenguaje <= 0 ){
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
			     	 }
		     	 }
		     	 //calcular 3 a 3,5
		     	 else if($edad_y==3 && $edad_m <6){
			         if($lenguaje <= 0 ){
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
			     	 }
		     	 }
		     	 //calcular 3,6 a 4
		     	 else if($edad_y>=3 && $edad_m > 5 && $edad_y <= 4 ){
			         if($lenguaje <= 4 ){
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
			     	 }
		     	 }
		     	 //calcular 4 a 4,5
		     	 else if($edad_y==4 && $edad_m <6){
			         if($lenguaje <= 8 ){
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
			     	 }
		     	 }
		     	 //calcular 4,5 a 5
		     	 else if($edad_y >=4 && $edad_m > 5 && $edad_y <= 5 ){
			         if($lenguaje <= 10 ){
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
			     	 }
		     	 }
		     	 $lenguaje_t = "normal";
		     	 $coordinacion_t = "normal";
		     	 $motricidad_t = "normal";

		     	 if($lenguaje <= 30 ){
		         	$lenguaje_t = "retraso";
		     	 }
		     	 else if($lenguaje < 40){
		     	 	$lenguaje_t = "riesgo";
		     	 }
		     	 if($coordinacion <= 30 ){
		         	$coordinacion_t = "retraso";
		     	 }
		     	 else if($coordinacion < 40){
		     	 	$coordinacion_t = "riesgo";
		     	 }
		     	 if($motricidad <= 30 ){
		         	$motricidad_t = "retraso";
		     	 }
		     	 else if($motricidad < 40){
		     	 	$motricidad_t = "riesgo";
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
		$edad_y = 4;
		$edad_m = 3;
		
		$this->calcular_edad($fecha_n);

		         
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
		         

		         //calcular 2 a 2,6
		         if($edad_y==2 && $edad_m <6){
			         if($lenguaje <= 0 ){
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
			     	 }
		     	 }
		     	 //calcular 2,6 a 3
		     	 else if($edad_y>=2 && $edad_m > 5 && $edad_y <= 3 ){
			         if($lenguaje <= 0 ){
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
			     	 }
		     	 }
		     	 //calcular 3 a 3,5
		     	 else if($edad_y==3 && $edad_m <6){
			         if($lenguaje <= 0 ){
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
			     	 }
		     	 }
		     	 //calcular 3,6 a 4
		     	 else if($edad_y>=3 && $edad_m > 5 && $edad_y <= 4 ){
			         if($lenguaje <= 4 ){
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
			     	 }
		     	 }
		     	 //calcular 4 a 4,5
		     	 else if($edad_y==4 && $edad_m <6){
			         if($lenguaje <= 8 ){
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
			     	 }
		     	 }
		     	 //calcular 4,5 a 5
		     	 else if($edad_y >=4 && $edad_m > 5 && $edad_y <= 5 ){
			         if($lenguaje <= 10 ){
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
			     	 }
		     	 }
		     	 $lenguaje_t = "normal";
		     	 $coordinacion_t = "normal";
		     	 $motricidad_t = "normal";

		     	 if($lenguaje <= 30 ){
		         	$lenguaje_t = "retraso";
		     	 }
		     	 else if($lenguaje < 40){
		     	 	$lenguaje_t = "riesgo";
		     	 }
		     	 if($coordinacion <= 30 ){
		         	$coordinacion_t = "retraso";
		     	 }
		     	 else if($coordinacion < 40){
		     	 	$coordinacion_t = "riesgo";
		     	 }
		     	 if($motricidad <= 30 ){
		         	$motricidad_t = "retraso";
		     	 }
		     	 else if($motricidad < 40){
		     	 	$motricidad_t = "riesgo";
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
		$titulo = "INFORME DE EVALUACIÓN DEL DESARROLLO PSICOMOTOR";

		$pdf->Cell(0,10,utf8_decode($titulo),0,1,'C');
		$pdf->Cell(0,10,'Nombre: '.$nombre,0,1);
		$pdf->Cell(0,10,utf8_decode('Edad: '.$edad_y.'años y '.$edad_m.' meses'),0,1);
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
		if($coordinacion_t == "normal"){
		$pdf->MultiCell(180,8,utf8_decode('Acorde a lo que se espera para un niño de su edad, es capaz de realizar satisfactoriamente la mayoría de los ítems de la prueba.'),0,1);
		}
		elseif ($coordinacion_t == "riesgo") {
			# code...
			$pdf->MultiCell(180,8,utf8_decode('Por debajo de los niños de su edad. El área en la que presenta más dificultades es “coordinacion”, seguida de “lenguaje”.'),0,1);
		}
		elseif ($coordinacion_t == "retraso") {
			# code...
			$pdf->MultiCell(180,8,utf8_decode('Su puntuación esta muy por debajo de lo que se espera para un niño de su edad. El área en la que presenta más dificultades es La que presenta más dificultades "cooridnacion", seguida de “lenguaje” y “motricidad”.'),0,1);
		}
		$pdf->SetFont('Arial','B',10); 
		$pdf->Cell(0,10,utf8_decode('Sub-test de coordinación :'),0,1);
		$pdf->SetFont('Arial','',12); 
		if($coordinacion_t == "normal"){
		$pdf->MultiCell(180,8,utf8_decode('Acorde a lo que se espera para un niño de su edad. Solo respondió erróneamente a las siguientes tareas:'),0,1);
		}
		elseif ($coordinacion_t == "riesgo") {
			# code...
			$pdf->MultiCell(180,8,utf8_decode('Se encuentra por debajo de los niños de su misma edad, presenta dificultades para realizar las siguientes tareas:'),0,1);
		}
		elseif ($coordinacion_t == "retraso") {
			# code...
			$pdf->MultiCell(180,8,utf8_decode('Se encuentra muy por debajo de los niños de su edad, presenta dificultades para realizar las siguientes tareas:'),0,1);
		}
		$pdf->SetFont('Arial','B',10); 
		$pdf->Cell(0,10,utf8_decode('Sub-test de Lenguaje :'),0,1);
		$pdf->SetFont('Arial','',12); 
		if($lenguaje_t == "normal"){
		$pdf->MultiCell(180,8,utf8_decode('Acorde a lo que se espera para un niño de su edad. Solo respondió erróneamente a las siguientes tareas:'),0,1);
		}
		elseif ($lenguaje_t == "riesgo") {
			# code...
			$pdf->MultiCell(180,8,utf8_decode('Se encuentra por debajo de los niños de su misma edad, presenta dificultades para realizar las siguientes tareas:'),0,1);
		}
		elseif ($lenguaje_t == "retraso") {
			# code...
			$pdf->MultiCell(180,8,utf8_decode('Se encuentra muy por debajo de los niños de su edad, presenta dificultades para realizar las siguientes tareas:'),0,1);
		}
		$pdf->SetFont('Arial','B',10); 
		$pdf->Cell(0,10,utf8_decode('Sub-test de Motricidad :'),0,1);
		$pdf->SetFont('Arial','',12); 
		if($motricidad_t == "normal"){
		$pdf->MultiCell(180,8,utf8_decode('Acorde a lo que se espera para un niño de su edad. Solo respondió erróneamente a las siguientes tareas:'),0,1);
		}
		elseif ($motricidad_t == "riesgo") {
			# code...
			$pdf->MultiCell(180,8,utf8_decode('Se encuentra por debajo de los niños de su misma edad, presenta dificultades para realizar las siguientes tareas:'),0,1);
		}
		elseif ($motricidad_t == "retraso") {
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
