<!DOCTYPE html>

<html>

<head>

        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>TEPSI | PSYCOTESTPRO</title>

        <link rel="icon" href="fav.png" type="image/x-icon" />
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
        <meta charset="utf-8">

        <!-- Scripts -->
        

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
        <h4 class="" id="">Conoce la utilidad de objetos</h4>
      </div>
      <div class="card-body text-center p-2">
          <form  method="post" action="{{ route('post_options') }}">
                 @csrf
                  <input type="hidden" name="id" value="23">
                 <div class="row justify-content-center align-items-center">
                    <div class="col-lg-6">



                          <div id="carouselExampleControls" class="carousel slide mb-2" data-ride="carousel" data-interval="false">
                            <div class="carousel-inner">
                              <div class="carousel-item active">
                                <h2>¿Para qué sirve la cuchara?</h2>
                                <div data-toggle="tooltip" data-placement="bottom" title="Anota la respuesta del niño y califícala antes de pasar a la siguiente pregunta">
                                 <input class="form-carr mb-1" type="text"  name="text-1">
                                  <div class="btn-group btn-group-toggle mb-1" data-toggle="buttons">
                                      <label class="btn btn-success" href="#carouselExampleControls" role="button" data-slide="next">
                                         <input type="radio" name="options-1" value="1"  /> Logrado
                                      </label>

                                      <label class="btn btn-danger"  href="#carouselExampleControls" role="button" data-slide="next">
                                         <input type="radio" name="options-1" value="0" /> No logrado
                                      </label>
                                  </div>
                                </div>   
                              </div>




                              <div class="carousel-item">
                                <h2>¿Para qué sirve el lápiz?</h2>
                                <div data-toggle="tooltip" data-placement="bottom" title="Anota la respuesta del niño y califícala antes de pasar a la siguiente pregunta">
                                 <input class="form-carr mb-1" type="text"  name="text-2">
                                  <div class="btn-group btn-group-toggle mb-1" data-toggle="buttons">
                                      <label class="btn btn-success" href="#carouselExampleControls" role="button" data-slide="next">
                                         <input type="radio" name="options-2" value="1"  /> Logrado
                                      </label>

                                      <label class="btn btn-danger"  href="#carouselExampleControls" role="button" data-slide="next">
                                         <input type="radio" name="options-2" value="0" /> No logrado
                                      </label>
                                  </div>
                                </div>   
                              </div>


 

                              <div class="carousel-item">
                                <h2>¿Para qué sirve el jabón?</h2>
                                <div data-toggle="tooltip" data-placement="bottom" title="Anota la respuesta del niño y califícala antes de pasar a la siguiente pregunta">
                                 <input class="form-carr mb-1" type="text"  name="text-3">
                                  <div class="btn-group btn-group-toggle mb-1" data-toggle="buttons">
                                      <label class="btn btn-success" href="#carouselExampleControls" role="button" data-slide="next">
                                         <input type="radio" name="options-3" value="1"  /> Logrado
                                      </label>

                                      <label class="btn btn-danger"  href="#carouselExampleControls" role="button" data-slide="next">
                                         <input type="radio" name="options-3" value="0" /> No logrado
                                      </label>
                                  </div>
                                </div>   
                              </div>



                              <div class="carousel-item">
                                <h2>¿Para qué sirve la escoba?</h2>
                                <div data-toggle="tooltip" data-placement="bottom" title="Anota la respuesta del niño y califícala antes de pasar a la siguiente pregunta">
                                  <input class="form-carr mb-1" type="text"  name="text-4">
                                  <div class="btn-group btn-group-toggle mb-1" data-toggle="buttons">
                                      <label class="btn btn-success" href="#carouselExampleControls" role="button" data-slide="next">
                                         <input type="radio" name="options-4" value="1"  /> Logrado
                                      </label>

                                      <label class="btn btn-danger"  href="#carouselExampleControls" role="button" data-slide="next">
                                         <input type="radio" name="options-4" value="0" /> No logrado
                                      </label>
                                  </div>
                                </div>   
                              </div>



                              <div class="carousel-item">
                                <h2>¿Para qué sirve la cama?</h2>
                                <div data-toggle="tooltip" data-placement="bottom" title="Anota la respuesta del niño y califícala antes de pasar a la siguiente pregunta">
                                  <input class="form-carr mb-1" type="text"  name="text-5">
                                  <div class="btn-group btn-group-toggle mb-1" data-toggle="buttons">
                                      <label class="btn btn-success" href="#carouselExampleControls" role="button" data-slide="next">
                                         <input type="radio" name="options-5" value="1"  /> Logrado
                                      </label>

                                      <label class="btn btn-danger"  href="#carouselExampleControls" role="button" data-slide="next">
                                         <input type="radio" name="options-5" value="0" /> No logrado
                                      </label>
                                  </div>
                                </div>   
                              </div>




                              <div class="carousel-item">
                                <h2>¿Para qué sirve la tijera?</h2>
                                <div data-toggle="tooltip" data-placement="bottom" title="Anota la respuesta del niño y califícala antes de pasar a la siguiente pregunta">
                                  <input class="form-carr mb-1" type="text"  name="text-6">
                                  <div class="btn-group btn-group-toggle mb-1" data-toggle="buttons">
                                      <label class="btn btn-success" href="#carouselExampleControls" role="button" data-slide="next">
                                         <input type="radio" name="options-6" value="1"  /> Logrado
                                      </label>

                                      <label class="btn btn-danger"  href="#carouselExampleControls" role="button" data-slide="next">
                                         <input type="radio" name="options-6" value="0" /> No logrado
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
                            <h4>Materiales:</h4> <p class="m-1">-</p>
                        </div>

                        <div class="row-fluid rounded-sm border mb-2">
                            <h4>Ubicación:</h4> <p class="m-1">Examinador y niño sentados junto a la mesa</p>
                        </div>

                        <div class="row-fluid rounded-sm border mb-2">
                             <h4>Administración:</h4> <p class="m-1">El examinador hace las siguientes preguntas al niño: <strong class="text-danger">"¿Para qué sirve… la cuchara, el lápiz, el jabón, la escoba, la cama, la tijera?"</strong>. El examinador debe registrar textualmente cada respuesta del niño.</p>
                        
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
                            <h4>Criterio de aprobación:</h4> <p class="m-1">Si el niño verbaliza la utilidad de al menos 4 objetos, señalando la acción más frecuente que con ellos desempeña (comer, escribir o dibujar, lavarse, barrer, descansar o dormir, cortar y recortar).</p>

                                    <button class="btn btn-primary mb-1" type="submit">Calificar</button>

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