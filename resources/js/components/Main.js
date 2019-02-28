import React, {Component} from 'react';
import {BrowserRouter, Route, Link} from "react-router-dom";
import createBrowserHistory from "history/createBrowserHistory"


import Header from './main/header/Header'
import Body from './main/body/Body'
import Footer from './main/footer/Footer'

const history = createBrowserHistory();

class Main extends Component {
    render() {
        return (
            <div>
                <Header/>
                <Route exact path={'/'} component={Body}/>
                {/*<Body/>*/}
                <Footer/>
            </div>
        );
    }
}

export default Main;
