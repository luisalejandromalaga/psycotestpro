import React, { Component } from 'react';
import ReactDOM from 'react-dom';

import Header from "./Header";
import Footer from "./Footer";
import Banner from "./Banner";
import Catalogo from "./Catalogo";
import Funcionamiento from "./Funcionamiento";

export default class Index extends Component {
    render() {
        return (
   
            <div className="body">
                
                <Header />

                <Banner />
        
                <Catalogo />



                <Footer />

                

            </div>
              

        );
    }
}

if (document.getElementById('app')) {
    ReactDOM.render(<Index />, document.getElementById('app'));
}
