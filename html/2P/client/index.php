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

    <link rel="canonical" href="https://getbootstrap.com/docs/5.3/examples/footers/">

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@docsearch/css@3">

    <link href="../assets/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="style/carousel1.css">

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


    <header data-bs-theme="bg-light">
        <div class="text-center sticky-top row bg-light text-muted shadow" style="transition:transform 3s ease-in;">
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
                        <div class="collapse navbar-collapse col-12 pt-2" id="navbarCollapse">
                            <ul class="navbar-nav me-auto mb-2 mb-md-0 justify-content-center">

                                <li class="nav-item">
                                    <a class="nav-link" href="#signinoffcanvas" data-bs-toggle="offcanvas">All
                                        Products</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="#aboutus">About Us</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="#services">Services</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="#contacts">Contacts</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="#terms">Terms and Conditions</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </nav>

            </div>
            <div class="col-2"><a class="mt-3 btn btn-primary" data-bs-toggle="offcanvas"
                    data-bs-target="#signinoffcanvas" aria-controls="offcanvasScrolling"><b>My Account</b></a>
            </div>
        </div>

        <div id="myCarousel" class="carousel slide mb-6" data-bs-ride="carousel">
            <div class="carousel-indicators">
                <button type="button" data-bs-target="#myCarousel" data-bs-slide-to="0" class="active"
                    aria-current="true" aria-label="Slide 1"></button>
                <button type="button" data-bs-target="#myCarousel" data-bs-slide-to="1" aria-label="Slide 2"></button>
                <button type="button" data-bs-target="#myCarousel" data-bs-slide-to="2" aria-label="Slide 3"></button>
            </div>
            <div class="carousel-inner"
                style="background-image:url('img/b.jpg');background-repeat:no-repeat;background-size: cover;">
                <div class="carousel-item active">
                    <div class="container">
                        <div class="carousel-caption center-start">
                            <h1 class="pic1an1">Fast and Reliable Delivery</h1>
                            <p class="opacity-75 pic1an2">Get your orders delivered right to your doorstep, on time, every time.</p>
                            <p><a class="btn btn-lg btn-primary" href="createuser.php">Create Account Now </a></p>
                        </div>
                    </div>
                </div>
                <div class="carousel-item">
                    <div class="container">
                        <div class="carousel-caption">
                            <h1 class="pic2an1 top-5">Buyer and Seller Communication</h1>
                            <p class=" top-5">Have questions? Want something customized? Chat directly with our trusted sellers</p>
                            <p><img src="img/communication.png" alt="" width="150"></p>
                        </div>
                    </div>
                </div>
                <div class="carousel-item">
                    <div class="container">
                        <div class="carousel-caption text-center">
                            <h1 class="pic3an1">Real-Time Order Tracking</h1>
                            <p class="pic3an2">Stay updated with every step of your order – from checkout to delivery.</p>
                            <p><img src="img/tracking.png" alt="" width="150"></p>
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
                        <p class="lead mb-4 hover text-bold">
                        We are dedicated to bridging the gap between rural farmers and urban merchants. 
                        Our platform empowers farmers by giving them direct access to markets, 
                        ensuring they get fair prices for their harvest. At the same time, we provide 
                        merchants with the freshest, most natural produce straight from the source.
                        </p>
                    </div>
                </div>
                <div class="px-4 my-5 text-center">
                <h4 class="text-muted">Recently uploaded products</h4>
                    <div class="col-lg-12 row">

                        <?php
                        $con = mysqli_connect("localhost","root","","emarket");
                        $sql = "SELECT * FROM `product` WHERE `status` = 'approved' ORDER BY `uploaddate` DESC LIMIT 4";
                        $query = mysqli_query($con, $sql)or die(mysqli_error());
                        while($row = mysqli_fetch_array($query)){
                        ?>

                        <div class="card col-sm-2 hover" style="width: 18.9rem;margin-left:0.3rem;margin-right:0.3rem;margin-top:0.6rem">
                        <img src="uploads/<?php echo $row['productimage']?>" class="card-img-top" height="200px">
                        <div class="card-body">
                          <p class="card-text"><?php echo $row['productdescription'] ?></p>
                          <button data-bs-toggle="modal" data-bs-target="#loginfirst" class="btn btn-primary">Order Now</button>
                        </div>
                        </div> 

                        <?php
                          }
                        ?>
                    </div>
                    <a class="mt-3 btn btn-secondary" data-bs-toggle="offcanvas"
                    data-bs-target="#signinoffcanvas" aria-controls="offcanvasScrolling"><b>Explore more >></b></a>
                </div>
                <div class="px-4 my-5 text-center">
                    <div class="col-lg-12 mx-auto">
                      <br>
                      <h4 class="text-muted">Why choose Us?</h4>
                      <br>
                        <p class="lead mb-4 hover">
                        We connects farmers directly with merchants, ensuring fair prices and the freshest produce. 
                        By supporting local agriculture, you benefit from high-quality products while contributing to 
                        sustainable farming and boosting rural economies. Experience a marketplace where freshness, 
                        fairness, and community support come together seamlessly.</p>
                    </div>
                </div><br><br>
                <!-- /.row  -->
            </a>

            <a name="services">
                <!--  SERVICE ROW -->

                <h4 class="text-center">Our Services</h4>

                <div class="container px-4" id="featured-3">
                    <div class="row g-4 py-5 row-cols-1 row-cols-lg-6">
                        <div class="feature col">
                            <div
                                class="feature-icon d-inline-flex align-items-center justify-content-center col-12 fs-2 mb-3">
                                <img src="img/ds.png" class="rounded" height="100px" width="60%" alt="">
                            </div>
                            <p class="hover">
                            <h6 class="text-dark">Delivery and Logistics</h6>
                            Provide reliable and fast delivery options, including standard, express, and same-day
                            delivery.
                            </p>
                        </div>
                        <div class="feature col">
                            <div
                                class="feature-icon d-inline-flex align-items-center justify-content-center col-12 fs-2 mb-3">
                                <img src="img/ot.jpg" class="rounded" height="100px" width="60%" alt="">
                            </div>
                            <p class="hover">
                            <h6 class="text-dark">Order Management</h6>
                            Allow customers to track the status of their orders in real-time, from the moment they place
                            the order to the delivery.
                            </p>
                        </div>
                        <div class="feature col">
                            <div
                                class="feature-icon d-inline-flex align-items-center justify-content-center col-12 fs-2 mb-3">
                                <img src="img/bsc.png" class="rounded" height="100px" width="60%" alt="">
                            </div>
                            <p class="hover">
                            <h6 class="text-dark">Buyer-Seller Communication</h6>
                            Enable direct communication between buyers and sellers through messaging or chat systems.
                            </p>
                        </div>
                        <div class="feature col">
                            <div
                                class="feature-icon d-inline-flex align-items-center justify-content-center col-12 fs-2 mb-3">
                                <img src="img/mvm.jpg" class="rounded" height="100px" width="60%" alt="">
                            </div>
                            <p class="hover">
                            <h6 class="text-dark">Multi-Vendor Marketplace</h6>
                            Multiple sellers to list their products here, Where buyers can choose from various vendors.
                            </p>
                        </div>
                        <div class="feature col">
                            <div
                                class="feature-icon d-inline-flex align-items-center justify-content-center col-12 fs-2 mb-3">
                                <img src="img/rfm.png" class="rounded" height="100px" width="60%" alt="">
                            </div>
                            <p class="hover">
                            <h6 class="text-dark">Returns-Refunds management</h6>
                            Customers can return products within a specified period if they are not satisfied, they get
                            refunds.
                            </p>
                        </div>
                        <div class="feature col">
                            <div
                                class="feature-icon d-inline-flex align-items-center justify-content-center col-12 fs-2 mb-3">
                                <img src="img/pr.png" class="rounded" height="100px" width="60%" alt="">
                            </div>
                            <p class="hover">
                            <h6 class="text-dark">Personalized Recommendations</h6>
                            We provide personalized product recommendations based on a customer's browsing and purchase
                            history.
                            </p>
                        </div>

                    </div>
                </div>
                <!--  /.row  -->

            </a>

            <a name="contacts">
                <!-- CONTACTS ROW -->

                    <div class="row featurette">
                        <h4 class="featurette-heading hover text-center">And here,reach out to us. <span
                                class="text-body-secondary">contacts.</span></h4>
                    </div>     <br>      
                    <div class="row">
                        <div class="col-4">
                                <p class="lead hover"> <span class="text-primary"> <b>Here we are</b> </span><br>
                                    E-commerce <br>
                                    P.O.Box: 121 Musanze <br>
                                    Rwanda <br>
                                    +250790808735 <br>
                                    ecommerce@gmail.com
                                </p>
                        </div>
                      <form class="col-8" method="POST" action="../server/sendcomment.php">
                        <div class="row">
                            <div class="col-6">                                
                                  <input type="text" class="form-control" name="Commentername" placeholder="Full Name" required><br>
                                  <input type="text" class="form-control" name="Commenteremail" placeholder="E-mail Address" required><br>
                                  <input type="text" class="form-control" name="Commenterphone" placeholder="Phone Number" required><br>                                
                            </div>
                           <div class="col-6">
                             <textarea class="form-control" rows="4" name="Comment" required>
                                
                             </textarea>
                             <br>
                             <button type="submit" class="btn" title="Send Now"><img src="feather/msend.svg"></button>
                           </div>
                        </div>
                      </form>
                    </div>

                <br><br>

                <!-- / .row -->

            </a>

            <a name="terms">
                <!-- TERMS ROW -->

                <h4 class="text-center">Terms and Conditions</h4>

                <div class="row featurette">
                    <div class="px-4 my-5 text-center">
                        <div class="accordion accordion-flush" id="accordionFlushExample">
                            <div class="accordion-item">
                                <h2 class="accordion-header">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                        data-bs-target="#flush-collapseOne" aria-expanded="false"
                                        aria-controls="flush-collapseOne">
                                        <h5>General Terms</h5>
                                    </button>
                                </h2>
                                <div id="flush-collapseOne" class="accordion-collapse collapse show"
                                    data-bs-parent="#accordionFlushExample">
                                    <div class="accordion-body text-start text-muted">
                                        <ul>
                                            <li><b>Acceptance of Terms</b></li>
                                            By accessing or using our website, you agree to be bound by these terms and
                                            conditions. If you do not agree to these terms, you may not use our
                                            services.

                                            <li><b>Account Registration</b></li>
                                            To make a purchase, you may be required to create an account. You agree to
                                            provide accurate and complete information and keep your account details
                                            up-to-date. You are responsible for maintaining the confidentiality of your
                                            account and password.

                                            <li><b>Product Availability and Pricing</b></li>
                                            All products and prices are subject to availability and may be changed
                                            without
                                            notice. We strive to display accurate pricing, but errors may occur. In the
                                            event of a pricing error, we reserve the right to cancel any orders placed
                                            at
                                            the incorrect price.

                                            <li><b>Intellectual Property</b></li>
                                            All content on this website, including but not limited to text, graphics,
                                            logos,
                                            and images, is our property or the property of our suppliers and is
                                            protected by
                                            copyright, trademark, and other intellectual property laws.

                                            <li><b>User Conduct</b></li>
                                            You agree not to use our website for any unlawful purpose or in a way that
                                            could
                                            harm us or any third party. You also agree not to interfere with the proper
                                            functioning of the website or to attempt to gain unauthorized access to our
                                            systems.
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <div class="accordion-item">
                                <h2 class="accordion-header">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                        data-bs-target="#flush-collapseTwo" aria-expanded="false"
                                        aria-controls="flush-collapseTwo">
                                        <h5>Payment and Shipping</h5>
                                    </button>
                                </h2>
                                <div id="flush-collapseTwo" class="accordion-collapse collapse"
                                    data-bs-parent="#accordionFlushExample">
                                    <div class="accordion-body text-start text-muted">
                                        <ul>
                                            <li><b>Payment Methods</b></li>
                                            We accept a variety of payment methods, including credit/debit cards, mobile
                                            money, and other online payment gateways. All payments must be made in full
                                            before the product is shipped. We use secure payment processing systems to
                                            ensure your information is protected.

                                            <li><b>Shipping Policy</b></li>
                                            We offer various shipping options, including standard and express delivery.
                                            Shipping costs are calculated at checkout based on your location and the
                                            shipping method chosen. Estimated delivery times are provided, but actual
                                            delivery times may vary due to unforeseen circumstances.

                                            <li><b>Order Confirmation</b></li>
                                            Once your order is placed, you will receive an email confirmation with your
                                            order details. If you do not receive this email, please check your spam
                                            folder
                                            or contact our customer support team.

                                            <li><b>Order Tracking</b></li>
                                            You will receive a tracking number once your order has been shipped. You can
                                            use
                                            this number to monitor the status of your delivery on our website or through
                                            the
                                            courier’s tracking service.

                                            <li><b>Customs and Duties</b></li>
                                            For international orders, customers are responsible for any customs fees,
                                            import
                                            duties, or taxes that may apply in their country. We are not responsible for
                                            delays caused by customs clearance processes.
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <div class="accordion-item">
                                <h2 class="accordion-header">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                        data-bs-target="#flush-collapseThree" aria-expanded="false"
                                        aria-controls="flush-collapseThree">
                                        <h5>Returns and Refunds</h5>
                                    </button>
                                </h2>
                                <div id="flush-collapseThree" class="accordion-collapse collapse"
                                    data-bs-parent="#accordionFlushExample">
                                    <div class="accordion-body text-start text-muted">
                                        <ul>
                                            <li><b>Return Policy</b></li>
                                            If you are not satisfied with your purchase, you may return the product
                                            within
                                            [specified number of days, e.g., 30 days] of receipt for a full refund or
                                            exchange. Products must be returned in their original condition and
                                            packaging,
                                            with all tags and labels attached.

                                            <li><b>Refund Process</b></li>
                                            Refunds will be processed within [specified number of days, e.g., 5-10
                                            business
                                            days] of receiving the returned product. Refunds will be issued to the
                                            original
                                            payment method used during the purchase. Please note that shipping fees are
                                            non-refundable.

                                            <li><b>Non-Returnable Items</b></li>
                                            Certain products are not eligible for return, including but not limited to
                                            perishable goods, personalized items, and digital products. Please check the
                                            product description for details on return eligibility before making a
                                            purchase.

                                            <li><b>Damaged or Defective Products</b></li>
                                            If you receive a damaged or defective product, please contact us within
                                            [specified number of days, e.g., 7 days] of receipt. We will arrange for a
                                            replacement or refund, and we will cover the return shipping costs for
                                            defective
                                            items.

                                            <li><b>Cancellations</b></li>
                                            Orders can be canceled before they are shipped. If you wish to cancel your
                                            order, please contact us as soon as possible. Once an order has been
                                            shipped, it
                                            cannot be canceled, but you may still return the product under our return
                                            policy.
                                        </ul>

                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>


                <!-- / .row -->


            </a>



        </div><!-- /.container -->
    </main>


    <!-- FOOTER -->
    <br><br>
    <hr>
    <footer class="p-5  bg-dark text-light">
        <br><br>
        <div class="row">
            <div class="col-2 mb-3">
                <ul class="nav flex-column">
                    <li class="nav-item mb-2"><img src="feather/twitter.svg"><a href="#" class="p-0 ms-2" style="text-decoration:none;">Twitter</a></li>
                    <li class="nav-item mb-2"><img src="feather/facebook.svg"><a href="#" class="p-0 ms-2" style="text-decoration:none;">Facebook</a></li>
                    <li class="nav-item mb-2"><img src="feather/instagram.svg"><a href="#" class="p-0 ms-2" style="text-decoration:none;">Instagram</a></li>
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
                <img src="img/logo.png" height="80px" width="60%" alt="" style="margin-left:15%;"> <br>
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

