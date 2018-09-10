<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8">
		<title>UserMenu</title>
		<link rel="stylesheet" href="editmenupage.css">
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
	<h1>Insert menu</h1>
	<form action="editmenuinsert.php" method="POST" enctype="multipart/form-data">
	<div class="main2">
		<div class="main2-1">
		<input type="file" name="fileToUpload" id="inputfile" required>
		</div>
		<!--
		<div class="main2-1">
		<input type="file" name="nuremberg">
		</div>
		<div class="main2-1">
		<input type="file" name="berlin">
		</div>
		<div class="main2-1">
		<input type="file" name="thuringer">
		</div>-->
		<div class="main2-2">
		<input type="text" name="schnit" placeholder="Product" size="25" required>
		</div>
		<!--
		<div class="main2-2">
		<input type="text" name="nurnberg" placeholder="Product" size="25" >
		</div>
		<div class="main2-2">
		<input type="text" name="westkreuz" placeholder="Product" size="25" >
		</div>
		<div class="main2-2">
		<input type="text" name="jena" placeholder="Product" size="25">
		</div>-->
		<div class="main2-3">
		<input type="text" name="cutlet" placeholder="Price" pattern="[1-9][0-9][0-9]" size="25" required>
		</div>
		<!--
		<div class="main2-3">
		<input type="text" name="furth" placeholder="Price" size="25" >
		</div>
		<div class="main2-3">
		<input type="text" name="sudkreuz" placeholder="Price" size="25" >
		</div>
		<div class="main2-3">
		<input type="text" name="weimar" placeholder="Price" size="25" >
		</div>
	</div>
	<div class="main3">
		<div class="main3-1">
		<input type="file" name="cologne">
		</div>
		<div class="main3-1">
		<input type="file" name="bamberg">
		</div>
		<div class="main3-1">
		<input type="file" name="frankfurt">
		</div>
		<div class="main3-1">
		<input type="file" name="wien">
		</div>
		<div class="main3-2">
		<input type="text" name="koln" placeholder="Product" size="25">
		</div>
		<div class="main3-2">
		<input type="text" name="bayreuth" placeholder="Product" size="25">
		</div>
		<div class="main3-2">
		<input type="text" name="mainz" placeholder="Product" size="25">
		</div>
		<div class="main3-2">
		<input type="text" name="donau" placeholder="Product" size="25">
		</div>
		<div class="main3-3">
		<input type="text" name="rhein" placeholder="Price" size="25">
		</div>
		<div class="main3-3">
		<input type="text" name="wurzburg" placeholder="Price" size="25">
		</div>
		<div class="main3-3">
		<input type="text" name="wiesbaden" placeholder="Price" size="25">
		</div>
		<div class="main3-3">
		<input type="text" name="bratislava" placeholder="Price" size="25">
		</div>-->
	</div>		
	<div class="main4">
	<input type="submit" name="submit" value="submit">
	</div>
	</form>
	</body>
</html>