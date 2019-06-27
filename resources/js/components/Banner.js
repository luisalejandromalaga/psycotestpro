import React, { Component } from 'react';

export default class Banner extends Component {
    render() {
        return ( 
        	<div className="container-fluid">
        		

				    <div className="row rownoticia">


						<div id="carouselExampleControls" className="carousel slide" data-ride="carousel">
						  <div className="carousel-inner">
						    <div className="carousel-item active">
						      <img className="d-block w-100 imgnoticia"  src="img/banner_uno.png" alt="First slide"/>
						    </div>
						    <div className="carousel-item">
						      <img className="d-block w-100 imgnoticia"  src="img/banner_dos.png" alt="Second slide"/>
						    
						    </div>
						    <div className="carousel-item">
						      <img className="d-block w-100 imgnoticia"  src="img/2259.png" alt="Third slide"/>
						    </div>
						  </div>
						  <a className="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
						    <span className="carousel-control-prev-icon" aria-hidden="true"></span>
						    <span className="sr-only">Previous</span>
						  </a>
						  <a className="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
						    <span className="carousel-control-next-icon" aria-hidden="true"></span>
						    <span className="sr-only">Next</span>
						  </a>
						   		
						   		<div className=" d-md-block  centered text-center">
									<h2 className="d-none d-md-block text-white text-center mb-5" >"Diseñamos, contruimos y sometemos a prueba tecnologías para la evaluación del comportamiento"</h2>
									
									<button type="button" className="m-1 btn btn-primary btn-lg " data-toggle="modal" data-target="#register">
									  Crear una cuenta
									</button>

									<button type="button" className="m-1 btn btn-primary btn-lg " data-toggle="modal" data-target="#login">
									  Iniciar Sesión 
	                
									</button>			 
								</div>






<div class="modal fade" id="login" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h4 class="modal-title" id="exampleModalLongTitle">Iniciar Sesión</h4>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
      	<div class="row justify-content-center">
          <div class="col-md-8">
            <div class="card">
		      	<div class="card-body">
		         <form method="POST" action="{{ route('login') }}">
		         	<div class="form-group row">
		         		<div class="row">
			         		<div class="col-md-4">
			         			<label for="email" class="col-form-label text-md-right">Email </label>
			         		</div>
			                <div class="col-md-6">
			                	<label for="email"> <input class ="form-control" type="text" name="email"/></label>
			                </div>
		                </div>
		         	</div>
		         	<div class="form-group row">
		         		<div class="row">
		         			<div class="col-md-4">
                           		<label for="password" class="col-form-label text-md-right">Contraseña</label>
                       		</div>
                            <div class="col-md-6">
			                	<label for="password"> <input class ="form-control" type="text" name="password"/></label>
			                </div>
                        </div>
                    </div>
                    <div class="form-group row mb-0">
                            <div class="col-md-8 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                   Login
                                </button>
                            </div>
                    </div>
		         </form>
		        </div>
		    </div>
		  </div>
		</div>
      </div>
      
    </div>
  </div>
</div>

<div class="modal fade" id="register" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLongTitle">Registrarse</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
       
      </div>
    </div>
  </div>
</div>


</div>					    


    
					</div>

	
	        </div>
        );
    }
}
