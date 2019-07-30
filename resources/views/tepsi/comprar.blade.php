
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
        <h2 class="card-title text-center">Comprar - Test de desarrollo psicomotor (TEPSI)</h2>
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
                    <p class="card-text">El TEPSI es una prueba de tamizaje que sirve para obtener información sobre el desarrollo del niño comparándolo con otros de su mismo grupo poblacional.</p>
                </div>

                <div class="col-lg-4 ">
                    <h3>Cantidad:</h3>



                    <form class="form-inline justify-content-center align-items-center" action="#" method="post">      
                        <a class="btn btn-dark text-white ml-2 mr-2" type="" id="botonMenos" name="botonMenos"><i class="fa fa-minus" aria-hidden="true"></i></a>
                            <input class="form-control compraImp " type="text" id="numero" name="numero" value="0">
                        <a class="btn btn-dark text-white ml-2 mr-2" type="" id="botonMas" name="botonMas"><i class="fa fa-plus" aria-hidden="true"></i></a>


                    </form>

                    <a class="btn btn-primary mt-1 mb-3 text-white" id="calcular">Calcular precio</a>

                </div>

                <div class="col-lg-4">
                    <h3>Precio a pagar:</h3>
                    <span class="h3 text-primary">S/ </span><span class="h3 text-primary" id="precio">0.00</span>
                </div>
            </div>
            <hr>
            <div class="row ">
                <div class="col-lg-12 ">
                    <h2 class="text-primary">Paso 2:</h2>
                    <h3 class="text-primary">Adjunta tu comprobante</h3>
                    <div class=" row justify-content-center text-center">
                        <form method="post" class="" action="#" id="#">
     
                            <input type="file" class="btn btn-success mb-3 " multiple="">
                            <br>

                            <button class="btn btn-primary ">Comprar</button>
                                                        
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


    function calcular() {

        var numero = i;
        var precio = document.getElementById("precio");

        var total = i*1.1;

        precio.innerHTML = total.toFixed(2); 
    }



</script>



@endsection