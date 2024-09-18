<?php
session_start(); // Start the session
$con = mysqli_connect("localhost","root","","emarket");
if (!isset($_SESSION['username'])) {
    header('Location: ../server/userlogout.php'); // Redirect to login page if not logged in
    exit();
}
$usersql = "SELECT * FROM `user` WHERE username = '$_SESSION[username]'";
$userquery = mysqli_query($con, $usersql)or die(mysqli_error());
$userrow = mysqli_fetch_array($userquery);

$countquery = mysqli_query($con, "SELECT * FROM `product` WHERE username = '$_SESSION[username]' AND `status` = 'approved'")or die(mysqli_error());
$coutrow = mysqli_num_rows($countquery);

$rordersquery = mysqli_query($con, "SELECT `order`.*, `product`.*, `user`.* FROM `order` 
                        INNER JOIN `user` ON `order`.`username` = `user`.`username` 
                        INNER JOIN `product` ON `order`.`pid` = `product`.`pid` WHERE `order`.`owner` = '$userrow[username]'
                        ORDER BY `orderdate` DESC")or die(mysqli_error());
$rordersrow = mysqli_num_rows($rordersquery);

$mordersquery = mysqli_query($con, "SELECT `order`.*, `product`.*, `user`.* FROM `order` 
                        INNER JOIN `user` ON `order`.`username` = `user`.`username` 
                        INNER JOIN `product` ON `order`.`pid` = `product`.`pid` WHERE `order`.`username` = '$userrow[username]'
                        ORDER BY `orderdate` DESC")or die(mysqli_error());
$mordersrow = mysqli_num_rows($mordersquery);
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
  <title>E-market</title>
  <link rel="icon" href="img/logo.png">

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


  <header data-bs-theme="bg-light">
    <div class="text-center fixed-top row bg-light text-muted shadow"  style="transition:transform 3s ease-in;">
      <div class="col-2 pt-3 h3">
        <a class="nav-link text-primary"><img src="img/logo.png" alt=""width="80%"></a>
      </div>
      <div class="col-8">
      <nav class="navbar navbar-expand-md">
      <div class="container-fluid">
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse"
          aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse col-12 pt-3" id="navbarCollapse">
        <ul class="navbar-nav me-auto mb-2 mb-md-0 justify-content-center">
            
            <li class="nav-item">      
            <a class="nav-link" href="account.php">All</a>
            </li>               
            <li class="nav-item">      
            <a class="nav-link" href="myproducts.php">My products 
              <div class="badge bg-primary"><?php echo $coutrow ?></div>
            </a>
            </li> 
            <li class="nav-item">
              <a class="nav-link" href="uploadproduct.php">Upload</a>
            </li>
            <li class="nav-item">
            <a class="nav-link" href="receivedorders.php">Received Orders
            <div class="badge bg-warning"><?php echo $rordersrow ?></div>
            </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="myorders.php">My Orders
              <div class="badge bg-success"><?php echo $mordersrow ?></div>
              </a>
            </li>
          </ul>
        </div>
      </div>
    </nav>

      </div>
    <div class="col-sm-2">
      <div class="mt-4 dropdown">
      <button class="btn py-2 dropdown-toggle d-flex align-items-center text-muted" id="bd-theme" type="button"
      aria-expanded="false" data-bs-toggle="dropdown" aria-label="Toggle theme (auto)">
      <?php echo $userrow['name']; ?>
    </button>
       <div class="dropdown-menu dropdown-menu-end shadow" aria-labelledby="bd-theme-text">
       <a href="profile.php" class="dropdown-item text-muted" data-bs-theme-value="light"
          aria-pressed="false">
          Profile
        </a>
        <a href="../server/userlogout.php" class="dropdown-item text-danger" data-bs-theme-value="light"
          aria-pressed="false">
          Logout
        </a>
       </div>
      </div>
    </div>
  </div>

  </header>
<br><br><br>
  <main class="text-muted">

        <!-- Marketing messaging and featurettes
        ================================================== -->
        <!-- Wrap the rest of the page in another container to center all the content. -->

        <div class="container marketing"><br><br>

            <!-- ABOUT US ROW -->
            <div class="row">

                <table class="table table-striped table-hover">
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>Product Name</th>
                            <th>Quantity</th>
                            <th>Date</th>
                            <th>Seller</th>
                            <th>Phone Number</th>
                            <th>Location</th>
                            <td colspan="2">Status</td>
                        </tr>
                    </thead>

                    <tbody>
                      <?php
                        $sql = "SELECT `order`.*, `product`.*, `user`.* FROM `order` 
                        INNER JOIN `product` ON `order`.`pid` = `product`.`pid` 
                        INNER JOIN `user` ON `product`.`username` = `user`.`username` WHERE order.username = '$userrow[username]'
                        ORDER BY `orderdate` DESC";
                        $query = mysqli_query($con, $sql)or die(mysqli_error());
                        while($row = mysqli_fetch_array($query)){
                        ?>

                        <tr>
                            <td><?php echo $row['oid'] ?></td>
                            <td><?php echo $row['productname'] ?></td>
                            <td><?php echo $row['orderquantity'] ?></td>
                            <td><?php echo $row['orderdate'] ?></td>
                            <td><?php echo $row['name'] ?></td>
                            <td><?php echo $row['phonenumber'] ?></td>
                            <td><?php echo $row['address'] ?></td>
                            <?php if ($row['orderstatus'] == 'accepted') {
                                echo "<td class='text-muted'>Pending</td>";
                                echo "<td class='text-muted' id='countdown'></td>";
                              } else if ($row['orderstatus'] == 'canceled') {
                                echo "<td class='text-muted'><s>Canceled</s></td>";
                                echo "<td class='text-muted'>...</td>";
                              } else {
                                echo "<td><button style='border:none;'><a href='../server/acceptorder.php? id=$row[oid]' class='text-muted' style='text-decoration:none;'>waiting</a></button></td>";
                                echo "<td><button style='border:none;'><a href='../server/ccancelorder.php? id=$row[oid]' class='text-danger' style='text-decoration:none;'>🔴</a></button></td>";
                              }
                              ?>
                        </tr>

                        <?php } ?>

                    <tbody>
                </table>

            </div>
            <!-- /.row  -->

        </div><!-- /.container -->
    </main>


    <!-- FOOTER -->
    <br><br><hr>
    <footer class="p-5 pt-6 bg-dark text-light">
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
            <p class="text-center">&copy; 2024 Virunga express. All rights reserved.</p>
        </div>
        <br><br>
    </footer>
  
  <script src="../assets/dist/js/bootstrap.bundle.min.js"></script>

</body>

</html>