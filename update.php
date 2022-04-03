<?php 
require_once 'components/db_connect.php';
include("components/head.php");
include("components/navbar.php");

if (isset($_GET['id'])) {
   $id = $_GET['id'];
   $sql = "SELECT * FROM offers WHERE id = '$id'";
   $result = mysqli_query($conn, $sql);
   $data = $result->fetch_assoc();
   $conn->close();
}
?>

<div class="container">
<h3 class="text-center mt-5 mb-5">Update offer information</h3>
<div class="card"> 
  <div class="card-body">
  <form action="actions/a_update.php" method="get">
      <input type="hidden" class="form-control" name="id" value="<?php echo $data["id"]; ?>">
      <label for="locname">Name</label>
      <input type="text" class="form-control" name="locname" placeholder="Location name" value="<?php echo $data["locname"]; ?>">
      <br>
      <label for="description">Description</label>
      <input type="text" class="form-control" name="description" placeholder="Description" value="<?php echo $data["description"]; ?>">
      <br>
      <label for="price">Price</label>
      <input type="float-point" class="form-control" name="price" placeholder="for example: 999.99" value="<?php echo $data["price"]; ?>">
      <br>
      <label for="img">Image</label>
      <input type="text" class="form-control" name="img" placeholder="Link on the image" value="<?php echo $data["img"]; ?>">
      <br>
      <label for="longitude">Longitude</label>
      <input type="float-point" class="form-control" name="longitude" placeholder="for example: 99.99999"  value="<?php echo $data["longitude"]; ?>">
      <br>
      <label for="latitude">Latitude</label>
      <input type="float-point" class="form-control" name="latitude" placeholder="for example: 99.99999" value="<?php echo $data["latitude"]; ?>">
    <button type="submit" class="btn btn-primary my-3">Create</button></a>
  </form>
</div>
</div>
</div>

<?php 
  include('components/footer.php');
?>