<?php
require_once 'dbconnect.php';

include("components/head.php");
include("components/navbar.php");

?>
<div class="container">
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

