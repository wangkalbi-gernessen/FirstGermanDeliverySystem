<?php
session_start();
include 'FirstGermanconnect.php';

if($_SESSION["username"]==""){

	header("location:loginpage.php");

}
$sql="SELECT * FROM userlist";
$result=$conn->query($sql);
?>
<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8">
		<title>UserMenu</title>
		<link rel="stylesheet" href="adminmenupage.css">
	</head>
	<body>
	<header>
		<table border="1">
		<tr>
		<td><img src="germany-flag-8x5.gif"></td>
		<td><a href="editmenupage.php">Insert Menu</a></td>
		<td><a href="editmenu2.php">Edit Menu</td>
		<td><a href="userlist.php">User list</a></td>
		<td><a href="adminOrderRecordList.php">Order Record list</a></td>
		<td><a href="logoutpage.php" onclick="return confirm('Will you log out?');">Logout</a></td>
		</tr>
		</table>
	</header>
	<div class="main1">
	<h1>Welcome to <span class="black">First German</span> <span class="red">Delivery</span> <span class="yellow">System</span></h1>
	<p>These are list of menu.<br>
	   If you place an order, please click on "order".
	</p>
	</div>
	<div class="main2">
	<?php
	$sql_image="SELECT * FROM image";
	$result_image=$conn->query($sql_image);

	if($result_image->num_rows>0){
		while($rows=$result_image->fetch_assoc()){

		$id=$rows["ID"];
		$img=$rows["Img"];
		$product=$rows["Product"];
		$price=$rows["Price"];

		echo "<div class='main2-2'>";
			echo "<div class='image'>";
			echo "<img src='$img'>";
			echo "</div>";
			echo "<div class='product'>";
			echo $product;
			echo "</div>";
			echo "<div class='price'>";
			echo $price." PHP";
			echo "</div>";
		echo "</div>";

		}
	}else{
		echo "";
	}		
	?>	
	</div>
	</body>
</html>