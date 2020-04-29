<?php require_once "head.php"; ?>

<body>
	<?php require_once "nav.php" ?>
	<div class="container flex-container grid-container bg-light">
		<div class="grid-a px-3 pt-5">
			<form method="POST" action="guide-process.php">
				<h3>Share</h3>
				<input type="text" placeholder="Your Name" name="name">
				<input type="email" placeholder="Your Mail" name="mail">
				<input type="text" placeholder="Enter Topic" name="topic">
				<textarea class="textA" name="comment" placeholder="Enter comment here...."></textarea>
				<input type="submit" class="form-control btn btn-primary" name="submit" value="Submit">
			</form>
		</div>
		<div class="grid-b px-3">
			<div>
				<button class="btn btn-outline-primary latest"><a href="#Zafooter">Go to latest</a></button>
				<?php require_once "guide-output.php" ?>
			</div>
		</div>
		<span class="arrow-up">
			<a href="#Zafooter"><i class="fi-cnldxl-sort-up"></i></a>
		</span>
	</div>

	<div id="Zafooter"></div>
	<?php require_once "footer.php" ?>
</body>
	<?php require_once "footer-sec.php" ?>
	
</html>