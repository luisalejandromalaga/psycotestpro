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
        <h4 class="" id="">Comprende preposiciones</h4>
      </div>
      <div class="card-body text-center p-2">
         <form  method="post" action="{{ route('post_options') }}">
                 @csrf
                  <input type="hidden" name="id" value="29">
                 <div class="row justify-content-center align-items-center">
                    <div class="col-lg-6">



                          <div id="carouselExampleControls" class="carousel slide mb-2" data-ride="carousel" data-interval="false">
                            <div class="carousel-inner">
                              <div class="carousel-item active">
                                <h4>Pon el lápiz detrás de la silla</h4>
                                <div data-toggle="tooltip" data-placement="bottom" title="Anota la respuesta del niño y califícala antes de pasar a la siguiente pregunta">
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
                                <h4>Pon el lápiz sobre la mesa</h4>
                                <div data-toggle="tooltip" data-placement="bottom" title="Anota la respuesta del niño y califícala antes de pasar a la siguiente pregunta">
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
                                <h4>Pon el lápiz bajo la silla</h4>
                                <div data-toggle="tooltip" data-placement="bottom" title="Anota la respuesta del niño y califícala antes de pasar a la siguiente pregunta">
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
                            <h4>Materiales:</h4> <p class="m-1">Lápiz</p>
                        </div>

                        <div class="row-fluid rounded-sm border mb-2">
                            <h4>Ubicación:</h4> <p class="m-1">Examinador y niño de pie junto a la mesa</p>
                        </div>

                        <div class="row-fluid rounded-sm border mb-2">
                             <h4>Administración:</h4> <p class="m-1">El examinador da las siguientes instrucciones: a)<strong class="text-danger">"Pon el lápiz detrás de la silla"</strong>; b)<strong class="text-danger">"Pon el lápiz sobre la mesa"</strong>; c)<strong class="text-danger">"Pon el lápiz bajo la silla"</strong>. El examinador debe cuidar de no mirar ni indicar con su gesto la ubicación solicitada al niño y debe registrar el cumplimiento de cada orden por separado.</p>
                        
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
                            <h4>Criterio de aprobación:</h4> <p class="m-1">Si el niño ejecuta al menos dos de las instrucciones de forma correcta.</p>

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