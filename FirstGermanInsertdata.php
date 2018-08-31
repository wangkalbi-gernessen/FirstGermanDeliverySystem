<?php
include 'FirstGermanconnect.php';

$username=$_POST["username"];
$email=$_POST["email"];
$address=$_POST["address"];
$tel=$_POST["tel"];
$password=$_POST["password"];
$sql = "INSERT INTO userlist (Username, Email, Address, Tel, Password)
VALUES ('$username', '$email', '$address', '$tel', '$password')";

if ($conn->query($sql) === TRUE) {
    header("location:loginpage.php");
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}
?>
