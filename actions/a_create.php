<?php 
require_once '../components/db_connect.php';
include("../components/head.php");

if ($_POST) {
  $locname = $_POST['locname'];
  $price = $_POST['price'];
  $description = $_POST['description'];
  $description = mysqli_real_escape_string($conn, $description);
  $img = $_POST['img'];
  $img = mysqli_real_escape_string($conn, $img);
  $longitude = $_POST['longitude'];
  $latitude = $_POST['latitude'];

  $sql = "INSERT INTO offers (locname, price, description, img, longitude, latitude) VALUES ('$locname', '$price', '$description', '$img', '$longitude', '$latitude')";

  if (mysqli_query($conn, $sql) === true) {
      echo "<div class='card mt-5' style='width: 22rem; margin: 0 auto;'>
      <div class='card-body'>
      <h4>New offer has been successfully created</h4></div>"; 
      echo "<div class='card-footer'><a href='../index.php'><button class='btn btn-success'>Home</button></a></div></div>";
      } else {
      echo "Error while creating offer info: ". $conn->error;
   }
   $conn->close();
} else {
   header("location: ../components/error.php");
}
?> 
