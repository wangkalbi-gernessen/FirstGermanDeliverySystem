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
	<img src="foodimage/germany-flag-8x5.gif">
	<ul>
	<li><a href="usermenupage.php" class="lions">Menu Page</a></li>
	<li><a href="userEditProfile.php"  class="hawks">Edit Profile</li>
	<li><a href="userOrderRecordList.php"  class="dragons">Order Record List</a></li>
	<li><a href="logoutpage.php" onclick="return confirm('Will you log out?');"  class="carp">Logout</a></li>
	</ul>
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