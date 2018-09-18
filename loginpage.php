<?php
session_start();
include 'FirstGermanconnect.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>Login</title>
	<link rel="stylesheet" href="loginpage.css">
</head>
<body>
<h1>~First German Delivery System~</h1>
<br>
<p>Even if you aren't in Germany<br>
   you can enjoy genuine german cuisine at your home,<br>
   if you wait for only 90 minutes.	
</p>
<br>

<!Following is white part at the center>



<br>
<div class="loginform">
<h2>Login Page</h2>
<form action="loginpage.php" method="POST">
<span>Username:</span>
<input type="text" name="username" size="25" required><br><br>
<span>Password:</span>
<input type="password" name="password" size="25"><br required><br>
<label><input type="radio" name="guest" value="admin" required>Admin</label><br>
<label><input type="radio" name="guest" value="user" required=>User<label><br><br>
<input type="submit" name="login" value="Login" class="login"><br>

	
<?php
if(isset($_POST["login"])){

	$Username="";
	$Password="";
	$name=$_POST["username"];
	$word=$_POST["password"];
	$owner=$_POST["guest"];
	$_SESSION["username"] = $name;


	$sql= "SELECT * FROM userlist WHERE Username='$name' AND Password='$word'";
	$result = $conn->query($sql);
	if($result->num_rows>0){
		while($rows=$result->fetch_assoc()){
			$id=$rows["ID"]; 
			$Username=$rows["Username"];
			$Password=$rows["Password"];
			$_SESSION["id"] = $id;
		}

		

	}else{

		echo "";
		
	}
	
  
	if($owner == "admin"){
		if(($name == "Kazunobu Someya") && ($word == "stadt54")){
			
		
			header("location:adminmenupage.php");

		}else{

			echo "<span class='hobby'>Your username or password is wrong</span>";
		}
		
		
	}elseif($owner == "user"){
		
		if(($name == $Username)  &&  ($word == $Password)){

		 	header("location:usermenupage.php");
		
			# code...
		}else{

			echo "<span class='error'>Your username or password is wrong.</span>";
			
		}
	}
}
?>
<br>
</form>
<form action="registeruser.php" method="POST">
<button >To <br>Register Page</button>
</form>
</div>
</body>
</html>