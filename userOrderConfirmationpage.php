<?php
session_start();
include 'FirstGermanconnect.php';
$id1=$_POST["id1"];
$id2=$_POST["id2"];
$id3=$_POST["id3"];
$id4=$_POST["id4"];
$id5=$_POST["id5"];
$id6=$_POST["id6"];
$id7=$_POST["id7"];
$id8=$_POST["id8"];


$image1=$_POST["image1"];
$image2=$_POST["image2"];
$image3=$_POST["image3"];
$image4=$_POST["image4"];
$image5=$_POST["image5"];
$image6=$_POST["image6"];
$image7=$_POST["image7"];
$image8=$_POST["image8"];




$product1=$_POST["product1"];
$product2=$_POST["product2"];
$product3=$_POST["product3"];
$product4=$_POST["product4"];
$product5=$_POST["product5"];
$product6=$_POST["product6"];
$product7=$_POST["product7"];
$product8=$_POST["product8"];



$price1=$_POST["price1"];
$price2=$_POST["price2"];
$price3=$_POST["price3"];
$price4=$_POST["price4"];
$price5=$_POST["price5"];
$price6=$_POST["price6"];
$price7=$_POST["price7"];
$price8=$_POST["price8"];



$schnitzel1=$_POST["schnitzel1"];
$schnitzel2=$_POST["schnitzel2"];
$schnitzel3=$_POST["schnitzel3"];
$schnitzel4=$_POST["schnitzel4"];
$schnitzel5=$_POST["schnitzel5"];
$schnitzel6=$_POST["schnitzel6"];
$schnitzel7=$_POST["schnitzel7"];
$schnitzel8=$_POST["schnitzel8"];
$order=$_POST["order"];





?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>OrderConfirmation</title>
	<link rel="stylesheet" href="userOrderConfirmationpage.css">
