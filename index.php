<?php
require_once 'components/db_connect.php';
include("components/head.php");
include("components/navbar.php");

?>
<div class="container">
	<h1 class="display-6 text-center mt-5 mb-4">Open the world with Mount Everest Travel Agency</h1>
	<h2 class="lead text-center mb-5">Hot offers for the spring season 2022!</h2>
<div class="row d-flex justify-content-around mt-5" id="allcards">

<?php
	require_once("components/cards.php");
	$sql = "SELECT * FROM offers";
	displayOffers($sql);
?>

</div>
</div>


<?php

include("components/footer.php");
?>

