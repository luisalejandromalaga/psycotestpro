<html lang="en">

<head>
    <link rel="icon" href="fav.png" type="image/x-icon">
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta charset="utf-8">

    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>PSYCOTESTPRO</title>

    <!-- Fonts -->
     <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.0/jquery.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>        
    <!-- Styles -->
        <link rel="stylesheet" type="text/css" href="{{asset('css/app.css')}}">
        <link rel="stylesheet" type="text/css" href="{{asset('css/estilos.css')}}">
        

</head>



<body class="" style="">
    <div id="app">

        <div class="body">
            
            <div>
                <nav class="navbar navbar-expand-lg navbar-dark negro ">
                    <a class="navbar-brand" href="http://localhost/psycotestpro/public/">PSYCOTESTPRO</a>
                    
                    <button class="navbar-toggler btn" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    
                    <div class="collapse navbar-collapse" id="navbarSupportedContent">
                        <ul class="navbar-nav mr-auto">

                            <li class="nav-item active mr-3">
                                <a class="nav-link" >Inicio <span class="sr-only">(current)</span></a>
                            </li>   



                            <form class="form-inline my-2 my-lg-0 mr-3">
                                <input class="form-control mr-sm-2" type="search" placeholder="Busca un test" aria-label="Search">
                                <button class="btn btn-outline-light my-2 my-sm-0" type="submit">Buscar</button>
                            </form>

                                    <li class="nav-item dropdown float-right mr-3">
                                        <a class="nav-link dropdown-toggle text-white" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Juan Enrrique Soto Tenorio</a>
                                        
                                        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                                            <a class="dropdown-item" href="#">Perfil</a>
                                            <a class="dropdown-item" href="#">Mis evaluaciones</a>
                                            <a class="dropdown-item" href="#">Mis compras</a>                                            
                                            
                                            <!--Solo para los administradores del sistema-->
                                            <a class="dropdown-item" href="#">Panel de Administración</a>
                                            <div class="dropdown-divider">
                                            </div>
                                            <a class="dropdown-item" href="#">Cerrar Sesión</a>
                                        </div>
                                    </li>


                        </ul>   
                                         
                        <ul class="navbar-nav">



                                    <li class="nav-item ">
                                        <a class="nav-link text-white" href="http://localhost/psycotestpro/public/comofunciona">¿Como funciona?</a>
                                    </li>

                                    <li class="nav-item dropdown float-right">
                                        <a class="nav-link dropdown-toggle text-white" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Adquiere un instrumento</a>
                                        
                                        <div class="dropdown-menu" aria-labelledby="navbarDropdown">

                                            <a class="dropdown-item" href="http://localhost/psycotestpro/public/catalogo">Catálogo</a>
                                            <a class="dropdown-item" href="#">Formas de pago</a>
                                        </div>
                                    </li>

                                    <li class="nav-item ">
                                        <a class="nav-link text-white" href="#">Para empresas</a>
                                    </li>                                    

                                    <li class="nav-item ">
                                        <a class="nav-link text-white" href="http://localhost/psycotestpro/public/contactanos">Contactanos</a>
                                    </li>




                        </ul>   
                    </div>
                </nav>
            </div>

<!--Fin del Heaer-->











<!--CATALOGO-->



            <div class="container">

                <h2 class="text-center mt-3">Contactanos</h2>
                <hr >
                <h4 class="text-center mb-3">Deja un comentario</h4>

                    <div class="card mb-3  ">
                        <div class="card-body">



                                <form>




                                    <div class="form-group ">
                                      <label for="inputEmail4">Nombres y apellidos</label>
                                      <input type="text" class="form-control" id="inputEmail4" placeholder="Nombres y apellidos">
                                    </div>



                                    <div class="form-group  ">
                                      <label class="text-left" for="inputEmail4">Correo electrónico</label>
                                      <input type="text" class="form-control" id="inputEmail4" placeholder="Correo electrónico">
                                    </div>


                                    <div class="form-group  ">
                                      <label class="text-left" for="inputEmail4">Número de celular</label>
                                      <input type="tel" class="form-control" id="inputEmail4" placeholder="Número de celular">
                                    </div>


                                    <div class="form-group">
                                      <label for="exampleFormControlTextarea1">Comentario</label>
                                      <textarea class="form-control" id="exampleFormControlTextarea1" rows="5"></textarea>
                                    </div>

                           

                                    <hr>
                                  <div class="text-center ">
                                    <button type="submit" class="btn btn-primary ">Enviar</button>
                                  </div>
                                </form>        




                        </div>
                    </div>


            </div>





<!-- Footer -->
<footer class="page-footer font-small negro pt-4">

  <!-- Footer Links -->
  <div class="container-fluid text-center text-md-left">

    <!-- Grid row -->
    <div class="row">

      <!-- Grid column -->
      <div class="col-md-6 mt-md-0 mt-3">

        <!-- Content -->
        <h5 class="text-uppercase text-white">PSYCOTESTPRO</h5>
        <p class="text-white">Tecnologías para la evaluación del comportamiento.</p>

      </div>
      <!-- Grid column -->

      <hr class="clearfix w-100 d-md-none pb-3">

      <!-- Grid column -->
      <div class="col-md-3 mb-md-0 mb-3">

        <!-- Links -->
        <h5 class="text-uppercase text-white">Enlaces de interés</h5>

        <ul class="list-unstyled">
          <li>
            <a href="#!">¿Como funciona?</a>
          </li>
          <li>
            <a href="#!">Catálogo</a>
          </li>
          <li>
            <a href="#!">Formas de pago</a>
          </li>
          <li>
            <a href="#!">Para empresas</a>
          </li>

          <li>
            <a href="#!">Contactanos</a>
          </li>          
        </ul>

      </div>
      <!-- Grid column -->

      <!-- Grid column -->
      <div class="col-md-3 mb-md-0 mb-3">

        <!-- Links -->
        <h5 class="text-uppercase text-white">Redes Sociales</h5>

        <ul class="list-unstyled">
          <li>
            <a href="https://www.facebook.com/psycotestpro">Facebook</a>
          </li>
          <li>
            <a href="#!">Instagram</a>
          </li>
          <li>
            <a href="#!">Whatsapp</a>
          </li>
          <li>
            <a href="#!">Youtube</a>
          </li>
        </ul>

      </div>
      <!-- Grid column -->

    </div>
    <!-- Grid row -->

  </div>
  <!-- Footer Links -->

  <!-- Copyright -->
  <div class="footer-copyright text-center py-3 text-white ">© 2019 Copyright - Psycotestpro </div>
  <!-- Copyright -->

</footer>
<!-- Footer -->








        </div>
    </div>
    
</body>

</html>