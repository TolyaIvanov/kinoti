import React from 'react'
import {BrowserRouter, Route, Link} from "react-router-dom";

class Body extends React.Component {
    constructor(props) {
        super(props);

        this.state = {
            films: [],
            serials: [],
        }
    }

    componentDidMount() {
        fetch('/api/')
            .then(response => {
                return response.json();
            })
            .then(response => {
                this.setState({
                    films: response.films,
                    serials: response.serials,
                })
            })
    }

    renderFilmsSection() {
        return this.state.films.map(film => {
            return (
                <li key={film.id}>
                    {film.title}
                </li>
            );
        })
    }

    render() {
        return (
            <section>
                <h3>films:</h3>
                <Link to={'/films'}>
                    films link
                </Link>
                <iframe src="//hdgo.club/video/Q298nQsLY481iJzUPrlwVnRh6EqC8Ctd/26733/" width="610" height="370"
                        frameBorder="0" allowFullScreen></iframe>
                {/*<ul>*/}
                {/*{ this.renderFilmsSection() }*/}
                {/*</ul>*/}
            </section>
        );
    }
}

export default Body