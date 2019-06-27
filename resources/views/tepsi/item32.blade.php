<!DOCTYPE html>

<html>

<head>

        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>TEPSI | PSYCOTESTPRO</title>

        <link rel="icon" href="fav.png" type="image/x-icon" />
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
        <meta charset="utf-8">

        <!-- Scripts -->
            
        
        <!-- Fonts -->

        <!-- Styles -->
        <link rel="stylesheet" type="text/css" href="{{asset('css/app.css')}}">
        <link rel="stylesheet" type="text/css" href="{{asset('css/estilos.css')}}">



</head>

<body>


<div class="container">

    <div class="card mt-3 mb-3">
      <div class="card-header">
        <h4 class="" id="">Señala colores</h4>
      </div>
      <div class="card-body text-center p-2">
        <form  method="post" action="{{ route('post_options') }}">
                 @csrf
                  <input type="hidden" name="id" value="32">
                 <div class="row justify-content-center align-items-center">
                    <div class="col-lg-6">

                              <div class="row">

                                <div class="col">
                                  <div class="custom-control custom-checkbox mr-sm-2">
                                    <input type="checkbox" class="custom-control-input" name= "opt-1" id="azul">
                                    <label class="custom-control-label" for="azul"><h5 >Azul</h5></label>
                                  </div>
                                </div>

                                <div class="col">
                                  <div class="custom-control custom-checkbox mr-sm-2">
                                    <input type="checkbox" class="custom-control-input" name= "opt-2" id="amarillo">
                                    <label class="custom-control-label" for="amarillo"><h5 >Amarillo</h5></label>
                                  </div>
                                </div>

                                <div class="col">
                                  <div class="custom-control custom-checkbox mr-sm-2">
                                    <input type="checkbox" class="custom-control-input" name= "opt-3" id="rojo">
                                    <label class="custom-control-label" for="rojo"><h5 >Rojo</h5></label>
                                  </div>
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
                             <h4>Administración:</h4> <p class="m-1">El examinador coloca los papeles lustre sobre la mesa en el siguiente orden: azul, amarillo y rojo. Luego dice: <strong class="text-danger">"Muéstrame el amarillo... azul… rojo…"</strong> (Es decir, no se deben nombrar los colores en mismo orden en que se presentan).</p>
                        
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
                            <h4>Criterio de aprobación:</h4> <p class="m-1">Si el niño indica correctamente al menos dos colores.</p>

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

</body>

</html>