<?php

$conn=mysqli_connect('localhost','root','','be15_cr12_mount_everest_katek');

//query
$query="SELECT * FROM offers";

//Get results
$result= mysqli_query($conn,$query);

//Fetch Data from database
$offers=mysqli_fetch_all($result, MYSQLI_ASSOC);

echo json_encode($offers);

?>