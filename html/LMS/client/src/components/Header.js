import React, { Component } from 'react';
import { Link } from 'react-router-dom';
export class Header extends Component {
    render() {
        return (
            <div class="sticky-top">
            <div class="p-3 border-bottom header shadow">
                <div class="container">
                    <div class="d-flex flex-wrap align-items-center justify-content-center">

                        <div class="nav col-4 justify-content-center text-light">
                            <h2><b><span class="text-warning">LIBRARY</span>  MS</b></h2>
                        </div>

                        <form class="col-3" role="search">
                            <input type="search" class="form-control" placeholder="Search..." aria-label="Search"/>
                        </form>
                        <div class="col-1"></div>
                        <div class="dropdown p-2 ">
                            <a href="#" class="d-block link-body-emphasis text-decoration-none dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false">
                                <img src="https://github.com/mdo.png" alt="mdo" width="32" height="32" class="rounded-circle" />
                            </a>
                            <ul class="dropdown-menu text-small">
                                <li><a class="dropdown-item" href="#">New project...</a></li>
                                <li><a class="dropdown-item" href="#">Settings</a></li>
                                <li><a class="dropdown-item" href="#">Profile</a></li>
                                <li><hr class="dropdown-divider"/></li>
                                <li><Link to="/" className='dropdown-item nav-a text-dark'>Sign out</Link></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <nav class="navbar navbar-expand-md navbar-dark shadow">


            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse justify-content-center" id="navbarCollapse">

                <div className='col-4'>
                    <ul class="navbar-nav justify-content-center">
                        
                        <li class="nav-item  mx-4">
                        <Link to="/Dashboard" className='nav-a'>Dashboard</Link>
                        </li>
                        <li class="nav-item mx-4">
                            <Link to="/Home" className='nav-a'>Home</Link>
                        </li>
                        <li class="nav-item  mx-4">
                        <Link to="/Admin" className='nav-a'>Admin</Link>
                        </li>

                    </ul>
                </div>
            </div>
        </nav >
        </div>
        )
    }
}

export default Header
