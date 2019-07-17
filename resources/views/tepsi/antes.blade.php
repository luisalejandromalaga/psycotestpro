<html lang="en">

<head>
    <link rel="icon" href="fav.png" type="image/x-icon">
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta charset="utf-8">

    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>@yield('title')</title>

    <!-- Fonts -->
     <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.0/jquery.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>        
    <!-- Styles -->
        <link rel="stylesheet" type="text/css" href="{{asset('css/app.css')}}">
        <link rel="stylesheet" type="text/css" href="{{asset('css/estilos.css')}}">

        <link rel="stylesheet" href="{{asset('font-awesome/css/font-awesome.min.css')}}">
  

</head>


<body>


<div class="container">


                        <div>
                            <div class="card m-4 text-center">
                                
                                <div class="card-header">
                                        <h2>Antes de empezar</h2>
                                </div>

                                <div class="card-body">
                                    <div class="card-text">
                                        <p>Asegúrate de tener todo lo que necesitas a mano</p>
                                        <p>Si estás seguro de que tienes a mano todo lo que necesitas para realizar la evaluación presiona "Empezar la evaluación"</p>

                                        <a class="btn btn-primary mb-3" href="{{route('formulario')}}" >
                                         Empezar la evaluación
                                        </a>

                                        <p>Si quieres verificar tus materiales haz click en "Herramienta de verificación"</p>


                                        <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModalCenter">
                                                Herramienta de verificación
                                        </button>

                                    </div>
                                </div>


                                            <div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                                              <div class="modal-dialog modal-xl modal-dialog-centered" role="document">
                                                <div class="modal-content">
                                                  <div class="modal-header">
                                                    <h5 class="modal-title" id="exampleModalLongTitle">Herramienta de verificación</h5>
                                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                      <span aria-hidden="true">&times;</span>
                                                    </button>
                                                  </div>
                                                  <div class="modal-body">
                                                    
                                                      verificación
                                                    
                                                  </div>
                                                  <div class="modal-footer">
                                                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                                    <button type="button" class="btn btn-primary">Save changes</button>
                                                  </div>
                                                </div>
                                              </div>
                                            </div>
                                   </div>
                        </div>


</div>


</body>

</html>