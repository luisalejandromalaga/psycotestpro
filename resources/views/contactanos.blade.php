@extends('header')

@section('title')
Contacto - Psycotestpro
@endsection


@section('index')
Contacto
@endsection



@section('content')       




 
<!--CATALOGO-->



            <div class="container fheight">

                <h2 class="text-center mt-3">Contactanos</h2>
                <hr >
                <h4 class="text-center mb-3">Deja un comentario</h4>

                    <div class="card mb-3  ">
                        <div class="card-body">

<!---FORMULARIO------------------------------------------------------------------------------------------------------------>

                                <form method="POST" action="{{route('contactanos')}}"  >

                                  @csrf


                                    <div class="form-group ">
                                      <label for="inputEmail4">Nombres y apellidos</label>
                                      <input type="text" class="form-control" name="name" placeholder="Nombres y apellidos">
                                    </div>



                                    <div class="form-group  ">
                                      <label class="text-left" for="inputEmail4">Correo electrónico</label>
                                      <input type="text" class="form-control" name="correo" placeholder="Correo electrónico">
                                    </div>


                                    <div class="form-group  ">
                                      <label class="text-left" for="inputEmail4">Número de celular</label>
                                      <input type="tel" class="form-control" name="cel" placeholder="Número de celular">
                                    </div>


                                    <div class="form-group">
                                      <label for="exampleFormControlTextarea1">Comentario</label>
                                      <textarea class="form-control" name="text" rows="5"></textarea>
                                    </div>

                           

                                    <hr>
                                  <div class="text-center ">
                                    <button type="submit" class="btn btn-primary ">Enviar</button>
                                  </div>
                                </form>        


<!--------------------------------------------------------------------------------------------------------------->


                        </div>
                    </div>


            </div>





@endsection