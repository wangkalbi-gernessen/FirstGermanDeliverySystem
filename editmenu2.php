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
	<img src="foodimage/germany-flag-8x5.gif">
	<ul>
	<li><a href="adminmenupage.php" class="lions">Menu Page</a></li>
	<li><a href="editmenupage.php"  class="hawks">Insert Menu</li>
	<li><a href="userlist.php"  class="dragons">User list</a></li>
	<li><a href="adminOrderRecordList.php"  class="giants">Order Record list</a></li>
	<li><a href="logoutpage.php" onclick="return confirm('Will you log out?');"  class="carp">Logout</a></li>
	</ul>
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
		echo "<input type='text' name='price$num' value='$price' pattern='[1-9][0-9][0-9]' size='25' required>";
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