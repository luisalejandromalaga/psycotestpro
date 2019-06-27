import React, { Component } from 'react';

export default class Catalogo extends Component {
    render() {
        return (

<div className="container">

	<h2 className="text-center mt-3">Nuestro catalogo</h2>
	<hr className="border-secondary" />
			<div className="card-deck">

			  <div className="card border-secondary mb-3">
			    <img className="card-img-top" src="img/tepsi/tumb.png" alt="Card image cap" />
			    <div className="card-body">
			      <h4 className="card-title">Test de desarrollo psicomotor (TEPSI)</h4>
			      <p className="card-text">El TEPSI es una prueba de tamizaje que sirve para obtener información sobre el desarrollo del niño comparándolo con otros de su mismo grupo poblacional.</p>
			    </div>
			    <div className="card-footer text-center border-secondary">
			      <a className="btn btn-outline-primary p-1" href="http://localhost/psycotestpro/public/tepsi" target="_blank" ><h5 className=" m-1">Más información</h5></a>
			    </div>
			  </div>
			  <div className="card border-secondary mb-3">
			    <img className="card-img-top" src="img/tepsi/tumb.png" alt="Card image cap" />
			    <div className="card-body">
			      <h4 className="card-title">Escala de Autoevaluación de la Ansiedad de Zung (EAA)</h4>
			      <p className="card-text">El TEPSI es una prueba de tamizaje que sirve para obtener información sobre el desarrollo del niño comparándolo con otros de su mismo grupo poblacional.</p>
			    </div>
			    <div className="card-footer text-center border-secondary">
			      <a className="btn btn-outline-primary p-1" href="http://localhost/psycotestpro/public/tepsi" target="_blank" ><h5 className=" m-1">Más información</h5></a>
			    </div>
			  </div>
			  <div className="card border-secondary mb-3">
			    <img className="card-img-top" src="img/tepsi/tumb.png" alt="Card image cap" />
			    <div className="card-body">
			      <h4 className="card-title">Test de Asociación Implícita (Quechua - Caucásico - Bueno - Malo)</h4>
			      <p className="card-text">El TEPSI es una prueba de tamizaje que sirve para obtener información sobre el desarrollo del niño comparándolo con otros de su mismo grupo poblacional.</p>
			    </div>
			    <div className="card-footer text-center border-secondary">
			      <a className="btn btn-outline-primary p-1" href="http://localhost/psycotestpro/public/tepsi" target="_blank" ><h5 className="m-1">Más información</h5></a>
			    </div>
			  </div>
			</div>
</div>
        );
    }
}
