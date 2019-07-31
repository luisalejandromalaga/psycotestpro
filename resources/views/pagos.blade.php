@extends('header')

@section('title')
Pagos - Psycotestpro
@endsection


@section('index')
Pagos
@endsection

@section('content')

<!--CATALOGO-->



            <div class="container">




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

                <h2 class="text-center mt-3">Planes de pago y precios</h2>
                <hr >

                <h4 class="text-center mb-3">Tenemos planes desde S/ 19.90 al mes</h4>


                <div class="card-deck mb-3">
                    <div class="card mb-3 text-center ">
                        <div class="card-body  border-top borderGrueso border-primary">
                            <h4 class="card-title text-center">BÁSICO</h4>
                            <hr>
                            <p class="card-text text-center">Puedes elegir cualquier instrumento de evaluación de nuestro catálogo.</p>

                            <p class="text-center mb-4"><strong class="">Numero de evaluaciones:</strong> 15</p>

                            <p class="text-center mb-4"><strong class="">Acceso a tecnología en desarrollo:</strong> No</p>

                            <p class="text-center mb-4"><strong class="">Uso para investigación:</strong> No</p>

                            <h2 class="text-center text-success">S/ 19.90</h2>

                            <button class="btn btn-primary ">
                                Adquierelo ahora
                            </button>

                        </div>
                    </div>
                    
                    <div class="card mb-3 text-center ">
                        <div class="card-body  border-top borderGrueso border-primary">
                            <h4 class="card-title text-center">PROFESIONAL</h4>
                            <hr>
                            <p class="card-text text-center">Puedes elegir cualquier instrumento de evaluación de nuestro catálogo.</p>


                            <p class="text-center mb-4"><strong class="">Numero de evaluaciones:</strong> 45</p>

                            <p class="text-center mb-4"><strong class="">Acceso a tecnología en desarrollo:</strong> Si</p>

                            <p class="text-center mb-4"><strong class="">Uso para investigación:</strong> No</p>

                            <h2 class="text-center text-success">S/ 39.90</h2>

                            <button class="btn btn-primary ">
                                Adquierelo ahora
                            </button>

                        </div>
                    </div>
                    <div class="card mb-3 text-center ">
                        <div class="card-body  border-top borderGrueso border-primary">
                            <h4 class="card-title text-center">PREMIUM</h4>
                            <hr>
                            <p class="card-text text-center">Puedes elegir cualquier instrumento de evaluación de nuestro catálogo.</p>

                            <p class="text-center mb-4"><strong class="">Numero de evaluaciones:</strong> Ilimitadas</p>

                            <p class="text-center mb-4"><strong class="">Acceso a tecnología en desarrollo:</strong> Si</p>

                            <p class="text-center mb-4"><strong class="">Uso para investigación:</strong> Si</p>

                            <h2 class="text-center text-success">S/ 59.90</h2>

                            <button class="btn btn-primary ">
                                Adquierelo ahora
                            </button>

                        </div>
                    </div>
                </div>


            </div>


@endsection

