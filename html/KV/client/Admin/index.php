<?php
session_start(); // Start the session
if (!isset($_SESSION['username'])) {
    header('Location: ../../server/logout.php'); // Redirect to login page if not logged in
    exit();
}
?>

<?php include '../../server/connection.php' ?>
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
    <div class="h1 p-2 text-center sticky-top row bg-success" style="transition:transform 3s ease-in;">
      <div class="col-2"><img src="img/vlog.png" alt="" style="width: 80px;height: 80px;border-radius: 50%;"></div>
      <div class="col-8 p-3">VIRUNGA <span class="text-light">Express</span></div>
      <div class="col-2"><a href="../../server/logout.php" class="mt-4 btn btn-danger">Logout</a></div>
    </div>
    <nav class="navbar navbar-expand-md justify-content-center pcolor">
      <div class="container-fluid">
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse"
          aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="col-4"></div>
        <div class="collapse navbar-collapse text-center" id="navbarCollapse">
          <ul class="navbar-nav me-auto mb-2 mb-md-0">
            <li class="nav-item">
              <a class="nav-link" aria-current="page" href="#">Dashboard📊</a>
            <!-- </li>
              <a class="nav-link" data-bs-toggle="modal" href="#manageroutesmodal">manage routes📶</a>
            </li> -->
            <li class="nav-item">
              <a class="nav-link" data-bs-toggle="modal" href="#reservedticketsmodal">Reserved tickets <div class="badge bg-warning" style="color: #171a97db;"><?php echo $numberofreservedtickets; ?></div></a>
            </li>
            <li class="nav-item">
              <a class="nav-link" data-bs-toggle="modal" href="#confirmedticketsmodal">Confirmed tickects ✅</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" data-bs-toggle="modal" href="#commentsmodal">Comments🌐</a>
            </li>
          </ul>
        </div>
      </div>
    </nav>


  </header>

  <main class="text-muted">

    <!-- Marketing messaging and featurettes
  ================================================== -->
    <!-- Wrap the rest of the page in another container to center all the content. -->

    <div class="container marketing">

      <!-- HOME ROW -->
      <div class="px-4 py-5 my-5 text-center border-bottom">
        <img class="d-block mx-auto mb-4" src="img/vlog.png" alt="" width="200" height="100">
        <div class="col-lg-12 mx-auto">
            <div class="row">
              <a class="nav-link bg-success col m-2 p-4 rounded text-light hover" data-bs-toggle="modal" href="#reservedticketsmodal">Reserved tickets <div class="badge bg-warning" style="color: #171a97db;"><?php echo $numberofreservedtickets; ?></div></a>
              <a class="nav-link bg-success col m-2 p-4 rounded text-light hover" data-bs-toggle="modal" href="#confirmedticketsmodal">Confirmed tickects ✅</a>
              <a class="nav-link bg-success col m-2 p-4 rounded text-light hover" data-bs-toggle="modal" href="#commentsmodal">Comments🌐</a>
            </div>
          
        </div>
      </div>
      <!-- /.row  -->


      <!-- MANAGE ROUTES ROW -->
      <div class="modal fade text-muted" id="manageroutesmodal" data-bs-backdrop="static" data-bs-keyboard="false"
        tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
        <div class="modal-dialog modal-fullscreen">
          <div class="modal-content p-4">
            <div class="modal-header shadow text-center alert alert-light">
              <h1 class="modal-title fs-5 text-muted text-center" id="staticBackdropLabel">Manage routes</h1>
              <button type="button" class="btn-close text-danger" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
              <div class="px-4 py-5 my-5 border-bottom row">
                <div class="col-3"><img src="img/vlog.png" alt="" class="sticky-top" width="60%" height="80px"></div>
                <div class="col-9">
                  <table class="table table-sm table-hover table-bordered">
                    <thead style="background:#171a97db">
                      <tr>
                        <th scope="col">Route From</th>
                        <th scope="col">Destination</th>
                        <th scope="col">Distance/Km</th>
                        <th scope="col">Estimated Time/mins</th>
                        <th scope="col">Price</th>
                        <th scope="col" colspan="2" class="text-center">Actions</th>
                      </tr>
                    </thead>
                    <tbody>
                    <?php
                      include "../../server/connection.php";
                      $sql = "SELECT * FROM routes";
                      $query = mysqli_query($con, $sql)or die(mysqli_error());
                      while ($row = mysqli_fetch_array($query, MYSQLI_ASSOC)){
                        ?>

                      <tr>
                        <td><?php echo $row['from'] ?></td>
                        <td><?php echo $row['destination'] ?></td>
                        <td><?php echo $row['distance'] ?></td>
                        <td><?php echo $row['time'] ?></td>
                        <td><?php echo $row['price'] ?></td>
                        <td><a type="button" href="../../server/updatereservedticket.php? updatereservedticketid=<?php echo $row['id'] ?>" class="text-muted" style="width: 100%;border: none;text-decoration:none;">🔁</a></td>
                        <td><a type="button" href="../../server/deletereservedticket.php? deletereservedticketid=<?php echo $row['id'] ?>" class="text-danger" style="width: 100%;border: none;text-decoration:none;">❌</a></td>
                      </tr>

                      <?php
                       }
                       mysqli_close($con);
      
                       ?>                      
                    </tbody>
                  </table>
                </div>
              </div>

            </div>
          </div>
        </div>
      </div>
      <!-- /.row  -->

      <!-- RESERVED TICKETS ROW -->
      <div class="modal fade text-muted" id="reservedticketsmodal" data-bs-backdrop="static" data-bs-keyboard="false"
        tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
        <div class="modal-dialog modal-fullscreen">
          <div class="modal-content p-4">
            <div class="modal-header shadow text-center alert alert-light">
              <h1 class="modal-title fs-5 text-center" id="staticBackdropLabel">Reserved tickets</h1>
              <button type="button" class="btn-close text-danger" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
              <div class="px-4 py-5 my-5 border-bottom row">
                <div class="col-3"><img src="img/vlog.png" alt="" class="sticky-top" width="60%" height="80px"></div>
                <div class="col-9">
                  <table class="table table-sm table-hover table-bordered">
                    <thead>
                      <tr>
                        
                        <th scope="col">Route</th>
                        <th scope="col">Passenger</th>
                        <th scope="col">Ticket ID</th>
                        <th scope="col">Price</th>
                        <th scope="col">Date</th>
                        <th scope="col">Time</th>
                        <th scope="col">Phone</th>
                        <th scope="col" colspan="3" class="text-center">Actions</th>
                      </tr>
                    </thead>
                    <tbody>
                    <?php
                      include "../../server/connection.php";
                      $sql = "SELECT * FROM reservedtickets";
                      $query = mysqli_query($con, $sql)or die(mysqli_error());
                      while ($row = mysqli_fetch_array($query, MYSQLI_ASSOC)){
                        ?>

                      <tr>
                        <td><?php echo $row['route'] ?></td>
                        <td><?php echo $row['passenger'] ?></td>
                        <td><?php echo $row['ticketid'] ?></td>
                        <td><?php echo $row['price'] ?></td>
                        <td><?php echo $row['traveldate'] ?></td>
                        <td><?php echo $row['traveltime'] ?></td>
                        <td><?php echo $row['phone'] ?></td>
                        <td><a type="button" href="../../server/confirmticket.php? confirmticketid=<?php echo $row['id'] ?>" class="text-success" style="width: 100%;border: none;text-decoration:none;">✅</a></td>
                        <td><a type="button" href="../../server/updatereservedticket.php? updatereservedticketid=<?php echo $row['id'] ?>" class="text-muted" style="width: 100%;border: none;text-decoration:none;">🔁</a></td>
                        <td><a type="button" href="../../server/deletereservedticket.php? deletereservedticketid=<?php echo $row['id'] ?>" class="text-danger" style="width: 100%;border: none;text-decoration:none;">❌</a></td>
                      </tr>

                      <?php
                       }
                       mysqli_close($con);
      
                       ?>
                    </tbody>
                  </table>
                </div>
              </div>

            </div>
          </div>
        </div>
      </div>
      <!-- /.row  -->

      <!-- CONFIRMED ROUTES ROW -->
      <div class="modal fade text-muted" id="confirmedticketsmodal" data-bs-backdrop="static" data-bs-keyboard="false"
        tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
        <div class="modal-dialog modal-fullscreen">
          <div class="modal-content p-4">
            <div class="modal-header shadow text-center alert text-light">
              <h1 class="modal-title fs-5 text-muted text-center" id="staticBackdropLabel">Confirmed tickets</h1>
              <button type="button" class="btn-close text-danger" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
              <div class="px-4 py-5 my-5 border-bottom row">
                <div class="col-3"><img src="img/vlog.png" alt="" class="sticky-top" width="60%" height="80px"></div>
                <div class="col-9">
                  <table class="table table-sm table-hover table-bordered">
                    <thead>
                      <tr>
                        <th scope="col">Route</th>
                        <th scope="col">Passenger</th>
                        <th scope="col">Ticket ID</th>
                        <th scope="col">Price</th>
                        <th scope="col">Date</th>
                        <th scope="col">Time</th>
                        <th scope="col">Phone</th>
                        <th scope="col" colspan="" class="text-center"></th>
                      </tr>
                    </thead>
                    <tbody>
                    <?php
                      include "../../server/connection.php";
                      $sql = "SELECT * FROM confirmedtickets";
                      $query = mysqli_query($con, $sql)or die(mysqli_error());
                      while ($row = mysqli_fetch_array($query, MYSQLI_ASSOC)){
                        ?>

                      <tr>
                        <td><?php echo $row['route'] ?></td>
                        <td><?php echo $row['passenger'] ?></td>
                        <td><?php echo $row['ticketid'] ?></td>
                        <td><?php echo $row['price'] ?></td>
                        <td><?php echo $row['traveldate'] ?></td>
                        <td><?php echo $row['traveltime'] ?></td>
                        <td><?php echo $row['phone'] ?></td>
                        <td><a type="button" href="../../server/deleteconfirmedticket.php? deleteconfirmedticketid=<?php echo $row['id'] ?>" class="text-danger" style="width: 100%;border: none;text-decoration:none;">❌</a></td>
                      </tr>

                      <?php
                       }
                       mysqli_close($con);
      
                       ?>
                    </tbody>
                  </table>
                </div>
              </div>

            </div>
          </div>
        </div>
      </div>
      <!-- /.row  -->

      <!-- COMMENTS ROW -->
      <div class="modal fade text-muted" id="commentsmodal" data-bs-backdrop="static" data-bs-keyboard="false"
        tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
        <div class="modal-dialog modal-fullscreen">
          <div class="modal-content p-4">
            <div class="modal-header shadow  text-center alert alert-light">
              <h1 class="modal-title fs-5 text-muted text-center" id="staticBackdropLabel">Comments</h1>
              <button type="button" class="btn-close text-danger" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
              <div class="px-4 py-5 my-5 border-bottom row">
                <div class="col-3"><img src="img/vlog.png" alt="" class="sticky-top" width="60%" height="80px"></div>
                <div class="col-9">

                <?php
                      $con = mysqli_connect("localhost","root","","emarket");
                      $query = mysqli_query($con, "SELECT * FROM nessages");
                      while ($row = mysqli_fetch_array($query)){
                        ?>

                  <div class="card mt-3" role="alert" aria-live="assertive" aria-atomic="true" style="width: 80%;">
                    <div class="card-header" style="border: none;">
                      <svg class="bd-placeholder-img rounded me-2" width="20" height="20"
                        xmlns="http://www.w3.org/2000/svg" aria-hidden="true" preserveAspectRatio="xMidYMid slice"
                        focusable="false">
                        <rect width="100%" height="100%" fill="#007aff" />
                      </svg>
                      <strong class="me-auto"><?php echo $row['commenter_name']; ?></strong>
                      <span class="text-body-secondary text-end" style="margin-left: 20%;">11 mins ago</span>
                    </div>
                    <div class="card-body">
                      <?php echo
                    </div>
                  </div>

                  <?php } ?>

                </div>
              </div>

            </div>
          </div>
        </div>
      </div>
      <!-- /.row  -->

      <!-- FOOTER -->

      <div class="container">
        
      </div>
  </main>

  <script src="../assets/dist/js/bootstrap.bundle.min.js"></script>

</body>

</html>