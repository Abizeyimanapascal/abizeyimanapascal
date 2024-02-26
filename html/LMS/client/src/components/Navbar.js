import React from 'react'
import { Link } from "react-router-dom";

function Navbar() {
    return (
        <div>
            <nav class="navbar navbar-expand-md navbar-dark sticky-top bg-dark">


                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse justify-content-center" id="navbarCollapse">

                    <div className='col-4'>
                        <ul class="navbar-nav justify-content-center">
                            <li class="nav-item mx-4">
                                <Link to="/"> Home</Link>
                            </li>
                            <li class="nav-item  mx-4">
                            <Link to="/Books"> Books</Link>
                            </li>
                        </ul>
                    </div>
                </div>
            </nav >
        </div >
    )
}

export default Navbar
