<?php 
session_start();
include 'FirstGermanconnect.php';
$id=$_SESSION["id"];

if(isset($_POST["status"])){
	$orderno=$_POST["orderno"];
}

$sql="SELECT Start,Finish,Deliver,Delivered FROM orderlist WHERE OrderNumber='$orderno' AND ID='$id'";
$result = $conn->query($sql);

if($result->num_rows>0){
	while($rows=$result->fetch_assoc()){

		$start=$rows["Start"];
		$finish=$rows["Finish"];
		$deliver=$rows["Deliver"];
		$delivered=$rows["Delivered"];

	}
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>Admin Order Status</title>
	<link rel="stylesheet" href="userOrderStatus.css">
</head>
<body>
<h1>Order Status</h1>
<div class="orderrecord">
	<p>Beginning time of cooking:  <?php echo $start; ?></p>
	<p></p>
	<p>Finishing time of cooking:  <?php  echo $finish; ?></p>
	<p>Departure time of delivery:  <?php echo $deliver; ?></p>
	<p>Arrival time of delivery:  <?php echo $delivered; ?></p>
	<div class="kiste">
	<button>
	<a href="userOrderRecordList.php">Back to<br> Order List</a></button>
	</div>
</div>
</body>
</html>