<div class="modal" id="loginfirst" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered">
    <div class="modal-content">
      <div class="modal-header">
        <h1 class="modal-title fs-5" id="staticBackdropLabel">⚠</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body text-muted">
        To order somethig you have to create account first!
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
        <a href="createuser.php" class="btn btn-primary">Create now</a>
      </div>
    </div>
  </div>
</div>

<div class="offcanvas offcanvas-end" data-bs-scroll="true" data-bs-backdrop="false" tabindex="-1" id="signinoffcanvas"
    aria-labelledby="offcanvasScrollingLabel">
    <div class="offcanvas-header p-color text-light p-4">
        <h5 class="offcanvas-title" id="offcanvasScrollingLabel">Sign in here</h5>
        <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
    </div>
    <div class="offcanvas-body">
        <br />
        <div class="form-floating">
            <nav>
                <div class="nav nav-tabs" id="nav-tab" role="tablist">
                    <button class="nav-link active" id="nav-userlogin-tab" data-bs-toggle="tab"
                        data-bs-target="#userlogin" type="button" role="tab" aria-controls="userlogin"
                        aria-selected="true">User</button>
                    <button class="nav-link" id="nav-adminlogin-tab" data-bs-toggle="tab" data-bs-target="#adminlogin"
                        type="button" role="tab" aria-controls="adminlogin" aria-selected="false">Admin</button>
                </div>
            </nav>
            <div class="tab-content" id="nav-tabContent">
                <div class="tab-pane fade show active" id="userlogin" role="tabpanel" aria-labelledby="nav-home-tab"
                    tabindex="0">
                    <br><br><br>
                    <form method="POST" action="index.php">
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
                        <input type="submit" name="usersubmitbtn" value="Login" class="btn btn-primary w-100 py-2">
                        <?php
                        if (isset($_POST['usersubmitbtn'])){
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
                        <br><br>
                        <span class="text-muted">Don't have Account?</span>
                        <a href="createuser.php" class="" style="text-decoration:none;"> Create NEW </a>
                    </form>
                </div>

                <div class="tab-pane fade" id="adminlogin" role="tabpanel" aria-labelledby="nav-profile-tab"
                    tabindex="0">
                    <br><br><br>
                    <form method="POST">
                        <div class="form-floating">
                            <input type="password" name="Password" class="form-control" id="floatingPassword"
                                placeholder="Password" required />
                            <label for="floatingPassword" class="text-muted"><img src="feather/unlock.svg"> password</label>
                        </div><br><br>
                        <input type="submit" name="adminsubmitbtn" value="Login" class="btn btn-secondary w-100 py-2">
                        <?php
                        if (isset($_POST['adminsubmitbtn'])){
                            error_reporting(E_ALL);
                            ini_set('display_errors', 1);
                            $con = mysqli_connect("localhost","root","","emarket");
                            $sql = "SELECT * FROM `admin` WHERE`password` = '$_REQUEST[Password]'";
                            $query = mysqli_query($con, $sql)or die(mysqli_error());
                            if (mysqli_num_rows($query) >=1) {
                                echo "<script>alert('Login success');window.location='Admin/index.php';</script>";
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