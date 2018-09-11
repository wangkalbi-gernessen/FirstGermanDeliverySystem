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
	<img src="foodimage/germany-flag-8x5.gif">
	<ul>
	<li><a href="adminmenupage.php" class="lions">Menu Page</a></li>
	<li><a href="editmenupage.php"  class="hawks">Insert Menu</li>
	<li><a href="editmenu2.php"  class="dragons">Edit Menu</a></li>
	<li><a href="adminOrderRecordList.php"  class="giants">Order Record list</a></li>
	<li><a href="logoutpage.php" onclick="return confirm('Will you log out?');"  class="carp">Logout</a></li>
	</ul>
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