import React, { Component } from 'react';
import logo from './logo.svg';
import './App.css';
import { Link } from "react-router-dom";
import Footer from './components/Footer';

class App extends Component {
  render() {
    return (
      <div>
        <div class="p-3 border-bottom header shadow">
          <div class="container">
            <div class="d-flex flex-wrap align-items-center justify-content-center">

              <div class="nav col-4 justify-content-center text-light">
                <h2><b><span class="text-warning">LIBRARY</span>  MS</b></h2>
              </div>

              <form class="col-3" role="search">
                <input type="search" class="form-control w-3" placeholder="Search..." aria-label="Search" />
              </form>
              <div class="col-1"></div>
              <div class="dropdown p-2">
                <button class="btn btn-warning text-muted" type="button" data-bs-toggle="offcanvas" data-bs-target="#signinoffcanvas" aria-controls="offcanvasScrolling">Sign in</button>
              </div>
            </div>
          </div>
        </div>



        <main className='bg-warning shadow mb-2 mt-2'>

          <div id="myCarousel" class="carousel slide mb-6" data-bs-ride="carousel">
            <div class="carousel-indicators">
              <button type="button" data-bs-target="#myCarousel" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
              <button type="button" data-bs-target="#myCarousel" data-bs-slide-to="1" aria-label="Slide 2"></button>
              <button type="button" data-bs-target="#myCarousel" data-bs-slide-to="2" aria-label="Slide 3"></button>
            </div>
            <div class="carousel-inner">
              <div class="carousel-item active">
                <svg class="bd-placeholder-img" width="100%" height="100%" xmlns="http://www.w3.org/2000/svg" aria-hidden="true" preserveAspectRatio="xMidYMid slice" focusable="false"><rect width="100%" height="100%" fill="var(--bs-secondary-color)" /></svg>
                <div class="container">
                  <div class="carousel-caption text-start">
                    <h1>Example headline.</h1>
                    <p class="opacity-75">Some representative placeholder content for the first slide of the carousel.</p>
                    <p><a class="btn btn-lg btn-primary" href="#">Sign up today</a></p>
                  </div>
                </div>
              </div>
              <div class="carousel-item">
                <svg class="bd-placeholder-img" width="100%" height="100%" xmlns="http://www.w3.org/2000/svg" aria-hidden="true" preserveAspectRatio="xMidYMid slice" focusable="false"><rect width="100%" height="100%" fill="var(--bs-secondary-color)" /></svg>
                <div class="container">
                  <div class="carousel-caption">
                    <h1>Another example headline.</h1>
                    <p>Some representative placeholder content for the second slide of the carousel.</p>
                    <p><a class="btn btn-lg btn-primary" href="#">Learn more</a></p>
                  </div>
                </div>
              </div>
              <div class="carousel-item">
                <svg class="bd-placeholder-img" width="100%" height="100%" xmlns="http://www.w3.org/2000/svg" aria-hidden="true" preserveAspectRatio="xMidYMid slice" focusable="false"><rect width="100%" height="100%" fill="var(--bs-secondary-color)" /></svg>
                <div class="container">
                  <div class="carousel-caption text-end">
                    <h1>One more for good measure.</h1>
                    <p>Some representative placeholder content for the third slide of this carousel.</p>
                    <p><a class="btn btn-lg btn-primary" href="#">Browse gallery</a></p>
                  </div>
                </div>
              </div>
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#myCarousel" data-bs-slide="prev">
              <span class="carousel-control-prev-icon" aria-hidden="true"></span>
              <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#myCarousel" data-bs-slide="next">
              <span class="carousel-control-next-icon" aria-hidden="true"></span>
              <span class="visually-hidden">Next</span>
            </button>
          </div>

        </main>

        <Footer />



        <div class="offcanvas offcanvas-end" data-bs-scroll="true" data-bs-backdrop="false" tabindex="-1" id="signinoffcanvas" aria-labelledby="offcanvasScrollingLabel">
          <div class="offcanvas-header p-color text-light p-4">
            <h5 class="offcanvas-title" id="offcanvasScrollingLabel">Sign in here</h5>
            <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
          </div>
          <div class="offcanvas-body">
            <br />
            <form>
              <img class="mb-4" src="../assets/brand/bootstrap-logo.svg" alt="" width="72" height="57" />

              <div class="form-floating">
                <input type="email" class="form-control" id="floatingInput" placeholder="name@example.com" />
                <label for="floatingInput">Email address</label>
              </div><br />
              <div class="form-floating">
                <input type="password" class="form-control" id="floatingPassword" placeholder="Password" />
                <label for="floatingPassword">Password</label>
              </div>

              <div class="form-check text-start my-3">
                <input class="form-check-input checkbox-warning" type="checkbox" value="remember-me" id="flexCheckDefault" />
                <label class="form-check-label" for="flexCheckDefault">
                  Remember me
                </label>
              </div>
              <Link to="/Home" className='nav-a btn p-color w-100 py-2'>Sign in</Link>
              <p class="mt-5 mb-3 text-body-secondary">Don't have Account? <b><span class="signup-btn">Sign up</span></b></p>
            </form>
          </div>
        </div>
      </div>
    );
  }
}

export default App;
