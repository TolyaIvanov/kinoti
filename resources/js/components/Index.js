import React, {Component} from 'react';
import ReactDOM from 'react-dom';
import {BrowserRouter, Route, Switch} from "react-router-dom";
import createBrowserHistory from "history/createBrowserHistory"

import Main from './Main'
import Admin from './admin/Panel'

const history = createBrowserHistory();

class Index extends Component {
    render() {
        return (
            <BrowserRouter history={history}>
                <div>
                    <Route exact path={'/admin'} component={Admin}/>
                    <Route path={'/'} component={Main}/>
                </div>
            </BrowserRouter>
        );
    }
}

export default Index;

/* The if statement is required so as to Render the component on pages that have a div with an ID of "root";
*/

if (document.getElementById('root')) {
    ReactDOM.render(<Index/>, document.getElementById('root'));
}