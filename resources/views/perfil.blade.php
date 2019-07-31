@extends('header')

@section('title')
Perfil - Psycotestpro
@endsection


@section('index')
Perfil
@endsection



@section('content')       



<body class="" style="">
 
<!--CATALOGO-->



            <div class="container">

                <h2 class="text-center mt-3">Perfil</h2>
                <hr >


                    <div class="card mb-3  ">
                        <div class="card-body">



                                <form>




                                    <div class="form-group ">
                                      <label for="inputEmail4">Nombres y apellidos</label>
                                      <input type="text" class="form-control" id="inputEmail4" >
                                    </div>



                                    <div class="form-group ">
                                      <label for="inputEmail4">Número de colegiatura</label>
                                      <input type="text" class="form-control" id="inputEmail4" >
                                    </div>


                                    <div class="form-group ">
                                      <label for="inputEmail4">Sexo</label>
                                      <input type="text" class="form-control" id="inputEmail4" >
                                    </div>

                                    <div class="form-group  ">
                                      <label class="text-left" for="inputEmail4">Correo electrónico</label>
                                      <input type="text" class="form-control" id="inputEmail4" >
                                    </div>


                                    <div class="form-group  ">
                                      <label class="text-left" for="inputEmail4">Número de celular</label>
                                      <input type="tel" class="form-control" id="inputEmail4">
                                    </div>

                                    <div class="form-group  ">
                                      <label class="text-left" for="inputEmail4">Grado académico</label>
                                      <input type="tel" class="form-control" id="inputEmail4" >
                                    </div>


                                    <div class="form-group  ">
                                      <label class="text-left" for="inputEmail4">Centro de estudios</label>
                                      <input type="tel" class="form-control" id="inputEmail4" >
                                    </div>

                                    <div class="form-group  ">
                                      <label class="text-left" for="inputEmail4">Lugar de trabajo</label>
                                      <input type="tel" class="form-control" id="inputEmail4" >
                                    </div>


                                    <div class="form-group  ">
                                      <label class="text-left" for="inputEmail4">Dirección</label>
                                      <input type="tel" class="form-control" id="inputEmail4" >
                                    </div>
                           

                                    <hr>
                                  <div class="text-center ">
                                    <button type="submit" class="btn btn-primary ">Guardar</button>
                                  </div>
                                </form>        




                        </div>
                    </div>


            </div>





@endsection