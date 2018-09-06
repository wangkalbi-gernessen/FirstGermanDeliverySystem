<?php
session_start();
include 'FirstGermanconnect.php';
$id=$_SESSION["id"];
$sql= "SELECT * FROM orderlist WHERE ID='$id'";
$result=$conn->query($sql);
?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>OrderRecord</title>
	<link rel="stylesheet" href="userOrderRecordList.css">
</head>
<body>
<header>
<table border="1" class="tableFirst">
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

<h1>Order Record List</h1>	
<p>These are your previous order's records.<br>If you want to check the status of order, <br>please click on "status".</p>

<table border="1" cellspacing="2" cellpadding="2" bgcolor="white" class="tableSecond">
<tr bgcolor="#85E024">
<td class="sub">OrderNumber</td>
<td class="sub">ID</td>
<td class="sub">Name</td>
<td class="sub">Product</td>
<td class="sub">Price</td>
<td class="sub">DateTime</td>
<td class="sub">Status</td>
</tr>
<?php
if($result->num_rows>0){
	while($rows=$result->fetch_assoc()){
		
		$orderno=$rows["OrderNumber"];
		echo "<form action='userOrderStatus.php' method='POST'>";
		echo "<tr bgcolor='pink'>";
		echo "<td>".$orderno."</td>";
		echo "<td>".$id."</td>";
		echo "<td>".$rows["Name"]."</td>";
		echo "<td>".$rows["Product"]."</td>";
		echo "<td>".$rows["Price"]."</td>";
		echo "<td>".$rows["DateTime"]."</td>";
		echo "<td>";
		echo "<input type='submit' name='status' value='status' class='bild'>";
		echo "<input type='hidden' name='orderno' value='$orderno'>";
		echo "</td>";
		echo "</tr>";
		echo "</form>";
	}

}else{
	echo "";
}
?>
</table>
</body>
</html>