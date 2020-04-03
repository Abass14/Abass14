<?php 
	require_once "connection.php";

	$vin = mysqli_real_escape_string($connect, $_POST['vin']);

	$query = "SELECT * FROM `vin-id` WHERE vin = '$vin'";
	$result = mysqli_query($connect, $query);

	$row = mysqli_fetch_assoc($result);

	if ($row) {
		$msg = "<div class='p-3 bg-light text-success text-center border-success'>
					 The year for this car is <strong>{$row['year']}</strong>
				</div>";
		$_SESSION['msg'] = $msg;
		header("location:vin-id.php");
	}else{
		$errormsg = "<div class='p-3 bg-light text-danger text-center border-success'>
	 				There is no record for this vin label. Check year via <a href='https://www.vindecoder.pl/' target='blank'>Vin-Decoder</a>
				</div>";

		$_SESSION['errormsg'] = $errormsg;
		header("location:vin-id.php");
	}
?>

