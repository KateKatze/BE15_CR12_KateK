<?php 
require_once '../dbconnect.php';
include("../components/head.php");

if ($_GET) {
   	$id = $_GET['id'];
   	$sql = "DELETE FROM offers WHERE id = '$id'";

    $conn->query($sql);
    unset($sql);

    $sql = "DELETE FROM offers WHERE id = '$id'";

    if($conn->query($sql) === TRUE) {
       echo "<div class='card mt-5' style='width: 22rem; margin: 0 auto;'><div class='card-body'>
       <h4>Offer has been successfully deleted</h4></div>" ;
       echo "<div class='card-footer'><a href='../home.php'><button class='btn btn-success'>Home</button></a></div></div>";
   } else {
       echo "Error while updating offer record: " . $conn->error;
   }
   unset($sql);
   $conn->close();
}
?>