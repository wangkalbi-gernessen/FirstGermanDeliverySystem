 <?php
include 'FirstGermanconnect.php';
$orderno=$_POST["orderno"];
$orderstatus=$_POST["orderstatus"];

if(isset($_POST["completion"])){

	if($orderstatus == "cookingtime"){

	 	date_default_timezone_set('Asia/Manila');
		$cook=date('Y/m/d G:i:s');

		$sql_cook="UPDATE orderlist SET Start='$cook' WHERE OrderNumber='$orderno'";
		if ($conn->query($sql_cook) === TRUE) {
		header("location:adminOrderStatus.php?OrderNumber=$orderno");
		}else{
		    echo "Error: " . $sql_cook . "<br>" . $conn->error;
		}

	 }



	if($orderstatus == "finished"){

		date_default_timezone_set('Asia/Manila');
		$finish=date('Y/m/d G:i:s');

		$sql_finish="UPDATE orderlist SET Finish='$finish' WHERE OrderNumber='$orderno'";
		if ($conn->query($sql_finish) === TRUE) {
	    header("location:adminOrderStatus.php?OrderNumber=$orderno");
		}else{
		    echo "Error: " . $sql_finish . "<br>" . $conn->error;
		}
	 	
	 }


	if($orderstatus == "start"){

	 	date_default_timezone_set('Asia/Manila');
		$start=date('Y/m/d G:i:s');

		$sql_start="UPDATE orderlist SET Deliver='$start' WHERE OrderNumber='$orderno'";
		if ($conn->query($sql_start) === TRUE) {
	    header("location:adminOrderStatus.php?OrderNumber=$orderno");
		}else{
		    echo "Error: " . $sql_start . "<br>" . $conn->error;
		}
	 }


	if($orderstatus == "delivered"){

	 	date_default_timezone_set('Asia/Manila');
		$delivered=date('Y/m/d G:i:s');

		$sql_delivered="UPDATE orderlist SET Delivered='$delivered' WHERE OrderNumber='$orderno'";
		if ($conn->query($sql_delivered) === TRUE) {
	    header("location:adminOrderStatus.php?OrderNumber=$orderno");
		}else{
		    echo "Error: " . $sql_delivered . "<br>" . $conn->error;
		}
	 	
	 } 

}
?>