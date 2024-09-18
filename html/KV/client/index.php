<!doctype html>
<html lang="en" data-bs-theme="auto">

<head>
  <script src="../assets/js/color-modes.js"></script>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="description" content="">
  <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
  <meta name="generator" content="Hugo 0.122.0">
  <title>Virunga</title>
  <link rel="icon" href="img/vlog.png">

  <link rel="canonical" href="https://getbootstrap.com/docs/5.3/examples/footers/">

  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@docsearch/css@3">

  <link href="../assets/dist/css/bootstrap.min.css" rel="stylesheet">
  <link rel="stylesheet" href="style/carousel.css">

  <style>
    .bd-placeholder-img {
      font-size: 1.125rem;
      text-anchor: middle;
      -webkit-user-select: none;
      -moz-user-select: none;
      user-select: none;
    }

    @media (min-width: 768px) {
      .bd-placeholder-img-lg {
        font-size: 3.5rem;
      }
    }

    .b-example-divider {
      width: 100%;
      height: 3rem;
      background-color: rgba(0, 0, 0, .1);
      border: solid rgba(0, 0, 0, .15);
      border-width: 1px 0;
      box-shadow: inset 0 .5em 1.5em rgba(0, 0, 0, .1), inset 0 .125em .5em rgba(0, 0, 0, .15);
    }

    .b-example-vr {
      flex-shrink: 0;
      width: 1.5rem;
      height: 100vh;
    }

    .bi {
      vertical-align: -.125em;
      fill: currentColor;
    }

    .nav-scroller {
      position: relative;
      z-index: 2;
      height: 2.75rem;
      overflow-y: hidden;
    }

    .nav-scroller .nav {
      display: flex;
      flex-wrap: nowrap;
      padding-bottom: 1rem;
      margin-top: -1px;
      overflow-x: auto;
      text-align: center;
      white-space: nowrap;
      -webkit-overflow-scrolling: touch;
    }

    .btn-bd-primary {
      --bd-violet-bg: #712cf9;
      --bd-violet-rgb: 112.520718, 44.062154, 249.437846;

      --bs-btn-font-weight: 600;
      --bs-btn-color: var(--bs-white);
      --bs-btn-bg: var(--bd-violet-bg);
      --bs-btn-border-color: var(--bd-violet-bg);
      --bs-btn-hover-color: var(--bs-white);
      --bs-btn-hover-bg: #6528e0;
      --bs-btn-hover-border-color: #6528e0;
      --bs-btn-focus-shadow-rgb: var(--bd-violet-rgb);
      --bs-btn-active-color: var(--bs-btn-hover-color);
      --bs-btn-active-bg: #5a23c8;
      --bs-btn-active-border-color: #5a23c8;
    }

    .bd-mode-toggle {
      z-index: 1500;
    }

    .bd-mode-toggle .dropdown-menu .active .bi {
      display: block !important;
    }
  </style>


  <!-- Custom styles for this template -->

</head>

