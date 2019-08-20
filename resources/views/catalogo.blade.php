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
                    @foreach($tests as $test)
                    <div class="card mb-3">
                        <div class="card-body">
                            <h4 class="card-title">{{$test->titulo}}</h4>
                            <p class="card-text">{{$test->descripcion}}</p>
                        </div>
                        <div class="card-footer text-center ">

                            <a class="btn btn-dark mb-1" href="{{ url($test->url) }}">
                                <i class="fa fa-wrench" aria-hidden="true"></i> Información técnica
                            </a>

                            <a class="btn btn-success mb-1 " href="{{ url('comprar/'.$test->url) }}">
                               <i class="fa fa-shopping-cart" aria-hidden="true"></i> Adquirir evaluación 
                            </a>

 

                        </div>
                    </div>
                    @endforeach
                   
                </div>

            </div>


@endsection

