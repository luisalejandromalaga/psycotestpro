@extends('tepsi')

@section('title')
TEPSI | Informe previo
@endsection




@section('content')


<div class="container">


    <div class="card mt-3 mb-3">
      <div class="card-header">
        <h4 class="" id="">Informe previo</h4>
      </div>

      <div class="card-body  p-2">

<h4 class="text-center">Resultados</h4>
<hr>


<table class="table text-center table-sm ">
  <thead>
    <tr>
      <th scope="col">Sub Test</th>
      <th scope="col">Puntaje Bruto</th>
      <th scope="col">Puntaje T</th>
      <th scope="col">Categoría</th>
    </tr>
  </thead>
  <tbody>
    
    <tr>
      <th scope="row">Coordinación</th>
      <td>{{$array_r[0]}}</td>
      <td>{{$array_r[1]}}</td>
      <td>{{$array_r[2]}}</td>
    </tr>
    <tr>
      <th scope="row">Lenguaje</th>
      <td>{{$array_r[3]}}</td>
      <td>{{$array_r[4]}}</td>
      <td>{{$array_r[5]}}</td>
    </tr>
    <tr>
      <th scope="row">Motricidad</th>
      <td>{{$array_r[6]}}</td>
      <td>{{$array_r[7]}}</td>
      <td>{{$array_r[8]}}</td>
    </tr>

    <tr>
      <th scope="row">Test total</th>
      <td>asd</td>
      <td>asd</td>
      <td>asd</td>
    </tr>
    
  </tbody>
</table>










        <form method="POST" action="{{route('post_informe')}}">
          @csrf
      <hr>

          <div class="form-group">
             <label for="exampleFormControlTextarea1">Observación de la conducta y el comportamiento</label>
             <textarea class="form-control" id="observacion" name="observacion" rows="4"></textarea>
          </div>            
    

      <hr>

          <div class="form-group">
             <label for="exampleFormControlTextarea1">Conclusiones</label>
             <textarea class="form-control" id="conclusiones" name="conclusiones" rows="4"></textarea>
          </div> 

      <hr>

          <div class="form-group">
             <label for="exampleFormControlTextarea1">Recomendaciones</label>
             <textarea class="form-control" id="recomendaciones" name="recomendaciones" rows="4"></textarea>
          </div> 

      <hr>




            <div class="text-center">
              <button type="submit" class="btn btn-primary">Generar informe en PDF</button>            
            </div>

        </form>        


      </div>

    </div>

</div>


@endsection