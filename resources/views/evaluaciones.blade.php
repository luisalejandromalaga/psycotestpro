@extends('header')
@section('title')
Evaluaciones - Psycotestpro
@endsection
@section('index')
Evaluaciones
@endsection
@section('content')       
<!-- Sidebar -->
<div class="sidebar">
<<<<<<< HEAD
   <a class="active" href="{{ url('evaluaciones') }}"><i class="fa fa-files-o" aria-hidden="true"></i> Todas</a>
   <a href="{{ url('informes') }}"><i class="fa fa-file-text-o" aria-hidden="true"></i> Informes</a>
=======
  <a class="active pri" href="{{ url('evaluaciones') }}"><i class="fa fa-files-o" aria-hidden="true"></i> Todas</a>
  <a href="{{ url('informes') }}"><i class="fa fa-file-text-o" aria-hidden="true"></i> Informes</a>

>>>>>>> 56a2854cd6f65b799272158d43c60946c17e0954
</div>
<!-- Page content -->
<div class="content">
   <h2 class="text-center mt-3">Mis evaluaciones</h2>
   <hr >
   <div class="">
      <form class="form-inline my-2 my-lg-0 ">
         <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
         <button class="btn btn-outline-primary my-2 my-sm-0" type="submit">Search</button>
      </form>
   </div>
   <h4 class="text-center mb-3"></h4>
   @php
   $c = 0;
   @endphp
   @foreach($tipo_test as $tt)
   <div class="card mb-3 text-center ">
      <div class="card-body  row mr-0  ml-0  border-left borderGrueso border-primary justify-content-center align-items-center">
         <div class="col-lg-4  ">
            <h4>{{$tt->titulo}}</h4>
            <br>
            <a class="btn btn-dark mb-1" href="{{ url($tt->titulo) }}"><i class="fa fa-wrench" aria-hidden="true"></i></i> Información técnica</a>   
         </div>
         <div class="col-lg-4">
            <h5>Evaluaciones realizadas:</h5>
            <h2 class="text-center text-primary">{{$arraytotal[$c]}}</h2>
            <br>
            <h5>Evaluaciones restantes:</h5>
            <h2 class="text-center text-success">{{$array[$c]}} </h2>
         </div>
         <div class="col-lg-4">
            <a class="btn btn-primary mb-1" href="{{ url($tt->titulo.'/antes') }}"><i class="fa fa-plus-circle" aria-hidden="true"></i> Nueva evaluación</a>                              
            <br>
            <a class="btn btn-success mb-1" href="{{ url($tt->titulo.'/comprar') }}"><i class="fa fa-shopping-cart" aria-hidden="true"></i> Adquirir más</a>                           
         </div>
      </div>
   </div>
      @php
     $c++;
     @endphp
   @endforeach
</div>
<<<<<<< HEAD
=======

                <h4 class="text-center mb-3"></h4>

                    


                    <div class="card mb-3 text-center ">

                        <div class="card-body  row mr-0  ml-0  border-left borderGrueso border-primary justify-content-center align-items-center">

 
                            <div class="col-lg-4  ">
                              <h4>Test de desarrollo psicomotor (TEPSI)</h4>

                               <br>

                               <a class="btn btn-dark mb-1" href="{{ url('tepsi') }}"><i class="fa fa-wrench" aria-hidden="true"></i></i> Información técnica</a>   

                            </div>




                            <div class="col-lg-4">
                               <h5>Evaluaciones realizadas:</h5>

                              <h2 class="text-center text-primary">12</h2>                             

                              <br>

                              <h5>Evaluaciones restantes:</h5>

                              <h2 class="text-center text-success">&infin; </h2>

                            </div>




                            <div class="col-lg-4">
                               <a class="btn btn-primary mb-1 pri" href="{{ url('tepsi/antes') }}"><i class="fa fa-plus-circle" aria-hidden="true"></i> Nueva evaluación</a>                              
                              

                               <br>

                               <a class="btn btn-success mb-1" href="{{ url('tepsi/comprar') }}"><i class="fa fa-shopping-cart" aria-hidden="true"></i> Adquirir más</a>                           
                            </div>

                        </div>

                    </div>








</div>



>>>>>>> 56a2854cd6f65b799272158d43c60946c17e0954
<!--CATALOGO-->
@endsection