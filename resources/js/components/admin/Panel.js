import React from 'react'

import Donor from './Donor'
import AdminMenu from './AdminMenu'

import './../../../sass/panel.scss'

class Panel extends React.Component {
    constructor(props) {
        super(props);

        this.state = {
            isActive: [],
            donorUrl: [],

        }
    }

    componentDidMount() {
        fetch('/api/admin')
            .then(response => {
                return response.json();
            })
            .then(response => {
                this.setState({

                })
            })
    }

    renderDonorMenu() {

    }

    render() {
        return (
            <div className={"adminPanel"}>
                <AdminMenu/>
                { this.renderDonorMenu() }
                <div className="sittings">
                    sittings
                </div>
            </div>
        )
    }

}

export default Panel