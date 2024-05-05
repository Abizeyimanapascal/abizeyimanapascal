import React from 'react'
import Footer from './components/Footer';
import Header from './components/Header';


function App() {
  return (
    <div>

      <Header></Header>

      <main class="container">
        <nav class="d-flex justify-content-center bg-body-tertiary rounded row">
          <div className='col-2'>
          </div>
          <div className='col-1'>
          </div>
          <div className='col-4'>
            <nav>
              <div class="nav nav-tabs mb-3 justify-content-center" id="nav-tab" role="tablist">
                <button class="nav-link color active" id="nav-home-tab" data-bs-toggle="tab" data-bs-target="#nav-home"
                  type="button" role="tab" aria-controls="nav-home" aria-selected="true">Home</button>
                <button class="nav-link color" id="nav-aboutus-tab" data-bs-toggle="tab" data-bs-target="#nav-aboutus"
                  type="button" role="tab" aria-controls="nav-aboutus" aria-selected="false">About-Us</button>
                <button class="nav-link color" id="nav-faqs-tab" data-bs-toggle="tab" data-bs-target="#nav-books"
                  type="button" role="tab" aria-controls="nav-books" aria-selected="false">FAQs</button>
                <button class="nav-link color" id="nav-help-tab" data-bs-toggle="tab" data-bs-target="#nav-borrowers"
                  type="button" role="tab" aria-controls="nav-borrowers" aria-selected="false">Help</button>
              </div>
            </nav>
          </div>

          <div className='col-3'>
            <ul class="nav nav-pills  justify-content-center pe-3">
              <li class="nav-item"><a href="#" class="nav-link color" aria-current="page" data-bs-toggle="modal" data-bs-target="#signupmodal">Register</a></li>
              <li class="nav-item"><button class="btn text-muted bgcolor" data-bs-toggle="offcanvas" data-bs-target="#signinoffcanvas" aria-controls="offcanvasScrolling">Login</button></li>
            </ul>
          </div>
          <div className='col-2'></div>
        </nav>

        <div class="tab-content" id="nav-tabContent">
          <div class="tab-pane fade show active" id="nav-home" role="tabpanel" aria-labelledby="nav-home-tab">

            <div class="container my-5">
              <div class="p-5 text-center rounded-3 bgcolor">
                <h3 class="text-white">Urubuga Rwambere Mu Rwanda Rufasha Abantu Bose Kubona Provisoire!</h3><hr></hr>
                <p class="col-lg-8 mx-auto fs-5 text-muted">
                  Nockira ni urubuga rwashyiriweho gufasha abanyarwanda Bose kumenya amategeko y'umuhanda mu rwego rwo kwirinda impanuka.
                </p>
                <div class="d-inline-flex gap-2 mb-5">
                  <button class="d-inline-flex align-items-center btn btn-primary btn-lg px-4 rounded-pill" type="button">
                    Call to action

                  </button>
                  <button class="btn btn-outline-secondary btn-lg px-4 rounded-pill" type="button">
                    Secondary link
                  </button>
                </div>
              </div>
            </div>

            <div class="row">
              <div class="col-2"></div>
              <div class="col-2 text-center"><img src="./images/books.jpg" class="homeimageicon" /></div>
              <div class="col-6 shadow rounded p-3 text-muted"><b>Amasomo ateguwe bigezweho</b><br />
                Tuvunagura mu bice amasomo akomeye tukayagira ayoroshye kandi yigika mu gihe gito..</div>
              <div class="col-2"></div>
            </div>
            <div class="row">
              <div class="col-2"></div>
              <div class="col-2 text-center"><img src="./images/test.jpg" class="homeimageicon" /></div>
              <div class="col-6 shadow rounded p-3 text-muted"><b>Tugutegura gukora ibizamini</b><br />
                Uru rubuga rufite imyitozo itandukanye igufasha kwitegura ibizamini bikenerwa nk'uruhushya rw'agateganyo rwo gutwara.</div>
              <div class="col-2"></div>
            </div>
            <div class="row">
              <div class="col-2"></div>
              <div class="col-2 text-center"><img src="./images/price.jpg" class="homeimageicon" /></div>
              <div class="col-6 shadow rounded p-3 text-muted"><b>Ibiciro biboneye</b><br />
                Uhitamo amasomo n'imyitozo ihwanye n'amafaranga wifuza gutanga, kandi ukanyurwa.</div>
              <div class="col-2"></div>
            </div>
          </div>

          <div class="tab-pane fade show text-muted" id="nav-aboutus" role="tabpanel" aria-labelledby="nav-aboutus-tab">
          <br/><br/><b>Abo turibo.</b><br/><br/>

            Nockira ni urubuga rwashyiriweho gufasha abanyarwanda Bose kumenya amategeko y'umuhanda mu rwego rwo kwirinda impanuka ziterwa no kutamenya amategeko agenga uburyo bwo kugenda mu muhanda. Ariko cyane cyane tunafasha abashaka kubona uruhushya rw'agateganyo rwo gutwara ibinyabiziga (Provisoire)

            <br/><br/><b>Service dutanga:</b><br/><br/>
            <ul>
            <li>Kwigisha amategeko y'umuhanda mu buryo bwo gusoma igazeti.</li>
            <li>Kwigisha amategeko y'umuhanda mu majwi.</li>
            <li>Gutanga imyitozo ifasha umunyeshuri kwihugura.</li>
            <li>Gutanga Ibibazo n'ibisubizo uwiga yaba akoresha</li>
            <li>Kwigisha ibyapa neza ukabyiga ubibona</li>
            <li>Kwigisha ibimenyetso byo mu muhanda, n'ibimenyetso bimurika (Feruje) ukabyiga neza kandi ubibona.</li>
            <li>Gutanga inama n'amakuru y'ingenzi byafasha umunyeshuri gutsindira uruhushya rw'agateganyo (Provisoire) cyangwa uruhushya rwa burundu (Permit)</li>
            </ul>
          </div>

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
            <center><img class="mb-2" src="./images/usericon.jpg" alt="" width="130" height="130" /></center>

            <div class="form-floating">
              <input type="email" class="form-control" id="floatingInput" placeholder="name@example.com" />
              <label for="floatingInput">Email address</label>
            </div><br />
            <div class="form-floating">
              <input type="password" class="form-control" id="floatingPassword" placeholder="Password" />
              <label for="floatingPassword">Password</label>
            </div>

            <div class="form-check text-start my-3">
              <input class="form-check-input checkbox-success" type="checkbox" value="remember-me" id="flexCheckDefault" />
              <label class="form-check-label" for="flexCheckDefault">
                Remember me
              </label>
            </div>
            <button className='btn bgcolor text-muted w-100 py-2'>Sign in</button>
            <p class="mt-5 mb-3 text-body-secondary">Don't have Account? <b><span class="signup-btn btn" data-bs-toggle="modal" data-bs-target="#signupmodal">Sign up</span></b></p>
          </form>
        </div>
      </div>






      <div class="modal modal-lg fade" id="signupmodal" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true" >
        <div class="modal-dialog" >
          <div class="modal-content">
            <div class="modal-header">
              <h1 class="modal-title fs-5 text-muted text-center" id="staticBackdropLabel"><b>Fill up this form to create account!</b></h1>
              <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
              <form class="row g-3 needs-validation" novalidate>
                <div class="col-md-6">
                  <label for="validationCustom01" class="form-label">First name:</label>
                  <input type="text" name="Firstname" class="form-control" id="validationCustom01" />
                  <div class="valid-feedback">
                    Looks good!
                  </div>
                </div>
                <div class="col-md-6">
                  <label for="validationCustom02" class="form-label">Last name:</label>
                  <input type="text" name="Lastname" class="form-control" id="validationCustom02" />
                  <div class="valid-feedback">
                    Looks good!
                  </div>
                </div>
                <div class="col-md-6">
                  <label for="validationCustomUsername" class="form-label">Username:</label>
                  <div class="input-group has-validation">
                    <span class="input-group-text" id="inputGroupPrepend">@</span>
                    <input type="text" name="Username" class="form-control" id="validationCustomUsername" aria-describedby="inputGroupPrepend" />
                    <div class="invalid-feedback">
                      Please choose a username.
                    </div>
                  </div>
                </div>
                <div class="col-md-6">
                  <label for="validationCustom03" class="form-label">e-mail:</label>
                  <input type="text" name="Email" class="form-control" id="validationCustom03" />
                  <div class="invalid-feedback">
                    Please provide a valid city.
                  </div>
                </div>
                <div class="col-md-6">
                  <label for="validationCustom05" class="form-label">Password:</label>
                  <input type="text" name="Password" class="form-control" id="validationCustom05" />
                  <div class="invalid-feedback">
                    Please provide a valid zip.
                  </div>
                </div>
                <div class="col-md-6">
                  <label for="validationCustom05" class="form-label">Connfirm password:</label>
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
                  <button class="btn bgcolor text-muted" type="submit"><b>Submit</b></button>
                </div>
              </form>
            </div>
          </div>
        </div>
      </div>



    </div>
  )
}

export default App
