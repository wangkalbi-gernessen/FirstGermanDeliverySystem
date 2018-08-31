<?php 
include 'FirstGermanconnect.php';

if(isset($_POST["status"])){

	$orderno=$_POST["orderno"];
}else{
	$orderno=$_GET["OrderNumber"];
}
	$sql="SELECT Start,Finish,Deliver,Delivered FROM orderlist WHERE OrderNumber='$orderno'";
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
		<link rel="stylesheet" href="adminOrderStatus.css">
	</head>
	<body>
	<h1>Order Status</h1>
	<div class="orderrecord">
	<p>Cooking time:  <?php echo $start; ?></p>
	<p></p>
	<p>Cooking finished:  <?php  echo $finish; ?></p>
	<p>Start to deliver:  <?php echo $deliver; ?></p>
	<p>Delivered:  <?php echo $delivered; ?></p>
	<button>
	<a href="adminOrderRecordList.php">Back to Order List</a>
	</div>
	</body>
</html>