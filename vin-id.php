<?php require_once "head.php";
	
	session_start();

?>

<body>
	<?php require_once "nav.php" ?>
	<div class="rel-body">
		<div class="row main-form">
			<div class="form-cover mx-auto border mt-4 px-5 text-primary">
				<h2 class="text-center py-3">Select VIN Label</h2>
				<form class="form-group mx-auto" method="POST" action="vin-id-process.php">
					<div class="row mx-auto">
						<div class="col-sm-3 col-md-3 col-sm-12">
							<label>
								VIN Label
							</label>
						</div>
						<div class="col-lg-8 col-md-8 col-sm-12">
							<select name="vin" class="form-control">
								<option>Select--</option>
								<option value="A">A</option>
								<option value="B">B</option>
								<option value="C">C</option>
								<option value="D">D</option>
								<option value="E">E</option>
								<option value="F">F</option>
								<option value="G">G</option>
								<option value="H">H</option>
								<option value="I">I</option>
								<option value="J">J</option>
								<option value="K">K</option>
								<option value="L">L</option>
								<option value="M">M</option>
								<option value="N">N</option>
								<option value="O">O</option>
								<option value="P">P</option>
								<option value="Q">Q</option>
								<option value="R">R</option>
								<option value="S">S</option>
								<option value="T">T</option>
								<option value="U">U</option>
								<option value="V">V</option>
								<option value="W">W</option>
								<option value="X">X</option>
								<option value="Y">Y</option>
								<option value="Z">Z</option>
							</select>
						</div>
					</div>
					<div class="row">
						<div class="col-sm-3 m-auto py-4">
							<input type="submit" name="submit" class="btn btn-primary" value="Submit">
						</div>
					</div>
					<div class="col-md-8 mx-auto">
						<?php
							if (isset($_SESSION['msg']) && $_SESSION['msg']) {
								echo $_SESSION['msg'];
								unset($_SESSION['msg']);
							}elseif (isset($_SESSION['errormsg']) && $_SESSION['errormsg']) {
								echo $_SESSION['errormsg'];
								unset($_SESSION['errormsg']);
							}
						 ?>
					</div>
				</form>
			</div>
		</div>
	</div>

	<?php require_once "footer.php" ?>
</body>
	<?php require_once "footer-sec.php" ?>
	
</html>