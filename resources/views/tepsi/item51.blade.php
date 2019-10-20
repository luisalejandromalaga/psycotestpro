@extends('tepsi')

@section('title')
TEPSI | Item 46/47
@endsection


<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.0/jquery.min.js"></script>
@section('content')

<div class="container">


    <div class="card mt-3 mb-3">
      <div class="card-header">
        <h4 class="" id="">Camina hacia adelante topando talón punta</h4>
      </div>
      <div class="card-body text-center p-2 ">
                 <div class="row justify-content-center align-items-center">
                    <div class="col-lg-6">
                        <img class="img-fluid rounded-sm border mb-2 " alt="" src="{{asset('img/tepsi/img_cubos.png')}}" />
                    </div>
 
                    <div class="col-lg-5 align-self-center">
                                        
                        <div class="row-fluid rounded-sm border mb-2">
                            <h4>Materiales:</h4> <p>-</p>
                        </div>

                        <div class="row-fluid rounded-sm border mb-2">
                            <h4>Ubicación:</h4> <p>Examinador al lado del niño</p>
                        </div>

                        <div class="row-fluid rounded-sm border mb-2">
                             <h4>Administración:</h4> <p>El examinador camina en línea recta hacia adelante colocando el pie de manera que en cada paso el talón toque la punta del otro pie. Se "chusea" o "da pasos de pulga". Deben darse 4 o más pasos. Luego motiva a niño a hacer lo mismo diciendo: <strong class="text-danger">"Camina igual que yo"</strong>.</p>
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

                            <p class="mb-1">Si el niño camina hacia adelante 4 o más pasos en línea recta y sin apoyo tocando el talón con la punta.</p>
                                <div class="text-center">
                                  <form  method="post" action="{{ route('post_numero') }}">
                                    @csrf
                                    <input type="hidden" name="id" value="51">
                                    <input class="form-inp mb-1" name="numero" type="search" placeholder="Número de pasos" aria-label="Search">
                                    <button class="btn btn-primary mb-1" type="submit">Calificar</button>
                                  </form>
                                </div>
                        </div>
                    </div>

      </div>
    </div>

</div>


@endsection