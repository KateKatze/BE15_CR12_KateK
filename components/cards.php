<?php

function displayOffers($sql) {
global $conn;
$result = $conn->query($sql);

if ( $result -> num_rows > 0) {
	while ( $row = $result->fetch_assoc()) {
				echo 	'<div class="card col-lg-3 col-md-6 col-sm-12 mb-4 p-0" style="width: 20rem;">
							<img src="' .$row['img']. '"class="card-img-top img-fluid">
	    				<div class="card-body">
	    					<h5 class="card-title">' .$row['locname']. '</h5>
							<hr>
	    					<p class="card-text">' .$row['description']. '</p>
	    				</div>
	    				<div class="card-footer">
				      		<p class="card-text">
				      		Price: ' .$row['price']. ' € </p>';
  				echo 	"<a href='details.php?id=" .$row['id']. "'><button type='button' class='btn btn-primary mb-3'>Details</button></a>
						<a href='update.php?id=" .$row['id']. "'><button type='button' class='btn btn-warning mb-3'>Edit</button></a>
						<a href='delete.php?id=" .$row['id']. "'><button type='button' class='btn btn-danger mb-3'>Delete</button></a>";
				echo 	"</div></div>";
  			}	
		}
	};
?>

