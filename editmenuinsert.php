<?php
include 'FirstGermanconnect.php';

$target_dir = "foodimage/";
$target_file = $target_dir . basename($_FILES["fileToUpload"]["name"]);
$uploadOk = 1;
$imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));


if(isset($_POST["submit"])){

	/*echo "hello". $_FILES["fileToUpload"]["tmp_name"] ."<br>" ;*/
	
	if(!empty($_FILES["fileToUpload"])){

		$check = getimagesize($_FILES["fileToUpload"]["tmp_name"]);
	    if($check !== false) {
	        echo "File is an image - " . $check["mime"] . ".";
	        $uploadOk = 1;
	    } else {
	        echo "File is not an image.";
	        $uploadOk = 0;
	    }

		    // Check if file already exists
		if (file_exists($target_file)) {
		    echo "Sorry, file already exists.";
		    $uploadOk = 0;
		}

		if ($_FILES["fileToUpload"]["size"] > 10000000) {

		    echo "Sorry, your file is too large.";
		    $uploadOk = 0;

		}

		if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"
		&& $imageFileType != "gif" ) {
		    echo "Sorry, only JPG, JPEG, PNG & GIF files are allowed.";
		    $uploadOk = 0;
		}


		if ($uploadOk == 0) {

		    echo "Sorry, your file was not uploaded.";
		
		} else {

		    if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file)) {
		        echo "The file ". basename( $_FILES["fileToUpload"]["name"]). " has been uploaded.";
		    } else {
		        echo "Sorry, there was an error uploading your file.";
		    }
		}



		$img=$_FILES["fileToUpload"]["name"];
		$schnit=$_POST["schnit"];
		$cutlet=$_POST["cutlet"];


		$sql_schnitzel = "INSERT INTO image (Img,Product,Price)
		VALUES ('$img', '$schnit', '$cutlet')";

		if ($conn->query($sql_schnitzel) === TRUE) {
		
		    header("location:adminmenupage.php");
		    
		} else {
		    echo "Error: " . $sql_schnitzel . "<br>" . $conn->error;
		}
	}
}
?>