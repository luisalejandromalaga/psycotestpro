import React, { Component } from 'react';
import ReactDOM from 'react-dom';

import Header from "./Header";
import Footer from "./Footer";

import Catalogo from "./Catalogo";
import Informacion from "./Informacion";



export default class InfoTest extends Component {
    render() {
        return (
   
            <div className="">
                <Header />
                <Informacion />



            </div>
              

        );
    }
}

if (document.getElementById('tepsi')) {
    ReactDOM.render(<InfoTest />, document.getElementById('tepsi'));
}
