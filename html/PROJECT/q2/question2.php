<?php
$con = mysqli_connect("localhost","root","","student");
if (isset($_POST['send'])) {

	try {
		$A = $_POST['firstname'];
		$B = $_POST['lastname'];
		$C = $_POST['dobday'];
		$D = $_POST['dobmonth'];
		$E = $_POST['dobyear'];
		$F = $_POST['email'];
		$G = $_POST['mobilenumber'];
		$H = $_POST['gender'];
		$I = $_POST['address'];
		$J = $_POST['city'];
		$K = $_POST['pincode'];
		$L = $_POST['state'];
		$M = $_POST['country'];
		$N = $_POST['hobbies'];
		$hobbie = "";
		foreach ($N as $value) {
            $hobbie.= $value. ",";
        }
		$O = $_POST['classxboard'];
		$P = $_POST['classxpercent'];
		$Q = $_POST['classxyearofpassing'];
		$R = $_POST['classxiiboard'];
		$S = $_POST['classxiipercent'];
		$T = $_POST['classxiiyearofpassing'];
		$U = $_POST['graduationboard'];
		$V = $_POST['graduationpercent'];
		$W = $_POST['graduationyearofpassing'];
		$X = $_POST['mastersboard'];
		$Y = $_POST['masterspercent'];
		$Z = $_POST['mastersyearofpassing'];
		$AA = $_POST['courses'];

		$sql ="INSERT INTO `studentreg` (`firstname`, `lastname`, `DOBday`, `DOBmonth`, `DOByear`, `email`, `mobilenumber`, `gender`, `address`, `city`, `pincode`, `state`, `country`, `hobbies`, `classxboard`, `classxpercent`, `classxyearofpass`, `classxiiboard`, `classxiipercent`, `classxiiyearofpass`, `graduationboard`, `graduationpercent`, `graduationyearofpass`, `mastersboard`, `masterspercent`, `mastersyearofpass`, `course`) VALUES ('$A', '$B', '$C', '$D', '$E', '$F', '$G', '$H', '$I', '$J', '$K', '$L', '$M', '$hobbie', '$O', '$P', '$Q', '$R', '$S', '$T', '$U', '$V', '$W', '$X', '$Y', '$Z', '$AA')";
		if (mysqli_query($con, $sql)) {
            echo "<script>alert('data inserted successfully');window.location='question2.php';</script>";
        } else {
            echo "<script>alert('ERROR');window.location='question2.php';</script>";
        }
		
	} catch (Exception $e) {
		echo $e;		
	}
}
?>

<!DOCTYPE html>
<html>

<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>second question with forms</title>
	<style type="text/css">
		table {
			position: absolute;
			left: 200px;
			height: 10px;
		}

		select {
			width: 64px;
		}

		.table2 {
			position: absolute;
			left: 200px;
			top: 660px;
		}

		.table3 {
			position: absolute;
			left: 200px;
			top: 820px;
		}

		div {
			position: absolute;
			left: 570px;
			top: 870px;
		}
	</style>
</head>

