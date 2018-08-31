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
		<input type="text" name="username" placeholder="Username" size="25" required><br><br>
		<span>Email:</span>
		<input type="text" name="email" placeholder="Email" size="25" required><br><br>
		<span>Address:</span>
		<input type="text" name="address" placeholder="Address" size="25" required><br><br>
		<span>TEL:</span>
		<input type="tel" name="tel" placeholder="telephonenumber" size="25" maxlength="20" required><br><br>
		<span>Password:</span>
		<input type="password" name="password" placeholder="password" size="25" required><br><br>
		<input type="submit" name="register" value="Register" class="register">
		<br>
		<?php

		if(isset($_POST["register"])){

			$Username="";
			$Password="";
			$name=$_POST["username"];
			$email=$_POST["email"];
			$address=$_POST["address"];
			$tel=$_POST["tel"];
			$password=$_POST["password"];
			$_SESSION["username"] = $name;
			$sql = "SELECT * FROM userlist WHERE Username ='$name' AND Password = '$password'";

			$result = $conn->query($sql);
			if($result->num_rows>0){
				while($rows=$result->fetch_assoc()){
					$id=$rows["ID"]; 
					$Username=$rows["Username"];
					$Password=$rows["Password"];
					$_SESSION["id"] = $id;
				}
				$_SESSION["username"] = $name;
			}else{
				echo "";
			}


			if($name != $Username && $password != $Password){
		
				$sql = "INSERT INTO userlist (Username, Email, Address, Tel, Password)VALUES ('$name','$email','$address','$tel','$password')";

				if ($conn->query($sql) === TRUE) {
				    echo "<p class='complete'>Your account has been registered.</p>";
				}else {
				    echo "Error: " . $sql . "<br>" . $conn->error;
				}
			}else/*if($name == $Username && $password == $Password)*/{
				echo "<span class='error'>Your account has already been registered.</span>";

			}
		}
		?>
		<br>
		</form>
			<form action="loginpage.php" method="POST" class="loginto">
			<input type="submit" value="Back to LOGIN" class="login">
			</form>
		</div>
	</body>
</html>