<body>
  <svg xmlns="http://www.w3.org/2000/svg" class="d-none">
    <symbol id="check2" viewBox="0 0 16 16">
      <path
        d="M13.854 3.646a.5.5 0 0 1 0 .708l-7 7a.5.5 0 0 1-.708 0l-3.5-3.5a.5.5 0 1 1 .708-.708L6.5 10.293l6.646-6.647a.5.5 0 0 1 .708 0z" />
    </symbol>
    <symbol id="circle-half" viewBox="0 0 16 16">
      <path d="M8 15A7 7 0 1 0 8 1v14zm0 1A8 8 0 1 1 8 0a8 8 0 0 1 0 16z" />
    </symbol>
    <symbol id="moon-stars-fill" viewBox="0 0 16 16">
      <path
        d="M6 .278a.768.768 0 0 1 .08.858 7.208 7.208 0 0 0-.878 3.46c0 4.021 3.278 7.277 7.318 7.277.527 0 1.04-.055 1.533-.16a.787.787 0 0 1 .81.316.733.733 0 0 1-.031.893A8.349 8.349 0 0 1 8.344 16C3.734 16 0 12.286 0 7.71 0 4.266 2.114 1.312 5.124.06A.752.752 0 0 1 6 .278z" />
      <path
        d="M10.794 3.148a.217.217 0 0 1 .412 0l.387 1.162c.173.518.579.924 1.097 1.097l1.162.387a.217.217 0 0 1 0 .412l-1.162.387a1.734 1.734 0 0 0-1.097 1.097l-.387 1.162a.217.217 0 0 1-.412 0l-.387-1.162A1.734 1.734 0 0 0 9.31 6.593l-1.162-.387a.217.217 0 0 1 0-.412l1.162-.387a1.734 1.734 0 0 0 1.097-1.097l.387-1.162zM13.863.099a.145.145 0 0 1 .274 0l.258.774c.115.346.386.617.732.732l.774.258a.145.145 0 0 1 0 .274l-.774.258a1.156 1.156 0 0 0-.732.732l-.258.774a.145.145 0 0 1-.274 0l-.258-.774a1.156 1.156 0 0 0-.732-.732l-.774-.258a.145.145 0 0 1 0-.274l.774-.258c.346-.115.617-.386.732-.732L13.863.1z" />
    </symbol>
    <symbol id="sun-fill" viewBox="0 0 16 16">
      <path
        d="M8 12a4 4 0 1 0 0-8 4 4 0 0 0 0 8zM8 0a.5.5 0 0 1 .5.5v2a.5.5 0 0 1-1 0v-2A.5.5 0 0 1 8 0zm0 13a.5.5 0 0 1 .5.5v2a.5.5 0 0 1-1 0v-2A.5.5 0 0 1 8 13zm8-5a.5.5 0 0 1-.5.5h-2a.5.5 0 0 1 0-1h2a.5.5 0 0 1 .5.5zM3 8a.5.5 0 0 1-.5.5h-2a.5.5 0 0 1 0-1h2A.5.5 0 0 1 3 8zm10.657-5.657a.5.5 0 0 1 0 .707l-1.414 1.415a.5.5 0 1 1-.707-.708l1.414-1.414a.5.5 0 0 1 .707 0zm-9.193 9.193a.5.5 0 0 1 0 .707L3.05 13.657a.5.5 0 0 1-.707-.707l1.414-1.414a.5.5 0 0 1 .707 0zm9.193 2.121a.5.5 0 0 1-.707 0l-1.414-1.414a.5.5 0 0 1 .707-.707l1.414 1.414a.5.5 0 0 1 0 .707zM4.464 4.465a.5.5 0 0 1-.707 0L2.343 3.05a.5.5 0 1 1 .707-.707l1.414 1.414a.5.5 0 0 1 0 .708z" />
    </symbol>
  </svg>

  <div class="dropdown position-fixed bottom-0 end-0 mb-3 me-3 bd-mode-toggle">
    <button class="btn btn-bd-primary py-2 dropdown-toggle d-flex align-items-center" id="bd-theme" type="button"
      aria-expanded="false" data-bs-toggle="dropdown" aria-label="Toggle theme (auto)">
      <svg class="bi my-1 theme-icon-active" width="1em" height="1em">
        <use href="#circle-half"></use>
      </svg>
      <span class="visually-hidden" id="bd-theme-text">Toggle theme</span>
    </button>
    <ul class="dropdown-menu dropdown-menu-end shadow" aria-labelledby="bd-theme-text">
      <li>
        <button type="button" class="dropdown-item d-flex align-items-center" data-bs-theme-value="light"
          aria-pressed="false">
          <svg class="bi me-2 opacity-50" width="1em" height="1em">
            <use href="#sun-fill"></use>
          </svg>
          Light
          <svg class="bi ms-auto d-none" width="1em" height="1em">
            <use href="#check2"></use>
          </svg>
        </button>
      </li>
      <li>
        <button type="button" class="dropdown-item d-flex align-items-center" data-bs-theme-value="dark"
          aria-pressed="false">
          <svg class="bi me-2 opacity-50" width="1em" height="1em">
            <use href="#moon-stars-fill"></use>
          </svg>
          Dark
          <svg class="bi ms-auto d-none" width="1em" height="1em">
            <use href="#check2"></use>
          </svg>
        </button>
      </li>
      <li>
        <button type="button" class="dropdown-item d-flex align-items-center active" data-bs-theme-value="auto"
          aria-pressed="true">
          <svg class="bi me-2 opacity-50" width="1em" height="1em">
            <use href="#circle-half"></use>
          </svg>
          Auto
          <svg class="bi ms-auto d-none" width="1em" height="1em">
            <use href="#check2"></use>
          </svg>
        </button>
      </li>
    </ul>
  </div>


  <header data-bs-theme="dark">
    <div class="text-center sticky-top row bg-success"  style="transition:transform 3s ease-in;">
      <div class="col-2"><img src="img/vlog.png" alt="" style="width: 80px;height: 80px;border-radius: 50%;"></div>
      <div class="col-8 mt-3 h1">VIRUNGA <span class="text-light">Express</span></div>
      <div class="col-2"><a href="Admin/index.html" class="mt-4 btn btn-success" data-bs-toggle="offcanvas" 
        data-bs-target="#signinoffcanvas" aria-controls="offcanvasScrolling">Admin</a></div>
    </div>
    <nav class="navbar navbar-expand-md justify-content-center pcolor">
      <div class="container-fluid">
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse"
          aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="col-4"></div>
        <div class="collapse navbar-collapse col-4" id="navbarCollapse">
          <ul class="navbar-nav me-auto mb-2 mb-md-0">
            <li class="nav-item">
              <a class="nav-link" href="#aboutus">About-us</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#services">Services</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#staff">Staff</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#contacts">Contact-us</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" data-bs-toggle="modal" href="#bookyourticketnowmodal">reserve a Ticket</a>
            </li>
            <li class="nav-item">
              <a class="nav-link text-warning" data-bs-toggle="modal" href="#confirmyourticketnowmodal">Confirm a Ticket</a>
            </li>
          </ul>
        </div>
      </div>
    </nav>


    <div id="myCarousel" class="carousel slide mb-6" data-bs-ride="carousel">
      <div class="carousel-indicators">
        <button type="button" data-bs-target="#myCarousel" data-bs-slide-to="0" class="active" aria-current="true"
          aria-label="Slide 1"></button>
        <button type="button" data-bs-target="#myCarousel" data-bs-slide-to="1" aria-label="Slide 2"></button>
        <button type="button" data-bs-target="#myCarousel" data-bs-slide-to="2" aria-label="Slide 3"></button>
      </div>
      <div class="carousel-inner">
        <div class="carousel-item active">
          <img src="img/v2.jpg" alt="" style="width: 100%;height: 100%;">
          <div class="container">
            <div class="carousel-caption text-start">
              <h1 class="pic1an1">Online ticket reservation.</h1>
              <p class="opacity-75 pic1an2">Experience the ultimate in comfort and convenience with our transport services</p>
              <p><a class="btn btn-lg btn-success" data-bs-toggle="modal"
              href="#confirmyourticketnowmodal" style="background:#171a97db;">Pay your reserved ticket</a></p>
            </div>
          </div>
        </div>
        <div class="carousel-item">
          <img src="img/v1.jpg" alt="" style="width: 100%;height: 100%;">
          <div class="container">
            <div class="carousel-caption">
              <h1 class="pic2an1">Money transfer services</h1>
              <p class="pic2an2">Transfer money instantly and securely with our trusted money transfer services.</p>
              <p><a class="btn btn-lg btn-success" data-bs-toggle="modal"
              href="#bookyourticketnowmodal" style="background:#171a97db;">reserve now</a></p>
            </div>
          </div>
        </div>
        <div class="carousel-item">
          <img src="img/v3.jpg" alt="" style="width: 100%;height: 100%;">
          <div class="container">
            <div class="carousel-caption text-end">
              <h1 class="pic3an1">Courier express services.</h1>
              <p class="pic3an2">Send your packages with confidence using our fast and secure courier services.</p>
              <p><a class="btn btn-lg btn-success" data-bs-toggle="modal"
              href="#bookyourticketnowmodal" style="background:#171a97db;">Reserve yours</a></p>
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

  </header>

  <main class="text-muted">

    <!-- Marketing messaging and featurettes
  ================================================== -->
    <!-- Wrap the rest of the page in another container to center all the content. -->

    <div class="container marketing">
