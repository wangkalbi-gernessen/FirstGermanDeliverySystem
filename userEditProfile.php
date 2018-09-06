<?php
session_start();
include 'FirstGermanconnect.php';
$id = $_SESSION["id"];
$sql = "SELECT * FROM userlist WHERE ID='$id'";
$result = $conn->query($sql);

	if($result->num_rows>0){
		while($rows=$result->fetch_assoc()){

		$username=$rows["Username"];
		$email=$rows["Email"];
		$address=$rows["Address"];
		$tel=$rows["Tel"];
		$password=$rows["Password"];


		}
	}else{
		echo "0 results";
	}	
?>
<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8">
		<title>Edit Profile</title>
		<link rel="stylesheet" href="userEditProfile.css">
	</head>
	<body>
		<header>
			<table border="1">
			<tr>
			<td><img src="germany-flag-8x5.gif"></td>
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
		<h1>User's edition page</h1>
		<p>Please edit your profile here.<br>
		   After you edited, please click on "Edition".</p>
		<div class="editform">
		<form action="userEditProfile.php" method="POST">
		<div class="username">	
		<span>Username:</span>
		<input type="text" name="username" value="<?php echo $username; ?>" size="20" >
		</div>
		<div class="email">
		<span>Email:</span>
		<input type="text" name="email" value="<?php echo $email; ?>" size="30">
		</div>
		<div class="address">
		<span>Address:</span>
		<input type="text" name="address" value="<?php echo $address; ?>" size="35">
		</div>
		<div class="tel">
		<span>TEL:</span>
		<input type="text" name="tel" value="<?php echo $tel; ?>" >
		</div>
		<div class="password">
		<span>Password:</span>
		<input type="password" name="password" value="<?php echo $password; ?>" >
		</div>
		<div class="edition">
		<input type="submit" name="edit" value="Edition">
		</div>
		<?php 
		if(isset($_POST["edit"])){

			$id = $_SESSION["id"];
			$name=$_POST["username"];
			$mail=$_POST["email"];
			$add=$_POST["address"];
			$tele=$_POST["tel"];
			$pass=$_POST["password"];

			$sql = "UPDATE userlist SET Username='$name',Email='$mail',Address='$add',Tel='$tele',Password='$pass' WHERE ID='$id'";
			if($conn->query($sql) === TRUE){
				echo "<p class='complete'>Your edition was accepted.</p>";
				echo "<div class='home'>";
				echo "<button formaction='usermenupage.php'>Back to HOME</button>";
				echo "</div>";
			}else{
				echo "Error: ".$conn->error;
			}
		}
		?>
		</form>
		
		</div>	
	</body>
</html>