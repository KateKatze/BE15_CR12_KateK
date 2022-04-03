<?php 
require_once '../dbconnect.php';
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

  $sql = "INSERT INTO offers (locname, price, description, img, longitude, latitude) VALUES ('$locname', '$price', '$description', '$img', '$longitude', '$latitude')";

  mysqli_query($conn, $sql);

  if($conn->query($sql) == TRUE) {
      echo "<div class='card mt-5' style='width: 22rem; margin: 0 auto;'>
      <div class='card-body'>
      <h4>New offer has been successfully created</h4></div>"; 
      echo "<div class='card-footer'><a href='../home.php'><button class='btn btn-success'>Home</button></a></div></div>";
      } else {
      echo "Error while creating offer info: ". $conn->error;
   }
   $conn->close();
}
?> 
