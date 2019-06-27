import React, { Component } from 'react';
import {BrowserRouter as Router, Link, Route} from 'react-router-dom';



export default class FichaTecnica extends Component {
    render() {
        return (
			<div class="card m-4">
				
				<div class="card-header">
			    	<h2 className="card-title text-center">Test de desarrollo psicomotor (TEPSI)</h2>
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
        );
    }
}
