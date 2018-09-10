<?php
include 'FirstGermanconnect.php';
$sql_image="SELECT * FROM image";
$result_image=$conn->query($sql_image);
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>EditPicture</title>
	<link rel="stylesheet" href="editmenu2.css">
</head>
<body>
<header>
	<table border="1">
	<tr>
	<td><img src="foodimage/germany-flag-8x5.gif"></td>
	<td><a href="editmenupage.php">Insert Menu</a></td>
	<td><a href="editmenu2.php">Edit Menu</td>
	<td><a href="userlist.php">User list</a></td>
	<td><a href="adminOrderRecordList.php">Order Record list</a></td>
	<td><a href="logoutpage.php" onclick="return confirm('Will you log out?');">Logout</a></td>
	</tr>
	</table>
</header>
<h1>Edit Menu</h1>
<?php
$num=1;
if($result_image->num_rows>0){
	while($rows=$result_image->fetch_assoc()){

	$id=$rows["ID"];
	$img=$rows["Img"];
	$product=$rows["Product"];
	$price=$rows["Price"];

	echo "<div class='main2-2'>";
		echo "<form action='editmenu2result.php' method='POST' enctype='multipart/form-data'>";
		echo "<div class='image'>";
		echo "<input type='file' name='edit$num' id='editor$num'>";
		echo "</div>";
		echo "<div class='product'>";
		echo "<input type='text' name='product$num' value='$product' size='25' required>";
		echo "</div>";
		echo "<div class='price'>";
		echo "<input type='text' name='price$num' value='$price' pattern='[1-9][1-9][0-9]' size='25' required>";
		echo "</div>";
		echo "<input type='hidden' name='id$num' value='$id'>";	
	echo "</div>";
	$num++;
	}
}else{
	echo "";
}	
?>	
<div class="main4">
<input type="submit" name="edit" value="edit">
</div>
</form>
</body>
</html>