@extends('tepsi')

@section('title')
TEPSI | Item 11/47
@endsection


<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.0/jquery.min.js"></script>

@section('content')


<div class="container">

    <div class="card mt-3 mb-3">
      <div class="card-header">
        <h4 class="" id="">Copia un triangulo</h4>
      </div>
      <div class="card-body text-center p-2">
                 <div class="row justify-content-center align-items-center">
                    <div class="col-lg-6">
                        <img class="img-fluid m-1 p-1" alt="" src="{{asset('img/tepsi/laminas/lam4_sm.png')}}" />
                    </div>
 
                    <div class="col-lg-5 align-self-center">
                                        
                        <div class="row-fluid rounded-sm border mb-2">
                            <h4>Materiales:</h4> <p class="m-1">Lamina 4, Lapiz sin goma, hoja</p>
                        </div>

                        <div class="row-fluid rounded-sm border mb-2">
                            <h4>Ubicación:</h4> <p class="m-1">Examinador y niño sentados junto a la mesa</p>
                        </div>

                        <div class="row-fluid rounded-sm border mb-2">
                             <h4>Administración:</h4> <p class="m-1">El examinador presenta la Lamina 4 al niño pasándole el lápiz y el reverso de la hoja de registro para que dibuje, le dice: <strong class="text-danger">"Dibuja uno igual a este"</strong>.</p>
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
                            <h4>Criterio de aprobación:</h4> <p class="m-1">Si el niño dibuja un triángulo que tenga tres ángulos claros, cerrados, con líneas fundamentalmente rectas. Las líneas de los lados no deben prolongarse más de 0.5 cm fuera del ángulo.</p>

                            <div class="btn-group btn-group-toggle mb-1">
                                 <form  method="post" action="{{ route('post_res') }}">
                                         @csrf
                                        <input type="hidden" name="id" value="11">
                                        <input type="hidden" name="res" value="1">
                                        <button class="btn btn-success m-1" type="submit" value="Logrado" /> 
                                        Logrado
                                        </button>
                                
                                </form>
                                 <form action="{{ route('post_res') }}" method="post">
                                         @csrf
                                        <input type="hidden" name="id" value="11">
                                        <input type="hidden" name="res" value="0">
                                        <input class="btn btn-danger m-1" type="submit" value="No logrado" name="options" id="option1" autocomplete="off" /> 
                                
                                </form>
                            </div>
                        </div>
                    </div>







                             <div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                              <div class="modal-dialog modal-xl modal-dialog-centered" role="document">
                                <div class="modal-content">
                                  <div class="modal-header">
                                    <h5 class="modal-title" id="exampleModalLongTitle">Lamina 4 (triangulo)</h5>
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                      <span aria-hidden="true">&times;</span>
                                    </button>
                                  </div>
                                  <div class="modal-body">
                                    

                                        <img class="img-fluid m-1 p-1" alt="" src="{{asset('img/tepsi/laminas/lam4_lg.png')}}" />

                 
                                    
                                  </div>
                                </div>
                              </div>
                            </div>                   

      </div>
    </div>

</div>

@endsection