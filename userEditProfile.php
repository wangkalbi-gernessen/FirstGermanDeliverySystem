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
	<img src="foodimage/germany-flag-8x5.gif">
	<ul>
	<li><a href="usermenupage.php" class="lions">Menu Page</a></li>
	<li><a href="userDeleteProfile.php"  class="hawks">Delete Profile</li>
	<li><a href="userOrderRecordList.php"  class="dragons">Order Record List</a></li>
	<li><a href="logoutpage.php" onclick="return confirm('Will you log out?');"  class="carp">Logout</a></li>
	</ul>
</header>
<h1>User's edition page</h1>
<p>Please edit your profile here.<br>
   After you edited, please click on "Edition".</p>
<div class="editform">
<form action="userEditProfile.php" method="POST">
<div class="username">	
<span>Username:</span>
<input type="text" name="username" value="<?php echo $username; ?>" pattern="[a-zA-Z\s]{2,20}"  minlength="2" maxlength="20" size="25" required>
</div>
<div class="email">
<span>Email:</span>
<input type="email" name="email" value="<?php echo $email; ?>" size="25" maxlength="60" required>
</div>
<div class="address">
<span>Address:</span>
<input type="text" name="address" value="<?php echo $address; ?>" minlength="20" maxlength="100" pattern="[a-zA-Z0-9,-\s]{20,100}" title="Please input within 20 to 100 characters." required>
</div>
<div class="tel">
<span>TEL:</span>
<input type="tel" id="phoneno" name="tel" placeholder="032-XXXXXXX" size="25" maxlength="20" pattern="\d{3}-\d{3}-\d{4}" required value="<?php echo $tel; ?>" >
</div>
<div class="password">
<span>Password:</span>
<input type="password" name="password" value="<?php echo $password; ?>" size="25" pattern="[a-zA-Z0-9]{5,10}" title="Please input within 5 to 10 small characters." required >
</div>
<div class="edition">
<input type="submit" name="edit" value="Edition">
</div>
</form>
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
		
		header("location:userEditProfile.php");
		/*echo "<p class='complete'>Your edition was accepted.</p>";
		echo "<div class='home'>";
		echo "<form action='usermenupage.php' method='POST'>";
		echo "<button>Back to HOME</button>";
		echo "</form>";
		echo "</div>";*/
	}else{
		echo "Error: ".$conn->error;
	}
}
?>
</form>

</div>	
</body>
</html>