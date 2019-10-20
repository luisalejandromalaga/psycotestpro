@extends('tepsi')

@section('title')
TEPSI | Item 14/47
@endsection




@section('content')

<div class="container">


    <div class="card mt-3 mb-3">
      <div class="card-header">
        <h4 class="" id="">Ordena por tamaño</h4>
      </div>
      <div class="card-body text-center p-2 ">
                 <div class="row justify-content-center align-items-center">
                    <div class="col-lg-6">
                        <img class="img-fluid rounded-sm border mb-2 " alt="" src="{{asset('img/tepsi/img_barras.png')}}" />
                    </div>
 
                    <div class="col-lg-5 align-self-center">
                                        
                        <div class="row-fluid rounded-sm border mb-2">
                            <h4>Materiales:</h4> <p>Tablero con cuatro barritas pegadas, Tres barritas sueltas</p>
                        </div>

                        <div class="row-fluid rounded-sm border mb-2">
                            <h4>Ubicación:</h4> <p>Examinador y niño sentados junto a la mesa</p>
                        </div>

                        <div class="row-fluid rounded-sm border mb-2">
                             <h4>Administración:</h4> <p>El examinador con una mano toma las tres barritas sueltas, con la otra presenta el tablero al niño y le dice: <strong class="text-danger">"Mira, estas barritas están ordenadas de más grande a más chica"</strong>. Enseguida entregándole a las 3 barritas sueltas le dice: <strong class="text-danger">"¿Dónde ponemos éstas otras barritas para que queden ordenadas?"</strong>. El examinador debe dibujar en la hoja de registro la forma en que el niño coloco las barritas.</p>
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
                            <h4>Criterio de aprobación:</h4> <p>Si el niño ordena las barritas por tamaño insertándolas en los huecos previstos en el tablero o bien las coloca en orden de tamaño sobre las barras del tablero.</p>

                            <div class="btn-group btn-group-toggle mb-2" data-toggle="buttons">
                                <form  method="post" action="{{ route('post_res') }}">
                                         @csrf
                                        <input type="hidden" name="id" value="16">
                                        <input type="hidden" name="res" value="1">
                                        <button class="btn btn-success m-1" type="submit" value="Logrado" /> 
                                        Logrado
                                        </button>
                                
                                </form>
                                 <form action="{{ route('post_res') }}" method="post">
                                         @csrf
                                        <input type="hidden" name="id" value="16">
                                        <input type="hidden" name="res" value="0">
                                        <input class="btn btn-danger m-1" type="submit" value="No logrado" name="options" id="option1" autocomplete="off" /> 
                                
                                </form>
                            </div>
                        </div>
                    </div>

      </div>
    </div>

</div>


@endsection
