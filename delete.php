<?php 
require_once 'components/db_connect.php';
include("components/head.php");
include("components/navbar.php");

if (isset($_GET['id'])) {
   $id = $_GET['id'];
   $sql = "SELECT * FROM offers WHERE id = '$id'" ;

   $result = $conn->query($sql);
   $data = $result->fetch_assoc();
   $conn->close();
}

?>

<div class="card mt-5" style="width:22rem; margin: 0 auto;">
<h3 class="h3 text-center m-5">Do you really want to delete this offer?</h3>
<div class="card-footer">
<form action ="actions/a_delete.php" method="get" class="text-center">
    <input type="hidden" class="form-control" name="id" value="<?php echo $data["id"]; ?>">
 	<button class="btn btn-success m-2" type="submit">Yes, delete it!</button>
   <a href="index.php" class="btn btn-danger m-2">No, go back!</a>
</form>
</div>
</div>



<?php 
	include("components/footer.php");
?>