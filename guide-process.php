<?php
	require_once "connection.php";

	$name = mysqli_real_escape_string($connect, $_POST['name']);
	$mail = mysqli_real_escape_string($connect, $_POST['mail']);
	$topic = mysqli_real_escape_string($connect, $_POST['topic']);
	$comment = mysqli_real_escape_string($connect, $_POST['comment']);

	$query = "SELECT * FROM `guide`";
	$result = mysqli_query($connect, $query);

	$num = mysqli_num_rows($result);

	if ($result) {
		$update = "INSERT INTO `guide`(`name`, `mail`, `topic`, `comment`) VALUES ('$name','$mail','$topic','$comment')";
		$resultTwo = mysqli_query($connect, $update);
		header('location:guide.php');
		
	}

?>


