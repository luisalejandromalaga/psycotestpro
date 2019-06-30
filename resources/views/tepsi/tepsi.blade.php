@extends('header')

@section('content')
<!--END HEADER-->

<!--MENU-->

<div>

        <nav>
                <div class="nav nav-tabs" id="nav-tab" role="tablist">
                        <a class="nav-item nav-link active" id="nav-ficha-tab" data-toggle="tab" href="#nav-ficha" role="tab" aria-controls="nav-ficha" aria-selected="true">Ficha técnica</a>

                        <a class="nav-item nav-link" id="nav-teoria-tab" data-toggle="tab" href="#nav-teoria" role="tab" aria-controls="nav-teoria" aria-selected="false">Sustento teórico</a>

                        <a class="nav-item nav-link" id="nav-math-tab" data-toggle="tab" href="#nav-math" role="tab" aria-controls="nav-math" aria-selected="false">Confiabilidad y validez</a>
                        
                        <a class="nav-item nav-link" id="nav-adquirir-tab" data-toggle="tab" href="#nav-adquirir" role="tab" aria-controls="nav-adquirir" aria-selected="false">Adquirir evaluación</a>                             
                        
                        <a class="nav-item nav-link" id="nav-start-tab" data-toggle="tab" href="#nav-start" role="tab" aria-controls="nav-start" aria-selected="false">Empezar la evaluación</a>                                 
                </div>
                
        </nav>
                                
        
        <div class="tab-content" id="nav-tabContent">         
                <div class="tab-pane fade show active" id="nav-ficha" role="tabpanel" aria-labelledby="nav-ficha-tab">
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


                <div class="tab-pane fade" id="nav-teoria" role="tabpanel" aria-labelledby="nav-teoria-tab">
                        <Teoria />
                </div>

                                  

                <div class="tab-pane fade" id="nav-math" role="tabpanel" aria-labelledby="nav-math-tab">
                                  
                </div>


                <div class="tab-pane fade" id="nav-adquirir" role="tabpanel" aria-labelledby="nav-adquirir-tab">



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

                <div class="tab-pane fade" id="nav-start" role="tabpanel" aria-labelledby="nav-start-tab">


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

</div>

<!--END MENU-->

<!--FOOTER-->


<!--END FOOTER-->


@endsection