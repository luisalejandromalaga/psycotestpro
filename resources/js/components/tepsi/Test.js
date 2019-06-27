import React, { Component } from 'react';
import {BrowserRouter as Router, Link, Route} from 'react-router-dom';
import Item1 from "./Item1";


export default class Test extends Component {
    render() {
        return (
        	
        <div>

            <div className="card m-4 text-center">
                
                <div className="card-header">
          				<h2>Antes de empezar</h2>
                </div>

                <div className="card-body">
                    <div className="card-text">
            				  
                      <p>Asegúrate de tener todo lo que necesitas a mano</p>

            				  <p>Si estás seguro de que tienes a mano todo lo que necesitas para realizar la evaluación presiona "Empezar la evaluación"</p>


                        <a class="btn btn-primary mb-3" href="http://localhost/psycotestpro/public/tepsi/item1" target="_blank">
                         Empezar la evaluación
                        </a>




            				  <p>Si quieres verificar tus materiales haz click en "Herramienta de verificación"</p>


              				<button type="button" className="btn btn-primary" data-toggle="modal" data-target="#exampleModalCenter">
               					Herramienta de verificación
              				</button>

                    </div>
                </div>













                            <div className="modal fade" id="item" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                              <div className="modal-dialog modal-xl modal-dialog-centered" role="document">
                                <div className="modal-content">
                                                                      
                                    <Item1 />
                                    
                                </div>
                              </div>
                            </div>              




                            <div className="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                              <div className="modal-dialog modal-xl modal-dialog-centered" role="document">
                                <div className="modal-content">
                                  <div className="modal-header">
                                    <h5 className="modal-title" id="exampleModalLongTitle">Herramienta de verificación</h5>
                                    <button type="button" className="close" data-dismiss="modal" aria-label="Close">
                                      <span aria-hidden="true">&times;</span>
                                    </button>
                                  </div>
                                  <div className="modal-body">
                                    
                                      verificación
                                    
                                  </div>
                                  <div className="modal-footer">
                                    <button type="button" className="btn btn-secondary" data-dismiss="modal">Close</button>
                                    <button type="button" className="btn btn-primary">Save changes</button>
                                  </div>
                                </div>
                              </div>
                            </div>

        	   </div>

         </div>

        );
    }
}


if (document.getElementById('app')) {
    ReactDOM.render(<Index />, document.getElementById('app'));
}
