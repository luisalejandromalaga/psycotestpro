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
                        @php
                          $cont = 0;
                        @endphp
                        @foreach($pagos as $pa)

                        <tr>
                          <th scope="row">{{++$cont}}</th>
                          <td>{{$pa->id_tipo_test}}</td>
                          <td>S/ {{$pa->precio}}</td>
                          @if($pa->estado == 'SIn validar')
                          <td class="text-danger">{{$pa->estado}}</td>
                          @else
                          <td class="text-success">{{$pa->estado}}</td>
                          @endif
                          <td><a href="vouchers/{{$pa->voucher}}" target="blank" class="btn btn-primary"><i class="fa fa-file-pdf-o" aria-hidden="true"></i></a></td>                          
                        </tr>
                        @endforeach
                        
                        
                      </tbody>
                    </table>



            </div>





@endsection 