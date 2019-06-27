import React, { Component } from 'react';
import {BrowserRouter as Router, Link, Route} from 'react-router-dom';



export default class Item1 extends Component {
    render() {
        return (

<div>
            <div className="modal-header">
                <h4 className="modal-title" id="exampleModalLongTitle">Traslada agua de un vaso a otro sin derramarla</h4>
                <button type="button" className="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>



            <div className="modal-body">
                <
                div className="row justify-content-center align-items-center">
                    <div className="col-lg-6">
                        <img className="img-fluid rounded-sm border mb-2 p-4" alt="" src="img/tepsi/vasos.jpg" />
                    </div>
 
                    <div className="col-lg-5 align-self-center">
                                        
                        <div className="row-fluid rounded-sm border mb-2">
                            <h4>Materiales:</h4> <p>Dos vasos, uno vacío y el otro lleno de agua</p>
                        </div>

                        <div className="row-fluid rounded-sm border mb-2">
                            <h4>Ubicación:</h4> <p>Examinador y niño de pie frente a la mesa</p>
                        </div>

                        <div className="row-fluid rounded-sm border mb-2">
                             <h4>Administración:</h4> <p>El examinador coloca los dos vasos sobre la mesa. Luego señalando el vaso lleno con agua (hasta un dedo del borde) dice: <strong className="text-danger">"Cambia el agua al otro vaso tratando de no botar nada"</strong>. El examinador debe incentivar al niño a recoger los vasos para realizar la tarea.</p>
                        </div>

                    </div>

                </div>

                <div className="row justify-content-center align-items-center">
            
                    <div className="col-lg-6">
                        <div className="row-fluid rounded-sm  mb-2">
                            <button type="button" className="btn btn-primary mb-1 mt-1" data-dismiss="modal">Atras</button>
                        </div> 
                    </div>
                                        
                    <div className="col-lg-5 mb-2">

                        <div className="row-fluid rounded-sm border mb-1">
                            <h4>Criterio de aprobación:</h4> <p>El niño traslada el agua al otro vaso si derramar</p>
                            
                            <div className="btn-group btn-group-toggle mb-2" data-toggle="buttons">
                                <label className="btn btn-success">
                                   <input type="radio" name="options" id="option1" autocomplete="off" checked /> Logrado
                                </label>

                                <label className="btn btn-danger">
                                   <input type="radio" name="options" id="option3" autocomplete="off" /> No logrado
                                </label>
                            </div>
                        </div>
                    </div>


                </div>


            </div>


</div>

        );
    }
}