<a name="aboutus">
      <!-- ABOUT US ROW -->
      <div class="px-4 my-5 text-center">
        <div class="col-lg-12 mx-auto">
          <p class="lead mb-4 hover">Virunga Express bus online booking made easy. Virunga Express Ltd.
            Started activities on 8th August, 2001, created by Niyitegeka Bonaventure a young entrepreneur just
            twenty-five years old,
            inspired by a similar existing bus company “Volcano Express” when he was at National Rwanda University.
            Virunga Express bus online bus ticket booking saving you money and time.</p>
          <div class="d-grid gap-2 d-sm-flex justify-content-sm-center">
            <button type="button" class="btn btn-success btn-lg px-5 p-3 text-warning hover" aria-current="page" data-bs-toggle="modal"
              data-bs-target="#bookyourticketnowmodal">Book Your Ticket Now!</button>
              <button type="button" class="btn btn-warning btn-lg px-5 p-3 text-success hover" aria-current="page" data-bs-toggle="modal"
              data-bs-target="#confirmyourticketnowmodal">Confirm your ticket</button>
          </div>
        </div>
      </div>
      <!-- /.row  -->
  </a>

  <a name="services">
      <!--  SERVICE ROW -->
      <div class="container px-4" id="featured-3">
        <div class="row g-4 py-5 row-cols-1 row-cols-lg-3">
          <div class="feature col">
            <div
              class="feature-icon d-inline-flex align-items-center justify-content-center bg-gradient fs-2 mb-3">
              <img src="img/b1.png" class="sp1" height="200px" width="100%" alt="">
            </div>
            <h3 class="fs-3">Transport services</h3>
            <p class="hover">Experience the ultimate in comfort and convenience with our transport services.
              Whether you're commuting daily or planning a special trip, we ensure safe, reliable, and affordable
              transportation.
              Book your ride now and travel with peace of mind,
              knowing that our 24/7 customer support is always there to assist you.</p>
          </div>
          <div class="feature col">
            <div
              class="feature-icon d-inline-flex align-items-center justify-content-center bg-gradient fs-2 mb-3">
              <img src="img/c1.jpg" class="sp2" height="200px" width="100%" alt="">
            </div>
            <h3 class="fs-3">Courier express services</h3>
            <p class="hover">Send your packages with confidence using our fast and secure courier services. We offer real-time
              tracking,
              so you always know where your shipment is. With our door-to-door delivery, your parcels are handled with
              care and delivered efficiently.
              Trust us to get your items to their destination quickly and safely.</p>
          </div>
          <div class="feature col">
            <div
              class="feature-icon d-inline-flex align-items-center justify-content-center bg-gradient fs-2 mb-3">
              <img src="img/m1.jpg" class="sp3" height="200px" width="100%" alt="">
            </div>
            <h3 class="fs-3">Money transfer services</h3>
            <p class="hover">Transfer money instantly and securely with our trusted money transfer services.
              Enjoy the lowest fees and competitive rates, making it easier to send money to loved ones worldwide.
              Our service is available 24/7, ensuring you can transfer funds anytime, anywhere.
              Join millions of satisfied customers who rely on us for their money transfer needs.</p>
          </div>
        </div>
      </div>
      <!--  /.row  -->      


      <!--  MOTTO ROW -->
      <div class="container px-4" id="featured-3">
        <div class="row">
          <div class="feature h1 text-muted col-12 border-bottom text-center p-3 momo"
            style="text-align: center;font-size: 160%;">
            <b>Click button below to Confirm your ticket by worth it payment!</b>
          </div>
          <div class="d-grid gap-2 d-sm-flex justify-content-sm-center">
            <button type="button" class="btn btn-warning text-success px-4 p-3" aria-current="page" data-bs-toggle="modal"
              data-bs-target="#confirmyourticketnowmodal"><b>CONFIRM YOUR TICKECT</b> </button>
          </div>
        </div>
      </div>
      <!--  /.row  -->
  </a>
  
  <a name="staff">

      <!-- STAFF ROW -->
      <div class="row py-5">
        <div class="col-lg-4">
          <svg class="bd-placeholder-img rounded-circle" width="140" height="140" xmlns="http://www.w3.org/2000/svg"
            role="img" aria-label="Placeholder" preserveAspectRatio="xMidYMid slice" focusable="false">
            <title>Placeholder</title>
            <rect width="100%" height="100%" fill="var(--bs-secondary-color)" />
          </svg>
          <h2 class="fw-normal">CEO</h2>
          <p class="hover">Some representative placeholder content for the three columns of text below the carousel. This is the first
            column.</p>
          <p><a class="btn btn-secondary" href="#">View details &raquo;</a></p>
        </div><!-- /.col-lg-4 -->
        <div class="col-lg-4">
          <svg class="bd-placeholder-img rounded-circle" width="140" height="140" xmlns="http://www.w3.org/2000/svg"
            role="img" aria-label="Placeholder" preserveAspectRatio="xMidYMid slice" focusable="false">
            <title>Placeholder</title>
            <rect width="100%" height="100%" fill="var(--bs-secondary-color)" />
          </svg>
          <h2 class="fw-normal">Customer</h2>
          <p class="hover">Another exciting bit of representative placeholder content. This time, we've moved on to the second column.
          </p>
          <p><a class="btn btn-secondary" href="#">View details &raquo;</a></p>
        </div><!-- /.col-lg-4 -->
        <div class="col-lg-4">
          <svg class="bd-placeholder-img rounded-circle" width="140" height="140" xmlns="http://www.w3.org/2000/svg"
            role="img" aria-label="Placeholder" preserveAspectRatio="xMidYMid slice" focusable="false">
            <title>Placeholder</title>
            <rect width="100%" height="100%" fill="var(--bs-secondary-color)" />
          </svg>
          <h2 class="fw-normal">HR</h2>
          <p class="hover">And lastly this, the third column of representative placeholder content.</p>
          <p><a class="btn btn-secondary" href="#">View details &raquo;</a></p>
        </div><!-- /.col-lg-4 -->
      </div><!-- /.row -->

  </a>



  <a name="contacts">
      <!-- CONTACTS ROW -->

      <br><br>
      <div class="row featurette">
        <div class="col-md-7">
          <h4 class="featurette-heading hover text-center">And here,reach out to us. <span
              class="text-body-secondary">contacts.</span></h4>
          <div class="row">
              <div class="col-6">
                <p class="lead hover"> <span class="text-success"> <b>Here we are</b> </span><br>
                Virunga Busines Groupe <br>
                P.O.Box: 121 Musanze <br>
                Rwanda
               </p>
              </div>
              <div class="col-6">
                <form method="POST" action="../server/sendcomment.php">
                   <input type="text" name="commentername" placeholder="Enter your name" required><br><br>
                   <textarea name="comment" cols="24" class="" required></textarea><br>
                   <input type="submit" name="sendcommentbtn" value="SEND">
                </form>
              </div>
          </div>
          
          
        </div>
        <div class="col-md-5" style="height: 400px;">
          <img src="img/map.png" height="100%" width="100%" alt="">
        </div>
      </div>

      <hr class="featurette-divider">

      <!-- /END THE FEATURETTES -->


  </a>      

    </div><!-- /.container -->


    <!-- FOOTER -->

    <div class="container">
      <footer class="py-5">
        <div class="row">
          <div class="col-6 col-md-2 mb-3">
            <ul class="nav flex-column">
              <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-body-secondary">Twitter</a></li>
              <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-body-secondary">Facebook</a></li>
              <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-body-secondary">Instagram</a></li>
            </ul>
          </div>

          <div class="col-6 col-md-2 mb-3">
            <ul class="nav flex-column">
              <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-body-secondary">Home</a></li>
              <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-body-secondary">About-us</a></li>
              <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-body-secondary">Services</a></li>
            </ul>
          </div>

          <div class="col-6 col-md-2 mb-3">
            <ul class="nav flex-column">
              <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-body-secondary">Staff</a></li>
              <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-body-secondary">Contact-us</a></li>
              <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-body-secondary">Pricing</a></li>
            </ul>
          </div>

          <div class="col-md-5 offset-md-1 mb-3">
          <img src="img/vlog.png" height="80px" width="60%" alt="" style="margin-left:15%;"> <br>
          <p class="text-center"><b>Travel, Deliver, Transfer – All at Your Fingertips</b></p>
          </div>
        </div>

        <div class="d-flex flex-column py-4 my-4 border-top">
          <p class="text-center">&copy; 2024 Virunga express. All rights reserved.</p>
        </div>
      </footer>
    </div>
  </main>
  <script src="../assets/dist/js/bootstrap.bundle.min.js"></script>

