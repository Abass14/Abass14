<?php require_once "head.php" ?>


<body>
	<?php require_once "nav.php" ?>

	<section id="rel-body" class="row">
		<div class="div-center mx-auto border mt-4 px-5">
			<h2 class="text-center py-3 text-primary">Select Car Brand</h2>
			<div class="select-bar mx-auto py-2 text-center bg-primary text-white" onclick="openDrop()">
				<span>--- Select ---</span>
			</div>
			<div id="brand-drop" class="brand-drop mx-auto bg-light text-center">
				<span class="text-center" onclick="closeDrop()"><i class="fi-xwluxl-times-wide"></i></span>
				<a href="acura.php">Acura</a>
				<a href="audi.php">Audi</a>
				<a href="aston.php">Aston Martin</a>
				<a href="bmw.php">BMW</a>
				<a href="cadillac.php">Cadillac</a>
				<a href="chevrolet.php">Chevrolet</a>
				<a href="chrysler.php">Chrysler</a>
				<a href="citreon.php">Citroen</a>
				<a href="daf.php">DAF</a>
				<a href="dodge.php">Dodge</a>
				<a href="ford.php">Ford</a>
				<a href="gm.php">General Motors</a>
				<a href="gmc.php">GMC</a>
				<a href="honda.php">Honda</a>
				<a href="hyundai.php">Hyundai</a>
				<a href="hyosung.php">Hyosung</a>
				<a href="infiniti.php">Infiniti</a>
				<a href="isuzu.php">Isuzu</a>
				<a href="jaguar.php">Jaguar</a>
				<a href="jeep.php">Jeep</a>
				<a href="kia.php">Kia</a>
				<a href="lambo.php">Lamborghini</a>
				<a href="lr.php">Land Rover</a>
				<a href="lexus.php">Lexus</a>
				<a href="http://www.vin-location.com/catalog/" target="blank">Lincoln</a>
				<a href="http://www.vin-location.com/catalog/" target="blank">Maybach</a>
				<a href="mazda.php">Mazda</a>
				<a href="benz.php">Mercedes-Benz</a>
				<a href="http://www.vin-location.com/catalog/" target="blank">Mitsubishi</a>
				<a href="nissan.php">Nissan</a>
				<a href="peugeot.php">Peugeot</a>
				<a href="http://www.vin-location.com/catalog/" target="blank">Piaggio</a>
				<a href="http://www.vin-location.com/catalog/" target="blank">Polaris</a>
				<a href="pontiac.php">Pontiac</a>
				<a href="http://www.vin-location.com/catalog/" target="blank">Porsche</a>
				<a href="http://www.vin-location.com/catalog/" target="blank">Rolls-Royce</a>
				<a href="http://www.vin-location.com/catalog/" target="blank">Subaru</a>
				<a href="http://www.vin-location.com/catalog/" target="blank">Suzuki</a>
				<a href="http://www.vin-location.com/catalog/" target="blank">Tesla</a>
				<a href="toyota.php">Toyota</a>
				<a href="volks.php">Volkswagen</a>
				<a href="volvo.php">Volvo</a>
				<span class="text-center" onclick="closeDrop()"><i class="fi-xwluxl-times-wide"></i></span>
			</div>
		</div>
		<span class="arrow-up">
			<a href="#Main-Nav"><i class="fi-ctluxl-arrow-simple-thin"></i></a>
		</span>
	</section>

	<?php require_once "footer.php" ?>
</body>
	<?php require_once "footer-sec.php" ?>

	<script>
		function openDrop() {
		  document.getElementById("brand-drop").style.height = "500px";
		}

		function closeDrop() {
		  document.getElementById("brand-drop").style.height = "0";
		}
	</script>
	
</html>