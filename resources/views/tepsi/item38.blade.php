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
        <h4 class="" id="">Reconoce antes y después</h4>
      </div>
      <div class="card-body text-center p-2">
                 <div class="row justify-content-center align-items-center">
                    <div class="col-lg-6">
                        <img class="img-fluid rounded-sm border mb-2 " alt="" src="{{asset('img/tepsi/laminas/lam17_sm.png')}}" />
                    </div>
 
                    <div class="col-lg-5 align-self-center">
                                        
                        <div class="row-fluid rounded-sm border mb-2">
                            <h4>Materiales:</h4> <p>Lamina 17</p>
                        </div>

                        <div class="row-fluid rounded-sm border mb-2">
                            <h4>Ubicación:</h4> <p>Examinador y niño sentados junto a la mesa</p>
                        </div>

                        <div class="row-fluid rounded-sm border mb-2">
                             <h4>Administración:</h4> <p class="mb-1">El examinador presenta al niño la lámina 17 y le pregunta: <strong class="text-danger">"¿Qué pasó antes, que paso primero?"</strong>. Espera la respuesta del niño y luego dice: <strong class="text-danger">"¿Qué paso después?"</strong>.</p>


                            <button type="button" class="btn btn-secondary mb-1" data-toggle="modal" data-target="#exampleModalCenter">
                                Mostrar lamina
                            </button>

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

                            <p class="mb-1">Si el niño señala correctamente la lámina que corresponde a cada pregunta. Debe responder correctamente a las dos preguntas.</p>
                                <div class="text-center">

                                    <div class="btn-group btn-group-toggle mb-2">
                                        <form  method="post" action="{{ route('post_res') }}">
                                                 @csrf
                                                <input type="hidden" name="id" value="38">
                                                <input type="hidden" name="res" value="1">
                                                <button class="btn btn-success" type="submit" value="Logrado" /> 
                                                Logrado
                                                </button>
                                        
                                        </form>
                                         <form action="{{ route('post_res') }}" method="post">
                                                 @csrf
                                                <input type="hidden" name="id" value="38">
                                                <input type="hidden" name="res" value="0">
                                                <input class="btn btn-danger" type="submit" value="No logrado" name="options" id="option1" autocomplete="off" /> 
                                        
                                        </form>
                                    </div>

                                </div>
                        </div>
                    </div>


                             <div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                              <div class="modal-dialog modal-xl modal-dialog-centered" role="document">
                                <div class="modal-content">
                                  <div class="modal-header">
                                    <h5 class="modal-title" id="exampleModalLongTitle">Lamina 16 (antes - despues)</h5>
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                      <span aria-hidden="true">&times;</span>
                                    </button>
                                  </div>
                                  <div class="modal-body">
                                    

                                        <img class="img-fluid m-1 p-1" alt="" src="{{asset('img/tepsi/laminas/lam17_lg.png')}}" />

                 
                                    
                                  </div>
                                </div>
                              </div>
                            </div>    


      </div>
    </div>

</div>



</body>

</html>