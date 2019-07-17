@extends('header')

@section('title')
Informes - Psycotestpro
@endsection


@section('index')
Informes
@endsection



@section('content')       



<!-- Sidebar -->
<div class="sidebar">
  <a class="" href="{{ url('evaluaciones') }}"><i class="fa fa-files-o" aria-hidden="true"></i> Todas</a>
  <a class="active" href="{{ url('informes') }}"><i class="fa fa-file-text-o" aria-hidden="true"></i> Informes</a>

</div>
<!--END Sidebar -->

<!-- Page content -->
<div class="contentB">


      <table class="table table-hover">
        <thead class="thead-dark">
          <tr>
            <th scope="col">#</th>
            <th scope="col">Nombres y Apellidos</th>
            <th scope="col">Evaluación</th>
            <th scope="col">Informe</th>
          </tr>
        </thead>
        <tbody>
          <tr>
            <th scope="row">1</th>
            <td>Mark</td>
            <td>EPQ</td>
            <td><button class="btn btn-success"><i class="fa fa-file-pdf-o" aria-hidden="true"></i></button></td>
          </tr>
          <tr>
            <th scope="row">2</th>
            <td>Jacob</td>
            <td>TEPSI</td>
            <td><button class="btn btn-success"><i class="fa fa-file-pdf-o" aria-hidden="true"></i></button></td>
          </tr>
          <tr>
            <th scope="row">3</th>
            <td>Larry</td>
            <td>TEPSI</td>
            <td><button class="btn btn-success"><i class="fa fa-file-pdf-o" aria-hidden="true"></i></button></td>
          </tr>
        </tbody>
      </table>


</div>



<!--CATALOGO-->



@endsection