</body>




<div class="modal modal-md fade text-muted" id="confirmyourticketnowmodal" data-bs-backdrop="static"
    data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content p-4">
        <div class="modal-header">
          <h1 class="modal-title fs-5 text-muted text-center" id="staticBackdropLabel">Enter phone number for payment</h1>
          <button type="button" class="btn-close text-danger" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body justify-items-center">
          <form action="../server/payticket.php" method="POST">
          <div class="input-group mb-3">
          <span class="input-group-text">TID</span>
          <input type="number" name="tid" class="form-control" placeholder="Ticket ID" required>
        </div>
          <div class="input-group mb-3">
          <span class="input-group-text">📞</span>
          <input type="number" name="phonenumber" class="form-control" placeholder="Phone number" required>
          <button type="submit" name="payticket" class="input-group-text">✅</button>
        </div>
          </form>

          <div class="alert alert-warning text-center">
          ⚠ Use a valid ticket id, <br> <b>YOU WILL GET A CONFIRMATION SMS</b>
          </div>
        </div>
      </div>
    </div>
</div>






<form class="row g-3 needs-validation" method="POST" action="../server/reserveticket.php" novalidate>
  <div class="modal modal-lg fade text-muted" id="bookyourticketnowmodal" data-bs-backdrop="static"
    data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
    <div class="modal-dialog modal-fullscreen">
      <div class="modal-content p-4">
        <div class="modal-header">
          <h1 class="modal-title fs-5 text-muted text-center" id="staticBackdropLabel">Fill the below form to book your
            tickect!</h1>
          <button type="button" class="btn-close text-danger" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body justify-items-center">
          <div class="alert alert-success text-center">
          ℹ Welcome to reservation form! select route and destination, each route is assigned with fairly price.
           Fill your required details on right side form.
           <br> <b class="text-warning">YOUR TICKET WILL BE VALID AFTER PAYMENT.</b>
          </div><br>
          <div class="row">
            <div class="col-md-5 p-5 shadow-lg" style="">
              <div class="text-center h3 text-danger">AVAILABLE ROUTES AND DESTINATIONS</div><br>
              <div type="button" id="route1" onclick="route1click()" class="alert alert-dark text-center route" style="opacity: 0.6;">Kigali to Rubavu every 30 minutes 3000 RWF</div>
              <div type="button" id="route2" onclick="route2click()" class="alert alert-dark text-center route" style="opacity: 0.8;">Kigali to Gicumbi every 30 minutes 1000 RWF</div>
              <div type="button" id="route3" onclick="route3click()" class="alert alert-dark text-center route" style="opacity: 0.8;">Kigali to Musanze every 30 minutes 1700 RWF</div>
              <div type="button" id="route4" onclick="route4click()" class="alert alert-dark text-center route" style="opacity: 0.8;">Rubavu to Kigali every 30 minutes 3000 RWF</div>
              <div type="button" id="route5" onclick="route5click()" class="alert alert-dark text-center route" style="opacity: 0.8;">Gicumbi to Kigali every 30 minutes 1000 RWF</div>
              <div type="button" id="route6" onclick="route6click()" class="alert alert-dark text-center route" style="opacity: 0.8;">Musanze to Kigali every 30 minutes 1700 RWF</div>
              <div type="button" id="route7" onclick="route7click()" class="alert alert-dark text-center route" style="opacity: 0.8;">Musanze to Rubavu every 1 hour 1100 RWF</div>
              <div type="button" id="route8" onclick="route8click()" class="alert alert-dark text-center route" style="opacity: 0.8;">Rubavu to Musanze every 1 hour 1100 RWF</div>
            </div>
            <div class="col-md-7 p-5">
              
                <div class="col-md-12 mt-2" hidden>
                  <label for="validationCustom01" class="form-label">Route</label>
                  <input type="text" name="Route" id="routefield">
                  <input type="text" name="Price" id="pricefield">
                  <div class="valid-feedback">
                    Looks good!
                  </div>
                </div>
                
                <div class="col-md-12 mt-2">
                  <label for="validationCustom01" class="form-label">First name</label>
                  <input type="text" name="Firstname" id="firstnamefield" class="form-control" id="validationCustom01" required />
                  <div class="valid-feedback">
                    Looks good!
                  </div>
                </div>
                <div class="col-md-12 mt-2">
                  <label for="validationCustom02" class="form-label">Last name</label>
                  <input type="text" name="Lastname" id="lastnamefield" class="form-control" id="validationCustom02" required />
                  <div class="valid-feedback">
                    Looks good!
                  </div>
                </div>
                <div class="col-md-12 mt-2">
                  <label for="validationCustomUsername" class="form-label">Travel date</label>
                    <input type="date" name="Traveldate" id="traveldatefield" class="form-control" id="validationCustomUsername"
                      aria-describedby="inputGroupPrepend" required />
                    <div class="invalid-feedback">
                      Please enter date.
                    </div>
                </div>
                <div class="col-md-12 mt-2">
                  <label for="validationCustom03" class="form-label">Travel time</label>
                  <select name="Traveltime" class="form-control" id="traveltimefield">
                    <option></option>
                  </select>
                  <div class="invalid-feedback">
                    Please provide a valid time.
                  </div>
                </div>
                <div class="col-md-12 mt-2">
                  <label for="validationCustom05" class="form-label">How many KGs if with a luggage</label><br>
                  <input type="number" name="Ticketid" id="ticketidfield" class="form-control" value="0">
                  <div class="invalid-feedback">
                    Please provide a valid kg.
                  </div>
                </div>
                <div class="col-md-12 mt-2">
                  <label for="validationCustom05" class="form-label">Telephone no for payment</label>
                  <input type="number" name="Telephoneno" id="telephonenofield" class="form-control" required/>
                  <div class="invalid-feedback">
                    Please provide a valid zip.
                  </div>
                </div>
                <div class="col-12">
                  <a class="btn btn-success mt-3" type="" onclick="submitticket()" aria-current="page" data-bs-toggle="modal"
                    href="#conditionagreementmodal"><b>RESERVE</b></a>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>


  <div class="modal modal-lg fade text-muted" id="conditionagreementmodal" data-bs-backdrop="static"
    data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content p-4">
        <div class="modal-header text-center">
          <h1 class="modal-title fs-5 text-muted text-center" id="staticBackdropLabel">Confirm your details</h1>
          <button type="button" class="btn-close text-danger" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body justify-items-center">
          <img src="img/vlog.png" alt="" style="width: 40%;height: 100px; margin-left: 30%;"><br><br>
            <div class="alert alert-success text-center">Thank you for reserving ticket with us!
            It's our honor to serve you.</div>
            <div class="p-4" style="margin-left:30%">
            Route:  <span id="routedetails" style="font-weight: bold;"></span> <br>
            Passenger: <span id="passengerdetails" style="font-weight: bold;"></span><br>
            Travel Date: On <span id="traveldatedetails" style="font-weight: bold;"></span>
             at  <span id="traveltimedetails" style="font-weight: bold;"></span><br>
            Ticket ID <span id="ticketid" style="font-weight: bold;"></span> <br>
            Price<span id="pricedetails" style="font-weight: bold;"></span> <br>
            Phone:<span id="telephonenodetails" style="font-weight: bold;"></span> <br>
            </div>

          <div class="alert alert-warning text-center"><span class="h1">❗</span> Your tickect will be confirmed after payment.<br></div>
          <input type="submit" name="reserveticket" value="I confirm">
        </div>
      </div>
    </div>
  </div>

