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
	<table border="1" class="table1">
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
	<h1>Order Record List</h1>	
	<p>These are all previous order's records.<br>If you want to check the status of order, <br>please click on "status".</p>
	</div>
	<table border="1" cellspacing="2" cellpadding="2" bgcolor="white" class="table2">
	<tr>
	<td>OrderNumber</td>
	<td>ID</td>
	<td>Name</td>
	<td>Product</td>
	<td>Price</td>
	<td>DateTime</td>
	<td>Status</td>
	<td>Control</td>
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
			echo "<input type='submit' name='status' value='status'>";
			echo "</td>";
			echo "</form>";
			echo "<form action='adminOrderControl.php' method='POST'>";
			echo "<td>";
			echo "<input type='hidden' name='ordernummer' value='$orderno'>";
			echo "<input type='submit' name='control' value='control'>";
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