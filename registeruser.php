<?php
session_start();
include 'FirstGermanconnect.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>RegisterUser</title>
	<link rel="stylesheet" href="registeruser.css">
</head>
<body>
<h1>Registration Form</h1>
<br>
<h2>Please fill out the following blank.</h2>
<br>
<div class="registerform">
<br>
<form action="registeruser.php" method="POST">
<span>Username:</span>
<input type="text" name="username" placeholder="ex)Kazunobu Someya" pattern="[a-zA-Z\s]{2,20}"  minlength="2" maxlength="20" size="25" required><br><br>
<span>Email:</span>
<input type="email" name="email" placeholder="ex)xxx@xxx.xxx" size="25" maxlength="60" required ><br>
<br>
<span>Address:</span>
<input type="text" name="address" placeholder="Address" size="25" minlength="20" maxlength="100" pattern="[a-zA-Z0-9,-\s]{20,100}" title="Please input within 20 to 100 characters." required><br>
<br>
<span>TEL:</span>
<input type="tel" id="phoneno" name="tel" placeholder="032-XXXXXXX" size="25" maxlength="20" pattern="\d{3}-\d{3}-\d{4}" required><br><br>
<span>Password:</span>
<input type="password" name="password" placeholder="password" size="25" pattern="[a-zA-Z0-9]{5,10}" title="Please input within 5 to 10 small characters." required><br><br>
<input type="submit" name="register" value="Register" class="register">
<br>
<?php

if(isset($_POST["register"])){

	$Username="";
	$Email="";
	$name=$_POST["username"];
	$email=$_POST["email"];
	$address=$_POST["address"];
	$tel=$_POST["tel"];
	$password=$_POST["password"];
	$_SESSION["username"] = $name;


	$sql_name = "SELECT * FROM userlist WHERE Username ='$name'";
	$sql_email= "SELECT * FROM userlist WHERE Email = '$email'";
	$result_name = $conn->query($sql_name); 
	$result_email = $conn->query($sql_email);


	


	if($result_name->num_rows>0 || $result_email->num_rows>0){

		echo "<p class='error'>You are already registered.</p>";

	}else{


		$sql = "INSERT INTO userlist (Username, Email, Address, Tel, Password)VALUES ('$name','$email','$address','$tel','$password')";


		if($conn->query($sql) === TRUE) {

		    echo "<p class='complete'>Your registration was successful.</p>";

		}else {
		    echo "Error: " . $sql . "<br>" . $conn->error;
		}

	}
}
?>
</form>
	<form action="loginpage.php" method="POST" class="loginto">
	<input type="submit" value="Back to LOGIN" class="login">
	</form>
</div>
</body>
</html>