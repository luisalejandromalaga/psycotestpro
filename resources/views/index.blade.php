@extends('header')

@section('title')
Psycotestpro
@endsection


@section('index')
Inicio
@endsection

@section('content')
<!--CATALOGOphp store-->


<div class="bgdark  text-right ">

            <img class="dataimg" src="{{asset('img/new.svg')}}">

            <div class=" d-md-block  centered text-center">
                 <h1 class=" d-md-block text-white text-center mb-5"><strong>PSYCOTESTPRO</strong></h1>
                 <h2 class="d-none d-md-block text-white text-center mb-5">"Diseñamos, contruimos y sometemos a prueba tecnologías para la evaluación del comportamiento"</h2>
                 @if(!Auth::check())
                 <button type="button" class="m-1 btn btn-primary btn-lg sec" data-toggle="modal" data-target="#register">Registrarme</button>
                 <button type="button" class="m-1 btn btn-primary btn-lg sec" data-toggle="modal" data-target="#login">Iniciar Sesión</button>
                 @endif

            </div>
</div>
<!------------>


            <div class="container">
            <div>

                <div> <h2 class="text-center mt-3">Muestra del catálogo</h2>
                <hr >
                </div>
                <div class="card-deck mb-3">
                    <div class="card mb-3">
                        <div class="card-body">
                            <h4 class="card-title">Test de desarrollo psicomotor (TEPSI)</h4>
                            <p class="card-text">El TEPSI es una prueba de tamizaje que sirve para obtener información sobre el desarrollo del niño comparándolo con otros de su mismo grupo poblacional.</p>
                        </div>

                        <div class="card-footer text-center  bg-white"><a class="btn btn-primary p-1 pri txt-1" href="{{ url('tepsi')}}" >Más información</a></div>

                    </div>
                    <div class="card  mb-3">
                        <div class="card-body">
                            <h4 class="card-title">Escala de Autoevaluación de la Ansiedad de Zung (EAA)</h4>
                            <p class="card-text">El TEPSI es una prueba de tamizaje que sirve para obtener información sobre el desarrollo del niño comparándolo con otros de su mismo grupo poblacional.</p>
                        </div>

                        <div class="card-footer text-center bg-white"><a class="btn btn-primary p-1 pri txt-1" href="" target="">Próximamente</a></div>

                    </div>
                    <div class="card  mb-3">
                        <div class="card-body">
                            <h4 class="card-title">Test de Asociación Implícita (Quechua - Caucásico - Bueno - Malo)</h4>
                            <p class="card-text">El TEPSI es una prueba de tamizaje que sirve para obtener información sobre el desarrollo del niño comparándolo con otros de su mismo grupo poblacional.</p>
                        </div>

                        <div class="card-footer text-center  bg-white"><a class="btn btn-primary p-1 pri txt-1" href=""      target="">Próximamente</a></div>

                    </div>
                </div>


                    <div class="row justify-content-center mb-5">
                        <a class="btn btn-outline-secondary m-1" href="{{ url('catalogo')}}" ><h5 class="m-1">Ver catálogo completo</h5></a>           
                    </div>



                    

            </div>
            </div>



<!--Como funciona-->

            <div class="container card mb-5">

                <h2 class="text-center mt-3">¿Como funciona?</h2>
                <hr >
                <div class="row ">
                    <div class="col-lg-10 txt-1 ">             
                        <p>Desde que el estudio del comportamiento humano se tornó una empresa científica la obtención de información fiable sobre la conducta de las personas ha sido una tarea vital. Para logar esto se ha desarrollado una teoría y una tecnología sobre la medición del comportamiento denomina psicometría.</p>
                        <p>En la psicometría tradicional han predominado tecnologías basadas principalmente en "lapiz y papel", preentandose una gran cantidad de deficiencias al momento de obtener informacion de calidad sobre el comportamiento. Los requisitos pscometricos presentan estandares que dificilmente las tecnologias de lapiz y papel pueden satisfacer.</p>
                        <p>Las tecnologías de la informacion, así como el desarrollo de dispositivos electronicos conectados a internet que registran datos del comportamiento son superiores al momento de presentar medidas mucho más detalladas y de calidad.</p>
                    </div>
                    <div class="col-lg-2  align-self-center text-center ">
                        <a class="btn btn-outline-secondary m-1" href="{{ url('comofunciona')}}" ><h5 class="m-1">Aprender más</h5></a>           
                    </div> 
                </div>
            </div>

<!--END Como funciona-->


