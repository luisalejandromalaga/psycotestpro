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
                                        <p>Esta es una versión digitalizada del clásico TEPSI, los ítems se encuentran automatizados en cuanto a su aplicación y calificación, pese a ello se necesitan algunos materias manipulables para poder desarrollar la evaluación. </p>
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
                                                    
									                 <div class="row justify-content-center align-items-center">
									                    <div class="col-lg-12">

									                          <div id="carouselExampleControls" class="carousel slide mb-2" data-ride="carousel" data-interval="false">

															<!--Slides del corrousel-->									                          	
									                            <div class="carousel-inner ">
										                              


									                              <div class="carousel-item active">
									                                <img class="img-fluid m-3 p-1" alt="Third slide" src="{{asset('img/tepsi/img_vasos.png')}}" />
									                                <h4>Dos vasos</h4>				
									                              </div>



									                              <div class="carousel-item ">
									                                <img class="img-fluid m-3 p-1" alt="Third slide" src="{{asset('img/tepsi/img_cubos.png')}}" />
 									                                <h4>Doce cubos</h4> 
									                              </div>


									                              <div class="carousel-item ">
									                                <img class="img-fluid m-3 p-1" alt="Third slide" src="{{asset('img/tepsi/img_botonera.png')}}" />
 									                                <h4>Estuche con botones</h4> 
									                              </div>


									                              <div class="carousel-item ">
									                                <img class="img-fluid m-3 p-1" alt="Third slide" src="{{asset('img/tepsi/img_aguja.png')}}" />
 									                                <h4>Una aguja</h4> 
									                              </div>



								                              
									                              <div class="carousel-item ">
									                                <img class="img-fluid m-3 p-1" alt="Third slide" src="{{asset('img/tepsi/img_nylon.png')}}" />
 									                                <h4>Hilo de nylon</h4> 
									                              </div>	




									                              <div class="carousel-item ">
									                                <img class="img-fluid m-3 p-1" alt="Third slide" src="{{asset('img/tepsi/img_tablero.png')}}" />
 									                                <h4>Tablero con ojetillos y cordón</h4> 
									                              </div>


									                              <div class="carousel-item ">
									                                <img class="img-fluid m-3 p-1" alt="Third slide" src="{{asset('img/tepsi/img_lapiz.png')}}" />
 									                                <h4>Lápiz sin goma de borrar</h4> 
									                              </div>



									                              <div class="carousel-item ">
									                                <img class="img-fluid m-3 p-1" alt="Third slide" src="{{asset('img/tepsi/img_hoja.png')}}" />
 									                                <h4>4 hojas bond</h4> 
									                              </div>


									                              <div class="carousel-item ">
									                                <img class="img-fluid m-3 p-1" alt="Third slide" src="{{asset('img/tepsi/img_barras.png')}}" />
 									                                <h4>Tablero con cuatro barritas pegadas y tres barritas sueltas</h4> 
									                              </div>

									                              <div class="carousel-item ">
									                                <img class="img-fluid m-3 p-1" alt="Third slide" src="{{asset('img/tepsi/img_almohada.png')}}" />
 									                                <h4>Dos bolsas, una rellena de arena y otra rellena de esponja</h4> 
									                              </div>

									                              <div class="carousel-item ">
									                                <img class="img-fluid m-3 p-1" alt="Third slide" src="{{asset('img/tepsi/img_colores.png')}}" />
 									                                <h4>Papel lustre azul, amarillo y rojo</h4> 
									                              </div>

									                              <div class="carousel-item ">
									                                <img class="img-fluid m-3 p-1" alt="Third slide" src="{{asset('img/tepsi/img_pelota.png')}}" />
 									                                <h4>Pelota</h4> 
									                              </div>

									                              <div class="carousel-item ">
									                                <img class="img-fluid m-3 p-1" alt="Third slide" src="{{asset('img/tepsi/img_globo.png')}}" />
 									                                <h4>Globo</h4> 
									                              </div>

									                            </div>



	


									                            </div>
									                            <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
									                              <span class="carousel-control-prev-icono" aria-hidden="true"></span>
									                              <span class="sr-only">Previous</span>
									                            </a>
									                            <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
									                              <span class="carousel-control-next-icono" aria-hidden="true"></span>
									                              <span class="sr-only">Next</span>
									                            </a>
									                          </div>
									                    </div>

			                                                    
                                                  </div>
                                                  
                                                </div>
                                              </div>
                                            </div>
                                   </div>
                        </div>


</div>


</body>

</html>