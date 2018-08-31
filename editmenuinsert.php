<?php
include 'FirstGermanconnect.php';

if(isset($_POST["submit"])){


	if(!empty($_POST["schnitzel"])){

		$schnitzel=$_POST["schnitzel"];
		$schnit=$_POST["schnit"];
		$cutlet=$_POST["cutlet"];

		$sql_schnitzel = "INSERT INTO image (Img,Product,Price)
		VALUES ('$schnitzel', '$schnit', '$cutlet')";

		if ($conn->query($sql_schnitzel) === TRUE) {
		    echo "success";
		} else {
		    echo "Error: " . $sql_schnitzel . "<br>" . $conn->error;
		}
	}

	

	if(!empty($_POST["nuremberg"])){

		$nuremberg=$_POST["nuremberg"];
		$nurnberg=$_POST["nurnberg"];
		$furth=$_POST["furth"];

		$sql_nuremberg = "INSERT INTO image (Img,Product,Price)
		VALUES ('$nuremberg', '$nurnberg', '$furth')";

		if ($conn->query($sql_nuremberg) === TRUE) {
		    echo "success";
		} else {
		    echo "Error: " . $sql_nuremberg . "<br>" . $conn->error;
		}
	}



	if(!empty($_POST["berlin"])){

		$berlin=$_POST["berlin"];
		$westkreuz=$_POST["westkreuz"];
		$sudkreuz=$_POST["sudkreuz"];

		$sql_berlin = "INSERT INTO image (Img,Product,Price)
		VALUES ('$berlin', '$westkreuz', '$sudkreuz')";

		if ($conn->query($sql_berlin) === TRUE) {
		    echo "success";
		} else {
		    echo "Error: " . $sql_berlin . "<br>" . $conn->error;
		}
	}




	if(!empty($_POST["thuringer"])){

		$thuringer=$_POST["thuringer"];
		$jena=$_POST["jena"];
		$weimar=$_POST["weimar"];

		$sql_thuringer = "INSERT INTO image (Img,Product,Price)
		VALUES ('$thuringer', '$jena', '$weimar')";

		if ($conn->query($sql_thuringer) === TRUE) {
		    echo "success";
		} else {
		    echo "Error: " . $sql_thuringer . "<br>" . $conn->error;
		}
	}


	if(!empty($_POST["cologne"])){

		$cologne=$_POST["cologne"];
		$koln=$_POST["koln"];
		$rhein=$_POST["rhein"];

		$sql_cologne = "INSERT INTO image (Img,Product,Price)
		VALUES ('$cologne', '$koln', '$rhein')";

		if ($conn->query($sql_cologne) === TRUE) {
		    echo "success";
		} else {
		    echo "Error: " . $sql_cologne . "<br>" . $conn->error;
		}
	}


	if(!empty($_POST["bamberg"])){

		$bamberg=$_POST["bamberg"];
		$bayreuth=$_POST["bayreuth"];
		$wurzburg=$_POST["wurzburg"];

		$sql_bamberg = "INSERT INTO image (Img,Product,Price)
		VALUES ('$bamberg', '$bayreuth', '$wurzburg')";

		if ($conn->query($sql_bamberg) === TRUE) {
		    echo "success";
		} else {
		    echo "Error: " . $sql_bamberg . "<br>" . $conn->error;
		}
	}


	if(!empty($_POST["frankfurt"])){

		$frankfurt=$_POST["frankfurt"];
		$mainz=$_POST["mainz"];
		$wiesbaden=$_POST["wiesbaden"];

		$sql_frankfurt = "INSERT INTO image (Img,Product,Price)
		VALUES ('$frankfurt', '$mainz', '$wiesbaden')";

		if ($conn->query($sql_frankfurt) === TRUE) {
		    echo "success";
		} else {
		    echo "Error: " . $sql_frankfurt . "<br>" . $conn->error;
		}
	}


	if(!empty($_POST["wien"])){

		$wien=$_POST["wien"];
		$donau=$_POST["donau"];
		$bratislava=$_POST["bratislava"];

		$sql_wien= "INSERT INTO image (Img,Product,Price)
		VALUES ('$wien', '$donau', '$bratislava')";

		if ($conn->query($sql_wien) === TRUE) {
		    echo "success";
		} else {
		    echo "Error: " . $sql_wien . "<br>" . $conn->error;
		}
	}
}
?>