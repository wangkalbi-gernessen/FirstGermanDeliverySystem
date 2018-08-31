<?php
session_start();
session_unset();
session_destroy($_SESSION["username"]);
session_destroy($_SESSION["id"]);
header("location:loginpage.php");
?>