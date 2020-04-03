<?php
	require_once "connection.php";

	$brand = mysqli_real_escape_string($connect, $_POST['brand']);

	$query = "SELECT * FROM `vin-location` WHERE brand = '$brand'";
	$result = mysqli_query($connect, $query);

	$row = mysqli_fetch_assoc($result);

	if ($result) {
		$query_brands = "SELECT * FROM `brands`";
		$resultTwo = mysqli_query($connect, $query_brands);

		if ($resultTwo) {
			$rowTwo = mysqli_fetch_assoc($resultTwo);
			// $brandList = 
			if ($rowTwo) {
				echo $rowTwo['Honda'];
			}
		}
	}

?>

<a>
	
</a>


<select name="brand" class="form-control">
	
</select>
<!-- <a class="col-lg-10 col-md-10 col-sm-12 d-flex">
	<a></a>
	
</a>




<a class="col-sm-9 col-md-9 col-sm-12">
	<select name="brand" class="form-control">
		<a ="">Select--</a>
		
	</select>
</a> -->