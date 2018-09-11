<?php
include 'FirstGermanconnect.php';
if(isset($_POST["edit"])){

	if(!empty($_FILES["edit1"])){

		

		$target_dir1 = "foodimage/";
		$target_file1 = $target_dir1 . basename($_FILES["edit1"]["name"]);
		$uploadOk1 = 1;
		$imageFileType1 = strtolower(pathinfo($target_file1,PATHINFO_EXTENSION));


		$check1 = getimagesize($_FILES["edit1"]["tmp_name"]);
	    if($check1 !== false) {
	        echo "File is an image - " . $check1["mime"] . ".";
	        $uploadOk1 = 1;
	    } else {
	        echo "File is not an image.";
	        $uploadOk1 = 0;
	    }

		    // Check if file already exists
		if (file_exists($target_file1)) {
		    echo "Sorry, file already exists.";
		    $uploadOk1 = 0;
		}

		if ($_FILES["edit1"]["size"] > 500000) {

		    echo "Sorry, your file is too large.";
		    $uploadOk1 = 0;
		}

		if($imageFileType1 != "jpg" && $imageFileType1 != "png" && $imageFileType1 != "jpeg"
		&& $imageFileType1 != "gif" ) {
		    echo "Sorry, only JPG, JPEG, PNG & GIF files are allowed.";
		    $uploadOk1 = 0;
		}



		if ($uploadOk1 == 0) {

		    echo "Sorry, your file was not uploaded.";
		
		} else {

		    if (move_uploaded_file($_FILES["edit1"]["tmp_name"], $target_file1)) {
		        echo "The file ". basename( $_FILES["edit1"]["name"]). " has been uploaded.";
		    } else {
		        echo "Sorry, there was an error uploading your file.";
		    }
		}




		$edit1=$_FILES["edit1"]["name"];
		$id1 =$_POST["id1"];
		$product1=$_POST["product1"];
		$price1=$_POST["price1"];

		$sql1="UPDATE image SET Img='$edit1',Product='$product1',Price='$price1' WhERE ID='$id1'";
		if($conn->query($sql1) === TRUE){

			echo "success";
			/*header("location:adminmenupage.php");*/

		}else{
			echo "error: ".$conn->error;
		}
	}



	if(!empty($_FILES["edit2"])){

		

		$target_dir2 = "foodimage/";
		$target_file2 = $target_dir2 . basename($_FILES["edit2"]["name"]);
		$uploadOk1 = 1;
		$imageFileType2 = strtolower(pathinfo($target_file2,PATHINFO_EXTENSION));


		$check2 = getimagesize($_FILES["edit2"]["tmp_name"]);
	    if($check2 !== false) {
	        echo "File is an image - " . $check2["mime"] . ".";
	        $uploadOk1 = 1;
	    } else {
	        echo "File is not an image.";
	        $uploadOk1 = 0;
	    }

		    // Check if file already exists
		if (file_exists($target_file2)) {
		    echo "Sorry, file already exists.";
		    $uploadOk2 = 0;
		}

		if ($_FILES["edit2"]["size"] > 500000) {

		    echo "Sorry, your file is too large.";
		    $uploadOk2 = 0;
		}

		if($imageFileType2 != "jpg" && $imageFileType2 != "png" && $imageFileType2 != "jpeg"
		&& $imageFileType2 != "gif" ) {
		    echo "Sorry, only JPG, JPEG, PNG & GIF files are allowed.";
		    $uploadOk2 = 0;
		}


		if ($uploadOk2 == 0) {

		    echo "Sorry, your file was not uploaded.";
		
		} else {

		    if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file2)) {
		        echo "The file ". basename( $_FILES["fileToUpload"]["name"]). " has been uploaded.";
		    } else {
		        echo "Sorry, there was an error uploading your file.";
		    }
		}


		$edit2=$_FILES["edit2"]["name"];
		$id2 =$_POST["id2"];
		$product2=$_POST["product2"];
		$price2=$_POST["price2"];

		$sql2="UPDATE image SET Img='$edit2',Product='$product2',Price='$price2' WhERE ID='$id2'";
		if($conn->query($sql2) === TRUE){

			echo "success";
			/*header("location:adminmenupage.php");*/

		}else{
			echo "error: ".$conn->error;
		}
	}


	if(!empty($_FILES["edit3"])){

		

		$target_dir3 = "foodimage/";
		$target_file3 = $target_dir3 . basename($_FILES["edit3"]["name"]);
		$uploadOk3 = 1;
		$imageFileType3 = strtolower(pathinfo($target_file3,PATHINFO_EXTENSION));


		$check3 = getimagesize($_FILES["edit3"]["tmp_name"]);
	    if($check3 !== false) {
	        echo "File is an image - " . $check3["mime"] . ".";
	        $uploadOk3 = 1;
	    } else {
	        echo "File is not an image.";
	        $uploadOk3 = 0;
	    }

		    // Check if file already exists
		if (file_exists($target_file3)) {
		    echo "Sorry, file already exists.";
		    $uploadOk3 = 0;
		}

		if ($_FILES["edit2"]["size"] > 500000) {

		    echo "Sorry, your file is too large.";
		    $uploadOk3 = 0;
		}

		if($imageFileType3 != "jpg" && $imageFileType3 != "png" && $imageFileType3 != "jpeg"
		&& $imageFileType3 != "gif" ) {
		    echo "Sorry, only JPG, JPEG, PNG & GIF files are allowed.";
		    $uploadOk3 = 0;
		}


		if ($uploadOk3 == 0) {

		    echo "Sorry, your file was not uploaded.";
		
		} else {

		    if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file3)) {
		        echo "The file ". basename( $_FILES["fileToUpload"]["name"]). " has been uploaded.";
		    } else {
		        echo "Sorry, there was an error uploading your file.";
		    }
		}


		$edit3=$_FILES["edit3"]["name"];
		$id3 =$_POST["id3"];
		$product3=$_POST["product3"];
		$price3=$_POST["price3"];

		$sql3="UPDATE image SET Img='$edit3',Product='$product3',Price='$price3' WhERE ID='$id3'";
		if($conn->query($sql3) === TRUE){

			
			echo "success";
			/*header("location:adminmenupage.php");*/

		}else{
			echo "error: ".$conn->error;
		}
	}






	if(!empty($_FILES["edit4"])){


		$target_dir4 = "foodimage/";
		$target_file4 = $target_dir4 . basename($_FILES["edit4"]["name"]);
		$uploadOk4 = 1;
		$imageFileType4 = strtolower(pathinfo($target_file4,PATHINFO_EXTENSION));


		$check4 = getimagesize($_FILES["edit4"]["tmp_name"]);
	    if($check4 !== false) {
	        echo "File is an image - " . $check4["mime"] . ".";
	        $uploadOk4 = 1;
	    } else {
	        echo "File is not an image.";
	        $uploadOk4 = 0;
	    }

		    // Check if file already exists
		if (file_exists($target_file4)) {
		    echo "Sorry, file already exists.";
		    $uploadOk4 = 0;
		}

		if ($_FILES["edit4"]["size"] > 500000) {

		    echo "Sorry, your file is too large.";
		    $uploadOk4 = 0;
		}

		if($imageFileType4 != "jpg" && $imageFileType4 != "png" && $imageFileType4 != "jpeg"
		&& $imageFileType4 != "gif" ) {
		    echo "Sorry, only JPG, JPEG, PNG & GIF files are allowed.";
		    $uploadOk4 = 0;
		}


		if ($uploadOk4 == 0) {

		    echo "Sorry, your file was not uploaded.";
		
		} else {

		    if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file4)) {
		        echo "The file ". basename( $_FILES["fileToUpload"]["name"]). " has been uploaded.";
		    } else {
		        echo "Sorry, there was an error uploading your file.";
		    }
		}


		$edit4=$_FILES["edit4"]["name"];
		$id4 =$_POST["id4"];
		$product4=$_POST["product4"];
		$price4=$_POST["price4"];

		$sql4="UPDATE image SET Img='$edit4',Product='$product4',Price='$price4' WhERE ID='$id4'";
		if($conn->query($sql4) === TRUE){

			
			echo "success";
			/*header("location:adminmenupage.php");*/

		}else{
			echo "error: ".$conn->error;
		}
	}


	if(!empty($_FILES["edit5"])){

		

		$target_dir5 = "foodimage/";
		$target_file5 = $target_dir5 . basename($_FILES["edit5"]["name"]);
		$uploadOk5 = 1;
		$imageFileType5 = strtolower(pathinfo($target_file5,PATHINFO_EXTENSION));


		$check5 = getimagesize($_FILES["edit5"]["tmp_name"]);
	    if($check5 !== false) {
	        echo "File is an image - " . $check5["mime"] . ".";
	        $uploadOk5 = 1;
	    } else {
	        echo "File is not an image.";
	        $uploadOk5 = 0;
	    }

		    // Check if file already exists
		if (file_exists($target_file5)) {
		    echo "Sorry, file already exists.";
		    $uploadOk5 = 0;
		}

		if ($_FILES["edit5"]["size"] > 500000) {

		    echo "Sorry, your file is too large.";
		    $uploadOk5 = 0;
		}

		if($imageFileType5 != "jpg" && $imageFileType5 != "png" && $imageFileType5 != "jpeg"
		&& $imageFileType5 != "gif" ) {
		    echo "Sorry, only JPG, JPEG, PNG & GIF files are allowed.";
		    $uploadOk5 = 0;
		}


		if ($uploadOk5 == 0) {

		    echo "Sorry, your file was not uploaded.";
		
		} else {

		    if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file5)) {
		        echo "The file ". basename( $_FILES["fileToUpload"]["name"]). " has been uploaded.";
		    } else {
		        echo "Sorry, there was an error uploading your file.";
		    }
		}


		$edit5=$_FILES["edit5"]["name"];
		$id5 =$_POST["id5"];
		$product5=$_POST["product5"];
		$price5=$_POST["price5"];

		$sql5="UPDATE image SET Img='$edit5',Product='$product5',Price='$price5' WhERE ID='$id5'";
		if($conn->query($sql5) === TRUE){

			
			echo "success";
			/*header("location:adminmenupage.php");*/

		}else{
			echo "error: ".$conn->error;
		}
	}




	if(!empty($_FILES["edit6"])){

		

		$target_dir6 = "foodimage/";
		$target_file6 = $target_dir6 . basename($_FILES["edit6"]["name"]);
		$uploadOk6 = 1;
		$imageFileType6 = strtolower(pathinfo($target_file6,PATHINFO_EXTENSION));


		$check6 = getimagesize($_FILES["edit6"]["tmp_name"]);
	    if($check6 !== false) {
	        echo "File is an image - " . $check6["mime"] . ".";
	        $uploadOk6 = 1;
	    } else {
	        echo "File is not an image.";
	        $uploadOk6 = 0;
	    }

		    // Check if file already exists
		if (file_exists($target_file6)) {
		    echo "Sorry, file already exists.";
		    $uploadOk6 = 0;
		}

		if ($_FILES["edit6"]["size"] > 500000) {

		    echo "Sorry, your file is too large.";
		    $uploadOk6 = 0;
		}

		if($imageFileType6 != "jpg" && $imageFileType6 != "png" && $imageFileType6 != "jpeg"
		&& $imageFileType6 != "gif" ) {
		    echo "Sorry, only JPG, JPEG, PNG & GIF files are allowed.";
		    $uploadOk6 = 0;
		}

		if ($uploadOk6 == 0) {

		    echo "Sorry, your file was not uploaded.";
		
		} else {

		    if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file6)) {
		        echo "The file ". basename( $_FILES["fileToUpload"]["name"]). " has been uploaded.";
		    } else {
		        echo "Sorry, there was an error uploading your file.";
		    }
		}

		$edit6=$_FILES["edit6"]["name"];
		$id6 =$_POST["id6"];
		$product6=$_POST["product6"];
		$price6=$_POST["price6"];

		$sql6="UPDATE image SET Img='$edit6',Product='$product6',Price='$price6' WhERE ID='$id6'";
		if($conn->query($sql6) === TRUE){

			
			echo "success";
			/*header("location:adminmenupage.php");*/

		}else{
			echo "error: ".$conn->error;
		}
	}





	if(!empty($_FILES["edit7"])){

		

		$target_dir7 = "foodimage/";
		$target_file7 = $target_dir7 . basename($_FILES["edit7"]["name"]);
		$uploadOk7 = 1;
		$imageFileType7 = strtolower(pathinfo($target_file7,PATHINFO_EXTENSION));


		$check7 = getimagesize($_FILES["edit7"]["tmp_name"]);
	    if($check7 !== false) {
	        echo "File is an image - " . $check7["mime"] . ".";
	        $uploadOk7 = 1;
	    } else {
	        echo "File is not an image.";
	        $uploadOk7 = 0;
	    }

		    // Check if file already exists
		if (file_exists($target_file7)) {
		    echo "Sorry, file already exists.";
		    $uploadOk7 = 0;
		}

		if ($_FILES["edit7"]["size"] > 500000) {

		    echo "Sorry, your file is too large.";
		    $uploadOk7 = 0;
		}

		if($imageFileType7 != "jpg" && $imageFileType7 != "png" && $imageFileType7 != "jpeg"
		&& $imageFileType7 != "gif" ) {
		    echo "Sorry, only JPG, JPEG, PNG & GIF files are allowed.";
		    $uploadOk7 = 0;
		}


		if ($uploadOk7 == 0) {

		    echo "Sorry, your file was not uploaded.";
		
		} else {

		    if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file7)) {
		        echo "The file ". basename( $_FILES["fileToUpload"]["name"]). " has been uploaded.";
		    } else {
		        echo "Sorry, there was an error uploading your file.";
		    }
		}


		$edit7=$_FILES["edit7"]["name"];
		$id7 =$_POST["id7"];
		$product7=$_POST["product7"];
		$price7=$_POST["price7"];

		$sql7="UPDATE image SET Img='$edit7',Product='$product7',Price='$price7' WhERE ID='$id7'";
		if($conn->query($sql7) === TRUE){

			
			echo "success";
			/*header("location:adminmenupage.php");*/

		}else{
			echo "error: ".$conn->error;
		}
	}


	if(!empty($_FILES["edit8"])){

		

		$target_dir8 = "foodimage/";
		$target_file8 = $target_dir8 . basename($_FILES["edit8"]["name"]);
		$uploadOk8 = 1;
		$imageFileType8 = strtolower(pathinfo($target_file8,PATHINFO_EXTENSION));


		$check8 = getimagesize($_FILES["edit8"]["tmp_name"]);
	    if($check8 !== false) {
	        echo "File is an image - " . $check8["mime"] . ".";
	        $uploadOk8 = 1;
	    } else {
	        echo "File is not an image.";
	        $uploadOk8 = 0;
	    }

		    // Check if file already exists
		if (file_exists($target_file8)) {
		    echo "Sorry, file already exists.";
		    $uploadOk8 = 0;
		}

		if ($_FILES["edit8"]["size"] > 500000) {

		    echo "Sorry, your file is too large.";
		    $uploadOk8 = 0;
		}

		if($imageFileType8 != "jpg" && $imageFileType8 != "png" && $imageFileType8 != "jpeg"
		&& $imageFileType8 != "gif" ) {
		    echo "Sorry, only JPG, JPEG, PNG & GIF files are allowed.";
		    $uploadOk8 = 0;
		}

		if ($uploadOk8 == 0) {

		    echo "Sorry, your file was not uploaded.";
		
		} else {

		    if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file8)) {
		        echo "The file ". basename( $_FILES["fileToUpload"]["name"]). " has been uploaded.";
		    } else {
		        echo "Sorry, there was an error uploading your file.";
		    }
		}

		$edit8=$_FILES["edit8"]["name"];
		$id8 =$_POST["id8"];
		$product8=$_POST["product8"];
		$price8=$_POST["price8"];

		$sql8="UPDATE image SET Img='$edit8',Product='$product8',Price='$price8' WhERE ID='$id8'";
		if($conn->query($sql8) === TRUE){

			echo "success";			
			/*header("location:adminmenupage.php");*/

		}else{
			echo "error: ".$conn->error;
		}
	}
}	
?>