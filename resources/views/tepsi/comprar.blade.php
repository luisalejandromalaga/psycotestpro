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
                                
                                <div class="card-body">

                                    <div class="card-text">

                                      

                                          <h3>Descripción:</h3>

        <br>


        Cantidad:

        <br><br>

<form class="form-inline" action="#" method="post">      
    <a class="btn btn-dark text-white mr-2" type="" id="botonMenos" name="botonMenos"><i class="fa fa-minus" aria-hidden="true"></i></a>
        <input class="form-control" type="text" id="nombre" name="nombre" value="0">
    <a class="btn btn-dark text-white ml-2" type="" id="botonMas" name="botonMas"><i class="fa fa-plus" aria-hidden="true"></i></a>
</form>




<script type="text/javascript">
        
    window.addEventListener("load", cargaPagina);


    function cargaPagina() {

        var inputNombre = document.getElementById("nombre");
        i = inputNombre.value;  
        

        var btnMas = document.getElementById("botonMas").addEventListener("click", valoresMas);

        var btnMenos = document.getElementById("botonMenos").addEventListener("click", valoresMenos);

    }



    function valoresMas() {


        var inputNombre = document.getElementById("nombre");
        inputNombre.value = i++;



        var inputNombre = document.getElementById("nombre");
        inputNombre.value = i;


    }


    function valoresMenos() {
        var inputNombre = document.getElementById("nombre");
        

        if (inputNombre.value <= 0) {
            inputNombre.value = 0;
        }else{
            inputNombre.value = i--;
        }
        
        var inputNombre = document.getElementById("nombre");
        inputNombre.value = i;

    }


</script>



                                    </div>
                                </div>
                        </div>                        

   
<!--ENDContenido-->





@endsection