
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
					<p id="par_one" class="just">This website is still a work in progress. More content will be added soon.</p>
					<p id="mobile">For best viewing on mobile, switch to desktop mode.</p>
					<p id="par_two" class="just">Hello, my name is Joris Driessen. This is my personal website. I created it for fun and show my talent as a web designer. In this website I will try and incorporate as much of what I have learned in it as I can. I also think it is a good opportunity to tell a little about myself. I am currently working as a software tester at <a href="https://www.risqit.nl/">RisQIT</a>.  </p>
					<p id="par_three" class="just">I learned to program PHP, Javascript, and a bit of SQL through Slim in ICT. I also got my ISTQB foundation certificate. My goals are to learn more about test automatisation and performance testing.</p>
					
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