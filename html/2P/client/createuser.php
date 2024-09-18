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
    <title>E-market</title>
    <link rel="icon" href="img/logo.png">

    <link rel="canonical" href="https://getbootstrap.com/docs/5.3/examples/checkout/">



    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@docsearch/css@3">

    <link href="../assets/dist/css/bootstrap.min.css" rel="stylesheet">

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
    <link href="checkout/checkout.css" rel="stylesheet">
</head>

<body class="bg-body-tertiary text-muted">
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
        <div class="text-center fixed-top row bg-light text-muted shadow" style="transition:transform 3s ease-in;">
            <div class="col-2 pt-3 h3">
              <a class="nav-link text-primary" href="index.php"><img src="img/logo.png" alt=""width="80%"></a>
            </div>
            <div class="col-8">
                <nav class="navbar navbar-expand-md">
                    <div class="container-fluid">
                        <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                            data-bs-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false"
                            aria-label="Toggle navigation">
                            <span class="navbar-toggler-icon"></span>
                        </button>
                        <div class="collapse navbar-collapse col-12 pt-3" id="navbarCollapse">
                            <ul class="navbar-nav me-auto mb-2 mb-md-0 justify-content-center">

                                <li class="nav-item">
                                    <a class="nav-link" href="index.php">Home</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="index.php?#aboutus">About Us</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="index.php?#services">Services</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="index.php?#contacts">Contacts</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="index.php?#terms">Terms and Conditions</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </nav>

            </div>
            <div class="col-2"><a class="mt-3 btn btn-primary" data-bs-toggle="offcanvas"
                    data-bs-target="#signinoffcanvas" aria-controls="offcanvasScrolling"><b>Login Now</b></a>
            </div>
        </div>

    </header><br><br><br>


    <div class="container">
        <main>

            <div class="row g-5 py-5">
                <div class="col-md-5 col-lg-4 order-md-last">
                    <h4 class="d-flex justify-content-between align-items-center mb-3">
                        <span class="text-primary text-center"><img src="feather/muser.svg"></span>
                    </h4>
                    <ul class="">
                        <li class="list-group-item d-flex justify-content-between lh-sm">
                            <div>
                                <h6 class="my-0">Name</h6>
                                <small class="text-body-secondary namedetails"></small>
                            </div>
                        </li>
                        <li class="list-group-item d-flex justify-content-between lh-sm">
                            <div>
                                <h6 class="my-0">Email</h6>
                                <small class="text-body-secondary">pascal@pascal.com</small>
                            </div>
                        </li>
                        <li class="list-group-item d-flex justify-content-between lh-sm">
                            <div>
                                <h6 class="my-0">Password</h6>
                                <small class="text-body-secondary">ut0</small>
                            </div>
                        </li>
                        <li class="list-group-item d-flex justify-content-between">
                            <div>
                                <h6 class="my-0">Phone number</h6>
                                <small class="text-body-secondary">00000</small>
                            </div>
                        </li>
                    </ul>
                </div>
                <div class="col-md-7 col-lg-8">
                    <h4 class="mb-3">New Account</h4>
                    <form class="needs-validation" method="POST" action="createuser.php" novalidate>
                        <div class="row g-3">
                            <div class="col-sm-12">
                                <label for="firstName" class="form-label">Name</label>
                                <input type="text" name="Name" class="form-control" id="firstnamefield" onkeyup="firstnamefieldchange()" required>
                                <div class="invalid-feedback">
                                    Valid first name is required.
                                </div>
                            </div>


                            <div class="col-12">
                                <label for="username" class="form-label">Username</label>
                                <div class="input-group has-validation">
                                    <span class="input-group-text"><img src="feather/user.svg"></span>
                                    <input type="text" name="Username" class="form-control" id="username" placeholder="Username" required>
                                    <div class="invalid-feedback">
                                        Your username is required.
                                    </div>
                                </div>
                            </div>

                            <div class="col-12">
                                <label for="email" class="form-label">Email</label>
                                <input type="email" name="Email" class="form-control" id="email" placeholder="you@example.com" required>
                                <div class="invalid-feedback">
                                    Please enter a valid email address.
                                </div>
                            </div>

                            <div class="col-12">
                                <label for="address" class="form-label">Password</label>
                                <input type="password" name="Password" class="form-control" id="address" required>
                                <div class="invalid-feedback">
                                    Please enter your password.
                                </div>
                            </div>

                            <div class="col-12">
                                <label for="address" class="form-label">Confirm Password</label>
                                <input type="password" name="Password1" class="form-control" id="address" required>
                                <div class="invalid-feedback">
                                    Please confirm password.
                                </div>
                            </div>

                            <div class="col-md-3">
                                <label for="country" class="form-label">Country</label>
                                <input type="text" name="Country" class="form-control" id="country" placeholder="" required>
                                <div class="invalid-feedback">
                                    Please enter a valid country.
                                </div>
                            </div>

                            <div class="col-md-4">
                                <label for="state" class="form-label">State (Optional)</label>
                                <input type="text" name="State" class="form-control" id="province" placeholder="" required>
                                <div class="invalid-feedback">
                                    Please provide a valid State.
                                </div>
                            </div>

                            <div class="col-md-5">
                                <label for="zip" class="form-label">Adress</label>
                                <input type="text" name="Address" class="form-control" id="zip" placeholder="" required>
                                <div class="invalid-feedback">
                                    Address code required.
                                </div>
                            </div>
                        </div>

                        <hr class="my-4">

                        <div class="form-check">
                            <input type="checkbox" class="form-check-input" id="same-address" checked required>
                            <label class="form-check-label"  for="same-address">Shipping address is the same as my
                                billing information</label>
                        </div>

                        <hr class="my-4">

                        <h4 class="mb-3">Payment method</h4>

                        <div class="my-3">
                            <div class="form-check">
                                <input id="credit" name="paymentMethod" type="radio" class="form-check-input" checked
                                    required>
                                <label class="form-check-label" for="credit">MoMo</label>
                            </div>
                            <div class="form-check">
                                <input id="debit" name="paymentMethod" type="radio" class="form-check-input" disabled>
                                <label class="form-check-label" for="debit">Debit card</label>
                            </div>
                            <div class="form-check">
                                <input id="paypal" name="paymentMethod" type="radio" class="form-check-input" disabled>
                                <label class="form-check-label" for="paypal">PayPal</label>
                            </div>
                        </div>

                        <div class="row gy-3">
                            <div class="col-md-6">
                                <label for="cc-number" class="form-label">Phone number</label>
                                <input type="text" name="Phonenumber" class="form-control" id="cc-number" placeholder="" required>
                                <div class="invalid-feedback">
                                    Phone number is required
                                </div>
                            </div>

                            <div class="col-md-6">
                                <label for="cc-number" class="form-label">Re-Enter matching Phone number</label>
                                <input type="text" name="Phonenumber1" class="form-control" id="cc-number" placeholder="" required>
                                <div class="invalid-feedback">
                                    Confirm Phone number
                                </div>
                            </div>


                        </div>

                        <hr class="my-4">

                        <input class="w-100 btn btn-primary btn-lg" name="createusersubmitbtn" type="submit" value="Create">
                        <?php
                        if(isset($_POST['createusersubmitbtn'])){
                            error_reporting(E_ALL);
                            ini_set('display_errors', 1);
                            
                            $con = mysqli_connect("localhost","root","","emarket");
                            $NAME = $_POST['Name'];
                            $USERNAME = $_POST['Username'];
                            $EMAIL = $_POST['Email'];
                            $PASSWORD = $_POST['Password'];
                            $COUNTRY = $_POST['Country'];
                            $STATE = $_POST['State'];
                            $ADDRESS = $_POST['Address'];
                            $PHONENUMBER = $_POST['Phonenumber'];
                            
                                $sql = "INSERT INTO `user` (`name`, `username`, `email`, `password`, `country`, `state`, `address`, `phonenumber`)
                                 VALUES (
                                 '$NAME',
                                 '$USERNAME',
                                 '$EMAIL',
                                 '$PASSWORD',
                                 '$COUNTRY',
                                 '$STATE',
                                 '$ADDRESS',
                                 '$PHONENUMBER'
                                 )";
                            
                            if (mysqli_query($con, $sql)) {
                                    
                            echo "<script>alert('A/C Created');window.location='../client/index.php';</script>";
                                }else {
                                echo "<script>alert('A/C NOT Created !');window.location='account.php';</script>";
                            }
                            }
                        ?>
                    </form>
                </div>
            </div>
        </main>

    </div> <!-- /.container -->

    <!-- FOOTER -->
    <br><br>
    <hr>
    <footer class="p-5 pt-6 bg-dark text-light">
        <br><br>
        <div class="row">
            <div class="col-2 mb-3">
                <ul class="nav flex-column">
                    <li class="nav-item mb-2"><a href="#" class="nav-link p-0">Twitter</a></li>
                    <li class="nav-item mb-2"><a href="#" class="nav-link p-0">Facebook</a></li>
                    <li class="nav-item mb-2"><a href="#" class="nav-link p-0">Instagram</a></li>
                </ul>
            </div>

            <div class="col-2 mb-3">
                <ul class="nav flex-column">
                    <li class="nav-item mb-2"><a href="#" class="nav-link p-0">Home</a></li>
                    <li class="nav-item mb-2"><a href="#" class="nav-link p-0">About-us</a></li>
                    <li class="nav-item mb-2"><a href="#" class="nav-link p-0">Services</a></li>
                </ul>
            </div>

            <div class="col-2 mb-3">
                <ul class="nav flex-column">
                    <li class="nav-item mb-2"><a href="#" class="nav-link p-0">Staff</a></li>
                    <li class="nav-item mb-2"><a href="#" class="nav-link p-0">Contact-us</a></li>
                    <li class="nav-item mb-2"><a href="#" class="nav-link p-0">Pricing</a></li>
                </ul>
            </div>

            <div class="col-2 mb-3">
                <ul class="nav flex-column">
                    <li class="nav-item mb-2"><a href="#" class="nav-link p-0">Staff</a></li>
                    <li class="nav-item mb-2"><a href="#" class="nav-link p-0">Contact-us</a></li>
                    <li class="nav-item mb-2"><a href="#" class="nav-link p-0">Pricing</a></li>
                </ul>
            </div>

            <div class="col-2 offset-md-1 mb-3">
                <img src="img/vlog.png" height="80px" width="60%" alt="" style="margin-left:15%;"> <br>
            </div>
        </div>

        <div class="">
            <p class="text-center">&copy; 2024 E-market. All rights reserved.</p>
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

            <br><br><br>
            <form method="POST" >
                <div class="form-floating">
                    <input type="text" name="Username" class="form-control" id="floatingInput"
                        placeholder="name@example.com" required />
                    <label for="floatingInput" class="text-muted"><img src="feather/user.svg"> username</label>
                </div><br />
                <div class="form-floating">
                    <input type="password" name="Password" class="form-control" id="floatingPassword"
                        placeholder="Password" required />
                    <label for="floatingPassword" class="text-muted"><img src="feather/unlock.svg"> password</label>
                </div><br><br>
                <input type="submit" name="submitbtn" value="Login" class="btn btn-primary w-100 py-2">
                <?php
                    if (isset($_POST['submitbtn'])){
                        error_reporting(E_ALL);
                        ini_set('display_errors', 1);
                        $con = mysqli_connect("localhost","root","","emarket");
                        $sql = "SELECT * FROM `user` WHERE username = '$_REQUEST[Username]' AND `password` = '$_REQUEST[Password]'";
                        $query = mysqli_query($con, $sql)or die(mysqli_error());
                        if (mysqli_num_rows($query) >=1) {
                            $_SESSION['username'] = $_REQUEST['Username'];
                            echo "<script>alert('Login success');window.location='../client/account.php';</script>";
                            exit();
                        } else {
                            echo "<script>alert('Login failed');window.location='../server/userlogout.php';</script>";
                        }  
                    }
                ?>
            </form>

        </div>
    </div>
</div>





</html>