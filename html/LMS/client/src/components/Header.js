import React, { Component } from 'react'

export class Header extends Component {
    render() {
        return (
            <div class="p-3 border-bottom bg-primary">
                <div class="container">
                    <div class="d-flex bg-primary flex-wrap align-items-center justify-content-center">

                        <div class="nav col-4 justify-content-center text-light">
                            <h2><b>LIBRARY MS</b></h2>
                        </div>

                        <form class="col-4" role="search">
                            <input type="search" class="form-control" placeholder="Search..." aria-label="Search"/>
                        </form>

                        <div class="dropdown p-2">
                            <a href="#" class="d-block link-body-emphasis text-decoration-none dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false">
                                <img src="https://github.com/mdo.png" alt="mdo" width="32" height="32" class="rounded-circle" />
                            </a>
                            <ul class="dropdown-menu text-small">
                                <li><a class="dropdown-item" href="#">New project...</a></li>
                                <li><a class="dropdown-item" href="#">Settings</a></li>
                                <li><a class="dropdown-item" href="#">Profile</a></li>
                                <li><hr class="dropdown-divider"/></li>
                                <li><a class="dropdown-item" href="#">Sign out</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        )
    }
}

export default Header
