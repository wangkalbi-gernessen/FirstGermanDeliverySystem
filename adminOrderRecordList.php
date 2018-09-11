<?php
include 'FirstGermanconnect.php';
$sql= "SELECT * FROM orderlist";
$result=$conn->query($sql);
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>OrderRecord</title>
	<link rel="stylesheet" href="adminOrderRecordList.css">
</head>
<body>
<header>
	<img src="foodimage/germany-flag-8x5.gif">
	<ul>
	<li><a href="adminmenupage.php" class="lions">Menu Page</a></li>
	<li><a href="editmenupage.php"  class="hawks">Insert Menu</li>
	<li><a href="editmenu2.php"  class="dragons">Edit Menu</a></li>
	<li><a href="userlist.php"  class="giants">User List</a></li>
	<li><a href="logoutpage.php" onclick="return confirm('Will you log out?');"  class="carp">Logout</a></li>
	</ul>
</header>
<div class="main1">
<h1>Order Record List</h1>	
<p class="main1-2">These are all previous order's records.<br>If you want to check the status of order, <br>please click on "status".</p>
</div>
<table border="1" cellspacing="1" cellpadding="1" bgcolor="white" class="table2">
<tr bgcolor="yellow">
<td><strong>OrderNumber</strong></td>
<td><strong>ID</strong></td>
<td><strong>Name</strong></td>
<td><strong>Product</strong></td>
<td><strong>Price</strong></td>
<td><strong>DateTime</strong></td>
<td><strong>Status</strong></td>
<td><strong>Control</strong></td>
<?php
if($result->num_rows>0){
	while($rows=$result->fetch_assoc()){
		$orderno=$rows["OrderNumber"];
		$id=$rows["ID"];
		echo "<form action='adminOrderStatus.php' method='POST'>";
		echo "<tr>";
		echo "<td>".$orderno."</td>";
		echo "<td>".$id."</td>";
		echo "<td>".$rows["Name"]."</td>";
		echo "<td>".$rows["Product"]."</td>";
		echo "<td>".$rows["Price"]."</td>";
		echo "<td>".$rows["DateTime"]."</td>";
		echo "<td>";
		echo "<input type='hidden' name='orderno' value='$orderno'>";
		echo "<input type='submit' name='status' value='status' class='status'>";
		echo "</td>";
		echo "</form>";
		echo "<form action='adminOrderControl.php' method='POST'>";
		echo "<td>";
		echo "<input type='hidden' name='ordernummer' value='$orderno'>";
		echo "<input type='submit' name='control' value='control' class='control'>";
		echo "</td>";
		echo "</form>";			
	}
}else{
	echo "0 results";
}
?>
</table>
</body>
</html>