</form>

<div class="offcanvas offcanvas-end" data-bs-scroll="true" data-bs-backdrop="false" tabindex="-1" id="signinoffcanvas" aria-labelledby="offcanvasScrollingLabel">
  <div class="offcanvas-header p-color text-light p-4">
    <h5 class="offcanvas-title" id="offcanvasScrollingLabel">Sign in here</h5>
    <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
  </div>
  <div class="offcanvas-body">
    <br />
    <form method="POST" action="../server/login.php">
      <center><img class="mb-2" src="img/vlog.png" alt="" width="130" height="90" /></center>

      <div class="form-floating">
        <input type="text" name="username" class="form-control" id="floatingInput" placeholder="name@example.com" required/>
        <label for="floatingInput" class="text-muted">Username</label>
      </div><br />
      <div class="form-floating">
        <input type="password" name="password" class="form-control" id="floatingPassword" placeholder="Password" required/>
        <label for="floatingPassword" class="text-muted">Password</label>
      </div><br><br>
      <input type="submit" name="submit" value="Login" class="btn btn-success text-muted w-100 py-2">
    </form>
  </div>
</div>

<script>
function route1click() {
  document.querySelectorAll('.route').forEach((element) => {
        element.style.backgroundColor = '';
        element.style.color = '';
    });
  document.getElementById('route1').style.backgroundColor ='green';
  document.getElementById('route1').style.color ='white';
  document.getElementById('routefield').value ='Kigali to Rubavu';
  document.getElementById('pricefield').value ='3000';
}
function route2click() {
  document.querySelectorAll('.route').forEach((element) => {
        element.style.backgroundColor = '';
        element.style.color = '';
    });
  document.getElementById('route2').style.backgroundColor ='green';
  document.getElementById('route2').style.color ='white';
  document.getElementById('routefield').value ='Kigali to Gicumbi';
  document.getElementById('pricefield').value ='1000'; 
}
function route3click() {
  document.querySelectorAll('.route').forEach((element) => {
        element.style.backgroundColor = '';
        element.style.color = '';
    });
  document.getElementById('route3').style.backgroundColor ='green';
  document.getElementById('route3').style.color ='white';
  document.getElementById('routefield').value ='Kigali to Musanze';
  document.getElementById('pricefield').value ='1700'; 
}
function route4click() {
  document.querySelectorAll('.route').forEach((element) => {
        element.style.backgroundColor = '';
        element.style.color = '';
    });
  document.getElementById('route4').style.backgroundColor ='green';
  document.getElementById('route4').style.color ='white';
  document.getElementById('routefield').value ='Rubavu to Kigali';
  document.getElementById('pricefield').value ='3000'; 
}
function route5click() {
  document.querySelectorAll('.route').forEach((element) => {
        element.style.backgroundColor = '';
        element.style.color = '';
    });
  document.getElementById('route5').style.backgroundColor ='green';
  document.getElementById('route5').style.color ='white';
  document.getElementById('routefield').value ='Gicumbi to Kigali';
  document.getElementById('pricefield').value ='1000';
}
function route6click() {
  document.querySelectorAll('.route').forEach((element) => {
        element.style.backgroundColor = '';
        element.style.color = '';
    });
  document.getElementById('route6').style.backgroundColor ='green';
  document.getElementById('route6').style.color ='white';
  document.getElementById('routefield').value ='Musanze to Kigali';
  document.getElementById('pricefield').value ='1700'; 
}
function route7click() {
  document.querySelectorAll('.route').forEach((element) => {
        element.style.backgroundColor = '';
        element.style.color = '';
    });
  document.getElementById('route7').style.backgroundColor ='green';
  document.getElementById('route7').style.color ='white';
  document.getElementById('routefield').value ='Musanze to Rubavu';
  document.getElementById('pricefield').value ='1100';
}
function route8click() {
  document.querySelectorAll('.route').forEach((element) => {
        element.style.backgroundColor = '';
        element.style.color = '';
    });
  document.getElementById('route8').style.backgroundColor ='green';
  document.getElementById('route8').style.color ='white';
  document.getElementById('routefield').value ='Rubavu to Musanze';
  document.getElementById('pricefield').value ='1100'; 
}

