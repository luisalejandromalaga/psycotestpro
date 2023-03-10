@extends('tepsi')

@section('title')
TEPSI | Datos del evaluado
@endsection




@section('content')


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
              <input required type="text" class="form-control" name ="name" id="name" placeholder="Nombre completo del evaluado" important="">
            </div>

            <div class="form-group col-md-3">
              <label for="inputEmail4">Documento de identidad</label>
              <input required type="tel" class="form-control" name="dni" id="dni" placeholder="Documento de identidad" >
            </div>


            <div class="form-group col-md-2">
              <label for="exampleFormControlSelect1">Sexo</label>
              <select required class="form-control" id="exampleFormControlSelect1" >
                <option>Hombre</option>
                <option>Mujer</option>

              </select>
            </div>            


            <div class="form-group col-md-2">
              <label for="inputEmail4">Fecha de nacimiento</label>
              <input required type="date" class="form-control"name ="fecha_nac" id="fecha_nac" placeholder="Fecha de Nacimiento" important>
            </div>


             <div class="form-group col-md-2">
              <label for="inputEmail4">Lugar de nacimiento</label>
              <input required type="text" class="form-control" name ="lugar_nac" id="lugar_nac" placeholder="Lugar de nacimiento" important>
            </div>           

          </div>


          <div class="form-row">

            <div class="form-group col-md-4">
              <label for="inputEmail4">Ocupacion del Evaluado</label>
              <input required type="text" class="form-control" name="ocupacion" id="ocupacion" placeholder="Ocupacion del Evaluado">
            </div>

            <div class="form-group col-md-4">
              <label for="inputEmail4">Nivel de estudios</label>
              <input required type="tel" class="form-control" name="estudios" id="estudios" placeholder="Nivel de estudios">
            </div>


            <div class="form-group col-md-4">
              <label for="inputEmail4">Centro educativo</label>
              <input required type="tel" class="form-control" name="centro_educ" id="centro_educ" placeholder="Centro educativo">
            </div>

          </div>




      <hr>

          <div class="form-row">


            <div class="form-group col-md-3">
              <label for="inputEmail4">N??mero de telefono</label>
              <input required type="text" class="form-control" name="telefono" id="telefono" placeholder="N??mero de telefono">
            </div>



            <div class="form-group col-md-3">
              <label for="inputEmail4">N??mero de celular</label>
              <input required type="text" class="form-control" name="celular" id="celular" placeholder="N??mero de celular" important>
            </div>


            <div class="form-group col-md-3">
              <label for="inputEmail4">Correo electr??nico</label>
              <input required type="text" class="form-control" name="correo" id="correo" placeholder="Correo electr??nico " important>
            </div>
 
            <div class="form-group col-md-3">
              <label for="inputEmail4">Direcci??n</label>
              <input required type="text" class="form-control" name="direccion" id="direccion" placeholder="Direcci??n">
            </div>

          </div>

    


      <hr>




          <div class="form-row">


            <div class="form-group col-md-4">
              <label for="inputEmail4">Nombre del padre</label>
              <input required type="text" class="form-control" name="padre" id="padre" placeholder="Nombre del padre">
            </div>



            <div class="form-group col-md-4">
              <label for="exampleFormControlSelect1">Nivel educativo del padre</label>

                <div class="custom-control custom-radio">
                  <input  required type="radio" id="pae1" name="pae" class="custom-control-input">
                  <label class="custom-control-label" for="pae1">Analfabeto - 1?? B??sico</label>
                </div>
                <hr>

                <div class="custom-control custom-radio">
                  <input required type="radio" id="pae2" name="pae" class="custom-control-input">
                  <label class="custom-control-label" for="pae2">2?? a 5?? B??sico</label>
                </div>
                <hr>

                <div class="custom-control custom-radio">
                  <input required type="radio" id="pae3" name="pae" class="custom-control-input">
                  <label class="custom-control-label" for="pae3">6??a 8?? B??sico</label>
                </div>
                <hr>

                <div class="custom-control custom-radio">
                  <input required type="radio" id="pae4" name="pae" class="custom-control-input">
                  <label class="custom-control-label" for="pae4">1?? a 3?? Medio</label>
                </div>
                <hr>

                <div class="custom-control custom-radio">
                  <input required type="radio" id="pae5" name="pae" class="custom-control-input">
                  <label class="custom-control-label" for="pae5">4?? Medio</label>
                </div>
                <hr>

                <div class="custom-control custom-radio">
                  <input required type="radio" id="pae6" name="pae" class="custom-control-input">
                  <label class="custom-control-label" for="pae6">Universitaria incompleta - Ense??anza t??cnica</label>
                </div>
                <hr>

                <div class="custom-control custom-radio">
                  <input required type="radio" id="pae7" name="pae" class="custom-control-input">
                  <label class="custom-control-label" for="pae7">Universitaria completa</label>
                </div>
                <hr>

            </div>  





  
            <div class="form-group col-md-4">

              <label for="exampleFormControlSelect1">Nivel ocupacional del padre</label>

                <div class="custom-control custom-radio">
                  <input required type="radio" id="pa1" name="pa" class="custom-control-input">
                  <label class="custom-control-label" for="pa1">Tipo 1: Empleo m??nimo, desempleado, cesante.</label>
                </div>
                <hr>
                <div class="custom-control custom-radio">
                  <input required type="radio" id="pa2" name="pa" class="custom-control-input">
                  <label class="custom-control-label" for="pa2">Tipo 2: Obrero no calificado, trabajador por cuenta propia no t??cnico ni profesional, jardinero, pintor, lustrabotas, gasfitero, lavandera, etc. Servicio dom??stico: mozo, chofer empleado. Empleado p??blico o Fuerzas Armadas Escala ??nica grado 27 al 31. Jubilado del Servicio de Seguro Social.</label>
                </div>
                <hr>
                <div class="custom-control custom-radio">
                  <input required type="radio" id="pa3" name="pa" class="custom-control-input">
                  <label class="custom-control-label" for="pa3">Tipo 3: Obrero no calificado: tornero, mec??nico, t??cnico de autos, etc. Capataz, jefe de secci??n industrial. Propietario de un negocio peque??o: taller, peque??o almac??n kiosco. Empleado p??blico o Fuerzas Armadas Escala ??nica de grado 21 al 26. Estudiante jefe de hogar. Chofer de taxi y/o cami??n. Jubilado de caja de empleado particulares o Fuerzas Armadas.</label>
                </div>
                <hr>

                <div class="custom-control custom-radio">
                  <input  required type="radio" id="pa4" name="pa" class="custom-control-input">
                  <label class="custom-control-label" for="pa4">Tipo 4: Empleado administrativo de baja categor??a (hasta jefe de secci??n inclusive). Vendedor de una empresa grande. Empleado p??blico o Fuerzas Armadas Escala ??nica de grado 16 a 30. Profesor primario. Jubilado de Caja de Empleado Particulares o Fuerzas Armadas.</label>
                </div>

                <hr>
                <div class="custom-control custom-radio">
                  <input  required type="radio" id="pa5" name="pa" class="custom-control-input">
                  <label class="custom-control-label" for="pa5">Tipo 5: Empleado administrativo de alta categor??a. Jefe de departamento o ejecutivo de bajo rango. Propietario de negocio mediano. Empleado p??blico o fuerzas armadas Escala ??nica grado 8 al 15. Due??o de taxi. Profesor secundario.</label>
                </div>
                <hr>
                <div class="custom-control custom-radio">
                  <input required type="radio" id="pa6" name="pa" class="custom-control-input">
                  <label class="custom-control-label" for="pa6">Tipo 6: Mediano empresario. Ejecutivo joven. Profesional (los no incluidos en el tipo 7). Empleado p??blico o Fuerzas Armadas Escala ??nica gado 4 al 7. Profesor universitario.</label>
                </div>
                <hr>
                <div class="custom-control custom-radio">
                  <input required type="radio" id="pa7" name="pa" class="custom-control-input">
                  <label class="custom-control-label" for="pa7">Tipo 7: Gran empresario. Alto cargo ejecutivo (en grandes empresas). Profesional liberal de ??xito que obtenga su renta principalmente del ejercicio de su profesi??n: m??dico, ingeniero, arquitecto, abogado. Empleado p??blico o de Fuerzas Armadas Escala ??nica 1 al 3.</label>
                </div>


            </div>  



          </div>
            
                <hr>

          <div class="form-row">


            <div class="form-group col-md-4">
              <label for="inputEmail4">Nombre de la madre</label>
              <input required type="text" class="form-control" name="madre" id="madre" placeholder="Nombre de la madre">
            </div>



            <div class="form-group col-md-4">
              <label for="exampleFormControlSelect1">Nivel educativo de la madre</label>

                <div class="custom-control custom-radio">
                  <input required type="radio" id="mae1" name="mae" class="custom-control-input">
                  <label class="custom-control-label" for="mae1">Analfabeto - 1?? B??sico</label>
                </div>
                <hr>

                <div class="custom-control custom-radio">
                  <input required type="radio" id="mae2" name="mae" class="custom-control-input">
                  <label class="custom-control-label" for="mae2">2?? a 5?? B??sico</label>
                </div>
                <hr>

                <div class="custom-control custom-radio">
                  <input required type="radio" id="mae3" name="mae" class="custom-control-input">
                  <label class="custom-control-label" for="mae3">6??a 8?? B??sico</label>
                </div>
                <hr>

                <div class="custom-control custom-radio">
                  <input required type="radio" id="mae4" name="mae" class="custom-control-input">
                  <label class="custom-control-label" for="mae4">1?? a 3?? Medio</label>
                </div>
                <hr>

                <div class="custom-control custom-radio">
                  <input required type="radio" id="mae5" name="mae" class="custom-control-input">
                  <label class="custom-control-label" for="mae5">4?? Medio</label>
                </div>
                <hr>

                <div class="custom-control custom-radio">
                  <input required type="radio" id="mae6" name="mae" class="custom-control-input">
                  <label class="custom-control-label" for="mae6">Universitaria incompleta - Ense??anza t??cnica</label>
                </div>
                <hr>

                <div class="custom-control custom-radio">
                  <input required type="radio" id="mae7" name="mae" class="custom-control-input">
                  <label class="custom-control-label" for="mae7">Universitaria completa</label>
                </div>
                <hr>

            </div>  
  
            <div class="form-group col-md-4">

              <label for="exampleFormControlSelect1">Nivel ocupacional de la madre</label>

                <div required class="custom-control custom-radio">
                  <input required type="radio" id="ma1" name="ma" class="custom-control-input">
                  <label class="custom-control-label" for="ma1">Tipo 1: Empleo m??nimo, desempleado, cesante.</label>
                </div>
                <hr>
                <div class="custom-control custom-radio">
                  <input type="radio" id="ma2" name="ma" class="custom-control-input">
                  <label class="custom-control-label" for="ma2">Tipo 2: Obrero no calificado, trabajador por cuenta propia no t??cnico ni profesional, jardinero, pintor, lustrabotas, gasfitero, lavandera, etc. Servicio dom??stico: mozo, chofer empleado. Empleado p??blico o Fuerzas Armadas Escala ??nica grado 27 al 31. Jubilado del Servicio de Seguro Social.</label>
                </div>
                <hr>
                <div class="custom-control custom-radio">
                  <input required type="radio" id="ma3" name="ma" class="custom-control-input">
                  <label class="custom-control-label" for="ma3">Tipo 3: Obrero no calificado: tornero, mec??nico, t??cnico de autos, etc. Capataz, jefe de secci??n industrial. Propietario de un negocio peque??o: taller, peque??o almac??n kiosco. Empleado p??blico o Fuerzas Armadas Escala ??nica de grado 21 al 26. Estudiante jefe de hogar. Chofer de taxi y/o cami??n. Jubilado de caja de empleado particulares o Fuerzas Armadas.</label>
                </div>
                <hr>

                <div class="custom-control custom-radio">
                  <input required type="radio" id="ma4" name="ma" class="custom-control-input">
                  <label class="custom-control-label" for="ma4">Tipo 4: Empleado administrativo de baja categor??a (hasta jefe de secci??n inclusive). Vendedor de una empresa grande. Empleado p??blico o Fuerzas Armadas Escala ??nica de grado 16 a 30. Profesor primario. Jubilado de Caja de Empleado Particulares o Fuerzas Armadas.</label>
                </div>

                <hr>
                <div class="custom-control custom-radio">
                  <input required type="radio" id="ma5" name="ma" class="custom-control-input">
                  <label class="custom-control-label" for="ma5">Tipo 5: Empleado administrativo de alta categor??a. Jefe de departamento o ejecutivo de bajo rango. Propietario de negocio mediano. Empleado p??blico o fuerzas armadas Escala ??nica grado 8 al 15. Due??o de taxi. Profesor secundario.</label>
                </div>
                <hr>
                <div class="custom-control custom-radio">
                  <input required type="radio" id="ma6" name="ma" class="custom-control-input">
                  <label class="custom-control-label" for="ma6">Tipo 6: Mediano empresario. Ejecutivo joven. Profesional (los no incluidos en el tipo 7). Empleado p??blico o Fuerzas Armadas Escala ??nica gado 4 al 7. Profesor universitario.</label>
                </div>
                <hr>
                <div class="custom-control custom-radio">
                  <input required type="radio" id="ma7" name="ma" class="custom-control-input">
                  <label class="custom-control-label" for="ma7">Tipo 7: Gran empresario. Alto cargo ejecutivo (en grandes empresas). Profesional liberal de ??xito que obtenga su renta principalmente del ejercicio de su profesi??n: m??dico, ingeniero, arquitecto, abogado. Empleado p??blico o de Fuerzas Armadas Escala ??nica 1 al 3.</label>
                </div>


            </div>  
            
          </div>







      <hr>

          <div class="form-group">
             <label for="exampleFormControlTextarea1">Motivo de consulta</label>
             <textarea required class="form-control" name="motivo" id="motivo" rows="4"></textarea>
          </div>            
      <hr>



            <div class="text-center">
              <button type="button" class="btn btn-primary mb-1 mt-1" data-dismiss="modal" onClick="history.back()">Atras</button>
              
              <button type="submit" class="btn btn-primary">Continuar</button>            
            </div>

        </form>        


      </div>

    </div>

</div>


@endsection
