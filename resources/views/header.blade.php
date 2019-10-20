<html lang="en">

<head>

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

        <link rel="icon" type="image/png" href="{{asset('img/fav.png')}}">
  
<link href="https://fonts.googleapis.com/css?family=Questrial&display=swap" rel="stylesheet">
</head>



<body class="" style="">
           
<!--header inicio-->
                <nav class="navbar navbar-expand-lg navbar-dark negroH ">
                    <a class="navbar-brand" href="{{ url('index')}}"><img class="logo" src="{{asset('img/logo.png')}}"></a>
                    
                    <button class="navbar-toggler btn" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    
                    <div class="collapse navbar-collapse" id="navbarSupportedContent">
                        <ul class="navbar-nav mr-auto">

                            <li class="nav-item active mr-3">
                                <a class="nav-link" >@yield('index')<span class="sr-only">(current)</span></a>
                            </li>   



                            <form class="form-inline my-2 my-lg-0 mr-3 "  method="POST" action="{{route('catalogo')}}">
                                @csrf
                                <input class="form-control mr-sm-2" type="search" required placeholder="Busca un test" aria-label="Search" name="search">
                                <button class="btn btn-outline-light my-2 my-sm-0" type="submit">Buscar</button>
                            </form>
                                 @if(Auth::check())
                                    <li class="nav-item dropdown float-right mr-3">
                                        <a class="nav-link dropdown-toggle text-white" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">{{ Auth::user()->name }}  </a>
                                        
                                        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                                            <a class="dropdown-item" href="{{ url('perfil') }}"><i class="fa fa-user-o" aria-hidden="true"></i> Mi perfil</a>
                                            <a class="dropdown-item" href="{{ url('evaluaciones') }}"><i class="fa fa-folder-open-o" aria-hidden="true"></i> Mis evaluaciones</a>
                                            <a class="dropdown-item" href="{{ url('compras') }}"><i class="fa fa-shopping-cart" aria-hidden="true"></i> Mis compras <!--<span class="badge badge-pill badge-info text-white">1</span>--></a>
                                            
                                            <!--Solo para los administradores del sistema-->
                                            <!--<a class="dropdown-item" href="{{ url('adm') }}"><i class="fa fa-tasks" aria-hidden="true"></i> Panel de Administración</a> -->                                                                                       
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

                                            <a class="dropdown-item" href="{{ url('catalogo')}}"><i class="fa fa-th-large" aria-hidden="true"></i> Catálogo</a>

                                            <div class="dropdown-divider">
                                            </div>



                                            <a class="dropdown-item" href="{{ url('investigacion')}}"><i class="fa fa-flask" aria-hidden="true"></i> Para investigación</a>
                                            <div class="dropdown-divider">
                                            </div>


                                            <a class="dropdown-item" href="{{ url('empresas')}}"><i class="fa fa-building-o" aria-hidden="true"></i> Para empresas</a>
                                            <div class="dropdown-divider">
                                            </div>



                                            <a class="dropdown-item" href="{{ url('pagos')}}"><i class="fa fa-credit-card" aria-hidden="true"></i> Formas de pago</a>

                                        </div>
                                    </li>
                                  

                                    <li class="nav-item ">
                                        <a class="nav-link text-white" href="{{ url('contactanos')}}">Contactanos</a>
                                    </li>




                        </ul>   
                    </div>
                </nav>


