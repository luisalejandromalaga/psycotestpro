@extends('header')

@section('content')
<!--CATALOGOphp store-->


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
            
            <div class="container">

                <h2 class="text-center mt-3">Muestra del catálogo</h2>
                <hr >
                <div class="card-deck mb-3">
                    <div class="card mb-3">
                        <div class="card-body">
                            <h4 class="card-title">Test de desarrollo psicomotor (TEPSI)</h4>
                            <p class="card-text">El TEPSI es una prueba de tamizaje que sirve para obtener información sobre el desarrollo del niño comparándolo con otros de su mismo grupo poblacional.</p>
                        </div>
                        <div class="card-footer text-center "><a class="btn btn-primary p-1" href="http://localhost/psycotestpro/public/tepsi" target="_blank"><h5 class=" m-1">Más información</h5></a></div>
                    </div>
                    <div class="card  mb-3">
                        <div class="card-body">
                            <h4 class="card-title">Escala de Autoevaluación de la Ansiedad de Zung (EAA)</h4>
                            <p class="card-text">El TEPSI es una prueba de tamizaje que sirve para obtener información sobre el desarrollo del niño comparándolo con otros de su mismo grupo poblacional.</p>
                        </div>
                        <div class="card-footer text-center "><a class="btn btn-primary p-1" href="" target=""><h5 class=" m-1">Próximamente</h5></a></div>
                    </div>
                    <div class="card  mb-3">
                        <div class="card-body">
                            <h4 class="card-title">Test de Asociación Implícita (Quechua - Caucásico - Bueno - Malo)</h4>
                            <p class="card-text">El TEPSI es una prueba de tamizaje que sirve para obtener información sobre el desarrollo del niño comparándolo con otros de su mismo grupo poblacional.</p>
                        </div>
                        <div class="card-footer text-center "><a class="btn btn-primary p-1" href=""      target=""><h5 class="m-1">Próximamente</h5></a></div>
                    </div>
                </div>


                    <div class="row justify-content-center mb-5">
                        <a class="btn btn-outline-secondary m-1" href="http://localhost/psycotestpro/public/catalogo" target="_blank"><h5 class="m-1">Ver catálogo completo</h5></a>           
                    </div>



                    


            </div>



<!--Como funciona-->

            <div class="container mb-5">

                <h2 class="text-center mt-3">¿Como funciona?</h2>
                <hr >
                <div class="row ">
                    <div class="col-lg-10  ">             
                        <p>Desde que el estudio del comportamiento humano se tornó una empresa científica la obtención de información fiable sobre la conducta de las personas ha sido una tarea vital. Para logar esto se ha desarrollado una teoría y una tecnología sobre la medición del comportamiento denomina psicometría.</p>
                        <p>En la psicometría tradicional han predominado tecnologías basadas principalmente en "lapiz y papel", preentandose una gran cantidad de deficiencias al momento de obtener informacion de calidad sobre el comportamiento. Los requisitos pscometricos presentan estandares que dificilmente las tecnologias de lapiz y papel pueden satisfacer.</p>
                        <p>Las tecnologías de la informacion, así como el desarrollo de dispositivos electronicos conectados a internet que registran datos del comportamiento son superiores al momento de presentar medidas mucho más detalladas y de calidad.</p>
                    </div>
                    <div class="col-lg-2  align-self-center text-center ">
                        <a class="btn btn-outline-secondary m-1" href="http://localhost/psycotestpro/public/comofunciona" target="_blank"><h5 class="m-1">Aprender más</h5></a>           
                    </div> 
                </div>
            </div>

<!--END Como funciona-->

<!--Forma de pago-->
            <div class="container mb-5">

                <h2 class="text-center mt-3">Planes de pago y precios</h2>
                <hr >

                <h4 class="text-center mb-3">Tenemos planes desde S/ 19.90 al mes</h4>


                <div class="card-deck mb-3">
                    <div class="card mb-3 text-center ">
                        <div class="card-body  border-top borderGrueso border-primary">
                            <h4 class="card-title text-center">BÁSICO</h4>
                            <hr>
                            <p class="card-text text-center">Puedes elegir cualquier instrumento de evaluación de nuestro catálogo.</p>

                            <p class="text-center mb-4"><strong class="">Numero de evaluaciones:</strong> 15</p>

                            <p class="text-center mb-4"><strong class="">Acceso a tecnología en desarrollo:</strong> No</p>

                            <p class="text-center mb-4"><strong class="">Uso para investigación:</strong> No</p>

                            <h2 class="text-center text-success">S/ 19.90</h2>

                            <button class="btn btn-primary ">
                                Adquierelo ahora
                            </button>

                        </div>
                    </div>
                    
                    <div class="card mb-3 text-center ">
                        <div class="card-body  border-top borderGrueso border-primary">
                            <h4 class="card-title text-center">PROFESIONAL</h4>
                            <hr>
                            <p class="card-text text-center">Puedes elegir cualquier instrumento de evaluación de nuestro catálogo.</p>


                            <p class="text-center mb-4"><strong class="">Numero de evaluaciones:</strong> 45</p>

                            <p class="text-center mb-4"><strong class="">Acceso a tecnología en desarrollo:</strong> Si</p>

                            <p class="text-center mb-4"><strong class="">Uso para investigación:</strong> No</p>

                            <h2 class="text-center text-success">S/ 39.90</h2>

                            <button class="btn btn-primary ">
                                Adquierelo ahora
                            </button>

                        </div>
                    </div>
                    <div class="card mb-3 text-center ">
                        <div class="card-body  border-top borderGrueso border-primary">
                            <h4 class="card-title text-center">PREMIUM</h4>
                            <hr>
                            <p class="card-text text-center">Puedes elegir cualquier instrumento de evaluación de nuestro catálogo.</p>

                            <p class="text-center mb-4"><strong class="">Numero de evaluaciones:</strong> Ilimitadas</p>

                            <p class="text-center mb-4"><strong class="">Acceso a tecnología en desarrollo:</strong> Si</p>

                            <p class="text-center mb-4"><strong class="">Uso para investigación:</strong> Si</p>

                            <h2 class="text-center text-success">S/ 59.90</h2>

                            <button class="btn btn-primary ">
                                Adquierelo ahora
                            </button>

                        </div>
                    </div>
                </div>

                    <div class="row justify-content-center mb-5">
                        <a class="btn btn-outline-secondary m-1" href="http://localhost/psycotestpro/public/tepsi" target="_blank"><h5 class="m-1">Descubre más planes de pago y precios</h5></a>           
                    </div>


            </div>
<!--END Forma de pago-->

<!--Para empresas-->
            <div class="container mb-5">

                <h2 class="text-center mt-3">Soluciones empresariales</h2>
                <hr >


                    <div class="">             
                        <p>Debido al creciente interés de las empresas en la incorporación de las ciencias del comportamiento como parte sus políticas de gestión, se hace necesario por medir las variables comportamentales claves y de esta manera logar gestionarlas.  </p>
                    </div>
                    <div class="row justify-content-center mb-5">
                        <a class="btn btn-outline-secondary m-1" href="http://localhost/psycotestpro/public/tepsi" target="_blank"><h5 class="m-1">Descubre otras maneras de emplear Psycotestpro en tu empresa</h5></a>           
                    </div>



            </div>

@endsection