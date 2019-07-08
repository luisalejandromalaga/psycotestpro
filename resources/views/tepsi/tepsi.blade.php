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
    <a class="nav-link" id="pills-profile-tab" data-toggle="pill" href="#pills-profile" role="tab" aria-controls="pills-profile" aria-selected="false"><i class="fa fa-circle-o-notch" aria-hidden="true"></i> Sustento teórico</a>
  </li>
  <li class="nav-item">
    <a class="nav-link" id="pills-contact-tab" data-toggle="pill" href="#pills-contact" role="tab" aria-controls="pills-contact" aria-selected="false">Confiabilidad y validez</a>
  </li>
  <div class="ml-auto">
      <li class="nav-item">
          <a class="nav-link btn-success " href=""><i class="fa fa-shopping-cart" aria-hidden="true"></i> Adquirir evaluación</a>
      </li>
  </div>
  <div class="ml-2">
      <li class="nav-item">
          <a class="nav-link btn-primary " href="{{ url('tepsi/formulario') }}"><i class="fa fa-plus-circle" aria-hidden="true"></i> Empezar evaluación</a>
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
                                <p>Haeussler & Marchant</p>

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



  <div class="tab-pane fade" id="pills-profile" role="tabpanel" aria-labelledby="pills-profile-tab">
      





                                <div class="p-5">
                                <h2 class="text-center">Elige el método de pago que prefieras</h2>
                                <hr />
                                <h4 class="text-center mb-4">Tenemos una amplia gama de formas de pago que se adaptan a tus necesidades.</h4>


                                <h4 class="text-center mb-4">Adquiere 25 correcciones por S/ 19.90</h4>


                                <div class="container">

                                <div class="card-deck">

                                    <div class="card  mb-3">

                                        <img class="card-img-tope mt-3  align-self-center" src="img/bcp.svg" alt="Card image cap"/>
                                        
                                        <div class="card-body text-center">
                                            <h4 class="card-title">Deposito a cuenta BCP</h4>
                                            <hr>
                                            <h4 class="card-title">Solo para clientes en la ciudad de Arequipa y Banca por Internet</h4>                            
                                            <p class="card-text">Deposita al numero de cuenta xxxxxxx y adjunta tu voucher aquí.</p>

                                            <hr>

                                                                <form method="post" action="#" id="#">
     
                                                                    <input type="file" class="" multiple="">
                                                                    <hr>
                                                                    <button class="btn btn-primary">Enviar comprobante</button>                                                        
                                                                </form>
               
                                        </div>
                                        
                                    </div>



                                    <div class="card  mb-3">

                                        <img class="card-img-tope mt-3  align-self-center" src="img/scotia.svg" alt="Card image cap"/>
                                        
                                        <div class="card-body text-center">
                                            <h4 class="card-title">Deposito a cuenta Scotiabank</h4>
                                            <hr>
                                            <h4 class="card-title">Para clientes fuera de la ciudad de Arequipa</h4>                            
                                            <p class="card-text">Deposita al numero de cuenta xxxxxxx y adjunta tu voucher aquí.</p>

                                            <hr>

                                                                <form method="post" action="#" id="#">
     
                                                                    <input type="file" class="" multiple="">
                                                                    <hr>
                                                                    <button class="btn btn-primary">Enviar comprobante</button>                                                        
                                                                </form>
               
                                        </div>
                                        
                                    </div>

                                    <div class="card  mb-3">

                                        <img class="card-img-tope mt-3  align-self-center" src="img/paypal.svg" alt="Card image cap"/>
                                        
                                        <div class="card-body text-center">
                                            <h4 class="card-title">Paga con PayPal</h4>
                                            <hr>
                                            <h4 class="card-title">Para clientes dentro y fuera del Perú</h4>                            
                                            <p class="card-text">Deposita al numero de cuenta xxxxxxx y adjunta tu voucher aquí.</p>

                                            <hr>

                                                                <form method="post" action="#" id="#">
     
                                                                    <input type="file" class="" multiple="">
                                                                    <hr>
                                                                    <button class="btn btn-primary">Enviar comprobante</button>                                                        
                                                                </form>
               
                                        </div>
                                        
                                    </div>



                                </div>

                                </div>

                                </div>



  </div>


  <div class="tab-pane fade" id="pills-contact" role="tabpanel" aria-labelledby="pills-contact-tab">
      


                        <div>
                            <div class="card m-4 text-center">
                                
                                <div class="card-header">
                                        <h2>Antes de empezar</h2>
                                </div>

                                <div class="card-body">
                                    <div class="card-text">
                                        <p>Asegúrate de tener todo lo que necesitas a mano</p>
                                        <p>Si estás seguro de que tienes a mano todo lo que necesitas para realizar la evaluación presiona "Empezar la evaluación"</p>

                                        <a class="btn btn-primary mb-3" href="{{route('formulario')}}" >
                                         Empezar la evaluación
                                        </a>

                                        <p>Si quieres verificar tus materiales haz click en "Herramienta de verificación"</p>


                                        <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModalCenter">
                                                Herramienta de verificación
                                        </button>

                                    </div>
                                </div>


                                            <div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                                              <div class="modal-dialog modal-xl modal-dialog-centered" role="document">
                                                <div class="modal-content">
                                                  <div class="modal-header">
                                                    <h5 class="modal-title" id="exampleModalLongTitle">Herramienta de verificación</h5>
                                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                      <span aria-hidden="true">&times;</span>
                                                    </button>
                                                  </div>
                                                  <div class="modal-body">
                                                    
                                                      verificación
                                                    
                                                  </div>
                                                  <div class="modal-footer">
                                                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                                    <button type="button" class="btn btn-primary">Save changes</button>
                                                  </div>
                                                </div>
                                              </div>
                                            </div>
                                   </div>
                        </div>




  </div>
</div>
<!--ENDContenido-->





<!--antes de empezar--->



<!--END MENU-->

<!--FOOTER-->


<!--END FOOTER-->


@endsection