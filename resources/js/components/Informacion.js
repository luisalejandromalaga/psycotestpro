import React, { Component } from 'react';

import Teoria from "./tepsi/Teoria";
import Test from "./tepsi/Test";
import FichaTecnica from "./FichaTecnica";
import Adquirir from "./tepsi/Adquirir";


export default class Informacion extends Component {
    render() {
        return (

        	<div>

				<nav>
				  <div className="nav nav-tabs" id="nav-tab" role="tablist">
				    <a className="nav-item nav-link active" id="nav-ficha-tab" data-toggle="tab" href="#nav-ficha" role="tab" aria-controls="nav-ficha" aria-selected="true">Ficha técnica</a>

				    <a className="nav-item nav-link" id="nav-teoria-tab" data-toggle="tab" href="#nav-teoria" role="tab" aria-controls="nav-teoria" aria-selected="false">Sustento teórico</a>

				    <a className="nav-item nav-link" id="nav-math-tab" data-toggle="tab" href="#nav-math" role="tab" aria-controls="nav-math" aria-selected="false">Confiabilidad y validez</a>
				    <a className="nav-item nav-link" id="nav-adquirir-tab" data-toggle="tab" href="#nav-adquirir" role="tab" aria-controls="nav-adquirir" aria-selected="false">Adquirir evaluación</a>				    
				    <a className="nav-item nav-link" id="nav-start-tab" data-toggle="tab" href="#nav-start" role="tab" aria-controls="nav-start" aria-selected="false">Empezar la evaluación</a>				 
				  </div>
				</nav>
				
				<div className="tab-content" id="nav-tabContent">	  
				  <div className="tab-pane fade show active" id="nav-ficha" role="tabpanel" aria-labelledby="nav-ficha-tab">
                    <FichaTecnica />
				  </div>


				  <div className="tab-pane fade" id="nav-teoria" role="tabpanel" aria-labelledby="nav-teoria-tab">
				  	<Teoria />
				  </div>

				  

				  <div className="tab-pane fade" id="nav-math" role="tabpanel" aria-labelledby="nav-math-tab">
				  
				  </div>


				  <div className="tab-pane fade" id="nav-adquirir" role="tabpanel" aria-labelledby="nav-adquirir-tab">
				  <Adquirir />
				  </div>

				  <div className="tab-pane fade" id="nav-start" role="tabpanel" aria-labelledby="nav-start-tab">
				  	<Test />
				  </div>
				
				</div>

        	</div>

        	

         );
    }
}