<!DOCTYPE html>

<html>

<head>

        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>TEPSI | PSYCOTESTPRO</title>

        <link rel="icon" href="fav.png" type="image/x-icon" />
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
        <meta charset="utf-8">

        <!-- Scripts -->
        <script src="{{ asset('/js/app.js') }}" defer></script>
        
        <!-- Fonts -->

        <!-- Styles -->
        <link rel="stylesheet" type="text/css" href="{{asset('css/app.css')}}">

</head>

<body>


<div class="container">

    </br>

    <div class="card">
      <div class="card-header">
        <h4 class="" id="">Traslada agua de un vaso a otro sin derramarla</h4>
      </div>
      <div class="card-body text-center ">
                 <div class="row justify-content-center align-items-center">
                    <div class="col-lg-6">
                        <img class="img-fluid rounded-sm border mb-2 p-4" alt="" src="{{asset('img/tepsi/vasos.jpg')}}" />
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
                            <button type="button" class="btn btn-primary mb-1 mt-1" data-dismiss="modal">Atras</button>

                            <button type="button" class="btn btn-secondary mb-1 mt-1" data-dismiss="modal">Mostrar imagen</button>
                        </div> 
                         
                    </div>
                                        
                    <div class="col-lg-5 mb-2">

                        <div class="row-fluid rounded-sm border mb-1">
                            <h4>Criterio de aprobación:</h4> <p>El niño traslada el agua al otro vaso si derramar</p>

                            <div class="btn-group btn-group-toggle mb-2" data-toggle="buttons">
                                <label class="btn btn-success">
                                   <input type="radio" name="options" id="option1" autocomplete="off" checked /> Logrado
                                </label>

                                <label class="btn btn-danger">
                                   <input type="radio" name="options" id="option3" autocomplete="off" /> No logrado
                                </label>
                            </div>
                        </div>
                    </div>

      </div>
    </div>

</div>


</body>

</html>