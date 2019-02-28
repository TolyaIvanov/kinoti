import React from 'react'

import SearchForm from './parts/SearchForm'
import Navbar from './parts/Navbar'

class Header extends React.Component {
    render() {
        return (
            <header>
                <div className="wrapper">
                    <Navbar/>
                    <SearchForm/>
                </div>
            </header>
        );
    }
}

export default Header