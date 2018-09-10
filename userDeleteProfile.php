<?php
session_start();
include 'FirstGermanconnect.php';
?>
<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8">
		<title>DELETE</title>
		<link rel="stylesheet" href="userDeleteProfile.css">
	</head>
	<body>
	<header>
	<table border="1">
	<tr>
	<td><img src="foodimage/germany-flag-8x5.gif"></td>
	<form action="userEditProfile.php" method="POST">
	<td><a href="userEditProfile.php">Edit profile</a></td>
	</form>
	<td><a href="userDeleteProfile.php">Delete profile</a></td>
	<td><a href="userOrderRecordList.php">Order Record list</a></td>
	<form action="logoutpage.php" method="POST">
	<td><a href="logoutpage.php" onclick="return confirm('Will you log out?');">Logout</a></td>
	</form>
	</tr>
	</table>
	</header>
	<h1>User account deletion</h1>
	<p>Please enter username and password</p>
	<div class="accord">
	<form action="userDeleteProfile.php" method="POST">
	<div class="username">
	<span>Username:</span>
	<input type="text" name="username" size="25" required>
	</div>
	<div class="password">
	<span>Password:</span>
	<input type="password" name="password" size="25" required>
	</div>
	<div class="delete">
	<input type="submit" name="deletion" value="deletion" class="deletion">
	</div>
	</form>


<?php
if(isset($_POST["deletion"])){


	$Username="";
	$Password="";
	$username=$_POST["username"];
	$password=$_POST["password"];
	$id=$_SESSION["id"];
	$sql= "SELECT * FROM userlist WHERE Username='$username' AND Password='$password'";
	$result = $conn->query($sql);

	if($result->num_rows>0){
		while($rows=$result->fetch_assoc()){
			
			$Username=$rows["Username"];
			$Password=$rows["Password"];		
		}
	}else{
		echo "";
	}


	

	if($username == $Username && $password == $Password ){

		
		$sql="DELETE FROM userlist WHERE ID='$id'";

		if($conn->query($sql) === TRUE){
			echo "<p class='complete'>delete ok<br>";
			echo "Please close this screen</p>";
		}else{
			echo "<p class='error'>Your username or password is wrong.</p>".$conn->error;
		}

	}else{
		echo "Your username or password is wrong.";
	}
}
?>
</div>
</body>
</html>