<!--Fin del Heaer-->


               <nav class="navbar navbar-expand-lg navbar-dark negroH fixed-top ">
                    <a class="navbar-brand" href="{{ url('index')}}"><img class="logo" src="{{asset('img/logo.png')}}"></a>
                    
                    <button class="navbar-toggler btn" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    
                    <div class="collapse navbar-collapse" id="navbarSupportedContent">
                        <ul class="navbar-nav mr-auto">

                            <li class="nav-item active mr-3">
                                <a class="nav-link" >@yield('index')<span class="sr-only">(current)</span></a>
                            </li>   



                            <form class="form-inline my-2 my-lg-0 mr-3" method="POST" action="{{route('catalogo')}}">
                                @csrf   
                                <input class="form-control mr-sm-2" type="search" required placeholder="Busca un test" aria-label="Search" name="search">
                                <button class="btn btn-outline-light my-2 my-sm-0" type="submit">Buscar</button>
                            </form>
                                 @if(Auth::check())
                                    <li class="nav-item dropdown float-right mr-3">
                                        <a class="nav-link dropdown-toggle text-white" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">{{ Auth::user()->name }}  </a>
                                        
                                        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                                            <a class="dropdown-item" href="{{ url('perfil') }}"><i class="fa fa-user-o" aria-hidden="true"></i> Mi perfil</a>
                                            <a class="dropdown-item" href="{{ url('evaluaciones') }}"><i class="fa fa-folder-open-o" aria-hidden="true"></i> Mis evaluaciones</a>
                                            <a class="dropdown-item" href="{{ url('compras') }}"><i class="fa fa-shopping-cart" aria-hidden="true"></i> Mis compras <!--<span class="badge badge-pill badge-info text-white">1</span>--></a>
                                            
                                            <!--Solo para los administradores del sistema-->
                                            <!--<a class="dropdown-item" href="{{ url('adm') }}"><i class="fa fa-tasks" aria-hidden="true"></i> Panel de Administración</a> -->                                                                                              
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

                                            <a class="dropdown-item" href="{{ url('catalogo')}}"><i class="fa fa-th-large" aria-hidden="true"></i> Catálogo</a>

                                            <div class="dropdown-divider">
                                            </div>



                                            <a class="dropdown-item" href="{{ url('investigacion')}}"><i class="fa fa-flask" aria-hidden="true"></i> Para investigación</a>
                                            <div class="dropdown-divider">
                                            </div>


                                            <a class="dropdown-item" href="{{ url('empresas')}}"><i class="fa fa-building-o" aria-hidden="true"></i> Para empresas</a>
                                            <div class="dropdown-divider">
                                            </div>



                                            <a class="dropdown-item" href="{{ url('pagos')}}"><i class="fa fa-credit-card" aria-hidden="true"></i> Formas de pago</a>

                                        </div>
                                    </li>
                                  

                                    <li class="nav-item ">
                                        <a class="nav-link text-white" href="{{ url('contactanos')}}">Contactanos</a>
                                    </li>




                        </ul>   
                    </div>
                </nav>


<!---->













<main>
   @yield('content') 
</main>


<!-- Footer -->
<footer class="page-footer font-small negro pt-4 stickyy ">

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
            <a href="{{ url('comofunciona')}}">¿Como funciona?</a>
          </li>
          <li>
            <a href="{{ url('catalogo')}}">Catálogo</a>
          </li>

          <li>
            <a href="{{ url('investigacion')}}">Para investigación</a>
          </li>

          <li>
            <a href="{{ url('empresas')}}">Para empresas</a>
          </li>
          <li>
            <a href="{{ url('pagos')}}">Formas de pago</a>
          </li>
          <li>
            <a href="{{ url('contactanos')}}">Contactanos</a>
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
            <a href="#!" class=""><i class="fa fa-instagram" aria-hidden="true"></i> Instagram</a>
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
                                                                <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('Correo electrónico') }}</label>

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
                                                                <label for="password" class="col-md-4 col-form-label text-md-right">{{ __('Contraseña') }}</label>

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
                                                                            {{ __('Recordarme') }}
                                                                        </label>
                                                                    </div>
                                                                </div>
                                                            </div>

                                                            <div class="form-group row mb-0">
                                                                <div class="col-md-8 offset-md-4">
                                                                    <button type="submit" class="btn btn-primary">
                                                                        {{ __('Entrar') }}
                                                                    </button>

                                                                    @if (Route::has('password.request'))
                                                                        <a class="btn btn-link" href="{{ route('password.request') }}">
                                                                            {{ __('¿Olvidaste tu contraseña?') }}
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
                                                                    <label for="name" class="col-md-4 col-form-label text-md-right">{{ __('Nombre') }}</label>

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
                                                                    <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('Correo electrónico') }}</label>

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
                                                                    <label for="password" class="col-md-4 col-form-label text-md-right">{{ __('Contraseña') }}</label>

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
                                                                    <label for="password-confirm" class="col-md-4 col-form-label text-md-right">{{ __('Confirmar contraseña') }}</label>

                                                                    <div class="col-md-6">
                                                                        <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required>
                                                                    </div>
                                                                </div>

                                                                <div class="form-group row mb-0">
                                                                    <div class="col-md-6 offset-md-4">
                                                                        <button type="submit" class="btn btn-primary">
                                                                            {{ __('Registrarme') }}
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







    
</body>

</html>