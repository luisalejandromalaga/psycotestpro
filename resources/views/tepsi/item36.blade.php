@extends('tepsi')

@section('title')
TEPSI | Item 33/47
@endsection


<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.0/jquery.min.js"></script>
@section('content')


<div class="container">



    <div class="card mt-3 mb-3">
      <div class="card-header">
        <h4 class="" id="">Reconoce absurdos</h4>
      </div>
      <div class="card-body text-center p-2">
                 <div class="row justify-content-center align-items-center">
                    <div class="col-lg-6">
                        <img class="img-fluid rounded-sm border mb-2 " alt="" src="{{asset('img/tepsi/laminas/lam15_sm.png')}}" />
                    </div>
 
                    <div class="col-lg-5 align-self-center">
                                        
                        <div class="row-fluid rounded-sm border mb-2">
                            <h4>Materiales:</h4> <p>Lamina 15</p>
                        </div>

                        <div class="row-fluid rounded-sm border mb-2">
                            <h4>Ubicación:</h4> <p>Examinador y niño sentados junto a la mesa</p>
                        </div>

                        <div class="row-fluid rounded-sm border mb-2">
                             <h4>Administración:</h4> <p class="mb-1">El examinador presenta al niño la Lamina 15 y le dice: <strong class="text-danger">"Mira bien este dibujo: ¿Qué tiene de raro?"</strong>. Se debe observar la expresión del niño y registrar en forma exacta la respuesta.</p>


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

                            <p class="mb-1">Si el niño verbaliza lo absurdo de la situación presentada. Ejemplo: "el zapato en el plato", "los zapatos no se comen" y/o señala lo absurdo con una expresión de risa en su rostro.</p>
                                <div class="text-center">
                                   <form  method="post" action="{{ route('post_res_text') }}">
                                     @csrf
                                      <input type="hidden" name="id" value="36">
                                    <input class="form-inp mb-1" name="text-1" type="search" placeholder="Respuesta del niño" aria-label="Search">

                                    <div class="btn-group-toggle mb-2" >
                                        <button class="btn btn-success m-1" type="submit" name="options" value="1" /> Logrado </button>

                                        <button class="btn btn-danger m-1" type="submit" name="options" value="0" />No logrado</button>
                                    </div>

                                  </form>
                                </div>
                        </div>
                    </div>


                             <div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                              <div class="modal-dialog modal-xl modal-dialog-centered" role="document">
                                <div class="modal-content">
                                  <div class="modal-header">
                                    <h5 class="modal-title" id="exampleModalLongTitle">Lamina 15 (absurdos)</h5>
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                      <span aria-hidden="true">&times;</span>
                                    </button>
                                  </div>
                                  <div class="modal-body">
                                    

                                        <img class="img-fluid m-1 p-1" alt="" src="{{asset('img/tepsi/laminas/lam15_lg.png')}}" />
                                  </div>
                                </div>
                              </div>
                            </div>    


      </div>
    </div>

</div>



@section('content')
