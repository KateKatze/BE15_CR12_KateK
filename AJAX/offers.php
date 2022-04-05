<?php

require_once '../components/db_connect.php';

//query
$query="SELECT * FROM offers";

//Get results
$result= mysqli_query($conn,$query);

//Fetch Data from database
$offers=mysqli_fetch_all($result, MYSQLI_ASSOC);

echo json_encode($offers);

?>