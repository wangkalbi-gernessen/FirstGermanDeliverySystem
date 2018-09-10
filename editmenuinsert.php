<?php
include 'FirstGermanconnect.php';

$target_dir = "foodimage/";
$target_file = $target_dir . basename($_FILES["fileToUpload"]["name"]);
$uploadOk = 1;
$imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));

if(isset($_POST["submit"])){


		
	/*if (move_uploaded_file($_FILES['fileToUpload']['tmp_name'], $target_file)) {
	    echo "File is valid, and was successfully uploaded.";
	} else {
	    echo "Possible file upload attack!";
	}*/
	
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

		if ($_FILES["fileToUpload"]["size"] > 500000) {

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
		

			echo "success";
		    /*header("location:adminmenupage.php");*/
		} else {
		    echo "Error: " . $sql_schnitzel . "<br>" . $conn->error;
		}
	}
	
/*
	if(!empty($_FILES["nuremberg"])){

		
		$nurnberg=$_POST["nurnberg"];
		$furth=$_POST["furth"];

		$sql_nuremberg = "INSERT INTO image (Img,Product,Price)
		VALUES ('', '$nurnberg', '$furth')";

		if ($conn->query($sql_nuremberg) === TRUE) {
		    header("location:editmenupage.php");
		} else {
		    echo "Error: " . $sql_nuremberg . "<br>" . $conn->error;
		}
	}



	if(!empty($_FILES["berlin"])){

		
		$westkreuz=$_POST["westkreuz"];
		$sudkreuz=$_POST["sudkreuz"];

		$sql_berlin = "INSERT INTO image (Img,Product,Price)
		VALUES ('', '$westkreuz', '$sudkreuz')";

		if ($conn->query($sql_berlin) === TRUE) {
		    header("location:editmenupage.php");
		} else {
		    echo "Error: " . $sql_berlin . "<br>" . $conn->error;
		}
	}




	if(!empty($_FILES["thuringer"])){

		
		$jena=$_POST["jena"];
		$weimar=$_POST["weimar"];

		$sql_thuringer = "INSERT INTO image (Img,Product,Price)
		VALUES ('', '$jena', '$weimar')";

		if ($conn->query($sql_thuringer) === TRUE) {
		    header("location:editmenupage.php");
		} else {
		    echo "Error: " . $sql_thuringer . "<br>" . $conn->error;
		}
	}


	if(!empty($_FILES["cologne"])){

		
		$koln=$_POST["koln"];
		$rhein=$_POST["rhein"];

		$sql_cologne = "INSERT INTO image (Img,Product,Price)
		VALUES ('', '$koln', '$rhein')";

		if ($conn->query($sql_cologne) === TRUE) {
		    header("location:editmenupage.php");
		} else {
		    echo "Error: " . $sql_cologne . "<br>" . $conn->error;
		}
	}


	if(!empty($_FILES["bamberg"])){

		
		$bayreuth=$_POST["bayreuth"];
		$wurzburg=$_POST["wurzburg"];

		$sql_bamberg = "INSERT INTO image (Img,Product,Price)
		VALUES ('', '$bayreuth', '$wurzburg')";

		if ($conn->query($sql_bamberg) === TRUE) {
		    header("location:editmenupage.php");
		} else {
		    echo "Error: " . $sql_bamberg . "<br>" . $conn->error;
		}
	}


	if(!empty($_FILES["frankfurt"])){

		
		$mainz=$_POST["mainz"];
		$wiesbaden=$_POST["wiesbaden"];

		$sql_frankfurt = "INSERT INTO image (Img,Product,Price)
		VALUES ('', '$mainz', '$wiesbaden')";

		if ($conn->query($sql_frankfurt) === TRUE) {
		    header("location:editmenupage.php");
		} else {
		    echo "Error: " . $sql_frankfurt . "<br>" . $conn->error;
		}
	}


	if(!empty($_FILES["wien"])){

		
		$donau=$_POST["donau"];
		$bratislava=$_POST["bratislava"];

		$sql_wien= "INSERT INTO image (Img,Product,Price)
		VALUES ('', '$donau', '$bratislava')";

		if ($conn->query($sql_wien) === TRUE) {
		   header("location:editmenupage.php");
		} else {
		    echo "Error: " . $sql_wien . "<br>" . $conn->error;
		}
	}*/
}
?>