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
        <link rel="stylesheet" type="text/css" href="css/app.css">
        <link rel="stylesheet" type="text/css" href="css/estilos.css">

        <link rel="stylesheet" href="font-awesome/css/font-awesome.min.css">
  
    <!-- sidebar -->
        <link rel="stylesheet" href="sidebar/css/component.css">        



        <script src="sidebar/js/classie.js"></script>   
        <script src="sidebar/js/gnmenu.js"></script>   
        <script src="sidebar/js/modernizr.custom.js"></script>   
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
                                <a class="nav-link" >@yield('index')<span class="sr-only">(current)</span></a>
                            </li>   



                            <form class="form-inline my-2 my-lg-0 mr-3">
                                <input class="form-control mr-sm-2" type="search" placeholder="Busca un test" aria-label="Search">
                                <button class="btn btn-outline-light my-2 my-sm-0" type="submit">Buscar</button>
                            </form>
                                 @if(Auth::check())
                                    <li class="nav-item dropdown float-right mr-3">
                                        <a class="nav-link dropdown-toggle text-white" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">{{ Auth::user()->name }}  </a>
                                        
                                        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                                            <a class="dropdown-item" href="#"><i class="fa fa-user-o" aria-hidden="true"></i> Mi perfil</a>
                                            <a class="dropdown-item" href="{{ url('evaluaciones') }}"><i class="fa fa-folder-open-o" aria-hidden="true"></i> Mis evaluaciones</a>
                                            <a class="dropdown-item" href="#"><i class="fa fa-shopping-cart" aria-hidden="true"></i> Mis compras</a>
                                            <!--Solo para los administradores del sistema-->
                                            <a class="dropdown-item" href="#"><i class="fa fa-tasks" aria-hidden="true"></i> Panel de Administración</a>                                                                                        
                                            <div class="dropdown-divider">
                                            </div>
                                            <a class="dropdown-item" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();"><i class="fa fa-hand-spock-o" aria-hidden="true"></i> Cerrar Sesión</a>
                                            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                                @csrf
                                            </form>
                                        </div>
                                    </li>
                                @endif



                                 @if(!Auth::check())
                                    <li class="nav-item dropdown float-right mr-0 pr-0">
                                        <a class="nav-link text-white pr-0" href="" id="" role="button" data-toggle="modal" data-target="#register">Registrarme / </a>
                                        
                                    </li>




                                    <li class="nav-item dropdown float-right mr-3 pl-0">
                                        <a class="nav-link text-white pl-0" href="" id="" role="button" data-toggle="modal" data-target="#login">&nbsp;Iniciar Sesión</a>
                                        
                                    </li>                                    
                                @endif


                        </ul>   
                                         
                        <ul class="navbar-nav">



                                    <li class="nav-item ">
                                        <a class="nav-link text-white" href="{{ url('comofunciona')}}">¿Cómo funciona?</a>
                                    </li>

                                    <li class="nav-item dropdown float-right">
                                        <a class="nav-link dropdown-toggle text-white" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Adquiere un instrumento</a>
                                        
                                        <div class="dropdown-menu" aria-labelledby="navbarDropdown">

                                            <a class="dropdown-item" href="http://localhost/psycotestpro/public/catalogo"><i class="fa fa-th-large" aria-hidden="true"></i> Catálogo</a>

                                            <div class="dropdown-divider">
                                            </div>


                                            <a class="dropdown-item" href="#"><i class="fa fa-building-o" aria-hidden="true"></i> Para empresas</a>
                                            <div class="dropdown-divider">
                                            </div>

                                            <a class="dropdown-item" href="#"><i class="fa fa-flask" aria-hidden="true"></i> Para investigación</a>
                                            <div class="dropdown-divider">
                                            </div>
                                            <a class="dropdown-item" href="#"><i class="fa fa-credit-card" aria-hidden="true"></i> Formas de pago</a>

                                        </div>
                                    </li>
                                  

                                    <li class="nav-item ">
                                        <a class="nav-link text-white" href="http://localhost/psycotestpro/public/contactanos">Contactanos</a>
                                    </li>




                        </ul>   
                    </div>
                </nav>
            </div>

<!--Fin del Heaer-->





<main>
   @yield('content') 
</main>


<!-- Footer -->
<footer class="page-footer font-small negro pt-4 stickyy">

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
            <a href="https://www.facebook.com/psycotestpro"><i class="fa fa-facebook" aria-hidden="true"></i> Facebook</a>
          </li>
          <li>
            <a href="#!"><i class="fa fa-instagram" aria-hidden="true"></i> Instagram</a>
          </li>
          <li>
            <a href="#!"><i class="fa fa-whatsapp" aria-hidden="true"></i> Whatsapp</a>
          </li>
          <li>
            <a href="#!"><i class="fa fa-youtube" aria-hidden="true"></i> Youtube</a>
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