</head>
<body>
<div class="explain">
<h1>Final confirmation of your order</h1>
<p>Please check if your order is right.<br>Even if you mistook your order, you cannot delete.</p>
</div>
<div class="result">
	<div class="image">	
	<?php

	if(isset($order)){


		
		if($schnitzel1 >= 1){
			echo "<div class='image-1'>";
			echo "<img src='foodimage/$image1'>";
			echo "</div>";
		}

		if($schnitzel2 >= 1){
			echo "<div class='image-1'>";
			echo "<img src='foodimage/$image2'>";
			echo "</div>";
		}

		if($schnitzel3 >= 1){
			echo "<div class='image-1'>";
			echo "<img src='foodimage/$image3'>";
			echo "</div>";
		}

		if($schnitzel4 >= 1){
			echo "<div class='image-1'>";
			echo "<img src='foodimage/$image4'>";
			echo "</div>";
		}

		if($schnitzel5 >= 1){
			echo "<div class='image-1'>";
			echo "<img src='foodimage/$image5'>";
			echo "</div>";
		}

		if($schnitzel6 >= 1){
			echo "<div class='image-1'>";
			echo "<img src='foodimage/$image6'>";
			echo "</div>";
		}

		if($schnitzel7 >= 1){
			echo "<div class='image-1'>";
			echo "<img src='foodimage/$image7'>";
			echo "</div>";
		}

		if($schnitzel8 >= 1){
			echo "<div class='image-1'>";
			echo "<img src='foodimage/$image8'>";
			echo "</div>";

		}elseif(empty($schnitzel1) && empty($schnitzel2) && empty($schnitzel3) && empty($schnitzel4) && empty($schnitzel5) && empty($schnitzel6) && empty($schnitzel7) && empty($schnitzel8)){

			header("location:usermenupage.php");
		}



	}
	?>
	</div>
	<br>
	<div class="product">
	<h2>Product name:</h2>

	<form action="userOrderCompletion.php" method="POST">
	<?php
	if(isset($_POST["order"])){




		$cutlet=$product1." x".$schnitzel1;
		$nurnberg=$product2." x".$schnitzel2;
		$potsdam=$product3." x".$schnitzel3;
		$erfurt=$product4." x".$schnitzel4;
		$koln=$product5." x".$schnitzel5;
		$rauch=$product6." x".$schnitzel6;
		$main=$product7." x".$schnitzel7;
		$donau=$product8." x".$schnitzel8;





		if($schnitzel1 >= 1){
			echo $cutlet."<br>";
		}else{
			$cutlet = "";
		}


		if($schnitzel2 >= 1){
			echo $nurnberg."<br>";
		}else{
			$nurnberg="";
		}

		if($schnitzel3 >= 1){
			echo $potsdam."<br>";
		}else{
			$potsdam="";
		}


		if($schnitzel4 >= 1){
			echo $erfurt."<br>";
		}else{
			$erfurt="";
		}

		if($schnitzel5 >= 1){
			echo $koln."<br>";
		}else{
			$koln="";
		}

		if($schnitzel6 >= 1){
			echo $rauch."<br>";
		}else{
			$rauch="";
		}

		if($schnitzel7 >= 1){
			echo $main."<br>";
		}else{
			$main="";
		}

		if($schnitzel8 >= 1){
			echo $donau."<br>";
		}else{
			$donau="";
		}
	}
	?>
	</div>
	<div class="price">
	<h2>Price:</h2>
	<?php	

	if(isset($_POST["order"])){


		$schnitzel = $schnitzel1 * $price1;
		$nuremberg = $schnitzel2 * $price2;
		$berlin    = $schnitzel3 * $price3;
		$thuringer = $schnitzel4 * $price4;
		$cologne   = $schnitzel5 * $price5;
		$bamberg   = $schnitzel6 * $price6;
		$frankfurt = $schnitzel7 * $price7;
		$wien 	   = $schnitzel8 * $price8;
		
		$total=$schnitzel+$nuremberg+$berlin+$thuringer+$cologne+$bamberg+$frankfurt+$wien;

		echo $total." PHP";
	}
	?>
	</div>
	<div class="datetime">
	<h2>Date Time:</h2>
	<?php
	date_default_timezone_set('Asia/Manila');
	$date=date('Y/m/d G:i:s');
	echo $date;
	echo "<input type='hidden' name='date' value='$date'>";
	echo "<br>";
	?>
	</div>
	<div class="name">
	<h2>Name:</h2>
	<?php
	$name=$_SESSION["username"];
	echo $name;
	echo "<br>";
	echo "<br>";
	?>
	</div>
	<?php
	$id=$_SESSION["id"];


	if($schnitzel1 >= 1){
			

	$orderdata1 = "INSERT INTO orderlist (ID,Name,Product,Price,DateTime) VALUES('$id','$name','$cutlet','$schnitzel','$date')";

	}else{
		$orderdata1 ="";
	}



	if($schnitzel2 >= 1){
		
	$orderdata2 = "INSERT INTO orderlist (ID,Name,Product,Price,DateTime) VALUES('$id','$name','$nurnberg','$nuremberg','$date')";



	}else{
		$orderdata2="";
	}



	if($schnitzel3 >= 1){

		$orderdata3 = "INSERT INTO orderlist (ID,Name,Product,Price,DateTime) VALUES('$id','$name','$potsdam','$berlin','$date')";
		
	}else{
		$orderdata3="";
	}


	if($schnitzel4 >= 1){

		$orderdata4 = "INSERT INTO orderlist (ID,Name,Product,Price,DateTime) VALUES('$id','$name','$erfurt','$thuringer','$date')";
		
	}else{
		$orderdata4="";
	}


	if($schnitzel5 >= 1){

		$orderdata5 = "INSERT INTO orderlist (ID,Name,Product,Price,DateTime) VALUES('$id','$name','$koln','$cologne','$date')";
		
	}else{
		$orderdata5 ="";
	}




	if($schnitzel6 >= 1){
		
		$orderdata6 = "INSERT INTO orderlist (ID,Name,Product,Price,DateTime) VALUES('$id','$name','$rauch','$bamberg','$date')";

	}else{
		$orderdata6 ="";
	}


	if($schnitzel7 >= 1){

		$orderdata7 = "INSERT INTO orderlist (ID,Name,Product,Price,DateTime) VALUES('$id','$name','$main','$frankfurt','$date')";
		
	}else{
		$orderdata7 ="";
	}

	if($schnitzel8 >= 1){

		$orderdata8 = "INSERT INTO orderlist (ID,Name,Product,Price,DateTime) VALUES('$id','$name','$donau','$wien','$date')";
		
	}else{
		$orderdata8 ="";
		}
	?>
	<input type ="hidden" name="orderdata" value="<?php echo $orderdata; ?>" >
	<input type="hidden" name="orderdata1" value="<?php echo $orderdata1; ?>" >
	<input type="hidden" name="orderdata2" value="<?php echo $orderdata2; ?>" > 
	<input type="hidden" name="orderdata3" value="<?php echo $orderdata3; ?>" > 
	<input type="hidden" name="orderdata4" value="<?php echo $orderdata4; ?>" > 
	<input type="hidden" name="orderdata5" value="<?php echo $orderdata5; ?>" > 
	<input type="hidden" name="orderdata6" value="<?php echo $orderdata6; ?>" > 
	<input type="hidden" name="orderdata7" value="<?php echo $orderdata7; ?>" > 
	<input type="hidden" name="orderdata8" value="<?php echo $orderdata8; ?>" > 
	<div class="order">
	<input type="submit" name="complete" value="order" class="bestellen">
	</div>
	<div class="order1">
	<input type="submit" formaction="usermenupage.php" class="verstellen" value="To Menu Page">
	</div>	
</div>
</form>
</body>
</html>