<?php 

require_once '../components/db_connect.php';

$query = "SELECT * FROM offers";
$result = mysqli_query($conn, $query);
if (mysqli_query($conn, $query)){
    echo json_encode(mysqli_fetch_all($result, MYSQLI_ASSOC));
}else{
    echo mysqli_error($conn);
}

?>