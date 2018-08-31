<?php
include 'FirstGermanconnect.php';

$order1=$_POST["orderdata1"];
$order2=$_POST["orderdata2"];
$order3=$_POST["orderdata3"];
$order4=$_POST["orderdata4"];
$order5=$_POST["orderdata5"];
$order6=$_POST["orderdata6"];
$order7=$_POST["orderdata7"];
$order8=$_POST["orderdata8"];



if(isset($_POST["complete"])){
	

	if(!empty($order1)){

		if ($conn->query($order1) === TRUE) {
		echo "<span>Your order was accepted</span>";
		echo "<br>";
		echo "<a href='usermenupage.php'>Back to HOME</a>";
		}else {
		    echo "Error: " . $order1 . "<br>" . $conn->error;
		}
	}


	if(!empty($order2)){

		if ($conn->query($order2) === TRUE) {
	    echo "<span>Your order was accepted</span>";
	    echo "<br>";
		echo "<a href='usermenupage.php'>Back to HOME</a>";
		}else {
		    echo "Error: " . $order2 . "<br>" . $conn->error;
		}
	}


	if(!empty($order3)){

		if ($conn->query($order3) === TRUE) {
	    echo "<span>Your order was accepted</span>";
	    echo "<br>";
		echo "<a href='usermenupage.php'>Back to HOME</a>";
		}else {
		    echo "Error: " . $order3 . "<br>" . $conn->error;
		}
	}


	if(!empty($order4)){

		if ($conn->query($order4) === TRUE) {
	    echo "<span>Your order was accepted</span>";
	    echo "<br>";
		echo "<a href='usermenupage.php'>Back to HOME</a>";
		}else {
		    echo "Error: " . $order4 . "<br>" . $conn->error;
		}
	}


	if(!empty($order5)){

		if ($conn->query($order5) === TRUE) {
	    echo "<span>Your order was accepted</span>";
	    echo "<br>";
		echo "<a href='usermenupage.php'>Back to HOME</a>";
		}else {
		    echo "Error: " . $order5 . "<br>" . $conn->error;
		}
	}


	if(!empty($order6)){

		if ($conn->query($order6) === TRUE) {
	    echo "<span>Your order was accepted</span>";
	    echo "<br>";
		echo "<a href='usermenupage.php'>Back to HOME</a>";
		}else {
		    echo "Error: " . $order6 . "<br>" . $conn->error;
		}
	}


	if(!empty($order7)){

		if ($conn->query($order7) === TRUE) {
	    echo "<span>Your order was accepted</span>";
	    echo "<br>";
		echo "<a href='usermenupage.php'>Back to HOME</a>";
		}else {
		    echo "Error: " . $order7 . "<br>" . $conn->error;
		}
	}


	if(!empty($order8)){
		if ($conn->query($order8) === TRUE) {
	    echo "<span>Your order was accepted</span>";
	    echo "<br>";
		echo "<a href='usermenupage.php'>Back to HOME</a>";
		}else {
		    echo "Error: " . $order8 . "<br>" . $conn->error;
		}
	}
}	
?>

