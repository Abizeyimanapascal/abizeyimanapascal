import React, { Component, useState, useEffect } from 'react';
import Axios from 'axios';
import logo from './logo.svg';
import './App.css';
import { Link } from "react-router-dom";
import Footer from './components/Footer';

function App(){

    const [firstname, setFirstname] = useState("");
    const [lastname, setLastname] = useState("");
    const [username, setUsername] = useState("");
    const [email, setEmail] = useState("");
    const [password, setPassword] = useState("");
    const submituser = () => {
      Axios.post('http://localhost:3001/api/adduser', {
        Firstname: firstname,
        Lastname: lastname,
        Username: username,
        Email: email,
        Password: password,
      }).then(() => {
        alert('User Added');
      });
    };

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
              <p class="mt-5 mb-3 text-body-secondary">Don't have Account? <b><span class="signup-btn btn" data-bs-toggle="modal" data-bs-target="#signupmodal">Sign up</span></b></p>
            </form>
          </div>
        </div>






        <div class="modal modal-lg fade" id="signupmodal" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true" >
          <div class="modal-dialog" >
            <div class="modal-content">
              <div class="modal-header p-color text-light">
                <h1 class="modal-title fs-5" id="staticBackdropLabel">Sign up form</h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
              </div>
              <div class="modal-body">
                <form class="row g-3 needs-validation" novalidate>
                  <div class="col-md-4">
                    <label for="validationCustom01" class="form-label">First name</label>
                    <input type="text" name="Firstname" onChange={(e) => { setFirstname(e.target.value) }} class="form-control" id="validationCustom01" />
                    <div class="valid-feedback">
                      Looks good!
                    </div>
                  </div>
                  <div class="col-md-4">
                    <label for="validationCustom02" class="form-label">Last name</label>
                    <input type="text" name="Lastname" onChange={(e) => { setLastname(e.target.value) }} class="form-control" id="validationCustom02" />
                    <div class="valid-feedback">
                      Looks good!
                    </div>
                  </div>
                  <div class="col-md-4">
                    <label for="validationCustomUsername" class="form-label">Username</label>
                    <div class="input-group has-validation">
                      <span class="input-group-text" id="inputGroupPrepend">@</span>
                      <input type="text" name="Username" onChange={(e) => { setUsername(e.target.value) }} class="form-control" id="validationCustomUsername" aria-describedby="inputGroupPrepend" />
                      <div class="invalid-feedback">
                        Please choose a username.
                      </div>
                    </div>
                  </div>
                  <div class="col-md-6">
                    <label for="validationCustom03" class="form-label">e-mail</label>
                    <input type="text" name="Email" onChange={(e) => { setEmail(e.target.value) }} class="form-control" id="validationCustom03" />
                    <div class="invalid-feedback">
                      Please provide a valid city.
                    </div>
                  </div>
                  <div class="col-md-3">
                    <label for="validationCustom05" class="form-label">Password</label>
                    <input type="text" name="Password" onChange={(e) => { setPassword(e.target.value) }} class="form-control" id="validationCustom05" />
                    <div class="invalid-feedback">
                      Please provide a valid zip.
                    </div>
                  </div>
                  <div class="col-md-3">
                    <label for="validationCustom05" class="form-label">Connfirm</label>
                    <input type="text" class="form-control" id="validationCustom05" />
                    <div class="invalid-feedback">
                      Please provide a valid zip.
                    </div>
                  </div>
                  <div class="col-12">
                    <div class="form-check">
                      <input class="form-check-input" type="checkbox" value="" id="invalidCheck" />
                      <label class="form-check-label" for="invalidCheck">
                        Agree to terms and conditions
                      </label>
                      <div class="invalid-feedback">
                        You must agree before submitting.
                      </div>
                    </div>
                  </div>
                  <div class="col-12">
                    <button class="btn btn-primary" type="submit" onClick={submituser}>Submit form</button>
                  </div>
                </form>
              </div>
            </div>
          </div>
        </div>




      </div>
    );
  }

export default App;
