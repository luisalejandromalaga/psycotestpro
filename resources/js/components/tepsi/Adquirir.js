import React, { Component } from 'react';
import {BrowserRouter as Router, Link, Route} from 'react-router-dom';



export default class Adquirir extends Component {
    render() {
        return (

        	<div className="p-5">
            	<h2>Elige el método de pago que prefieras</h2>
            	<hr />
            	<p>Tenemos una amplia gama de formas de pago que se adaptan a tus necesidades.</p>


                <div className="container">

                <div class="card-deck">
                    <div class="card border-secondary mb-3">

                        <img class="card-img-tope mt-3  align-self-center" src="img/bcp.svg" alt="Card image cap"/>
                        
                        <div class="card-body">
                            <h4 class="card-title">Deposito a cuenta BCP</h4>
                            <h4 class="card-title">Solo para clientes en la ciudad de Arequipa</h4>                            
                            <p class="card-text">Deposita al numero de cuenta xxxxxxx y adjunta tu voucher aquí.</p>
                        </div>
                        <div class="card-footer text-center border-secondary"><a class="btn btn-outline-primary p-1" href="http://localhost/psycotestpro/public/tepsi" target="_blank"><h5 class=" m-1">Más información</h5></a></div>
                    </div>


                    <div class="card border-secondary mb-3"><img class="card-img-top" src="img/bcp.svg" alt="Card image cap"/>
                        <div class="card-body">
                            <h4 class="card-title">Escala de Autoevaluación de la Ansiedad de Zung (EAA)</h4>
                            <p class="card-text">El TEPSI es una prueba de tamizaje que sirve para obtener información sobre el desarrollo del niño comparándolo con otros de su mismo grupo poblacional.</p>
                        </div>
                        <div class="card-footer text-center border-secondary"><a class="btn btn-outline-primary p-1" href="http://localhost/psycotestpro/public/tepsi" target="_blank"><h5 class=" m-1">Más información</h5></a></div>
                    </div>
                    <div class="card border-secondary mb-3"><img class="card-img-top" src="img/tepsi/tumb.png" alt="Card image cap"/>
                        <div class="card-body">
                            <h4 class="card-title">Test de Asociación Implícita (Quechua - Caucásico - Bueno - Malo)</h4>
                            <p class="card-text">El TEPSI es una prueba de tamizaje que sirve para obtener información sobre el desarrollo del niño comparándolo con otros de su mismo grupo poblacional.</p>
                        </div>
                        <div class="card-footer text-center border-secondary"><a class="btn btn-outline-primary p-1" href="http://localhost/psycotestpro/public/tepsi" target="_blank"><h5 class="m-1">Más información</h5></a></div>
                    </div>
                </div>

                </div>


        	</div>

        );
    }
}
