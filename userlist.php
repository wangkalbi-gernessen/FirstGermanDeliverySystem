<?php
include 'FirstGermanconnect.php';

$sql = "SELECT * FROM userlist";
$result = $conn->query($sql);
?>

<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8">
		<title>Userlist</title>
		<link rel="stylesheet" href="userlist.css">
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
		<h1>User List</h1>
		<form action="adminmenupage.php" method="POST">
			<button>Back to HOME</button>
		</form>
	</div>
	<table border="1" class="table2">
	<tr bgcolor="#85E024">
	<td class="list">ID</td>
	<td class="list">Username</td>
	<td class="list">Email address</td>
	<td class="list">Address</td>
	<td class="list">Telephone</td>
	<td class="list">Password</td>
	</tr>
	<?php
	if($result->num_rows>0){
		while($rows=$result->fetch_assoc()){
			$id=$rows["ID"];
			echo "<tr>";
			echo "<td class='list2'>".$id."</td>";
			echo "<td class='list2'>".$rows["Username"]."</td>";
			echo "<td class='list2'>".$rows["Email"]."</td>";
			echo "<td class='list2'>".$rows["Address"]."</td>";
			echo "<td class='list2'>".$rows["Tel"]."</td>";
			echo "<td class='list2'>".$rows["Password"]."</td>";
			echo "</tr>";
		}
	}else{
		echo "0 results";
	}
	?>
	</table>
	</form>
	</body>
</html>