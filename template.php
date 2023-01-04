<DOCTYPE html>
<html lang="en">
	<head>
		<title></title>
		<?php
			include_once 'scripts/functions.php';
			echo $meta;
		?>
		
	</head>
	<div class="container">
		<!--Elk goede website heeft toch een easter egg nodig. Bij deze de easter egg.-->
		<div id="body">	
			<div id="header" class="row bord">
				<div class="col-2">
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
				<div class="col-10">
				</div>
			</div>
			<div id="footer" class="bord row">
				<div class="col-5">
				</div>
				<div class="2">
				<p id="foot"><i>Copyright &copy; Joris Driessen</i></p>
				</div>
				<div class="5">
				</div>
			</div>
		</div>
	</div>
</html>