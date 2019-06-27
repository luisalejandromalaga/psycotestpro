import React, { Component } from 'react';
import {BrowserRouter as Router, Link, Route} from 'react-router-dom';



export default class EmpezarTepsi extends Component {
    render() {
        return (
        	<div className="p-5">
        	<h2>Técnica de medicion</h2>
        	<hr />
        	<p>La técnica de medición es la observación y registro de la conducta del niño frente a situaciones propuestas por el examinador.</p>
        	<p>Esta una versión sitematizada del clásico TEPSI. Mantiene la estructura de items original pero se han automatizado tareas.</p>
        	</div>
        );
    }
}
