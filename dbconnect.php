<?php

$name = "localhost";
$username = "root";
$password = "";
$dbname = "be15_cr12_mount_everest_katek";

$conn = mysqli_connect($name, $username, $password, $dbname);

if ( !$conn ) {
	die("DB connection failed") . mysqli_connect_error();
} else {
	/*echo "DB connected";*/
}
?>