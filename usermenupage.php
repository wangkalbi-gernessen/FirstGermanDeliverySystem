<?php
session_start();
include 'FirstGermanconnect.php';
if($_SESSION["username"]==""){
	header("location: loginpage.php");
}
$sql="SELECT * FROM userlist";
$result=$conn->query($sql);
?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>UserMenu</title>
	<link rel="stylesheet" href="usermenupage.css">
</head>
<body>
<header>
	<img src="foodimage/germany-flag-8x5.gif">
	<ul>
	<li><a href="userEditProfile.php" class="lions">Edit Profile</a></li>
	<li><a href="userDeleteProfile.php"  class="hawks">Delete Profile</li>
	<li><a href="userOrderRecordList.php"  class="dragons">Order Record List</a></li>
	<li><a href="logoutpage.php" onclick="return confirm('Will you log out?');"  class="carp">Logout</a></li>
	</ul>
</header>
<div class="main1">
<?php echo "<h2>Your account name is <span class='account'>".$_SESSION["username"]."</span></h2>"; ?> 
<h1>Welcome to <span class="black">First German</span> <span class="red">Delivery</span> <span class="yellow">System</span></h1>
<p>These are list of menu.<br>
   If you place an order, please click on "order".
</p>
</div>

<div class="main2">
<form action="userOrderConfirmationpage.php" method="POST">
<?php
$sql_image="SELECT * FROM image";
$result_image=$conn->query($sql_image);

$num=1;
if($result_image->num_rows>0){
	while($rows=$result_image->fetch_assoc()){

	$id=$rows["ID"];
	$img=$rows["Img"];
	$product=$rows["Product"];
	$price=$rows["Price"];

	echo "<div class='main2-2'>";
		echo "<div class='image'>";
		echo "<img src='foodimage/$img'>";
		echo "</div>";
		echo "<input type='hidden' name='image$num' value='$img'>";
		echo "<div class='product'>";
		echo $product;
		echo "</div>";
		echo "<input type='hidden' name='product$num' value='$product'>";
		echo "<input type='hidden' name='id$num' value='$id'>";
		echo "<div class='price'>";
		echo $price." PHP";
		echo "</div>";
		echo "<input type='hidden' name='price$num' value='$price'>";
		echo "<div class='option'>";
		echo "<select name='schnitzel$num' required>";
		echo "<option value='0'></option>";
		for($x=1;$x<=5;$x++){
		echo "<option value='$x'>".$x."</option>";
		}
		echo "</select>";
		echo "</div>";
	echo "</div>";
	$num ++;  
	}
}else{
	echo "";
}		
?>
<br>
<div class="main4">
<input type="submit" name="order" value="order">
</form>
</div>

<div class="main5">
<address>
<h1>Delivery System information of contact</h1>
<p><strong>Name:</strong>  First German Delivery System</p>
<p><strong>Address:</strong>  Ronaldo str. 3-9 Cebu City, Philippine</p>
<p><strong>TEL:</strong>  032-357-2240</p>
</address>
</div>

<footer>
Copyright
</footer>
</body>
</html>