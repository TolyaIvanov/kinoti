import React from 'react'
import {BrowserRouter, Route, Link} from "react-router-dom";


class SearchForm extends React.Component {
    constructor(props) {
        super(props);
        this.state = {
            searchListOpened: false,
            searchValue: '',
            closeIconVisible: false
        };

        this.toggleSearch = this.toggleSearch.bind(this);
        this.inputChanging = this.inputChanging.bind(this);
        this.sendRequest = this.sendRequest.bind(this);
        this.setWrapperRef = this.setWrapperRef.bind(this);
        this.handleClickOutsideSearch = this.handleClickOutsideSearch.bind(this);
    }

    componentDidMount() {
        document.addEventListener('click', this.handleClickOutsideSearch, true);
    }

    componentWillUnmount() {
        document.removeEventListener('click', this.handleClickOutsideSearch, true);
    }

    setWrapperRef(node) {
        this.searchForm = node;
    }

    handleClickOutsideSearch(event) {
        if (this.searchForm && !this.searchForm.contains(event.target) && this.state.searchListOpened) {
            this.setState({
                searchListOpened: !this.state.searchListOpened,
            });
        }
    }

    toggleSearch() {
        this.setState({
            searchListOpened: !this.state.searchListOpened,
            searchValue: '',
        }, function () {
            if (this.state.searchListOpened) {
                this.searchInput.focus();
            }
        });
    };

    inputChanging(event) {
        let input = event.target;

        this.setState({
            searchValue: input.value,
        });

        if (input.value.length > 2) {
            this.sendRequest(input.value);
        }

        if (input.value.length === 0) {
            this.setState({
                searchListOpened: !this.state.searchListOpened,
                searchValue: '',
            })
        }
    }

    sendRequest(value) {
        console.log(value ? value : this.state.searchValue);
        // fetch('/api/')
        //     .then(response => {
        //         return response.json();
        //     })
        //     .then(response => {
        //         this.setState({
        //             films: response.films,
        //             serials: response.serials,
        //         })
        //     })

    }

    render() {
        return (
            <form method={'get'} ref={this.setWrapperRef}
                  className={
                      this.state.searchListOpened ? 'search-panel' : 'search-panel search-panel-closed'
                  }>
                <div className={"search-start"} onClick={this.toggleSearch}>
                    <span className={"search-start-icon"}></span>
                </div>
                <input className={'search-input'} type="text"
                       ref={(input) => {
                           this.searchInput = input;
                       }}
                       autoComplete={"off"}
                       value={this.state.searchValue}
                       onChange={this.inputChanging}/>
            </form>
        )
    }
}

export default SearchForm