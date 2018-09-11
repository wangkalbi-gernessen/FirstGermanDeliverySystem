<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8">
		<title>UserMenu</title>
		<link rel="stylesheet" href="editmenupage.css">
	</head>
	<body>
	<header>
		<img src="foodimage/germany-flag-8x5.gif">
		<ul>
		<li><a href="adminmenupage.php" class="lions">Menu Page</a></li>
		<li><a href="editmenu2.php"  class="hawks">Edit Menu</li>
		<li><a href="userlist.php"  class="dragons">User list</a></li>
		<li><a href="adminOrderRecordList.php"  class="giants">Order Record list</a></li>
		<li><a href="logoutpage.php" onclick="return confirm('Will you log out?');"  class="carp">Logout</a></li>
		</ul>
	</header>
	<h1>Insert menu</h1>
	<form action="editmenuinsert.php" method="POST" enctype="multipart/form-data">
	<div class="main2">
		<div class="main2-1">
		<input type="file" name="fileToUpload" id="inputfile" required>
		</div>
		<div class="main2-2">
		<input type="text" name="schnit" placeholder="Product" size="25" required>
		</div>
		<div class="main2-3">
		<input type="text" name="cutlet" placeholder="Price" pattern="[1-9][0-9][0-9]" size="25" required>
		</div>
	</div>		
	<div class="main4">
	<input type="submit" name="submit" value="submit">
	</div>
	</form>
	</body>
</html>