import React, { Component } from 'react';
import {BrowserRouter as Router, Link, Route} from 'react-router-dom';

import Home from "./Home";
import About from "./About";


export default class Header extends Component {
    render() {
        return (

        <Router>
		<div>
			<nav className="navbar navbar-expand-lg navbar-dark negro">


				
				<a className="navbar-brand" href="/psycotestpro/public">PSYCOTESTPRO</a>

				<a className="navbar-brand text-white" href="/psycotestpro/public/tepsi">TEPSI</a>
				

				  <button className="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
				    <span className
				    ="navbar-toggler-icon"></span>
				  </button>

			<div className="collapse navbar-collapse" id="navbarSupportedContent">
				<ul className="navbar-nav mr-auto">
			      <li className="nav-item active">
			        <a className="nav-link" href="#">Inicio <span className="sr-only">(current)</span></a>
			      </li>
			      <li className="nav-item">
			        <a className="nav-link" href="#">¿Como funciona?</a>
			      </li>
			      <li className="nav-item dropdown">
			        <a className="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
			          Adquiere un instrumento
			        </a>
			        <div className="dropdown-menu" aria-labelledby="navbarDropdown">
			          <a className="dropdown-item" href="#">Para tu trabajo</a>
			          <a className="dropdown-item" href="#">Para empresas</a>
			          <div className="dropdown-divider"></div>
			          <a className="dropdown-item" href="#">Usalo para investigación</a>
			        </div>
			      </li>
			      <li className="nav-item">
			        <a className="nav-link disabled" href="#">Contacto</a>
			      </li>
			    </ul>



			    <form className="form-inline my-2 my-lg-0">
	      			<input className="form-control mr-sm-2" type="search" placeholder="Busca un test" aria-label="Search" />
	      			<button className="btn btn-outline-light my-2 my-sm-0" type="submit">Buscar</button>
	    		</form>

	    	</div>



			</nav>
		</div>


		</Router>
        );
    }
}
