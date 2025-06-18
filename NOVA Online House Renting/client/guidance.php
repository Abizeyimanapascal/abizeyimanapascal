<?php session_start(); ?>
<!doctype html>
<html lang="en" data-bs-theme="auto">

<head>
    <script src="../assets/js/color-modes.js"></script>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
    <meta name="generator" content="Hugo 0.122.0">
    <title>NOVA</title>
    <link rel="icon" href="img/logo.png">

    <link rel="canonical" href="https://getbootstrap.com/docs/5.3/examples/footers/">

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@docsearch/css@3">

    <link href="../assets/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="style/carousel1.css">

    <style>
        h1, h2 {
            color: #5a67d8;
            font-size:20px;
        }
        .guide-section {
            margin-bottom: 20px;
            padding: 15px;
            background-color: #fff;
            border: 1px solid #e2e8f0;
            border-radius: 8px;
        }
        ol {
            margin: 10px 0;
            padding-left: 20px;
        }
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


    <header data-bs-theme="bg-light">
        <div class="text-center sticky-top row bg-light text-muted shadow" style="transition:transform 3s ease-in;">
            <div class="col-2 h3">
              <a class="nav-link text-primary" href="index.php"><img src="img/logo.png" alt=""width="100%"></a>
            </div>
            <div class="col-8">
                <nav class="navbar navbar-expand-md">
                    <div class="container-fluid">
                        <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                            data-bs-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false"
                            aria-label="Toggle navigation">
                            <span class="navbar-toggler-icon"></span>
                        </button>
                        <div class="collapse navbar-collapse col-12 pt-2" id="navbarCollapse">
                            <ul class="navbar-nav me-auto mb-2 mb-md-0 justify-content-center">
                                <li class="nav-item">
                                    <a class="nav-link" href="index.php?search">Home</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="aboutus.php">About Us</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="services.php">Our Services</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="uploadhouse.php">Upload a House</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </nav>

            </div>
            <div class="col-2"><a class="mt-3 btn btn-primary" data-bs-toggle="offcanvas"
                    data-bs-target="#signinoffcanvas" aria-controls="offcanvasScrolling"><b>Admin</b></a>
            </div>
        </div>

    </header>

    <main class="text-muted">

        <!-- Marketing messaging and featurettes
  ================================================== -->
        <!-- Wrap the rest of the page in another container to center all the content. -->

        <div class="container marketing">
            <br>

            <h1>Step-by-Step Client Guidance</h1>

<div class="guide-section">
    <h2>1. Getting Started: How to Use Our Platform</h2>
    <ol>
        <li>Go to our homepage and browse available rental options.</li>
        <li>Use search filters to refine listings based on location, property type, and price range.</li>
        <li>Click on a listing to view essential information, including a primary image and brief property details.</li>
        <li>If interested, click on “Inquire” and fill out a short contact form to connect with us.</li>
    </ol>
</div>

<div class="guide-section">
    <h2>2. Finding the Perfect Home: Choosing Between Houses, Apartments, and Condos</h2>
    <ol>
        <li>Read our descriptions for each property type to understand their unique features.</li>
        <li>Consider your needs, including space, amenities, and location, and compare these with what each property type offers.</li>
        <li>Decide which type best suits your lifestyle and narrow down your search accordingly.</li>
    </ol>
</div>

<div class="guide-section">
    <h2>3. Budgeting for Your Rental: Calculating Rent, Utilities, and Other Costs</h2>
    <ol>
        <li>Calculate your monthly rent budget based on income, ideally no more than 30% of monthly income.</li>
        <li>Consider additional costs like utilities, maintenance, and insurance (if applicable).</li>
        <li>Use this total as a guideline when reviewing listings to ensure you’re within budget.</li>
    </ol>
</div>

<div class="guide-section">
    <h2>4. Submitting an Inquiry: What to Expect Next</h2>
    <ol>
        <li>After filling out the contact form, expect a response from our team within 24 hours.</li>
        <li>We’ll provide more details about the property, answer any questions, and offer options for viewing the home.</li>
        <li>Once you’re ready, we’ll discuss further steps to proceed with securing the property.</li>
    </ol>
</div>

