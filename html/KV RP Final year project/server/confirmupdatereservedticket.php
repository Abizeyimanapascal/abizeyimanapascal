  <?php     
error_reporting(E_ALL);
ini_set('display_errors', 1);

$con = mysqli_connect("localhost","root","","virunga");
$FIRSTNAME = $_POST['Firstname'];
$TRAVELDATE = $_POST['Traveldate'];
$TRAVELTIME = $_POST['Traveltime'];
$TELEPHONENO = $_POST['Telephoneno'];

     $sql = "UPDATE `reservedtickets` SET
     `passenger` = '$FIRSTNAME',
     `traveldate` = '$TRAVELDATE',
     `traveltime` = '$TRAVELTIME',
     `phone` ='$TELEPHONENO' WHERE id = $_GET[curt]";

    if (mysqli_query($con, $sql)) {
        echo "<script>alert('Ticked updated!');window.location='../client/Admin/index.php';</script>";
    } else {
        echo "<script>alert('Something went wrong!');window.location='../client/Admin/index.php';</script>";
    }
    ?>