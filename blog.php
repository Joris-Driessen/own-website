
<html lang="en">
	<head>
		<title>JJPDriessen.nl</title>
		<link rel='stylesheet' href='../css/style.css'>
		<?php
			include_once 'scripts/functions.php';
			echo $meta;
		?>
		
	</head>
	<div class="container">
		<!--Elk goede website heeft toch een easter egg nodig. Bij deze de easter egg.-->
		<div id="body">	
		<audio id="tududu">
						<source src="sounds/tududu.mpeg" type="audio/mpeg">
				</audio>
			<div id="header" class="row bord">
				<div class="col-2">
					<img id="self" src="images/fotozelf.jfif">
				</div>
				<div class="col-2"></div>
				<div class="col-4">
					<p id="header_text"><a href="http://jjpdriessen.nl">JJPDriessen.nl</a></p>
				<div class="col-4"></div>
				</div>
			</div>
			<div class="row">
				<div id="menu" class="col-2 bord">
					<?php 
						$menu = makeMenu($menu);
						print_r($menu);
					?>
				</div>
				<div id="content" class="col-10  bord">
					<p id = "par_one" class="just" >Hier ga ik af en toe blogs schrijven. Deze blogs zullen verschillende onderwerpen bevatten, profesioneel zowel priv&#233;. Er is hier geen schema voor dus zullen ze niet regelmatig geschreven worden. Ik hoop dat ik tussen de 1 a 2 per jaar schrijf.</p>
					
				</div>
			</div>
			<div id="footer" class="bord row">
				<div class="col-5">
				</div>
				<div class="2">
				<p id="foot" onclick="playAudio('tududu')"><i>Copyright &copy; Joris Driessen</i></p>
				</div>
				<div class="5">
				</div>
			</div>
		</div>
	</div>
		<script>
			const x = document.getElementById("tududu");
			
			function playAudio() {
				x.play();
			}
		</script>
</html>