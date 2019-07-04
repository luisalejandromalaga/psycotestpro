@extends('header')

@section('title')
Evaluaciones - PSYCOTESTPRO
@endsection


@section('index')
Evaluaciones
@endsection



@section('content')       



<!-- Sidebar -->
<div class="sidebar">
  <a class="active" href="#home">Home</a>
  <a href="#news">News</a>
  <a href="#contact">Contact</a>
  <a href="#about">About</a>
</div>

<!-- Page content -->
<div class="content">
                <h2 class="text-center mt-3">Contactanos</h2>
                <hr >
                <h4 class="text-center mb-3">Deja un comentario</h4>

                    <div class="card mb-3  ">
                        <div class="card-body">



                                <form>




                                    <div class="form-group ">
                                      <label for="inputEmail4">Nombres y apellidos</label>
                                      <input type="text" class="form-control" id="inputEmail4" placeholder="Nombres y apellidos">
                                    </div>



                                    <div class="form-group  ">
                                      <label class="text-left" for="inputEmail4">Correo electrónico</label>
                                      <input type="text" class="form-control" id="inputEmail4" placeholder="Correo electrónico">
                                    </div>


                                    <div class="form-group  ">
                                      <label class="text-left" for="inputEmail4">Número de celular</label>
                                      <input type="tel" class="form-control" id="inputEmail4" placeholder="Número de celular">
                                    </div>


                                    <div class="form-group">
                                      <label for="exampleFormControlTextarea1">Comentario</label>
                                      <textarea class="form-control" id="exampleFormControlTextarea1" rows="5"></textarea>
                                    </div>

                           

                                    <hr>
                                  <div class="text-center ">
                                    <button type="submit" class="btn btn-primary ">Enviar</button>
                                  </div>
                                </form>        


                        </div>
                    </div>

</div>



<!--CATALOGO-->



@endsection