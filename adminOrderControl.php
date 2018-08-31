<?php
include 'FirstGermanconnect.php';
$number=$_POST["ordernummer"];
$sql= "SELECT * FROM orderlist WHERE OrderNumber='$number'";
$result=$conn->query($sql);
if($result->num_rows>0){
	while($rows=$result->fetch_assoc()){
		$rows["OrderNumber"];
	}
}
?>

<!DOCTYPE html>
<html land="en">
	<head>
		<meta charset="utf-8">
		<title>Order control</title>
		<link rel="stylesheet" href="adminOrderControl.css">
	</head>
	<body>
	<h1>Order Control</h1>
	<form action="orderstatusinsert.php" method="POST">
	<select name="orderstatus">
	<option></option>
	<option value="cookingtime">Cooking time</option>
	<option value="finished">Cooking finished</option>
	<option value="start">Start to deliver</option>
	<option value="delivered">Delivered</option>
	</select><br>
	<input type="hidden" name="orderno" value="<?php echo $number; ?>" > 
	<input type="submit" name="completion" value="completion">
	</form>	
	</body>
</html>