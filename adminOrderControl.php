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
	<p>Please select</p>
	<form action="orderstatusinsert.php" method="POST">
	<div class="select">
	<select name="orderstatus" required=>
	<option value="cookingtime">Beginning time of cooking</option>
	<option value="finished">Finishing time of cooking</option>
	<option value="start">Departure time of delivery</option>
	<option value="delivered">Arrival time of delivery</option>
	</select><br>
	</div>
	<div class="submit">
	<input type="hidden" name="orderno" value="<?php echo $number; ?>" > 
	<input type="submit" name="completion" value="completion" class="completion">
	</form>
	<form action="adminOrderRecordList.php" method="POST">
	<button>Back to<br> order record list</button>
	</div>
	</form>	
	</body>
</html>