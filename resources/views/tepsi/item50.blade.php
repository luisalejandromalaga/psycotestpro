@extends('tepsi')

@section('title')
TEPSI | Item 45/47
@endsection


<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.0/jquery.min.js"></script>
@section('content')



<div class="container">


    <div class="card mt-3 mb-3">
      <div class="card-header">
        <h4 class="" id="">Coge una pelota</h4>
      </div>
      <div class="card-body text-center p-2 ">
                 <div class="row justify-content-center align-items-center">
                    <div class="col-lg-6">
                        <img class="img-fluid rounded-sm border mb-2 " alt="" src="{{asset('img/tepsi/img_cubos.png')}}" />
                    </div>
 
                    <div class="col-lg-5 align-self-center">
                                        
                        <div class="row-fluid rounded-sm border mb-2">
                            <h4>Materiales:</h4> <p>Pelota</p>
                        </div>

                        <div class="row-fluid rounded-sm border mb-2">
                            <h4>Ubicación:</h4> <p>Examinador de pie frente al niño a un metro de distancia</p>
                        </div>

                        <div class="row-fluid rounded-sm border mb-2">
                             <h4>Administración:</h4> <p>El examinador mostrando la pelota al niño dice: <strong class="text-danger">"Juguemos a la pelota, yo te la tiro y tú la pescas"</strong>, enseguida se coloca a un metro de distancia del niño y le tira la pelota dándole un bote para que llegue entre la cintura y el cuello. Se puede repetir una vez.</p>
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
                            <h4>Criterio de aprobación:</h4> <p>Si el niño coge la pelota con una o con las dos manos. Debe cogerla con las manos no con los brazos.</p>

                            <div class="btn-group btn-group-toggle mb-2" >
                                 <form  method="post" action="{{ route('post_res') }}">
                                         @csrf
                                        <input type="hidden" name="id" value="50">
                                        <input type="hidden" name="res" value="1">
                                        <button class="btn btn-success m-1" type="submit" value="Logrado" /> 
                                        Logrado
                                        </button>
                                
                                </form>
                                 <form action="{{ route('post_res') }}" method="post">
                                         @csrf
                                        <input type="hidden" name="id" value="50">
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