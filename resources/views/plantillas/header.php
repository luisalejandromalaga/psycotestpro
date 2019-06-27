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
        <link rel="stylesheet" type="text/css" href="css/app.css">
        <link rel="stylesheet" type="text/css" href="css/estilos.css">
        

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
                                 @if(Auth::check())
                                    <li class="nav-item dropdown float-right mr-3">
                                        <a class="nav-link dropdown-toggle text-white" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">{{ Auth::user()->name }}  </a>
                                        
                                        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                                            <a class="dropdown-item" href="#">Perfil</a>
                                            <a class="dropdown-item" href="#">Mis evaluaciones</a>
                                            <a class="dropdown-item" href="#">Mis compras</a>
                                            <!--Solo para los administradores del sistema-->
                                            <a class="dropdown-item" href="#">Panel de Administración</a>                                                                                        
                                            <div class="dropdown-divider">
                                            </div>
                                            <a class="dropdown-item" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">Cerrar Sesión</a>
                                            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                                @csrf
                                            </form>
                                        </div>
                                    </li>
                                @endif


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




            <div class="container-fluid">
                <div class="row rownoticia">
                    <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
                        <div class="carousel-inner">
                            
                            <div class="carousel-item">
                                <img class="d-block w-100   imgnoticia" src="img/banner_uno.png" alt="First slide">
                            </div>

                            <div class="carousel-item active">
                                <img class="d-block w-100 imgnoticia" src="img/banner_dos.png" alt="Second slide">
                            </div>

                            <div class="carousel-item">
                                <img class="d-block w-100 imgnoticia" src="img/2259.png" alt="Third slide">
                            </div>

                        </div>

                        <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
                            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                            <span class="sr-only">Previous</span>
                        </a>
                        <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next"><span class="carousel-control-next-icon" aria-hidden="true"></span><span class="sr-only">Next</span></a>
                        <div class=" d-md-block  centered text-center">
                            <h2 class="d-none d-md-block text-white text-center mb-5">"Diseñamos, contruimos y sometemos a prueba tecnologías para la evaluación del comportamiento"</h2>
                            <button type="button" class="m-1 btn btn-primary btn-lg " data-toggle="modal" data-target="#register">Registrarme</button>
                            <button type="button" class="m-1 btn btn-primary btn-lg " data-toggle="modal" data-target="#login">Iniciar Sesión</button>
                        </div>
                        <div class="modal fade" id="login" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true" style="display: none;">
                            <div class="modal-dialog modal-dialog-centered" role="document">
                                
                                <div class="modal-content">
                                <div class="modal-header">
                                        <h5 class="modal-title" id="exampleModalLongTitle">Iniciar Sesión</h5>
                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button>
                                </div>
                                <div class="modal-body">
                                   <div class="container">

                                        <div class="row justify-content-center">
                                            <div class="col-md-12">
                                                <div class="">
                                                    
                                                    <div class="">
                                                        <form method="POST" action="{{ route('login') }}">
                                                            @csrf
                                                            <div class="form-group row">
                                                                <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('E-Mail Address') }}</label>

                                                                <div class="col-md-6">
                                                                    <input id="email" type="email" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" name="email" value="{{ old('email') }}" required autofocus>

                                                                    @if ($errors->has('email'))
                                                                        <span class="invalid-feedback" role="alert">
                                                                            <strong>{{ $errors->first('email') }}</strong>
                                                                        </span>
                                                                    @endif
                                                                </div>
                                                            </div>

                                                            <div class="form-group row">
                                                                <label for="password" class="col-md-4 col-form-label text-md-right">{{ __('Password') }}</label>

                                                                <div class="col-md-6">
                                                                    <input id="password" type="password" class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}" name="password" required>

                                                                    @if ($errors->has('password'))
                                                                        <span class="invalid-feedback" role="alert">
                                                                            <strong>{{ $errors->first('password') }}</strong>
                                                                        </span>
                                                                    @endif
                                                                </div>
                                                            </div>

                                                            <div class="form-group row">
                                                                <div class="col-md-6 offset-md-4">
                                                                    <div class="form-check">
                                                                        <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>

                                                                        <label class="form-check-label" for="remember">
                                                                            {{ __('Remember Me') }}
                                                                        </label>
                                                                    </div>
                                                                </div>
                                                            </div>

                                                            <div class="form-group row mb-0">
                                                                <div class="col-md-8 offset-md-4">
                                                                    <button type="submit" class="btn btn-primary">
                                                                        {{ __('Login') }}
                                                                    </button>

                                                                    @if (Route::has('password.request'))
                                                                        <a class="btn btn-link" href="{{ route('password.request') }}">
                                                                            {{ __('Forgot Your Password?') }}
                                                                        </a>
                                                                    @endif
                                                                </div>
                                                            </div>
                                                        </form>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="modal fade" id="register" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true" style="display: none;">
                            <div class="modal-dialog modal-dialog-centered" role="document">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title" id="exampleModalLongTitle">Registrarme</h5>
                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button>
                                    </div>
                                    <div class="modal-body">
                                        <div class="container">

                                            <div class="row justify-content-center">
                                                <div class="col-md-12">
                                                    <div class="">
                                                       

                                                        <div class="">
                                                            <form method="POST" action="{{ route('register') }}">
                                                                @csrf

                                                                <div class="form-group row">
                                                                    <label for="name" class="col-md-4 col-form-label text-md-right">{{ __('Name') }}</label>

                                                                    <div class="col-md-6">
                                                                        <input id="name" type="text" class="form-control{{ $errors->has('name') ? ' is-invalid' : '' }}" name="name" value="{{ old('name') }}" required autofocus>

                                                                        @if ($errors->has('name'))
                                                                            <span class="invalid-feedback" role="alert">
                                                                                <strong>{{ $errors->first('name') }}</strong>
                                                                            </span>
                                                                        @endif
                                                                    </div>
                                                                </div>

                                                                <div class="form-group row">
                                                                    <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('E-Mail Address') }}</label>

                                                                    <div class="col-md-6">
                                                                        <input id="email" type="email" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" name="email" value="{{ old('email') }}" required>

                                                                        @if ($errors->has('email'))
                                                                            <span class="invalid-feedback" role="alert">
                                                                                <strong>{{ $errors->first('email') }}</strong>
                                                                            </span>
                                                                        @endif
                                                                    </div>
                                                                </div>

                                                                <div class="form-group row">
                                                                    <label for="password" class="col-md-4 col-form-label text-md-right">{{ __('Password') }}</label>

                                                                    <div class="col-md-6">
                                                                        <input id="password" type="password" class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}" name="password" required>

                                                                        @if ($errors->has('password'))
                                                                            <span class="invalid-feedback" role="alert">
                                                                                <strong>{{ $errors->first('password') }}</strong>
                                                                            </span>
                                                                        @endif
                                                                    </div>
                                                                </div>

                                                                <div class="form-group row">
                                                                    <label for="password-confirm" class="col-md-4 col-form-label text-md-right">{{ __('Confirm Password') }}</label>

                                                                    <div class="col-md-6">
                                                                        <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required>
                                                                    </div>
                                                                </div>

                                                                <div class="form-group row mb-0">
                                                                    <div class="col-md-6 offset-md-4">
                                                                        <button type="submit" class="btn btn-primary">
                                                                            {{ __('Register') }}
                                                                        </button>
                                                                    </div>
                                                                </div>
                                                            </form>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

<main>
   @yield('content') 
</main>


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