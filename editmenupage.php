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
		<td><img src="germany-flag-8x5.gif"></td>
		<td><a href="editmenupage.php">Insert Menu</a></td>
		<td><a href="editmenu2.php">Edit Menu</td>
		<td><a href="userlist.php">User list</a></td>
		<td><a href="adminOrderRecordList.php">Order Record list</a></td>
		<td><a href="logoutpage.php" onclick="return confirm('Will you log out?');">Logout</a></td>
		</tr>
		</table>
	</header>
	<h1>Insert menu</h1>
	<form action="editmenuinsert.php" method="POST">
	<div class="main2">
		<div class="main2-1">
		<input type="file" name="schnitzel">
		</div>
		<div class="main2-1">
		<input type="file" name="nuremberg">
		</div>
		<div class="main2-1">
		<input type="file" name="berlin">
		</div>
		<div class="main2-1">
		<input type="file" name="thuringer">
		</div>
		<div class="main2-2">
		<input type="text" name="schnit" placeholder="Product" required>
		</div>
		<div class="main2-2">
		<input type="text" name="nurnberg" placeholder="Product" required>
		</div>
		<div class="main2-2">
		<input type="text" name="westkreuz" placeholder="Product" required>
		</div>
		<div class="main2-2">
		<input type="text" name="jena" placeholder="Product" required>
		</div>
		<div class="main2-3">
		<input type="text" name="cutlet" placeholder="Price" required>
		</div>
		<div class="main2-3">
		<input type="text" name="furth" placeholder="Price" required>
		</div>
		<div class="main2-3">
		<input type="text" name="sudkreuz" placeholder="Price" required>
		</div>
		<div class="main2-3">
		<input type="text" name="weimar" placeholder="Price" required>
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
		<input type="text" name="koln" placeholder="Product" required>
		</div>
		<div class="main3-2">
		<input type="text" name="bayreuth" placeholder="Product" required>
		</div>
		<div class="main3-2">
		<input type="text" name="mainz" placeholder="Product" required>
		</div>
		<div class="main3-2">
		<input type="text" name="donau" placeholder="Product" required>
		</div>
		<div class="main3-3">
		<input type="text" name="rhein" placeholder="Price" required>
		</div>
		<div class="main3-3">
		<input type="text" name="wurzburg" placeholder="Price" required>
		</div>
		<div class="main3-3">
		<input type="text" name="wiesbaden" placeholder="Price" required>
		</div>
		<div class="main3-3">
		<input type="text" name="bratislava" placeholder="Price" required>
		</div>
	</div>		
	<div class="main4">
	<input type="submit" name="submit" value="submit">
	</div>
	</form>
	</body>
</html>