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
                <div className="row justify-content-center align-items-center">
                    <div className="col-lg-6">

                        <div className="row-fluid rounded-sm border mb-2">
                            <img className="img-fluid " alt="Responsive image" src="img/tepsi/laminas/lam1.jpg" />



                        </div> 

                        <div className="row-fluid rounded-sm border mb-2">
                            <div className="col-lg-5">
                                <button type="button" className="btn btn-primary" data-dismiss="modal">Atras</button>
                                
                                <svg  xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24">
                                    <path d="M21 9.102v5.793l3-2.896-3-2.897zm-18 5.793v-5.793l-3 2.896 3 2.897zm6.104-9.895h5.793l-2.897-3-2.896 3zm5.792 14h-5.792l2.896 3 2.896-3zm-9.896-12v10h14v-10h-14z"/>
                                
                                </svg>

                            </div>
                        </div>                   

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

                        <div className="row-fluid rounded-sm border mb-2">
                            
                            <h4>Criterio de aprobación:</h4> <p>El niño traslada el agua al otro vaso si derramar</p>


                            <div className="btn-group btn-group-toggle mb-1" data-toggle="buttons">
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

if (document.getElementById('test')) {
    ReactDOM.render(<Index />, document.getElementById('test'));
}
