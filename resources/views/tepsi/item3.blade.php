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
        <link rel="stylesheet" type="text/css" href="{{asset('css/estilos.css')}}">
</head>

<body>


<div class="container">



    <div class="card mt-3 mb-3">
      <div class="card-header">
        <h4 class="" id="">Construye una torre de 8 o más cubos</h4>
      </div>
      <div class="card-body text-center p-2">
                 <div class="row justify-content-center align-items-center">
                    <div class="col-lg-6">
                        <img class="img-fluid rounded-sm border mb-2 " alt="" src="{{asset('img/tepsi/img_cubos.png')}}" />
                    </div>
 
                    <div class="col-lg-5 align-self-center">
                                        
                        <div class="row-fluid rounded-sm border mb-2">
                            <h4>Materiales:</h4> <p>Doce cubos</p>
                        </div>

                        <div class="row-fluid rounded-sm border mb-2">
                            <h4>Ubicación:</h4> <p>El examinador y el niño sentados junto a la mesa</p>
                        </div>

                        <div class="row-fluid rounded-sm border mb-2">
                             <h4>Administración:</h4> <p>El examinador pone los cubos sobre la mesa y hace una torre de nueve cubos. Desarma la torre y dice al niño: <strong class="text-danger">"Haz una torre tu"</strong>. El examinador debe registrar la cantidad de cubos que el niño coloca en su torre.</p>
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
                            <h4>Criterio de aprobación:</h4>

                            <p class="mb-1">El niño forma una torre de 8 o más cubos.</p>
                                <div class="text-center">
                                   <form  method="post" action="{{ route('post_numero') }}">
                                    @csrf
                                    <input type="hidden" name="id" value="3">
                                    <input class="form-inp mb-1" name ="numero" type="search" placeholder="Número de cubos" aria-label="Search">
                                    <button class="btn btn-primary mb-1" type="submit">Calificar</button>
                                  </form>
                                </div>
                        </div>
                    </div>

      </div>
    </div>

</div>



</body>

</html>