@extends('header')


@section('title')
TEPSI - Psycotestpro
@endsection


@section('index')
TEPSI
@endsection

@section('content')
<!--END HEADER-->

<!--MENU-->

<ul class="nav nav-pills mb-3 mt-1 ml-1 mr-1" id="pills-tab" role="tablist">
  <li class="nav-item">
    <a class="nav-link active" id="pills-home-tab" data-toggle="pill" href="#pills-home" role="tab" aria-controls="pills-home" aria-selected="true"><i class="fa fa-info-circle" aria-hidden="true"></i> Ficha técnica</a>
  </li>
  <li class="nav-item">
    <a class="nav-link" id="pills-profile-tab" data-toggle="pill" href="#pills-profile" role="tab" aria-controls="pills-profile" aria-selected="false"><i class="fa fa-circle-o-notch" aria-hidden="true"></i> Descripción</a>
  </li>
  <li class="nav-item">
    <a class="nav-link" id="pills-contact-tab" data-toggle="pill" href="#pills-contact" role="tab" aria-controls="pills-contact" aria-selected="false"><i class="fa fa-bar-chart" aria-hidden="true"></i> Propiedades psicométricas</a>
  </li>
  <div class="ml-auto">
      <li class="nav-item">
          <a class="nav-link btn-success " href="{{ url('tepsi/comprar') }}"><i class="fa fa-shopping-cart" aria-hidden="true"></i> Adquirir evaluación</a>
      </li>
  </div>
  <div class="ml-2">
      <li class="nav-item">
          <a class="nav-link btn-primary " href="{{ url('tepsi/antes') }}"><i class="fa fa-plus-circle" aria-hidden="true"></i> Empezar evaluación</a>
      </li>
  </div>
</ul>


<!--Contenido-->

