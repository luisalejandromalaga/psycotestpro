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

</head>

<body>


<div class="container">


    <div class="card mt-3 mb-3">
      <div class="card-header">
        <h4 class="" id="">Enhebra una aguja</h4>
      </div>
      <div class="card-body text-center p-2 ">
                 <div class="row justify-content-center align-items-center">
                    <div class="col-lg-6">
                        <img class="img-fluid rounded-sm border mb-2" alt="" src="{{asset('img/tepsi/img_hilo.png')}}" />
                    </div>
 
                    <div class="col-lg-5 align-self-center">
                                        
                        <div class="row-fluid rounded-sm border mb-2">
                            <h4>Materiales:</h4> <p>Aguja de lana, hilo</p>
                        </div>

                        <div class="row-fluid rounded-sm border mb-2">
                            <h4>Ubicación:</h4> <p>Examinador y niño de pie, uno frente a otro</p>
                        </div>

                        <div class="row-fluid rounded-sm border mb-2">
                             <h4>Administración:</h4> <p>El examinador enhebra la aguja frente al niño en un solo movimiento. La mano que sujeta la aguja debe estar fija y la que sujeta el hilo debe moverse hacia el orificio de la aguja. Luego de retirar el hilo le pasa al niño la aguja en una mano y enseguida el hilo en la otra diciéndole: <strong class="text-danger">"Ahora hazlo tú"</strong>. Se permiten 3 intentos.</p>
                        </div>

                    </div>

                </div>

                <div class="row justify-content-center align-items-center">
            
                    <div class="col-lg-6">
                        <div class="row-fluid rounded-sm  mb-2">
                            <button type="button" class="btn btn-primary mb-1 mt-1" data-dismiss="modal" onClick="history.back()">Atras</button>
                        </div> 
                         
                    </div>
                                        
                    <div class="col-lg-5">

                        <div class="row-fluid rounded-sm border mb-1">
                            <h4>Criterio de aprobación:</h4> <p>Si el niño enhebra la aguja (tiene 3 intentos).</p>

                            <div class="btn-group btn-group-toggle mb-2" data-toggle="buttons">
                                 <form  method="post" action="{{ route('post_res') }}">
                                         @csrf
                                        <input type="hidden" name="id" value="6">
                                        <input type="hidden" name="res" value="1">
                                        <button class="btn btn-success" type="submit" value="Logrado" /> 
                                        Logrado
                                        </button>
                                
                                </form>
                                 <form action="{{ route('post_res') }}" method="post">
                                         @csrf
                                        <input type="hidden" name="id" value="6">
                                        <input type="hidden" name="res" value="0">
                                        <input class="btn btn-danger" type="submit" value="No logrado" name="options" id="option1" autocomplete="off" /> 
                                
                                </form>
                            </div>
                        </div>
                    </div>

      </div>
    </div>

</div>


</body>

</html>