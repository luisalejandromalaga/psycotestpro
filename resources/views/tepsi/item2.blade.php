@extends('tepsi')

@section('title')
TEPSI | Item 2/47
@endsection




@section('content')

<body>


<div class="container">


    <div class="card mt-3 mb-3">
      <div class="card-header">
        <h4 class="" id="">Construye un puente con tres cubos con modelo presente</h4>
      </div>
      <div class="card-body text-center p-2 ">
                 <div class="row justify-content-center align-items-center">
                    <div class="col-lg-6">
                        <img class="img-fluid rounded-sm border mb-2" alt="" src="{{asset('img/tepsi/img_cubos.png')}}" />
                    </div>
 
                    <div class="col-lg-5 align-self-center">
                                        
                        <div class="row-fluid rounded-sm border mb-2">
                            <h4>Materiales:</h4> <p>Seis cubos</p>
                        </div>

                        <div class="row-fluid rounded-sm border mb-2">
                            <h4>Ubicación:</h4> <p>El examinador y el niño sentados junto a la mesa</p>
                        </div>

                        <div class="row-fluid rounded-sm border mb-2">
                             <h4>Administración:</h4> <p>El examinador construye un puente con tres cubos dejando una abertura entre los dos de base. Dejando el modelo a la vista, dice al niño:  <strong class="text-danger">"Haz un puente igual a este"</strong>.</p>
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
                            <h4>Criterio de aprobación:</h4> <p>El niño construye un puente dejando una abertura entre los dos cubos de la base.</p>

                            <div class="btn-group btn-group-toggle mb-2" data-toggle="buttons">
                                <form  method="post" action="{{ route('post_res') }}">
                                         @csrf
                                        <input type="hidden" name="id" value="2">
                                        <input type="hidden" name="res" value="1">
                                        <input class="btn btn-success m-1" type="submit" value="Logrado" autocomplete="off" /> 

                                </form>
                                 <form action="{{ route('post_res') }}" method="post">
                                         @csrf
                                        <input type="hidden" name="id" value="2">
                                        <input type="hidden" name="res" value="0">
                                        <input class="btn btn-danger m-1" type="submit" value="No logrado" autocomplete="off" />  
                                
                                </form>
                            </div>
                        </div>
                    </div>

      </div>
    </div>

</div>


@endsection