<div class="tab-content" id="pills-tabContent">

  <div class="tab-pane fade show active" id="pills-home" role="tabpanel" aria-labelledby="pills-home-tab">
      

                        <div class="card m-4">
                                
                                <div class="card-header">
                                <h2 class="card-title text-center">Test de desarrollo psicomotor (TEPSI)</h2>
                                </div>
                                
                                <div class="card-body">

                                    <div class="card-text">

                                <h4>Autor:</h4>
                                <p>Haeussler & Marchant (1987)</p>

                                <hr />

                                <h4>Edad de aplicación:</h4>
                                <p>De 2 a 5 años</p>

                                <hr />

                                <h4>Ámbito de aplicación:</h4>
                                <p>Educativo, Clínico, Excepcional</p>

                                <hr />

                                <h4>Tipo de administración:</h4>
                                <p>Solo puede aplicarse de manera individual</p>

                                <hr />

                                <h4>Tiempo aproximado de aplicación:</h4>
                                <p>30 minutos</p>

                                <hr />
                                
                                <h4>Ítems:</h4>
                                <p>52 ítems</p>

                                <hr />                          

                                <h4>Subtests:</h4>
                                <h5>Coordinación</h5>
                                <p>16 ítems</p>

                                <h5>Lenguaje</h5>
                                <p>24 ítems</p>

                                <h5>Motricidad</h5>
                                <p>12 ítems</p>

                                <hr />

                                <h4>Significación:</h4>
                                <p>El TEPSI es una prueba de tamizaje que sirve para obtener información sobre el desarrollo del niño comparándolo con otros de su mismo grupo poblacional</p>
                                    </div>
                                </div>
                        </div>                        

   </div>



  <div class="tab-pane fade " id="pills-profile" role="tabpanel" aria-labelledby="pills-profile-tab">
      

    <div class="p-4">

                <h4>Descripción general</h4>
                <div class="card p-3 mb-3">


                    <p class="text-justify mb-2">
                        El TEPSI está destinado a niños de 2 y 5 años y tiene como propósito conocer el desarrollo en tres áreas básicas: Motricidad, Coordinación y Lenguaje. Realiza un “screening” o tamizaje detectando de forma gruesa riesgos o retrasos en este desarrollo. 
                    </p>

                    <p class="text-justify mb-2">

                        La elaboración del TEPSI estuvo basada en algunos test de desarrollo psicomotor derivados de Gesell, principalmente el test de Denver de Frankenburg y Dodds, 1970; y el test de Brunet y Lázine. Se empleo un número importante de ítems de dichos test, aunque modificando la mayoría de ellos.
                       
                    </p>

                    <p class="text-justify mb-2">

                        Las tres áreas básicas que evalúa este instrumento son evaluadas a través de 52 ítems, repartidos en tres subtest, conformándose un único test de desarrollo psicomotor.
                       
                    </p>


                </div>

                <h4>Subtest</h4>
                <div class="card p-3 mb-3">
                    <h4>Coordinación</h4>
                    <p class="text-justify mb-2">
                        Este subtest mide principalmente motricidad fina y respuestas grafomotrices, en situaciones variadas donde incide el control y la coordinación de movimientos finos en la manipulación de objetos y también factores perceptivos y representacionales. Evalúa la habilidad del niño para coger y manipular objetos y para dibujar, a través de conductas como construir torres con cubos, enhebrar una aguja, reconocer y copiar figuras geométricas, dibujar una figura humana.
                    </p>
                </div>

                
                <div class="card p-3 mb-3">
                    <h4>Lenguaje</h4>
                    <p class="text-justify mb-2">
                        Este subtest mide aspectos del lenguaje comprensivo y el lenguaje expresivo: capacidad para comprender y ejecutar ciertas ordenes, manejo de conceptos básicos, vocabulario, capacidad para describir y verbalizar. Evalúa esta variable a partir de conductas como nombrar objetos, definir palabras, verbalizar acciones, describir escenas representadas en láminas.
                    </p>
                </div>

                
                <div class="card p-3 mb-3">
                    <h4>Motricidad</h4>
                    <p class="text-justify mb-2">
                        Este subtest consta de 12 ítems y mide movimiento y control del cuerpo o partes del cuerpo en un acto breve o largo, o en una secuencia de acciones y también equilibrio. Evalúa la habilidad del niño para manejar su propio cuerpo a través de conductas como coger una pelota, saltar en un pie, caminar en unta de pies, pararse en un pie un cierto tiempo. 
                    </p>
                </div>


                <h4>Aplicación</h4>
                <div class="card p-3 mb-3">

                    <p class="text-justify mb-2">
                        Las conductas a evaluar están presentadas de tal forma que frente a cada una de ellas sólo existen dos posibilidades: Éxito o fracaso. Si la conducta evaluada en el ítem se aprueba, se otorga un punto, y si no se aprueba, se otorga cero puntos.
                    </p>
                    <p class="text-justify mb-2">
                        En la presentación de los ítems aparecerán descritas con exactitud las conductas a observar que merecen la otorgación de puntaje.
                    </p>                    
                </div>

    </div>


  </div>


  <div class="tab-pane fade " id="pills-contact" role="tabpanel" aria-labelledby="pills-contact-tab">
      

    <div class="p-4">

                <h4>Muestra de estandarización</h4>
                <div class="card p-3 mb-5">


                    <p class="text-justify mb-2">
                        Se seleccionó una muestra de elección razonada, proporción fija, de 540 sujetos, estratificada por sexo, edad y nivel socioeconómico.
                    </p>

                    <p class="text-justify mb-2">
                        El colectivo corresponde a niños de 2 a 5 años de las regiones Metropolitana y Quinta región.                      
                    </p>

                    <p class="text-justify mb-2">
                        Los niños fueron seleccionados al azar de diversos establecimientos de educación preescolar, aunque atendiéndose a los factores del diseño.                                            
                    </p>

                    <p class="text-justify mb-2">
                      Interesaba contar con igual proporción de hombres y mujeres, de distintas edades y tres niveles socioeconómicos (cuya caracterización se detalla más adelante), reuniendo un mínimo de 15 sujetos por celdilla a fin de poder construir normas y llevar a cabo estimaciones estables de los parámetros. 
                    </p>


                </div>



 



                    <h5>Tabla 1. Composición de la muestra de estandarización por grupo de edad según sexo y nivel socioeconómico </h5>
                    <table class="table text-center mb-5">

                      <thead>
                        <tr>

                          <th rowspan="2" scope="col">Edad</th>
                          <th rowspan="2" scope="col">Sexo</th>
                          <th colspan="3" scope="col">Nivel socioeconómico</th>
                          <th rowspan="2" scope="col">Total</th>

                          
                        </tr>

                        <tr>

    
                          <th>Alto</th>
                          <th>Medio</th>
                          <th>Bajo</th>
                        </tr>
                      </thead>

                      <tbody>
                        <tr>
                          <td rowspan="2">
                            De 2 años 0 meses 0 días
                            <br>
                            <br>
                            a 2 años 6 meses 0 días
                          </td>
                          <td>Hombres</td>
                          <td>15</td>
                          <td>15</td>
                          <td>15</td>
                          <td>45</td>
                        </tr>
                        <tr>

                          <td>Mujeres</td>

                          <td>15</td>
                          <td>15</td>
                          <td>15</td>
                          <td>45</td>

                        </tr>

                        <tr>
                          <td rowspan="2">
                            De 2 años 6 meses 1 día
                            <br>
                            <br>
                            a 3 años 0 meses 0 días
                          </td>
                          <td>Hombres</td>
                          <td>15</td>
                          <td>15</td>
                          <td>15</td>
                          <td>45</td>
                        </tr>


                        <tr>

                          <td>Mujeres</td>

                          <td>15</td>
                          <td>15</td>
                          <td>15</td>
                          <td>45</td>
                        </tr>


                        <tr>
                          <td rowspan="2">
                            De 3 años 0 meses 1 día
                            <br>
                            <br>
                            a 3 años 6 meses 0 días
                          </td>
                          <td>Hombres</td>
                          <td>15</td>
                          <td>15</td>
                          <td>15</td>
                          <td>45</td>
                        </tr>


                        <tr>

                          <td>Mujeres</td>

                          <td>15</td>
                          <td>15</td>
                          <td>15</td>
                          <td>45</td>
                        </tr>

                        <tr>
                          <td rowspan="2">
                            De 3 años 6 meses 1 día
                            <br>
                            <br>
                            a 4 años 0 meses 0 días
                          </td>
                          <td>Hombres</td>
                          <td>15</td>
                          <td>15</td>
                          <td>15</td>
                          <td>45</td>
                        </tr>


                        <tr>

                          <td>Mujeres</td>

                          <td>15</td>
                          <td>15</td>
                          <td>15</td>
                          <td>45</td>
                        </tr>


                        <tr>
                          <td rowspan="2">
                            De 4 años 0 meses 1 día
                            <br>
                            <br>
                            a 4 años 6 meses 0 días
                          </td>
                          <td>Hombres</td>
                          <td>15</td>
                          <td>15</td>
                          <td>15</td>
                          <td>45</td>
                        </tr>


                        <tr>

                          <td>Mujeres</td>

                          <td>15</td>
                          <td>15</td>
                          <td>15</td>
                          <td>45</td>
                        </tr>

                        <tr>
                          <td rowspan="2">
                            De 4 años 6 meses 1 día
                            <br>
                            <br>
                            a 5 años 0 meses 0 días
                          </td>
                          <td>Hombres</td>
                          <td>15</td>
                          <td>15</td>
                          <td>15</td>
                          <td>45</td>
                        </tr>


                        <tr>

                          <td>Mujeres</td>

                          <td>15</td>
                          <td>15</td>
                          <td>15</td>
                          <td>45</td>
                        </tr>

                        <tr>
                          <td>Total</td>
                          <td>-</td>
                          <td>180</td>
                          <td>180</td>
                          <td>180</td>
                          <td>540</td>
                        </tr>                      

                      </tbody>
                    </table>




                <h4>Edad</h4>
                <div class="card p-3 mb-5">


                    <p class="text-justify mb-2">
                        La muestra de estandarización incluyó 90 niños en cada grupo de edad desde los 2 años, 0 meses, 0 días a 5 años, 0 meses, 0 días. Se consideraron seis grupos de edad cada uno de los cuales abarcó un periodo de seis meses (Véase la Tabla 1.).
                    </p>

                    <p class="text-justify mb-2">
                      Los promedios de edad según nivel socioeconómico y en la muestra total, por grupo de edad, se presentan en la Tabla 2.
                    </p>


                </div>




                    <h5>Tabla 2. Promedio de edad en meses de la muestra de estandarización total y por nivel socioeconómico </h5>
                    <table class="table text-center mb-5">

                      <thead>
                        <tr>

                          <th rowspan="2" scope="col">
                            Edad
                            <br>
                            (años, meses, días)
                          </th>
                          <th colspan="3" scope="col">Nivel socioeconómico</th>
                          <th rowspan="2" scope="col">Total</th>
                         
                        </tr>

                        <tr>

    
                          <th>
                            Alto
                            <br>
                            (meses)
                          </th>
                          <th>
                            Medio
                            <br>
                            (meses)
                          </th>
                          <th>
                            Bajo
                            <br>
                            (meses)
                          </th>
                        </tr>
                      </thead>

                      <tbody>
                        <tr>
                          <td >
                            De 2 años 0 meses 0 días
                            <br>
                            <br>
                            a 2 años 6 meses 0 días
                          </td>
                          <td>26.1</td>
                          <td>26.2</td>
                          <td>27.6</td>
                          <td>26.6</td>
                        </tr>


                        <tr>
                          <td>
                            De 2 años 6 meses 1 día
                            <br>
                            <br>
                            a 3 años 0 meses 0 días
                          </td>

                          <td>33.6</td>
                          <td>33.1</td>
                          <td>33.2</td>
                          <td>33.3</td>
                        </tr>



                        <tr>
                          <td>
                            De 3 años 0 meses 1 día
                            <br>
                            <br>
                            a 3 años 6 meses 0 días
                          </td>
                          <td>39.4</td>
                          <td>39.2</td>
                          <td>39.3</td>
                          <td>39.3</td>
                        </tr>


                        <tr>
                          <td>
                            De 3 años 6 meses 1 día
                            <br>
                            <br>
                            a 4 años 0 meses 0 días
                          </td>

                          <td>44.3</td>
                          <td>44.2</td>
                          <td>45.0</td>
                          <td>44.5</td>
                        </tr>


                        <tr>
                          <td>
                            De 4 años 0 meses 1 día
                            <br>
                            <br>
                            a 4 años 6 meses 0 días
                          </td>
                          <td>50.9</td>
                          <td>50.8</td>
                          <td>50.6</td>
                          <td>50.8</td>
                        </tr>

                        <tr>
                          <td>
                            De 4 años 6 meses 1 día
                            <br>
                            <br>
                            a 5 años 0 meses 0 días
                          </td>
                          <td>56.7</td>
                          <td>56.6</td>
                          <td>56.5</td>
                          <td>56.6</td>
                        </tr>


                       
                        <tr>
                          <td>Total</td>

                          <td>41.8</td>
                          <td>41.7</td>
                          <td>42.0</td>
                          <td>41.9</td>
                        </tr>                      

                      </tbody>
                    </table>


                <h4>Sexo</h4>
                <div class="card p-3 mb-5">


                    <p class="text-justify mb-2">
                        La muestra incluyó a 45 hombres y 45 mujeres en cada grupo de edad, como puede observarse en la Tabla 1.
                    </p>

                </div>


                <h4>Nivel socioeconómico</h4>
                <div class="card p-3 mb-3">


                    <p class="text-justify mb-2">
                        El nivel socioeconómico (NSE) fue determinado en base a una modificación del indicador elaborado por Adimark y Gallup (1979) que considera, entre otros, el nivel educacional del jefe de hogar, su nivel ocupacional y la comuna de residencia. Dicho indicador determina siete niveles socioeconómicos los que agrupa entre grandes categorías.
                    </p>

                    <ul>
                      <li>Nivel socioeconómico bajo</li>
                        <ul>
                          <li>Tipo 1</li>
                          <li>Tipo 2</li>
                        </ul>


                      <li>Nivel socioeconómico medio</li>
                        <ul>
                          <li>Tipo 3</li>
                          <li>Tipo 4</li>
                          <li>Tipo 5</li>
                        </ul>

                      <li>Nivel socioeconómico alto</li>
                        <ul>
                          <li>Tipo 6</li>
                          <li>Tipo 7</li>
                        </ul>

                    </ul>

                </div>


                <div class="card p-3 mb-3">
                    <h4>Tipo 1:</h4>


                    <p class="text-justify mb-2">
                        Empleo mínimo, desempleado, cesante.
                    </p>

                </div>                

                <div class="card p-3 mb-3">
                    <h4>Tipo 2:</h4>


                    <p class="text-justify mb-2">
                      Obrero no calificado, trabajador por cuenta propia no técnico ni profesional, jardinero, pintor, lustrabotas, gasfitero, lavandera, etc. Servicio doméstico: mozo, chofer empleado. Empleado público o Fuerzas Armadas Escala única grado 27 al 31. Jubilado del Servicio de Seguro Social.
                    </p>

                </div>                

                <div class="card p-3 mb-3">
                    <h4>Tipo 3:</h4>


                    <p class="text-justify mb-2">
                        Obrero no calificado: tornero, mecánico, técnico de autos, etc. Capataz, jefe de sección industrial. Propietario de un negocio pequeño: taller, pequeño almacén kiosco. Empleado público o Fuerzas Armadas Escala única de grado 21 al 26. Estudiante jefe de hogar. Chofer de taxi y/o camión. Jubilado de caja de empleado particulares o Fuerzas Armadas.
                    </p>

                </div>   

                <div class="card p-3 mb-3">
                    <h4>Tipo 4:</h4>


                    <p class="text-justify mb-2">
                        Empleado administrativo de baja categoría (hasta jefe de sección inclusive). Vendedor de una empresa grande. Empleado público o Fuerzas Armadas Escala única de grado 16 a 30. Profesor primario. Jubilado de Caja de Empleado Particulares o Fuerzas Armadas. 
                    </p>

                </div>   


                <div class="card p-3 mb-3">
                    <h4>Tipo 5:</h4>


                    <p class="text-justify mb-2">
                        Empleado administrativo de alta categoría. Jefe de departamento o ejecutivo de bajo rango. Propietario de negocio mediano. Empleado público o fuerzas armadas Escala única grado 8 al 15. Dueño de taxi. Profesor secundario.
                    </p>

                </div>   


                <div class="card p-3 mb-3">
                    <h4>Tipo 6:</h4>


                    <p class="text-justify mb-2">
                        Mediano empresario. Ejecutivo joven. Profesional (los no incluidos en el tipo 7). Empleado público o Fuerzas Armadas Escala única gado 4 al 7. Profesor universitario.
                    </p>

                </div>   


                <div class="card p-3 mb-5">
                    <h4>Tipo 7:</h4>


                    <p class="text-justify mb-2">
                        Gran empresario. Alto cargo ejecutivo (en grandes empresas). Profesional liberal de éxito que obtenga su renta principalmente del ejercicio de su profesión: médico, ingeniero, arquitecto, abogado. Empleado público o de Fuerzas Armadas Escala única 1 al 3.
                    </p>

                </div>   



                    <h5>Tabla 3. Distribución de la muestra de estandarización según nivel socioeconómico</h5>
                    <table class="table text-center mb-5">

                      <thead>
                        <tr>


                          <th colspan="2" scope="col">Nivel socioeconómico</th>
                          <th rowspan="2" scope="col">Frecuencia por tipo</th>
                          <th rowspan="2" scope="col">Porcentaje por tipo</th>
                          <th rowspan="2" scope="col">Frecuencia por categoría</th>
                          <th rowspan="2" scope="col">Porcentaje por categoría</th>
                         
                        </tr>

                        <tr>

    
                          <th>
                            Categoría
                          </th>
                          <th>
                            Tipo
                          </th>

                        </tr>
                      </thead>

                      <tbody>
                        <tr>
                          <td rowspan="2">
                            Bajo
                          </td>
                          <td>1</td>
                          <td>63</td>
                          <td>11.6</td>
                          <td rowspan="2">180</td>
                          <td rowspan="2">33.3</td>
                        </tr>


                        <tr>
                          <td>2</td>
                          <td>33.6</td>
                          <td>33.1</td>
                        </tr>


                        <tr>
                          <td rowspan="3">
                            Medio
                          </td>
                          <td>3</td>
                          <td>58</td>
                          <td>10.7</td>
                          <td rowspan="2">180</td>
                          <td rowspan="2">33.3</td>
                        </tr>


                        <tr>
                          <td>4</td>
                          <td>61</td>
                          <td>11.3</td>
                        </tr>

                        <tr>
                          <td>5</td>
                          <td>61</td>
                          <td>11.3</td>
                        </tr>

                        <tr>
                          <td rowspan="2">
                            Alto
                          </td>
                          <td>6</td>
                          <td>122</td>
                          <td>22.6</td>
                          <td rowspan="2">180</td>
                          <td rowspan="2">33.3</td>
                        </tr>


                        <tr>
                          <td>7</td>
                          <td>58</td>
                          <td>10.7</td>
                        </tr>



                      </tbody>
                    </table>





                    <h5>Tabla 4. Distribución en frecuencia y porcentaje del nivel ocupacional de los jefes de hogar según nivel socioeconómico</h5>
                    <table class="table text-center mb-5">

                      <thead>
                        <tr>
                          <th rowspan="3">
                            Nivel ocupacional
                          </th>

                          <th></th>
                          <th></th>
                          <th colspan="3" scope="col">Nivel socioeconómico</th>                         
                          <th></th>
                        </tr>

                        <tr>

                          <th colspan="2">Bajo</th>
                          <th colspan="2">Medio</th>
                          <th colspan="2">Alto</th>
                        </tr>

                        <tr>

                          <th>Frecuencia</th>
                          <th>Porcentaje</th>
                          <th>Frecuencia</th>
                          <th>Porcentaje</th>
                          <th>Frecuencia</th>
                          <th>Porcentaje</th>

                        </tr>

                      </thead>

                      <tbody>
                        <tr>
                          <td>Tipo 1</td>
                          <td>85</td>
                          <td>47.2</td>
                          <td>1</td>
                          <td>0.5</td>
                          <td>-</td>
                          <td>-</td>
                        </tr>


                        <tr>
                          <td>Tipo 2</td>
                          <td>90</td>
                          <td>50</td>
                          <td>14</td>
                          <td>7.8</td>
                          <td>-</td>
                          <td>-</td>
                        </tr>


                        <tr>
                          <td>Tipo 3</td>
                          <td>5</td>
                          <td>2.8</td>
                          <td>55</td>
                          <td>30.6</td>
                          <td>-</td>
                          <td>-</td>
                        </tr>


                        <tr>
                          <td>Tipo 4</td>
                          <td>-</td>
                          <td>-</td>
                          <td>60</td>
                          <td>33.3</td>
                          <td>-</td>
                          <td>-</td>
                        </tr>

                        <tr>
                          <td>Tipo 5</td>
                          <td>-</td>
                          <td>-</td>
                          <td>48</td>
                          <td>26.7</td>
                          <td>-</td>
                          <td>-</td>
                        </tr>

                        <tr>
                          <td>Tipo 6</td>
                          <td>-</td>
                          <td>-</td>
                          <td>2</td>
                          <td>1.1</td>
                          <td>116</td>
                          <td>64.4</td>

                        </tr>


                        <tr>
                          <td>Tipo 7</td>
                          <td>-</td>
                          <td>-</td>
                          <td>-</td>
                          <td>-</td>
                          <td>64</td>
                          <td>35.6</td>
                        </tr>



                      </tbody>
                    </table>


                    <h5>Tabla 5. Distribución en frecuencia y porcentaje del nivel educacional de los jefes de hogar según nivel socioeconómico </h5>
                    <table class="table text-center mb-5">

                      <thead>
                        <tr>
                          <th rowspan="3">
                            Tipo
                          </th>

                          <th rowspan="3">
                            Nivel educativo
                          </th>                          

                          <th></th>
                          <th></th>
                          <th colspan="3" scope="col">Nivel socioeconómico</th>                         
                          <th></th>
                        </tr>

                        <tr>

                          <th colspan="2">Bajo</th>
                          <th colspan="2">Medio</th>
                          <th colspan="2">Alto</th>
                        </tr>

                        <tr>

                          <th>Frecuencia</th>
                          <th>Porcentaje</th>
                          <th>Frecuencia</th>
                          <th>Porcentaje</th>
                          <th>Frecuencia</th>
                          <th>Porcentaje</th>

                        </tr>

                      </thead>

                      <tbody>
                        <tr>
                          <td>Tipo 1</td>
                          <td>
                            Analfabeto
                            <br>
                            1° Básico 

                          </td>
                          <td>5</td>
                          <td>2.8</td>
                          <td>-</td>
                          <td>-</td>
                          <td>-</td>
                          <td>-</td>
                        </tr>


                        <tr>
                          <td>Tipo 2</td>
                          <td>2° a 5° Básico </td>
                          <td>39</td>
                          <td>21.7</td>
                          <td>-</td>
                          <td>-</td>
                          <td>-</td>
                          <td>-</td>
                        </tr>


                        <tr>
                          <td>Tipo 3</td>
                          <td>6°a 8° Básico</td>
                          <td>89</td>
                          <td>49.9</td>
                          <td>8</td>
                          <td>4.4</td>
                          <td>-</td>
                          <td>-</td>
                        </tr>


                        <tr>
                          <td>Tipo 4</td>
                          <td>1° a 3° Medio</td>
                          <td>41</td>
                          <td>22.8</td>
                          <td>23</td>
                          <td>12.8</td>
                          <td>-</td>
                          <td>-</td>
                        </tr>

                        <tr>
                          <td>Tipo 5</td>
                          <td>4° Medio</td>
                          <td>6</td>
                          <td>3.3</td>
                          <td>66</td>
                          <td>36.7</td>
                          <td>-</td>
                          <td>-</td>
                        </tr>

                        <tr>
                          <td>Tipo 6</td>
                          <td>
                            Universitaria incompleta
                            <br>
                            Enseñanza técnica 

                          </td>
                          <td>-</td>
                          <td>-</td>
                          <td>442</td>
                          <td>23.3</td>
                          <td>14</td>
                          <td>7.8</td>

                        </tr>


                        <tr>
                          <td>Tipo 7</td>
                          <td>Universitaria completa</td>
                          <td>-</td>
                          <td>-</td>
                          <td>41</td>
                          <td>22.8</td>
                          <td>166</td>
                          <td>92.2</td>
                        </tr>



                      </tbody>
                    </table>






    </div>



  </div>
</div>
<!--ENDContenido-->





<!--antes de empezar--->



<!--END MENU-->

<!--FOOTER-->


<!--END FOOTER-->


@endsection