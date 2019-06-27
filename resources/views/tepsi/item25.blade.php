<!DOCTYPE html>

<html>

<head>

        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>TEPSI | PSYCOTESTPRO</title>

        <link rel="icon" href="fav.png" type="image/x-icon" />
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
        <meta charset="utf-8">

        <!-- Scripts -->
        
        
        <!-- Fonts -->

        <!-- Styles -->
        <link rel="stylesheet" type="text/css" href="{{asset('css/app.css')}}">
        <link rel="stylesheet" type="text/css" href="{{asset('css/estilos.css')}}">



</head>

<body>


<div class="container">

    <div class="card mt-3 mb-3">
      <div class="card-header">
        <h4 class="" id="">Verbaliza su nombre y apellido</h4>
      </div>
      <div class="card-body text-center p-2">
         <form  method="post" action="{{ route('post_res_text') }}">
                 @csrf
                  <input type="hidden" name="id" value="25">
                 <div class="row justify-content-center align-items-center">
                    <div class="col-lg-6">



                              <div class="">
                                <h2>Nombre del niño/a:</h2>
                                <p>"$Nombre"+"  $Apellido" </p>
                                <div data-toggle="tooltip" data-placement="bottom" title="Anota la respuesta del niño">
                                  <input class="form-carr mb-1" type="text"  name="text-1">
                                </div>   
                              </div>




                    </div>

 
                    <div class="col-lg-5 align-self-center">
                                        
                        <div class="row-fluid rounded-sm border mb-2">
                            <h4>Materiales:</h4> <p class="m-1">-</p>
                        </div>

                        <div class="row-fluid rounded-sm border mb-2">
                            <h4>Ubicación:</h4> <p class="m-1">Examinador y niño sentados junto a la mesa</p>
                        </div>

                        <div class="row-fluid rounded-sm border mb-2">
                             <h4>Administración:</h4> <p class="m-1">El examinador pregunta al niño: <strong class="text-danger">"¿Cómo te llamas?"</strong> o <strong class="text-danger">"¿Cuál es tu nombre?"</strong>. Si el niño dice solo su nombre y no su apellido se le dice: <strong class="text-danger">"¿Y qué más?"</strong>.</p>
                        
                        </div>

                    </div>

                </div>

                <div class="row justify-content-center align-items-center">
            
                    <div class="col-lg-6">
                        <div class="row-fluid rounded-sm  mb-1">
                            <button type="button" class="btn btn-primary mb-1 mt-1" data-dismiss="modal" onClick="history.back()">Atras</button>

                        </div> 
                         
                    </div>
                                        
                    <div class="col-lg-5">

                        <div class="row-fluid rounded-sm border mb-1">
                            <h4>Criterio de aprobación:</h4> <p class="m-1">Si el niño verbaliza adecuadamente su nombre y apellido. Se aceptan sobrenombres y errores de pronunciación.</p>

                            <div class="btn-group btn-group-toggle mb-2" data-toggle="buttons">
                                   <button class="btn btn-success" type="submit" name="options" value="1" /> 
                                        Logrado
                                </button>

                                <button class="btn btn-danger" type="submit" name="options" value="0" /> 
                                        No logrado
                                </button>
                            </div>

                        </div>
                    </div>


        

      </div>
    </div>

</div>


</body>

</html>