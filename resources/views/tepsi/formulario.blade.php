<!DOCTYPE html>

<html>

<head>

        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>TEPSI | PSYCOTESTPRO</title>

        <link rel="icon" href="fav.png" type="image/x-icon" />
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
        <meta charset="utf-8">


        <link rel="stylesheet" type="text/css" href="{{asset('css/app.css')}}">

</head>

<body>


<div class="container">


    <div class="card mt-3 mb-3">
      <div class="card-header">
        <h4 class="" id="">Datos del evaluado</h4>
      </div>

      <div class="card-body  p-2">

        <form method="POST" action="{{ route('form_cliente') }}">
          @csrf
          <div class="form-row">

            <div class="form-group col-md-3">
              <label for="inputEmail4">Nombre completo del evaluado</label>
              <input type="text" class="form-control" name ="name" id="name" placeholder="Nombre completo del evaluado" important="">
            </div>

            <div class="form-group col-md-3">
              <label for="inputEmail4">Documento de identidad</label>
              <input type="tel" class="form-control" name="dni" id="dni" placeholder="Documento de identidad" >
            </div>


            <div class="form-group col-md-3">
              <label for="inputEmail4">Fecha de nacimiento</label>
              <input type="date" class="form-control"name ="fecha_nac" id="fecha_nac" placeholder="Fecha de Nacimiento" important>
            </div>


             <div class="form-group col-md-3">
              <label for="inputEmail4">Lugar de nacimiento</label>
              <input type="text" class="form-control" name ="lugar_nac" id="lugar_nac" placeholder="Lugar de nacimiento" important>
            </div>           

          </div>


          <div class="form-row">

            <div class="form-group col-md-4">
              <label for="inputEmail4">Ocupacion del Evaluado</label>
              <input type="text" class="form-control" name="ocupacion" id="ocupacion" placeholder="Nombre completo del evaluado">
            </div>

            <div class="form-group col-md-4">
              <label for="inputEmail4">Nivel de estudios</label>
              <input type="tel" class="form-control" name="estudios" id="estudios" placeholder="Documento de identidad">
            </div>


            <div class="form-group col-md-4">
              <label for="inputEmail4">Centro educativo</label>
              <input type="tel" class="form-control" name="centro_educ" id="centro_educ" placeholder="Documento de identidad">
            </div>

          </div>


            <hr>

          <div class="form-row">


            <div class="form-group col-md-6">
              <label for="inputEmail4">Nombre del padre</label>
              <input type="text" class="form-control" name="padre" id="padre" placeholder="Nombre del padre">
            </div>



            <div class="form-group col-md-6">
              <label for="inputEmail4">Nombre de la madre</label>
              <input type="text" class="form-control" name="madre" id="madre" placeholder="Nombre de la madre">
            </div>
            
          </div>
            

      <hr>

          <div class="form-row">


            <div class="form-group col-md-3">
              <label for="inputEmail4">Número de telefono</label>
              <input type="text" class="form-control" name="telefono" id="telefono" placeholder="Número de telefono">
            </div>



            <div class="form-group col-md-3">
              <label for="inputEmail4">Número de celular</label>
              <input type="text" class="form-control" name="celular" id="celular" placeholder="Número de celular" important>
            </div>


            <div class="form-group col-md-3">
              <label for="inputEmail4">Correo electrónico</label>
              <input type="text" class="form-control" name="correo" id="correo" placeholder="Correo electrónico " important>
            </div>
 
            <div class="form-group col-md-3">
              <label for="inputEmail4">Dirección</label>
              <input type="text" class="form-control" name="direccion" id="direccion" placeholder="Dirección">
            </div>

          </div>


      <hr>

          <div class="form-group">
             <label for="exampleFormControlTextarea1">Motivo de consulta</label>
             <textarea class="form-control" name="motivo" id="motivo" rows="4"></textarea>
          </div>            
      <hr>


            <div class="text-center">
              <button type="submit" class="btn btn-primary">Continuar</button>            
            </div>

        </form>        


      </div>

    </div>

</div>


</body>

</html>