function submitticket() {
  document.getElementById('routedetails').innerHTML = document.getElementById('routefield').value;
  document.getElementById('pricedetails').innerHTML = document.getElementById('pricefield').value + ' RWF';
  document.getElementById('passengerdetails').innerHTML = document.getElementById('firstnamefield').value +" "+ document.getElementById('lastnamefield').value;
  document.getElementById('traveldatedetails').innerHTML = document.getElementById('traveldatefield').value;
  document.getElementById('traveltimedetails').innerHTML = document.getElementById('traveltimefield').value;
  const ti = Math.floor(Math.random() * (20000 - 10000) + 1000000);
  document.getElementById('ticketid').innerHTML = ti;
  document.getElementById('ticketidfield').value =ti;
  document.getElementById('telephonenodetails').innerHTML = document.getElementById('telephonenofield').value;
}
</script>


<script>
    function generateTimeOptions() {
        const select = document.getElementById('traveltimefield');
        const startTime = 6; // Start time: 6:00 AM
        const endTime = 19; // End time: 19:00 or 7:00 PM
        const increment = 30; // Increment in minutes

        for (let hour = startTime; hour < endTime; hour++) {
            for (let minute = 0; minute < 60; minute += increment) {
                const timeValue = new Date();
                timeValue.setHours(hour);
                timeValue.setMinutes(minute);

                const timeString = timeValue.toTimeString().substring(0, 5); // HH:MM format
                const option = document.createElement('option');
                option.value = timeString;
                option.textContent = timeString;
                select.appendChild(option);
            }
        }

        // Add the last option for 19:00
        const option = document.createElement('option');
        option.value = "19:00";
        option.textContent = "19:00";
        select.appendChild(option);
    }

    // Generate the time options when the page loads
    window.onload = generateTimeOptions;
</script>
</html>