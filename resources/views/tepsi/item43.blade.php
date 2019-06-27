<!DOCTYPE html>

<html>

<head>

        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>TEPSI | PSYCOTESTPRO</title>

        <link rel="icon" href="fav.png" type="image/x-icon" />
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
        <meta charset="utf-8">

        <!-- Scripts -->
        <script src="{{ asset('/js/app.js') }}" defer></script>
        
        <!-- Fonts -->

        <!-- Styles -->
        <link rel="stylesheet" type="text/css" href="{{asset('css/app.css')}}">

</head>

<body>


<div class="container">


    <div class="card mt-3 mb-3">
      <div class="card-header">
        <h4 class="" id="">Lanza una pelota en una dirección determinada</h4>
      </div>
      <div class="card-body text-center p-2 ">
                 <div class="row justify-content-center align-items-center">
                    <div class="col-lg-6">
                        <img class="img-fluid rounded-sm border mb-2 " alt="" src="{{asset('img/tepsi/img_cubos.png')}}" />
                    </div>
 
                    <div class="col-lg-5 align-self-center">
                                        
                        <div class="row-fluid rounded-sm border mb-2">
                            <h4>Materiales:</h4> <p>Pelota</p>
                        </div>

                        <div class="row-fluid rounded-sm border mb-2">
                            <h4>Ubicación:</h4> <p>Examinador de pie frente al niño a un metro de distancia</p>
                        </div>

                        <div class="row-fluid rounded-sm border mb-2">
                             <h4>Administración:</h4> <p>El examinador entrega la pelota al niño en una mano, se coloca a un metro de distancia y le dice: <strong class="text-danger">"Tíramela"</strong>.</p>
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
                            <h4>Criterio de aprobación:</h4> <p>Si el niño lanza la pelota con una mano al cuerpo del examinador.</p>

                            <div class="btn-group btn-group-toggle mb-2" >
                                <form  method="post" action="{{ route('post_res') }}">
                                         @csrf
                                        <input type="hidden" name="id" value="43">
                                        <input type="hidden" name="res" value="1">
                                        <button class="btn btn-success" type="submit" value="Logrado" /> 
                                        Logrado
                                        </button>
                                
                                </form>
                                 <form action="{{ route('post_res') }}" method="post">
                                         @csrf
                                        <input type="hidden" name="id" value="43">
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