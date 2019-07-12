@extends('header')

@section('title')
Catálogo - Psycotestpro
@endsection


@section('index')
Catálogo
@endsection

@section('content')

<!--CATALOGO-->



            <div class="container">

                <h2 class="text-center mt-3">Catálogo</h2>
                <hr >
                <h4 class="text-center mb-3">Contamos con una grán cantidad de intrumentos de evaluacion a tu disposición</h4>

                <div class="card-deck mb-3">
                    <div class="card mb-3">
                        <div class="card-body">
                            <h4 class="card-title">Test de desarrollo psicomotor (TEPSI)</h4>
                            <p class="card-text">El TEPSI es una prueba de tamizaje que sirve para obtener información sobre el desarrollo del niño comparándolo con otros de su mismo grupo poblacional.</p>
                        </div>
                        <div class="card-footer text-center ">

                            <a class="btn btn-dark mb-1" href="{{ url('tepsi') }}">
                                <h5 class=" m-1"><i class="fa fa-superpowers" aria-hidden="true"></i> Información técnica</h5>
                            </a>

                            <a class="btn btn-success mb-1 " href="{{ url('tepsi/comprar') }}">
                               <h5 class=" m-1"><i class="fa fa-shopping-cart" aria-hidden="true"></i> Adquirir evaluación </h5>
                            </a>

 

                        </div>
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

            </div>


@endsection

