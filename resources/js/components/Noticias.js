import React, { Component } from 'react';

export default class Noticias extends Component {
    render() {
        return (
        	<div className="container-fluid-p-0">
        		<div className="row">
				    <div className="col">

						<div id="carouselExampleIndicators" className="carousel slide" data-ride="carousel" >
						  <ol className="carousel-indicators ">
						    <li data-target="#carouselExampleIndicators" data-slide-to="0" className="active"></li>
						    <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
						    <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
						  </ol>
						  <div className="carousel-inner">
						    <div className="carousel-item active">
						      <img src="img/2259.jpg" className="d-block w-100" alt="Responsive image" />
						        <div className="carousel-caption d-none d-md-block text-dark">
							    	<h5>Hello</h5>
							    	<p>PSYCOTEST</p>
							  	</div>
						    </div>
						    <div className="carousel-item">
						      <img src="img/2259.jpg" className="d-block w-100" alt="Responsive image" />
						        <div className="carousel-caption d-none d-md-block text-dark">
							    	<h5>Hello</h5>
							    	<p>PSYCOTEST</p>
							  	</div>						      
						    </div>
						    <div className="carousel-item">
						      <img src="img/2259.jpg" className="d-block w-100" alt="Responsive image" />
						        <div className="carousel-caption d-none d-md-block text-dark">
							    	<h5>Hello</h5>
							    	<p>PSYCOTEST</p>
							  	</div>						   
						    </div>
						  </div>
						  <a className="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
						    <span className="carousel-control-prev-icon" aria-hidden="true"></span>
						    <span className="sr-only">Previous</span>
						  </a>
						  <a className="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
						    <span className="carousel-control-next-icon" aria-hidden="true"></span>
						    <span className="sr-only">Next</span>
						  </a>
						</div>		
				    </div>
				    
				    <div className="col align-self-center" >

				    	<h2 className="text-center">Create una cuenta</h2>

						<form className="">
						  <div className="form-group">
						    <label for="exampleInputEmail1">Email address</label>
						    <input type="email" className="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email" />
						    <small id="emailHelp" className="form-text text-muted">We'll never share your email with anyone else.</small>
						  </div>
						  <div className="form-group">
						    <label for="exampleInputPassword1">Password</label>
						    <input type="password" className="form-control" id="exampleInputPassword1" placeholder="Password" />
						  </div>
						  <div className="form-check">
						    <input type="checkbox" className="form-check-input" id="exampleCheck1" />
						    <label className="form-check-label" for="exampleCheck1">Check me out</label>
						  </div>
						  <button type="submit" className="btn btn-primary">Submit</button>
						</form>
				    </div>
				</div>

	        </div>
        );
    }
}
