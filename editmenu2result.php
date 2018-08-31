<?php
include 'FirstGermanconnect.php';
if(isset($_POST["edit"])){

	if(!empty($_POST["edit1"])){

		$id1=$_POST["id1"];
		$edit1=$_POST["edit1"];
		$product1=$_POST["product1"];
		$price1=$_POST["price1"];

		$sql1="UPDATE image SET Img='$edit1',Product='$product1',Price='$price1' WhERE ID='$id1'";
		if($conn->query($sql1) === TRUE){

			echo "success";

		}else{
			echo "error: ".$conn->error;
		}

		
	}

	if(!empty($_POST["edit2"])){

		$id2=$_POST["id2"];
		$edit2=$_POST["edit2"];
		$product2=$_POST["product2"];
		$price2=$_POST["price2"];

		$sql2="UPDATE image SET Img='$edit2',Product='$product2',Price='$price2' WhERE ID='$id2'";
		if($conn->query($sql2) === TRUE){

			echo "success";

		}else{
			echo "error: ".$conn->error;
		}
	}



	if(!empty($_POST["edit3"])){

		$id3=$_POST["id3"];
		$edit3=$_POST["edit3"];
		$product3=$_POST["product3"];
		$price3=$_POST["price3"];

		$sql3="UPDATE image SET Img='$edit3',Product='$product3',Price='$price3' WhERE ID='$id3'";
		if($conn->query($sql3) === TRUE){

			echo "success";

		}else{
			echo "error: ".$conn->error;
		}
	}


	if(!empty($_POST["edit4"])){

		$id4=$_POST["id4"];
		$edit4=$_POST["edit4"];
		$product4=$_POST["product4"];
		$price4=$_POST["price4"];

		$sql4="UPDATE image SET Img='$edit4',Product='$product4',Price='$price4' WhERE ID='$id4'";
		if($conn->query($sql4) === TRUE){

			echo "success";
			

		}else{
			echo "error: ".$conn->error;
		}

	}


	if(!empty($_POST["edit5"])){

		$id5=$_POST["id5"];
		$edit5=$_POST["edit5"];
		$product5=$_POST["product5"];
		$price5=$_POST["price5"];

		$sql5="UPDATE image SET Img='$edit5',Product='$product5',Price='$price5' WhERE ID='$id5'";
		if($conn->query($sql5) === TRUE){

			echo "success";

		}else{
			echo "error: ".$conn->error;
		}

	}


	if(!empty($_POST["edit6"])){

		$id6=$_POST["id6"];
		$edit6=$_POST["edit6"];
		$product6=$_POST["product6"];
		$price6=$_POST["price6"];

		$sql6="UPDATE image SET Img='$edit6',Product='$product6',Price='$price6' WhERE ID='$id6'";
		if($conn->query($sql6) === TRUE){

			echo "success";

		}else{
			echo "error: ".$conn->error;
		}

	}


	if(!empty($_POST["edit7"])){

		$id7=$_POST["id7"];
		$edit7=$_POST["edit7"];
		$product7=$_POST["product7"];
		$price7=$_POST["price7"];

		$sql7="UPDATE image SET Img='$edit7',Product='$product7',Price='$price7' WhERE ID='$id7'";
		if($conn->query($sql7) === TRUE){

			echo "success";

		}else{
			echo "error: ".$conn->error;
		}



	}

	if(!empty($_POST["edit8"])){

		$id8=$_POST["id8"];
		$edit8=$_POST["edit8"];
		$product8=$_POST["product8"];
		$price8=$_POST["price8"];

		$sql8="UPDATE image SET Img='$edit8',Product='$product8',Price='$price8' WhERE ID='$id8'";
		if($conn->query($sql8) === TRUE){

			echo "success";

		}else{
			echo "error: ".$conn->error;
		}
	}

}	
?>