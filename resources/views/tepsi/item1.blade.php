@extends('tepsi')

@section('title')
TEPSI | Item 1/47
@endsection




@section('content')

<div class="container justify-content-center align-items-center">


    <div class="card mt-3 mb-3 ">
      <div class="card-header">
        <h4 class="" id="">Traslada agua de un vaso a otro sin derramarla</h4>
      </div>
      <div class="card-body text-center p-2 ">
                 <div class="row justify-content-center align-items-center">
                    <div class="col-lg-6">
                        <img class="img-fluid rounded-sm border mb-2 " alt="" src="{{asset('img/tepsi/img_vasos.png')}}" />
                    </div>
 
                    <div class="col-lg-5 align-self-center">
                                        
                        <div class="row-fluid rounded-sm border mb-2">
                            <h4>Materiales:</h4> <p>Dos vasos, uno vacío y el otro lleno de agua</p>
                        </div>

                        <div class="row-fluid rounded-sm border mb-2">
                            <h4>Ubicación:</h4> <p>Examinador y niño de pie frente a la mesa</p>
                        </div>

                        <div class="row-fluid rounded-sm border mb-2">
                             <h4>Administración:</h4> <p>El examinador coloca los dos vasos sobre la mesa. Luego señalando el vaso lleno con agua (hasta un dedo del borde) dice: <strong class="text-danger">"Cambia el agua al otro vaso tratando de no botar nada"</strong>. El examinador debe incentivar al niño a recoger los vasos para realizar la tarea.</p>
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
                            <h4>Criterio de aprobación:</h4> <p>El niño traslada el agua al otro vaso sin derramar</p>

                            <div class="btn-group btn-group-toggle mb-2" >
                                <form  method="post" action="{{ route('post_res') }}">
                                         @csrf
                                        <input type="hidden" name="id" value="1">
                                        <input type="hidden" name="res" value="1">
                                        
                                        <input class="btn btn-success m-1" type="submit" value="Logrado" autocomplete="off" /> 


                                
                                </form>
                                 <form action="{{ route('post_res') }}" method="post">
                                         @csrf
                                        <input type="hidden" name="id" value="1">
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