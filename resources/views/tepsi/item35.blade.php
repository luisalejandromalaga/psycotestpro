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

        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.0/jquery.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>        
        
        <!-- Fonts -->

        <!-- Styles -->
        <link rel="stylesheet" type="text/css" href="{{asset('css/app.css')}}">
        <link rel="stylesheet" type="text/css" href="{{asset('css/estilos.css')}}">



</head>

<body>


<div class="container">

    <div class="card mt-3 mb-3">
      <div class="card-header">
        <h4 class="" id="">Describe escenas</h4>
      </div>
      <div class="card-body text-center p-2">
         <form  method="post" action="{{ route('post_res_text') }}">
                 @csrf
                  <input type="hidden" name="id" value="35">
                 <div class="row justify-content-center align-items-center">
                    <div class="col-lg-6">



                          <div id="carouselExampleControls" class="carousel slide mb-2" data-ride="carousel" data-interval="false">
                            <div class="carousel-inner">
                              <div class="carousel-item active">
                                <img class="img-fluid m-1 p-1" alt="Third slide" src="{{asset('img/tepsi/laminas/lam13_sm.png')}}" />
                                <div data-toggle="tooltip" data-placement="bottom" title="Anota la respuesta del niño y califícala antes de pasar a la siguiente imagen">

                                  <input class="form-carr mb-1" type="text"  name="text-1">
                                  <div class="btn-group btn-group-toggle mb-1" data-toggle="buttons">
                                      <label class="btn btn-success" href="#carouselExampleControls" role="button" data-slide="next">
                                        Siguiente
                                      </label>
                                  </div>
                                </div>   
                              </div>


 

                              <div class="carousel-item">
                                <img class="img-fluid m-1 p-1" alt="Third slide" src="{{asset('img/tepsi/laminas/lam14_corte.png')}}" />
                                <div data-toggle="tooltip" data-placement="bottom" title="Anota la respuesta del niño y califícala antes de pasar a la siguiente imagen">
                                  <input class="form-carr mb-1" type="text"  name="text-2">
                                  <div class="btn-group btn-group-toggle mb-1" data-toggle="buttons">
                                      <label class="btn btn-success" href="#carouselExampleControls" role="button" data-slide="next">
                                        Siguiente
                                      </label>
                                  </div>
                                </div>    
                              </div>



                              <div class="carousel-item">
                                <img class="img-fluid m-1 p-1" alt="Third slide" src="{{asset('img/tepsi/laminas/lam14_corriendo.png')}}" />
                                <div data-toggle="tooltip" data-placement="bottom" title="Anota la respuesta del niño y califícala antes de pasar a la siguiente imagen">
                                  <input class="form-carr mb-1" type="text"  name="text-3">
                                  <div class="btn-group btn-group-toggle mb-1" data-toggle="buttons">
                                      <label class="btn btn-success" href="#carouselExampleControls" role="button" data-slide="next">
                                        Siguiente
                                      </label>
                                  </div>
                                </div>    
                              </div>



                              <div class="carousel-item">
                                <img class="img-fluid m-1 p-1" alt="Third slide" src="{{asset('img/tepsi/laminas/lam14_bailando.png')}}" />
                                <div data-toggle="tooltip" data-placement="bottom" title="Anota la respuesta del niño y califícala antes de pasar a la siguiente imagen">
                                  <input class="form-carr mb-1" type="text"  name="text-4">
                                  <div class="btn-group btn-group-toggle mb-1" data-toggle="buttons">
                                      <label class="btn btn-success" href="#carouselExampleControls" role="button" data-slide="next">
                                        Siguiente
                                      </label>
                                  </div>
  
                                </div>    
                              </div>



                              <div class="carousel-item">
                                <img class="img-fluid m-1 p-1" alt="Third slide" src="{{asset('img/tepsi/laminas/lam14_futbol.png')}}" />
                                <div data-toggle="tooltip" data-placement="bottom" title="Anota la respuesta del niño y califícala antes de pasar a la siguiente imagen">
                                  <input class="form-carr mb-1" type="text"  name="text-5">
                                  <div class="btn-group btn-group-toggle mb-1" data-toggle="buttons">
                                      <label class="btn btn-success" href="#carouselExampleControls" role="button" data-slide="next">
                                        Siguiente
                                      </label>
                                  </div>
  
                                </div>    
                              </div>                              



                            </div>
                            <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
                              <span class="carousel-control-prev-icono" aria-hidden="true"></span>
                              <span class="sr-only">Previous</span>
                            </a>
                            <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
                              <span class="carousel-control-next-icono" aria-hidden="true"></span>
                              <span class="sr-only">Next</span>
                            </a>
                          </div>


                    </div>

 
                    <div class="col-lg-5 align-self-center">
                                        
                        <div class="row-fluid rounded-sm border mb-2">
                            <h4>Materiales:</h4> <p class="m-1">Lamina 13, Lamina 14</p>
                        </div>

                        <div class="row-fluid rounded-sm border mb-2">
                            <h4>Ubicación:</h4> <p class="m-1">Examinador y niño sentados junto a la mesa</p>
                        </div>

                        <div class="row-fluid rounded-sm border mb-2">
                             <h4>Administración:</h4> <p class="m-1">El examinador presenta al niño la primera imagen y le dice: <strong class="text-danger">"Cuéntame qué está pasando aquí"</strong>. Después de anotar la respuesta pasa a la siguiente imagen y vuelve a preguntar: <strong class="text-danger">"Cuéntame que está pasando aquí"</strong>. Debe anotarse textualmente lo que el niño dice.</p>
                        
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
<
                        <div class="row-fluid rounded-sm border mb-1">
                            <h4>Criterio de aprobación:</h4> <p class="m-1">Si el niño nombra al menos dos acciones y cuatro sustantivos o,</p>
                                <p class="m-1">Si el niño nombra al menos cuatro acciones y dos sustantivos o,</p>
                                <p class="m-1">Si el niño nombra al menos tres acciones y tres sustantivos.</p>
                                


                            <div class="btn-group btn-group-toggle mb-2" >
                                <button class="btn btn-success" type="submit" name="options" value="1" /> Logrado </button>

                                <button class="btn btn-danger" type="submit" name="options" value="0" />No logrado</button>
                            </div>

                        </div>
                    </div>


        

      </div>
    </form>
    </div>

</div>




<script>
  $(document).ready(function(){
    $('[data-toggle="tooltip"]').tooltip();   
  });
</script>

</body>

</html>