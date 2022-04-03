<?php
require_once 'components/db_connect.php';
include("components/head.php");
include("components/navbar.php");
?>

<div class="container">
  <h3 class="text-center mt-5 mb-5">Create an offer</h3>
<div class="card"> 
<div class="card-body">
  <form action="actions/a_create.php" method="get">
  <input type="hidden" class="form-control" name="id">
      <label for="locname">Name</label>
      <input type="text" class="form-control" name="locname" placeholder="Location name">
      <br>
      <label for="description">Description</label>
      <input type="text" class="form-control" name="description" placeholder="Description">
      <br>
      <label for="price">Price</label>
      <input type="float-point" class="form-control" name="price" placeholder="for example: 999.99">
      <br>
      <label for="img">Image</label>
      <input type="text" class="form-control" name="img" placeholder="Link on the image">
      <br>
      <label for="longitude">Longitude</label>
      <input type="float-point" class="form-control" name="longitude" placeholder="for example: 99.99999">
      <br>
      <label for="latitude">Latitude</label>
      <input type="float-point" class="form-control" name="latitude" placeholder="for example: 99.99999">
    <button type="submit" class="btn btn-primary my-3">Create</button></a>
  </form></div>
</div>
</div>

<?php
include("components/footer.php");
?>