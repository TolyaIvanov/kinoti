import React from 'react'
import {Link} from "react-router-dom";

class Navbar extends React.Component {
    constructor(props) {
        super(props);

        this.state = {
            dropdownOpened: false,
        };

        this.setWrapperRef = this.setWrapperRef.bind(this);
        this.handleClickOutsideDropdown = this.handleClickOutsideDropdown.bind(this);
    }

    componentDidMount() {
        document.addEventListener('click', this.handleClickOutsideDropdown, true);
    }

    componentWillUnmount() {
        document.removeEventListener('click', this.handleClickOutsideDropdown, true);
    }

    setWrapperRef(node) {
        this.dropdown = node;
    }

    handleClickOutsideDropdown(event) {
        if (this.dropdown && !this.dropdown.contains(event.target) && this.state.dropdownOpened && event.target.className !== 'dropdown-dots') {
            this.setState({
                dropdownOpened: !this.state.dropdownOpened,
            });
        }
    }

    render() {
        return (
            <ul className="main-menu">
                <li className="menu-link"><Link className={"link"} to={'/premiere'}>Премьеры</Link></li>
                <li className="menu-link"><Link className={"link"} to={'/films'}>Фильмы</Link></li>
                <li className="menu-link"><Link className={"link"} to={'/serials'}>Сериалы</Link></li>
                <li className="menu-link"><Link className={"link"} to={'/cartoons'}>Мультфильмы</Link></li>
                <li className="menu-link menu-link-dots" onClick={() => {
                    this.setState({
                        dropdownOpened: !this.state.dropdownOpened
                    })
                }}>
                    <span className={'dropdown-dots'}></span>
                    <div
                        ref={this.setWrapperRef}
                        className={
                            this.state.dropdownOpened ? "dropdown" : "dropdown dropdown-hidden"
                        }
                    >
                        <ul className={"dropdown-list"}>
                            <li className="dropdown-list-item">Топ 100</li>
                            <li className="dropdown-list-item"><Link className={"link"} to={'/films/top'}>Фильмов</Link>
                            </li>
                            <li className="dropdown-list-item"><Link className={"link"}
                                                                     to={'/serials/top'}>Сериалов</Link></li>
                            <li className="dropdown-list-item"><Link className={"link"}
                                                                     to={'/cartoons/top'}>Мультфильмов</Link>
                            </li>
                        </ul>
                    </div>
                </li>
            </ul>
        )
    }
}

export default Navbar