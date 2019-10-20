@extends('tepsi')

@section('title')
TEPSI | Item 25/47
@endsection


<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.0/jquery.min.js"></script>
@section('content')

<div class="container">

    <div class="card mt-3 mb-3">
      <div class="card-header">
        <h4 class="" id="">Da respuestas coherentes a situaciones planteadas</h4>
      </div>
      <div class="card-body text-center p-2">
         <form  method="post" action="{{ route('post_options') }}">
                 @csrf
                  <input type="hidden" name="id" value="28">
                 <div class="row justify-content-center align-items-center">
                    <div class="col-lg-6">



                          <div id="carouselExampleControls" class="carousel slide mb-2" data-ride="carousel" data-interval="false">
                            <div class="carousel-inner">
                              <div class="carousel-item active">
                                <h4>¿Qué haces tú cuando tienes hambre?</h4>
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
                                <h4>¿Que haces tú cuando estas cansado?</h4>
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
                                <h4>¿Qué haces tú cuando tienes frio?</h4>
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
                             <h4>Administración:</h4> <p class="m-1">El examinador pregunta al niño: a)<strong class="text-danger">"¿Qué haces tú cuando tienes hambre?"</strong>; b)<strong class="text-danger">"¿Que haces tú cuando estas cansado?"</strong>; c)<strong class="text-danger">"¿Qué haces tú cuando tienes frio?"</strong>. Se debe registrar textualmente cada respuesta.</p>
                        
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
                            <h4>Criterio de aprobación:</h4> <p class="m-1">Si el niño da una respuesta coherente a al menos dos de las tres situaciones planteadas. Respuestas aceptadas: a) Comer b) Descanso, me acuesto, me siento c) Me abrigo, me pongo chaleco o parka, gorro.</p>

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

@endsection