<!--Para investigacion-->
            <div class="container card mb-5">

                <h2 class="text-center mt-3">Para investigación</h2>
                <hr >

                <div class="row justify-content-center align-items-center ">
                   
                    <div class="col-lg-3 text-center mb-3">
                        <img src="{{asset('img/investigar.png')}}" class="investigar ">
                    </div>

                    <div class="txt-1 col-lg-9">             
                        <p>Puedes usar Psycotestpro para recolectar de manera rápida y eficiente grandes cantidades de datos para tu investigación. Tambien puedes exportar tu base de datos lista para analizar. Cáda test cuenta con especificaciónes técnicas que te facilitarán el analisis de tus datos. </p>
                    </div>



                </div>
                    
                    <div class="row justify-content-center mb-5">
                        <a class="btn btn-outline-secondary m-1" href="{{ url('investigacion')}}" ><h5 class="m-1">Descubre otras maneras de emplear Psycotestpro en tu investigación</h5></a>           
                    </div>



            </div>

<!--END investigacion-->




<!--Para empresas-->
            <div class="container card mb-5">

                <h2 class="text-center mt-3"> Soluciones empresariales</h2>
                <hr >


                    <div class="txt-1">             
                        <p>Debido al creciente interés de las empresas en la incorporación de las ciencias del comportamiento como parte sus políticas de gestión, se hace necesario por medir las variables comportamentales claves y de esta manera logar gestionarlas.  </p>
                    </div>
                    <div class="row justify-content-center mb-5">
                        <a class="btn btn-outline-secondary m-1" href="{{ url('empresas')}}" ><h5 class="m-1">Descubre otras maneras de emplear Psycotestpro en tu empresa</h5></a>           
                    </div>



            </div>

<!--END Para empresas-->








<!--Forma de pago-->
            <div class="container mb-5">

                <h2 class="text-center mt-3">Planes de pago y precios</h2>
                <hr >

                <h4 class="text-center mb-3">Tenemos planes desde S/ 19.90 al mes</h4>


                <div class="card-deck mb-3">
                    <div class="card mb-3 text-center borderGrueso">
                        <div class="card-body  ">
                            <h4 class="card-title text-center">BÁSICO</h4>
                            <hr>
                            <p class="card-text text-center">Puedes elegir cualquier instrumento de evaluación de nuestro catálogo.</p>

                            <p class="text-center mb-4"><strong class="">Numero de evaluaciones:</strong> 15</p>

                            <p class="text-center mb-4"><strong class="">Acceso a tecnología en desarrollo:</strong> No</p>

                            <p class="text-center mb-4"><strong class="">Uso para investigación:</strong> No</p>

                            <h2 class="text-center text-success">S/ 19.90</h2>

                            <button class="btn btn-primary pri">
                                Próximamente<!--Adquierelo ahora-->
                            </button>

                        </div>
                    </div>
                    
                    <div class="card mb-3 text-center borderGrueso">
                        <div class="card-body">
                            <h4 class="card-title text-center">PROFESIONAL</h4>
                            <hr>
                            <p class="card-text text-center">Puedes elegir cualquier instrumento de evaluación de nuestro catálogo.</p>


                            <p class="text-center mb-4"><strong class="">Numero de evaluaciones:</strong> 45</p>

                            <p class="text-center mb-4"><strong class="">Acceso a tecnología en desarrollo:</strong> Si</p>

                            <p class="text-center mb-4"><strong class="">Uso para investigación:</strong> No</p>

                            <h2 class="text-center text-success">S/ 39.90</h2>

                            <button class="btn btn-primary pri">
                                Próximamente<!--Adquierelo ahora-->
                            </button>

                        </div>
                    </div>
                    <div class="card mb-3 text-center borderGrueso">
                        <div class="card-body ">
                            <h4 class="card-title text-center">PREMIUM</h4>
                            <hr>
                            <p class="card-text text-center">Puedes elegir cualquier instrumento de evaluación de nuestro catálogo.</p>

                            <p class="text-center mb-4"><strong class="">Numero de evaluaciones:</strong> Ilimitadas</p>

                            <p class="text-center mb-4"><strong class="">Acceso a tecnología en desarrollo:</strong> Si</p>

                            <p class="text-center mb-4"><strong class="">Uso para investigación:</strong> Si</p>

                            <h2 class="text-center text-success">S/ 59.90</h2>

                            <button class="btn btn-primary pri ">
                                Próximamente<!--Adquierelo ahora-->
                            </button>

                        </div>
                    </div>
                </div>

                    <div class="row justify-content-center mb-5">
                        <a class="btn btn-outline-secondary m-1" href="{{ url('pagos')}}"><h5 class="m-1">Descubre más planes de pago y precios</h5></a>           
                    </div>


            </div>
<!--END Forma de pago-->





@endsection