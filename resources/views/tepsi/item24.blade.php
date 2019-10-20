@extends('tepsi')

@section('title')
TEPSI | Item 21/47
@endsection


<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.0/jquery.min.js"></script>
@section('content')


<div class="container">

    <div class="card mt-3 mb-3">
      <div class="card-header">
        <h4 class="" id="">Discrimina pesado y liviano</h4>
      </div>
      <div class="card-body text-center p-2">
          <form  method="post" action="{{ route('post_options') }}">
                 @csrf
                  <input type="hidden" name="id" value="24">
                 <div class="row justify-content-center align-items-center">
                    <div class="col-lg-6" data-toggle="tooltip" data-placement="bottom" title="Seleccionar las resuestas correctas">
                        <img class="img-fluid m-1 p-1" alt="" src="{{asset('img/tepsi/img_almohada.png')}}" />
                          <div class="row mb-2">               
                            <div class="col">
                              <div class="custom-control custom-checkbox mr-sm-2">
                                <input type="checkbox" class="custom-control-input" name ="opt-1" id="grande">
                                <label class="custom-control-label" for="grande">Pesada</label>
                              </div>
                            </div>

                            <div class="col ">                           
                              <div class="custom-control custom-checkbox mr-sm-2">
                                <input type="checkbox" class="custom-control-input" name ="opt-2" id="chico">
                                <label class="custom-control-label" for="chico">Liviana</label>
                              </div>
                            </div>
                          </div>

                    </div>
 
                    <div class="col-lg-5 align-self-center">
                                        
                        <div class="row-fluid rounded-sm border mb-2">
                            <h4>Materiales:</h4> <p class="m-1">Bolsa con arena, bolsa con esponja</p>
                        </div>

                        <div class="row-fluid rounded-sm border mb-2">
                            <h4>Ubicación:</h4> <p class="m-1">Examinador y niño sentados junto a la mesa</p>
                        </div>

                        <div class="row-fluid rounded-sm border mb-2">
                             <h4>Administración:</h4> <p class="m-1">El examinador coloca en una mano del niño la bolsa rellena con arena y en la otra, la bolsa rellena con esponja. Enseguida le dice: <strong class="text-danger">"Dame la más pesada"</strong>. Luego de colocar nuevamente las bolsas en las manos del niño le die: <strong class="text-danger">"Dame la más liviana"</strong>. </p>
                          
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
                            <h4>Criterio de aprobación:</h4> <p class="m-1">Si el niño responde correctamente a los dos ordenes.</p>

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