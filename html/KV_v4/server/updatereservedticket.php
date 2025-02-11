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
</head>
<body>


                      <?php
                      $con = mysqli_connect("localhost","root","","virunga");
                      $sql = "SELECT * FROM reservedtickets WHERE id = '$_GET[updatereservedticketid]'";
                      $query = mysqli_query($con, $sql)or die(mysqli_error());
                      $row = mysqli_fetch_array($query);
                        ?>

    <div class="px-4 py-5 my-5 border-bottom row">

        <div class="col-4"><a href="../client/Admin/index.php" style="text-decoration:none;"><span style="font-size:40;">🔙</a></span></div>
               
          <div class="col-md-5 p-5">
            <form method="POST" action="confirmupdatereservedticket.php? curt=<?php echo $row['id'] ?>">
                              
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
                  <input type="text" name="Firstname" id="firstnamefield" class="form-control" value="<?php echo $row['passenger'] ?>" id="validationCustom01" required />
                  <div class="valid-feedback">
                    Looks good!
                  </div>
                </div>
                <div class="col-md-12 mt-2">
                  <label for="validationCustomUsername" class="form-label">Travel date</label>
                    <input type="date" name="Traveldate" id="traveldatefield" class="form-control" value="<?php echo $row['traveldate'] ?>" id="validationCustomUsername"
                      aria-describedby="inputGroupPrepend" required />
                    <div class="invalid-feedback">
                      Please enter date.
                    </div>
                </div>
                <div class="col-md-12 mt-2">
                  <label for="validationCustom03" class="form-label">Travel time</label>
                  <input type="time" name="Traveltime" class="form-control" value="<?php echo $row['traveltime'] ?>" id="traveltimefield" required />
                  <div class="invalid-feedback">
                    Please provide a valid time.
                  </div>
                </div>
                <div class="col-md-12 mt-2">
                  <label for="validationCustom05" class="form-label">Telephone no for payment</label>
                  <input type="number" name="Telephoneno" id="telephonenofield" class="form-control" value="<?php echo $row['phone'] ?>" required/>
                  <div class="invalid-feedback">
                    Please provide a valid zip.
                  </div>
                </div>
                <div class="col-12">
                  <input type="submit" name="updatereservedticketbtn" value="Update" class="btn btn-success">
                  <a href="../client/Admin/index.php" class="btn btn-secondary">Back to dashboard</a>
                </div>
            </form>
        </div>
 
</body>