<div class="guide-section">
    <h2>5. Preparing for Your Rental Move-In</h2>
    <ol>
        <li>Arrange your necessary documents, such as ID, income verification, and references, as needed.</li>
        <li>Plan for any required fees, such as a security deposit and the first month’s rent.</li>
        <li>Confirm your move-in date with us, and plan the logistics, including any needed movers and setting up utilities.</li>
    </ol>
</div>

<div class="guide-section">
    <h2>6. Understanding Your Lease Agreement</h2>
    <ol>
        <li>Review the lease document carefully to understand terms like rent due dates, maintenance responsibilities, and tenant rights.</li>
        <li>Ask our team about anything unclear or unfamiliar, so you’re well-informed before signing.</li>
        <li>Sign the lease and make initial payments as agreed, completing your journey to finding a new home.</li>
    </ol>
</div>

        </div><!-- /.container -->
    </main>


 <!-- FOOTER -->
 <br><br>
    <hr>
    <footer class="p-5  bg-dark text-light">
        <br><br>
        <div class="row">
            <div class="col-4 mb-3">
                <span class="text-warning h4">SeeIt, LoveIt, RentIt</span>
            </div>

            <div class="col-2 mb-3">
                <ul class="nav flex-column">
                    <li class="nav-item mb-2"><a href="index.php?search" class="nav-link p-0">Home</a></li>
                    <li class="nav-item mb-2"><a href="aboutus.php" class="nav-link p-0">About-us</a></li>
                    <li class="nav-item mb-2"><a href="services.php" class="nav-link p-0">Services</a></li>
                </ul>
            </div>


            <div class="col-2 mb-3">
            <ul class="nav flex-column">
                    <li class="nav-item mb-2"><a href="index.php?search" class="nav-link p-0">Home</a></li>
                    <li class="nav-item mb-2"><a href="aboutus.php" class="nav-link p-0">About-us</a></li>
                    <li class="nav-item mb-2"><a href="services.php" class="nav-link p-0">Services</a></li>
                </ul>
            </div>

            <div class="col-2 offset-md-1 mb-3">
                <img src="img/logo.png" height="80px" width="60%" alt="" style="margin-left:15%;"> <br>
            </div>
        </div>

        <div class="">
            <p class="text-center">&copy; 2024 NOVA. All rights reserved.</p>
        </div>
        <br><br>
    </footer>

    <script src="../assets/dist/js/bootstrap.bundle.min.js"></script>



    <script src="../assets/dist/js/bootstrap.bundle.min.js"></script>
    <script src="checkout/checkout.js"></script>
</body>

<div class="offcanvas offcanvas-end" data-bs-scroll="true" data-bs-backdrop="false" tabindex="-1" id="signinoffcanvas"
    aria-labelledby="offcanvasScrollingLabel">
    <div class="offcanvas-header p-color text-light p-4">
        <h5 class="offcanvas-title" id="offcanvasScrollingLabel">Sign in here</h5>
        <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
    </div>
    <div class="offcanvas-body">
        <br />
        <div class="form-floating">
                <div class="" id="adminlogin" role="tabpanel" aria-labelledby="nav-profile-tab"
                    tabindex="0">
                    <br><br><br>
                    <form method="POST" action="index.php">
                        <div class="form-floating">
                            <input type="password" name="Password" class="form-control" id="floatingPassword"
                                placeholder="Password" required />
                            <label for="floatingPassword" class="text-muted"><img src="feather/unlock.svg"> password</label>
                        </div><br><br>
                        <input type="submit" name="adminsubmitbtn" value="Login" class="btn btn-primary w-100 py-2">
                        <?php
                        if (isset($_POST['adminsubmitbtn'])){
                            error_reporting(E_ALL);
                            ini_set('display_errors', 1);
                            $con = mysqli_connect("localhost","root","","db");
                            $sql = "SELECT * FROM `admin` WHERE `password` = '$_REQUEST[Password]'";
                            $query = mysqli_query($con, $sql)or die(mysqli_error());
                            if (mysqli_num_rows($query) >=1) {
                                $_SESSION['password'] = $_REQUEST['Password'];
                                echo "<script>alert('Login success');window.location='Admin/account.php';</script>";
                                exit();
                            } else {
                                echo "<script>alert('Login failed');window.location='index.php';</script>";
                            }  
                        }
                        ?>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

</html>