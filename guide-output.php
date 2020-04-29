<?php
	require_once "connection.php";

	$query = "SELECT * FROM `guide`";
	$result = mysqli_query($connect, $query);

	if ($result) {
		$output = "<div class=''>";
		while ($row = mysqli_fetch_assoc($result)) {
			
			
			$output .= "<div class='topic'>
							<h5 class='pt-3'>Topic: {$row['topic']}</h5>
							<span><em>by <strong>{$row['name']}</strong></em></span>
							<p>{$row['comment']}</p>
							<button class='btn btn-success mb-4' onclick='openReply()'>Reply</button>
							<div id='reply' class='reply'>
								<form method='POST' action='reply-process.php'>
									<input type='text' placeholder='Your Name' name='name'>
									<textarea class='reply-text' name='comment' placeholder='Enter comment here....'></textarea>
									<input type='submit' class='form-control btn btn-success' name='submit' value='Reply'>
								</form>
							</div>
						</div>";

		}

		
		$output .= "</div>";
		echo $output;
	}

	require_once "footer-sec.php";
?>

<script type='text/javascript'>
	function openReply() {
		document.getElementById('reply').style.height = '300px';
		document.getElementById('reply').style.width = '350px';
	}
</script>



