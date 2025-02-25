<?php
session_start(); // Start the session
$con = mysqli_connect("localhost","root","","emarket");
if (!isset($_SESSION['username'])) {
    header('Location: ../../server/userlogout.php'); // Redirect to login page if not logged in
    exit();
}
$usersql = "SELECT * FROM `user` WHERE username = '$_SESSION[username]'";
$userquery = mysqli_query($con, $usersql)or die(mysqli_error());
$userrow = mysqli_fetch_array($userquery);

$productquery = mysqli_query($con, "SELECT * FROM `product` WHERE pid = '$_GET[pid]'")or die(mysqli_error());
$productrow = mysqli_fetch_array($productquery);
?>
<!doctype html>
<html lang="en" data-bs-theme="auto">

<head>
    <script src="../assets/js/color-modes.js"></script>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
    <meta name="generator" content="Hugo 0.122.0">
    <title>ALIBATRADE</title>
    <link rel="icon" href="../img/logo.png">

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
    <link href="checkout.css" rel="stylesheet">
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



    <div class="dropdown position-fixed mt-5 mb-3 ms-5 bd-mode-toggle">
         <a href="../account.php?search" class=""><img src="../feather/back.svg">
        </a>
    </div>


    <main>
        <div class="container">
            <div class="py-5 text-center">
                <img class="d-block mx-auto mb-4" src="../img/logo.png" alt="" width="300" height="80">
                <br>
                <p class="lead">
                  Below is a form. Fill all required fields.
                </p> <br>
            </div>

            <div class="row g-5">
                <div class="col-md-5 col-lg-4 alert border rounded order-md-last text-muted">
                    <img src="../uploads/<?php echo $productrow['productimage']?>" class="card-img-top" height="200px">
                     <br> <br>
                    <ul class="list-group mb-3">
                        <li class="list-group-item d-flex justify-content-between text-muted lh-sm">
                            <div>
                                <h6 class="my-0">Quantity:</h6>
                                <b class="text-primary quantitydetails"></b>
                            </div>
                        </li>
                        <li class="list-group-item d-flex justify-content-between text-muted lh-sm">
                            <div>
                                <h6 class="my-0">Unit Price:</h6>
                                <b class="text-secondary"><?php echo $productrow['productprice']?></b>
                            </div>
                        </li>
                        <li class="list-group-item d-flex justify-content-between text-muted bg-secondary">
                            <div class="">
                                <h6 class="my-0">Total Cost</h6>
                                <b class="text-light total-cost">0</b><b class=> RWF</b>
                            </div>
                        </li>
                    </ul>
                </div>
                <div class="alert alert-warning" id="highquantitydiv" style="display:none">MAX quantity is <?php echo"<b class='text-muted'> $productrow[productquantity] $productrow[productunit]</b>"?></div>
                <div class="col-md-7 col-lg-8">
                    <h4 class="mb-3">Adding product to Cart</h4>
                    <form class="needs-validation" method="POST" novalidate>
                        <div class="alert alert-primary"><img src="../feather/minfo.svg">Dear Customer, to proceed with your purchase, simply enter the desired quantity of the item. All other necessary information will be collected on the payment page. Thank you for shopping with us!</div>
                        <br>
                        <div class="row g-3">
                            <div class="col-md-5">
                                <label for="quantity" class="form-label">Quantity (Max <b><?php echo $productrow['productquantity'] . " " . $productrow['productunit'] ?></b>)</label>
                                <input type="number" name="Orderquantity" class="form-control" id="quantity" onkeyup="quantityfieldchange()" required>
                                <div class="invalid-feedback">
                                    Quantity required.
                                </div>
                            </div>                            
                        </div><br><br>

                        <hr class="my-4">

                        <input name="checkoutbtn" class="w-100 btn btn-primary btn-lg" type="submit" value="+ ADD">
                        <?php
                          if(isset($_POST['checkoutbtn'])){
                            error_reporting(E_ALL);
                            ini_set('display_errors', 1);
                            
                            $con = mysqli_connect("localhost","root","","emarket");

                            $ORDERQUANTITY = $_POST['Orderquantity'];
                            if ($ORDERQUANTITY > $productrow['productquantity']) {
                                echo "<script>
                                document.getElementById('highquantitydiv').style.display = 'block';
                                setTimeout(function() {
                                document.getElementById('highquantitydiv').style.display = 'none';
                                }, 3000);
                                </script>";
                            }
                            else{
                            
                                $sql = "INSERT INTO `cart` (`cid`, `pid`, `username`, `owner`, `cartquantity`)
                                 VALUES (
                                 NULL,
                                 '$productrow[pid]',
                                 '$userrow[username]',
                                 '$productrow[username]',
                                 '$ORDERQUANTITY'
                                 )";
                            
                                if (mysqli_query($con, $sql)or die(mysqli_error())) {
                                    $newq = $productrow['productquantity'] - $ORDERQUANTITY;
                                    mysqli_query($con, "UPDATE `product` SET `productquantity` = $newq WHERE `pid` = '$productrow[pid]'");
                                    
                                echo "<script>alert('ADDED TO CART');window.location='../account.php?search';</script>";
                                }else {
                                echo "<script>alert('FAILED !');window.location='../account.php?search';</script>";
                               }
                            }
                          }
                        ?>
                    </form>
                </div>
            </div>
        </div> <!-- / .container -->

    </main>


    <br><br>
    <script src="../assets/dist/js/bootstrap.bundle.min.js"></script>

    <script src="checkout.js"></script>
    <script>
        function quantityfieldchange() {
        document.querySelector('.quantitydetails').innerHTML = document.getElementById('quantity').value;
        document.querySelector('.total-cost').innerHTML = document.getElementById('quantity').value * <?php echo $productrow['productprice']; ?>;
    }
    </script>

</body>

</html>