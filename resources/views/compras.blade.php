@extends('header')

@section('title')
Compras - Psycotestpro
@endsection


@section('index')
Compras
@endsection



@section('content')       



<body class="" style="">
 
<!--CATALOGO-->



            <div class="">

                <h2 class="text-center mt-3">Mis compras</h2>




                    <table class="table table-hover">
                      <thead class="thead-light">
                        <tr>
                          <th scope="col">#</th>
                          <th scope="col">Item</th>
                          <th scope="col">Precio</th>
                          <th scope="col">Estado</th>
                          <th scope="col">Comprobante</th>                         
                        </tr>
                      </thead>
                      <tbody>
                        <tr>
                          <th scope="row">1</th>
                          <td>EPQ</td>
                          <td>S/ 21.00</td>
                          <td class="text-danger">En espera de validación</td>
                          <td><button class="btn btn-primary"><i class="fa fa-file-pdf-o" aria-hidden="true"></i></button></td>                          
                        </tr>
                        <tr>
                          <th scope="row">2</th>
                          <td>TEPSI</td>
                          <td>S/ 21.00</td>
                          <td class="text-success">Validado</td>
                          <td><button class="btn btn-primary"><i class="fa fa-file-pdf-o" aria-hidden="true"></i></button></td>                            
                        </tr>
                        <tr>
                          <th scope="row">3</th>
                          <td>EAA ZUNG</td>
                          <td>S/ 21.00</td>
                          <td class="text-success">Validado</td>
                          <td><button class="btn btn-primary"><i class="fa fa-file-pdf-o" aria-hidden="true"></i></button></td>                            
                        </tr>
                      </tbody>
                    </table>



            </div>





@endsection