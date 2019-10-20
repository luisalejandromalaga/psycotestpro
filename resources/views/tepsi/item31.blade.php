@extends('tepsi')

@section('title')
TEPSI | Item 28/47
@endsection



@section('content')



<div class="container">

    <div class="card mt-3 mb-3">
      <div class="card-header">
        <h4 class="" id="">Nombra colores</h4>
      </div>
      <div class="card-body text-center p-2">
         <form  method="post" action="{{ route('post_res_text') }}">
                 @csrf
                  <input type="hidden" name="id" value="31">
                 <div class="row justify-content-center align-items-center">
                    <div class="col-lg-6">

                              <div class="row">
                                <div class="col">
                                    <h5 >Azul:</h5>
                                    <input class="form-carr mb-1" type="text"  name="text-1" data-toggle="tooltip" data-placement="bottom" title="Anota la respuesta del niño">
                                </div>

                                <div class="col">
                                    <h5 >Amarillo:</h5>
                                    <input class="form-carr mb-1" type="text"  name="text-2" data-toggle="tooltip" data-placement="bottom" title="Anota la respuesta del niño">
                                </div>

                                <div class="col">
                                    <h5 >Rojo:</h5>
                                    <input class="form-carr mb-1" type="text"  name="text-2" data-toggle="tooltip" data-placement="bottom" title="Anota la respuesta del niño">
                                </div>

                              </div>

                    </div>

 
                    <div class="col-lg-5 align-self-center">
                                        
                        <div class="row-fluid rounded-sm border mb-2">
                            <h4>Materiales:</h4> <p class="m-1">Papel lustre azul, amarillo y rojo</p>
                        </div>

                        <div class="row-fluid rounded-sm border mb-2">
                            <h4>Ubicación:</h4> <p class="m-1">Examinador y niño sentados junto a la mesa</p>
                        </div>

                        <div class="row-fluid rounded-sm border mb-2">
                             <h4>Administración:</h4> <p class="m-1">El examinador coloca en la mesa los tres cuadrados de papel lustre, uno al lado del otro separados por 2 cm. Enseguida los señala uno a uno, preguntándole al niño: <strong class="text-danger">"¿De qué color es este?"</strong>. Se debe anotar cada respuesta del niño.</p>
                        
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
                            <h4>Criterio de aprobación:</h4> <p class="m-1">Si el niño nombra correctamente al menos dos colores.</p>

                            <div class="btn-group-toggle mb-2" type = "submit " data-toggle="buttons">
                                <button class="btn btn-success m-1" type="submit" name="options" value="1" /> 
                                        Logrado
                                </button>

                                <button class="btn btn-danger m-1" type="submit" name="options" value="0" /> 
                                        No logrado
                                </button>
                            </div>

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