<body>
	<center>

		<h3><b>STUDENT REGISTRATION FORM</b></h3>
	</center>

	<form action="question2.php" method="POST">

	<table cellspacing="20">
		<!-- <tr><th colspan="2"></th> <th colspan="2">STUDENT REGISTRATION FORM</th></tr> -->
		<tr>
			<td>FIRST NAME</td>
			<td><input type="text" name="firstname" size="25" required></td>
		</tr>
		<tr>
			<td>LAST NAME</td>
			<td><input type="text" name="lastname" size="25" required></td>
		</tr>
		<tr>
			<td>DATE OF BIRTH</td>
			<td>
				<select name="dobday" required>
					<option>Day: </option>

					<script>
						for (var i = 1; i <31; i++) {
							document.write("<option value='" + i + "'>" + i + "</option>");
						}
					</script>
					
				</select>
				<select name="dobmonth" id="daySelect" required>
					<option>Month: </option>
					<script>
						var select = document.getElementById("daySelect");
						const months = ["Jan", "Feb", "Mar", "Apr", "May", "Jun", "Jul", "Aug", "Sep", "Oct", "Nov", "Dec"];
						for (var i = 1; i <= 12; i++) {
							document.write("<option value='" + i + "'>" + i + "</option>");
						}
					</script>
				</select>
				<select name="dobyear" id="yearselect" required>
					<option>Year: </option>
					<script>
						const year = new Date().getFullYear();
						for (var i = year; i >= 1900; i--) {
                            document.write("<option value='" + i + "'>" + i + "</option>");
                        }
					</script>
				</select>
			</td>
		</tr>
		<tr>
			<td>EMAIL ID</td>
			<td><input type="text" name="email" size="25" required></td>
		</tr>
		<tr>
			<td>MOBILE NUMBER</td>
			<td><input type="text" name="mobilenumber" size="25" required></td>
		</tr>
		<tr>
			<td>GENDER</td>
			<td>Male<input type="radio" name="gender" value="male">
				Female<input type="radio" name="gender" value="female" required></td>
		</tr>
		<tr>
			<td>ADDRESS</td>
			<td><textarea cols="33" rows="3" name="address" required></textarea></td>
		</tr>
		<tr>
			<td>CITY</td>
			<td><input type="text" name="city" size="25" required></td>
		</tr>
		<tr>
			<td>PIN CODE</td>
			<td><input type="text" name="pincode" size="25" required></td>
		</tr>
		<tr>
			<td>STATE</td>
			<td><input type="text" name="state" size="25" required></td>
		</tr>
		<tr>
			<td>COUNTRY</td>
			<td>
				<select name="country" id="" style="width:72%;" required>
					<option value=""></option>
					<option value="Rwanda">Rwanda</option>
					<option value="Uganda">Uganda</option>
					<option value="England">England</option>
				</select>
			</td>
		</tr>
		<tr>
			<td>HOBBIES</td>
			<td>
			Drawing<input type="checkbox" name="hobbies[]" value="drawing"> 
			Singing<input type="checkbox" name="hobbies[]" value="singing">
			Dancing<input type="checkbox" name="hobbies[]" value="dancing"> 
			Sketching<input type="checkbox" name="hobbies[]" value="sketching"> <br>
			Other<input type="checkbox" name="hobbies[]" value="other">
			<input type="text" name="hobbies[]">
		</td>
		</tr>
	</table>
	<table class="table2">
		<tr>
			<th style="font-weight: normal;">QUALIFICATION &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</th>
			<th>SI.No</th>
			<th>Examination</th>
			<th>Board</th>
			<th>Percentage</th>
			<th>Year of Passing</th>
		</tr>
		<tr>
			<td></td>
			<td>1</td>
			<td>Class X</td>
			<td><input type="text" name="classxboard" ></td>
			<td><input type="text" name="classxpercent"></td>
			<td><input type="text" name="classxyearofpassing"></td>
		</tr>
		<tr>
			<td></td>
			<td>2</td>
			<td>Class XII</td>
			<td><input type="text" name="classxiiboard"></td>
			<td><input type="text" name="classxiipercent"></td>
			<td><input type="text" name="classxiiyearofpassing"></td>
		</tr>
		<tr>
			<td></td>
			<td>3</td>
			<td>Graduation</td>
			<td><input type="text" name="graduationboard"></td>
			<td><input type="text" name="graduationpercent"></td>
			<td><input type="text" name="graduationyearofpassing"></td>
		</tr>
		<tr>
			<td></td>
			<td>4</td>
			<td>Masters</td>
			<td><input type="text" name="mastersboard"></td>
			<td><input type="text" name="masterspercent"></td>
			<td><input type="text" name="mastersyearofpassing"></td>
		</tr>
		<tr>
			<td></td>
			<td></td>
			<td></td>
			<td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;(10 char max)</td>
			<td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;(upto 2 decimal)</td>
			<td></td>
		</tr>

	</table>

	<br><br><br>

	<table class="table3">
		<tr>
			<td> COURSES<br>APPLIED FOR &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</td>
			<td>BCA <input type="radio" name="courses" value="BCA">
			B.Com <input type="radio"  name="courses" value="B.Com">
			B.Sc <input type="radio"  name="courses" value="B.sc">
			B.A <input type="radio"  name="courses" value="B.A">
			</td>
		</tr>
	</table>

	<div>
		<input type="submit" name="send" value="Submit">
		<input type="reset" name="re" value="Reset">
	</div>

	</form>

	<br>

	<br>



</body>

</html>