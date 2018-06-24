<?php
$host = "localhost";
$user = "root";
$psswrd = "asdf1234";
$db = "emotion_detection";

$con = mysqli_connect($host, $user, $psswrd) or die("Connection failed");
//if($con) echo "Connected-OK!!!<br>";

$test_db = mysqli_select_db($con, $db) or die(mysqli_error($con));
//if($test_db) echo "Selected database<br>";

?>