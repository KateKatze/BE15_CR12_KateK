<?php
require_once 'components/db_connect.php';

    if ($_GET['id']) {
        $id = $_GET['id'];
        $sql = "SELECT * FROM offers WHERE id = $id";
        $result = mysqli_query($conn, $sql);
        if (mysqli_num_rows($result) == 1) {
            $data = mysqli_fetch_assoc($result);
            $locname = $data['locname'];
            $price = $data['price'];
            $description = $data['description'];
            $img = $data['img'];
            $longitude = $data['longitude'];
            $latitude = $data['latitude'];
        } else {
            header("location: error.php");
        }
        mysqli_close($conn);
    } else {
        header("location: error.php");
    }
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Offer Details</title>
        <!-- Bootstrap -->
        <?php require_once 'components/boot.php'?>    
	    <!-- Bootstrap JS -->
	    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
        <style type="text/css">
            #map {
            height: 50%;
            width: 50vw;
            margin: 0 auto;
            }
            html, body {
            height: 100%;
            margin: 0;
            padding: 0;
            }
            .card{
            margin: 0 auto;
            }
        </style>
    </head>
    <body>
        <div class="card col-lg-3 col-md-6 col-sm-12 mb-4 p-0 mt-5" style="width: 20rem;">
            <img src='<?php echo $img ?>' class="card-img-top img-fluid">
            <div class="card-body">
            <h5 class="card-title"> <?php echo $locname ?></h5>
            <hr>
            <p class="card-text">  <?php echo $description ?> </p>
            </div>
            <div class="card-footer"> 
            <p class="card-text">Price: <?php echo $price ?> €</p>
            <a href="index.php" class="btn btn-success">Home</a>
            </div>
            </div>
        </div>
        <div id="map" class="mb-5"></div>
<script>
    var map;
    function initMap() {
        map = new google.maps.Map(document.getElementById('map'), {
        center: {lat: 48.20849, lng: 16.37208}, zoom: 8
        });
    }
    var map;
function initMap() {
    var city = {
        lat: <?php echo $latitude ?>,
        lng: <?php echo $longitude ?>
    };
    map = new google.maps.Map(document.getElementById('map'), {
         center: city,
        zoom: 8
    });
    var pinpoint = new google.maps.Marker({
        position: city,
        map: map
    });
}
</script>
<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBtjaD-saUZQ47PbxigOg25cvuO6_SuX3M&callback=initMap" async defer></script>

<?php

include("components/footer.php");
?>