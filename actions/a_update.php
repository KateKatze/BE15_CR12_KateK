<?php 
require_once '../components/db_connect.php';
include("../components/head.php");

if ($_GET) {
  $id = $_GET['id'];
  $locname = $_GET['locname'];
  $price = $_GET['price'];
  $description = $_GET['description'];
  $description = mysqli_real_escape_string($conn, $description);
  $img = $_GET['img'];
  $img = mysqli_real_escape_string($conn, $img);
  $longitude = $_GET['longitude'];
  $latitude = $_GET['latitude'];

  $sql = "UPDATE offers SET locname = '$locname', price = '$price', description = '$description', img = '$img', longitude = '$longitude', latitude = '$latitude' WHERE id = $id;" ;
  

  if($conn->query($sql) == TRUE) {
      echo "<div class='card mt-5' style='width: 22rem; margin: 0 auto;'><div class='card-body'><h4>Offer information has been successfully updated</h4></div>"; 
      echo "<div class='card-footer'><a href='../index.php'><button class='btn btn-success'>Home</button></a></div></div>";
   } else {
      echo "Error while updating offer info: ". $conn->error;
   }
   $conn->close();
}
?> 