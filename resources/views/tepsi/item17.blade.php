@extends('tepsi')

@section('title')
TEPSI | Item 15/47
@endsection


<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.0/jquery.min.js"></script>

@section('content')

<div class="container">

    <div class="card mt-3 mb-3">
      <div class="card-header">
        <h4 class="" id="">Reconoce grande y chico</h4>
      </div>
      <div class="card-body text-center p-2">
           <form  method="post" action="{{ route('post_options') }}">
                 @csrf
                  <input type="hidden" name="id" value="17">
                 <div class="row justify-content-center align-items-center">
                    <div class="col-lg-6" data-toggle="tooltip" data-placement="bottom" title="Seleccionar las resuestas correctas">
                        <img class="img-fluid m-1 p-1" alt="" src="{{asset('img/tepsi/laminas/lam6_sm.png')}}" />
                          <div class="row mb-2">               
                            <div class="col">
                              <div class="custom-control custom-checkbox mr-sm-2">
                                <input type="checkbox" class="custom-control-input" name ="opt-1" id="grande">
                                <label class="custom-control-label" for="grande">Grande</label>
                              </div>
                            </div>

                            <div class="col ">                           
                              <div class="custom-control custom-checkbox mr-sm-2">
                                <input type="checkbox" class="custom-control-input" name ="opt-2" id="chico">
                                <label class="custom-control-label" for="chico">Chico</label>
                              </div>
                            </div>
                          </div>

                    </div>
 
                    <div class="col-lg-5 align-self-center">
                                        
                        <div class="row-fluid rounded-sm border mb-2">
                            <h4>Materiales:</h4> <p class="m-1">Lamina 6</p>
                        </div>

                        <div class="row-fluid rounded-sm border mb-2">
                            <h4>Ubicaci??n:</h4> <p class="m-1">Examinador y ni??o sentados junto a la mesa</p>
                        </div>

                        <div class="row-fluid rounded-sm border mb-2">
                             <h4>Administraci??n:</h4> <p class="m-1">El examinador presenta la Lamina 6 al ni??o y le dice: <strong class="text-danger">"Mu??strame el oso m??s grande"</strong>. Espera la respuesta del ni??o y dice: <strong class="text-danger">"Ahora mu??strame el oso m??s chico"</strong>.</p>
                            <button type="button" class="btn btn-secondary mb-1" data-toggle="modal" data-target="#exampleModalCenter">
                                Mostrar lamina
                            </button>
                        
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
                            <h4>Criterio de aprobaci??n:</h4> <p class="m-1">Si el ni??o responde correctamente a las dos preguntas.</p>

                                    <button class="btn btn-primary mb-1" type="submit">Calificar</button>
                        </div>
                    </div>
                            <div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                              <div class="modal-dialog modal-xl modal-dialog-centered" role="document">
                                <div class="modal-content">
                                  <div class="modal-header">
                                    <h5 class="modal-title" id="exampleModalLongTitle">Lamina 6 (grande-chico)</h5>
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                      <span aria-hidden="true">&times;</span>
                                    </button>
                                  </div>
                                  <div class="modal-body">
                                        <img class="img-fluid m-1 p-1" alt="" src="{{asset('img/tepsi/laminas/lam6_lg.png')}}" />
                                  </div>
                                </div>
                              </div>
                            </div>                   
                </div>
         </form>
      </div>
    </div>

</div>

<script>
  $(document).ready(function(){
    $('[data-toggle="tooltip"]').tooltip();   
  });
</script>

@endsection
