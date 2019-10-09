<!DOCTYPE html>

<html>

<head>

        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>TEPSI | PSYCOTESTPRO</title>

        <link rel="icon" href="fav.png" type="image/x-icon" />
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
        <meta charset="utf-8">

<link href="https://fonts.googleapis.com/css?family=Quicksand&display=swap" rel="stylesheet">

        <link rel="stylesheet" type="text/css" href="{{asset('css/app.css')}}">
<link rel="stylesheet" type="text/css" href="{{asset('css/estilos.css')}}">
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


            <div class="form-group col-md-2">
              <label for="exampleFormControlSelect1">Sexo</label>
              <select class="form-control" id="exampleFormControlSelect1">
                <option>Hombre</option>
                <option>Mujer</option>

              </select>
            </div>            


            <div class="form-group col-md-2">
              <label for="inputEmail4">Fecha de nacimiento</label>
              <input type="date" class="form-control"name ="fecha_nac" id="fecha_nac" placeholder="Fecha de Nacimiento" important>
            </div>


             <div class="form-group col-md-2">
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


            <div class="form-group col-md-4">
              <label for="inputEmail4">Nombre del padre</label>
              <input type="text" class="form-control" name="padre" id="padre" placeholder="Nombre del padre">
            </div>



            <div class="form-group col-md-4">
              <label for="exampleFormControlSelect1">Nivel educativo</label>
              <select class="form-control" id="exampleFormControlSelect1">
                <option>Analfabeto - 1° Básico </option>
                <option>2° a 5° Básico</option>
                <option>6°a 8° Básico</option>
                <option>1° a 3° Medio</option>
                <option>4° Medio</option>
                <option>Universitaria incompleta - Enseñanza técnica</option>
                <option>Universitaria completa</option>

              </select>
            </div>  
  
            <div class="form-group col-md-4">
              <label for="exampleFormControlSelect1">Nivel ocupacional</label>
              <select class="form-control" id="exampleFormControlSelect1">
                <option>Tipo 1: Empleo mínimo, desempleado, cesante. </option>
                <option>Tipo 2: Obrero no calificado, trabajador por cuenta propia no técnico ni profesional, jardinero, pintor, lustrabotas, gasfitero, lavandera, etc. Servicio doméstico: mozo, chofer empleado. Empleado público o Fuerzas Armadas Escala única grado 27 al 31. Jubilado del Servicio de Seguro Social.</option>
                <option>Tipo 3: Obrero no calificado: tornero, mecánico, técnico de autos, etc. Capataz, jefe de sección industrial. Propietario de un negocio pequeño: taller, pequeño almacén kiosco. Empleado público o Fuerzas Armadas Escala única de grado 21 al 26. Estudiante jefe de hogar. Chofer de taxi y/o camión. Jubilado de caja de empleado particulares o Fuerzas Armadas.</option>
                <option>Tipo 4: Empleado administrativo de baja categoría (hasta jefe de sección inclusive). Vendedor de una empresa grande. Empleado público o Fuerzas Armadas Escala única de grado 16 a 30. Profesor primario. Jubilado de Caja de Empleado Particulares o Fuerzas Armadas.</option>
                <option>Tipo 5: Empleado administrativo de alta categoría. Jefe de departamento o ejecutivo de bajo rango. Propietario de negocio mediano. Empleado público o fuerzas armadas Escala única grado 8 al 15. Dueño de taxi. Profesor secundario.</option>
                <option>Tipo 6: Mediano empresario. Ejecutivo joven. Profesional (los no incluidos en el tipo 7). Empleado público o Fuerzas Armadas Escala única gado 4 al 7. Profesor universitario.</option>
                <option>Tipo 7: Gran empresario. Alto cargo ejecutivo (en grandes empresas). Profesional liberal de éxito que obtenga su renta principalmente del ejercicio de su profesión: médico, ingeniero, arquitecto, abogado. Empleado público o de Fuerzas Armadas Escala única 1 al 3.</option>

              </select>
            </div>  



          </div>
            
          <div class="form-row">


            <div class="form-group col-md-4">
              <label for="inputEmail4">Nombre de la madre</label>
              <input type="text" class="form-control" name="madre" id="madre" placeholder="Nombre de la madre">
            </div>



            <div class="form-group col-md-4">
              <label for="exampleFormControlSelect1">Nivel educativo</label>
              <select class="form-control" id="exampleFormControlSelect1">
                <option>Analfabeto - 1° Básico </option>
                <option>2° a 5° Básico</option>
                <option>6°a 8° Básico</option>
                <option>1° a 3° Medio</option>
                <option>4° Medio</option>
                <option>Universitaria incompleta - Enseñanza técnica</option>
                <option>Universitaria completa</option>

              </select>
            </div>  
  
            <div class="form-group col-md-4">
              <label for="exampleFormControlSelect1">Nivel ocupacional</label>
              <select class="form-control" id="exampleFormControlSelect1">
                <option>Tipo 1: Empleo mínimo, desempleado, cesante. </option>
                <option>Tipo 2: Obrero no calificado, trabajador por cuenta propia no técnico ni profesional, jardinero, pintor, lustrabotas, gasfitero, lavandera, etc. Servicio doméstico: mozo, chofer empleado. Empleado público o Fuerzas Armadas Escala única grado 27 al 31. Jubilado del Servicio de Seguro Social.</option>
                <option>Tipo 3: Obrero no calificado: tornero, mecánico, técnico de autos, etc. Capataz, jefe de sección industrial. Propietario de un negocio pequeño: taller, pequeño almacén kiosco. Empleado público o Fuerzas Armadas Escala única de grado 21 al 26. Estudiante jefe de hogar. Chofer de taxi y/o camión. Jubilado de caja de empleado particulares o Fuerzas Armadas.</option>
                <option>Tipo 4: Empleado administrativo de baja categoría (hasta jefe de sección inclusive). Vendedor de una empresa grande. Empleado público o Fuerzas Armadas Escala única de grado 16 a 30. Profesor primario. Jubilado de Caja de Empleado Particulares o Fuerzas Armadas.</option>
                <option>Tipo 5: Empleado administrativo de alta categoría. Jefe de departamento o ejecutivo de bajo rango. Propietario de negocio mediano. Empleado público o fuerzas armadas Escala única grado 8 al 15. Dueño de taxi. Profesor secundario.</option>
                <option>Tipo 6: Mediano empresario. Ejecutivo joven. Profesional (los no incluidos en el tipo 7). Empleado público o Fuerzas Armadas Escala única gado 4 al 7. Profesor universitario.</option>
                <option>Tipo 7: Gran empresario. Alto cargo ejecutivo (en grandes empresas). Profesional liberal de éxito que obtenga su renta principalmente del ejercicio de su profesión: médico, ingeniero, arquitecto, abogado. Empleado público o de Fuerzas Armadas Escala única 1 al 3.</option>

              </select>
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