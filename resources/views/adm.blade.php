@extends('header')

@section('title')
Admin - Psycotestpro
@endsection


@section('index')
Admin
@endsection



@section('content')       



<!-- Sidebar -->
<div class="sidebar">
  <a class="active" href="{{ url('adm') }}"><i class="fa fa-usd" aria-hidden="true"></i> Compras</a>
  <a href="#"><i class="fa fa-users" aria-hidden="true"></i> Usuarios</a>

</div>


<!-- Page content -->
<div class="contentB">


      <table class="table table-hover">
        <thead class="thead-dark">
          <tr>
            <th scope="col">#</th>
            <th scope="col">Usuario</th>
            <th scope="col">Item</th>
            <th scope="col">Monto</th>            
            <th scope="col">Comprobante</th>
            <th scope="col">N° de operación</th>
            <th scope="col">Validar</th>
          </tr>
        </thead>
        <tbody>
          <tr>
            <th scope="row">1</th>
            <td>Mark</td>
            <td>EPQ</td>
            <td>S/ 10.00</td>
            <td><button class="btn btn-dark"><i class="fa fa-file-pdf-o" aria-hidden="true"></i></button></td>
            <td><input type="text" class="form-control form-control-sm" name=""></td>
            <td><button class="btn btn-success">Validar</button></td>
          </tr>
          <tr>
            <th scope="row">2</th>
            <td>Jacob</td>
            <td>TEPSI</td>
            <td>S/ 10.00</td>
            <td><button class="btn btn-dark"><i class="fa fa-file-pdf-o" aria-hidden="true"></i></button></td>
            <td><input type="text" class="form-control form-control-sm" name=""></td>
            <td><button class="btn btn-success">Validar</button></td>            
          </tr>
          <tr>
            <th scope="row">3</th>
            <td>Larry</td>
            <td>TEPSI</td>
            <td>S/ 10.00</td>
            <td><button class="btn btn-dark"><i class="fa fa-file-pdf-o" aria-hidden="true"></i></button></td>
            <td><input type="text" class="form-control form-control-sm" name=""></td>
            <td><button class="btn btn-success">Validar</button></td>            
          </tr>
        </tbody>
      </table>


</div>



<!--CATALOGO-->



@endsection