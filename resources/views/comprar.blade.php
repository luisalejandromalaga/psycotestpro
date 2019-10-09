
@extends('header')


@section('title')
Comprar TEPSI - Psycotestpro
@endsection


@section('index')
Comprar
@endsection

@section('content')



<!--Contenido-->

     

<div class="card m-4">
                                
    <div class="card-header">
        <h2 class="card-title text-center">{{$tests[0]->titulo}}</h2>
    </div>
                                
    <div class="card-body ">
        <div class="card-text">

            <div class="row">
                <div class="col-lg-12">
                 <h2 class="text-primary">Paso 1:</h2>
                 <h3 class="text-primary">Selecciona el número de evaluaciones que deseas adquirir</h3>
                 <br>
                </div>
            </div>

            <div class="row mb-4 text-center align-items-center">
                <div class="col-lg-4">
                    <h3>Descripción:</h3>
                    <p class="card-text">{{$tests[0]->descripcion}}</p>
                </div>

                <div class="col-lg-4 ">
                    <h3>Cantidad:</h3>



                    <form class="form-inline justify-content-center align-items-center" action="{{route('calcular_precio')}}" method="post">      @csrf
                        <a class="btn btn-dark text-white ml-2 mr-2" type="" id="botonMenos" name="botonMenos"><i class="fa fa-minus" aria-hidden="true"></i></a>


                            
                            <input type="hidden" name="name_test" value="{{$tests[0]->url}}">
                            <input class="form-control compraImp " type="text" id="numero" name="numero" value="{{$subtotal}}">
                        <a class="btn btn-dark text-white ml-2 mr-2" type="" id="botonMas" name="botonMas"><i class="fa fa-plus" aria-hidden="true"></i></a>
                        
                        <button class="btn btn-primary mt-1 mb-3 text-white"  type="submit">Calcular precio</button>

                    </form>

                  

                </div>

                <div class="col-lg-4">
                    <h3>Precio a pagar:</h3>
                    <span class="h3 text-primary">S/ </span><span class="h3 text-primary" id="precio">{{$total}}</span>
                </div>
            </div>
            <hr>
            <div class="row ">
                <div class="col-lg-12 ">
                    <h2 class="text-primary">Paso 2:</h2>
                    <h3 class="text-primary">Adjunta tu comprobante</h3>
                    <div class=" row justify-content-center text-center">
                        <form method="post" class="" action="{{route('subir_voucher')}}" id="#" enctype="multipart/form-data">
                             @csrf
                            <input type="hidden" name="tipo_test" value="{{$tests[0]->id_tipo_test}}">
                            <input type="file" class="btn btn-success mb-3 " name="voucher" multiple="">
                            <br>

                            <button type="submit" class="btn btn-primary ">Comprar</button>
                                                        
                        </form>
                    </div>
                </div>
            </div>
        </div>

    </div>

</div>                    

   
<!--ENDContenido-->



<script type="text/javascript">
        
    window.addEventListener("load", cargaPagina);


    function cargaPagina() {

        var inputNombre = document.getElementById("numero");
        i = inputNombre.value;



        var btnMas = document.getElementById("botonMas").addEventListener("click", valoresMas);

        var btnMenos = document.getElementById("botonMenos").addEventListener("click", valoresMenos);

        var btnMenos = document.getElementById("calcular").addEventListener("click", calcular);

    }



    function valoresMas() {
        var inputNombre = document.getElementById("numero");
        inputNombre.value = i++;

        var inputNombre = document.getElementById("numero");
        inputNombre.value = i;
       
    }


    function valoresMenos() {
        var inputNombre = document.getElementById("numero");

        if (inputNombre.value <= 0) {
            inputNombre.value = 0;
        }else{
            inputNombre.value = i--;
        }
        

        var inputNombre = document.getElementById("numero");
        inputNombre.value = i;


    }


    


</script>



@endsection