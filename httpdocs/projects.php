<DOCTYPE html>
<html lang="en">
	<head>
		<title>Projects</title>
		<link rel='stylesheet' href='../css/style.css'>
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
				<div  id="content" class="col-10">
					<h1>Projects</h1>
						<p id="ppone" class="just">This section of my website is to show projects I have done. This includes some of the tests and exercizes that I needed to make when following the course of Slin in ICT and other projects that I have done. You can download the projects to see the code of these projects.</p>
						
					<h2>Slim in ICT</h2>
						<p id="pptwo" class="just">This section I will briefly talk about the projects from Slim in ICT and link them to their own pages. The excersizes were presented via a pdf. Because I do not know if I can share these pdfs, I will try and transcribe them as comments in the source code of the pages. I will not be puting a menu or home button on these projects because I believe that it is best to show the pages as "as is" for peole to get a better idea of what I did during the course.</p>
						
							<h3 class="proj">Javascript</h3>
								<p id="ppthree">This is the <a href="slim_in_ict/javascript_toets.html">Javascript</a> test I needed to make for Slim in ICT. It combines some Javascript with JQuery</p>
							<h3 class="proj">First PHP quiz</h3>
							<h3 class="proj">Database quiz</h3>
					
					<h2>Others</h2>
						<p class="just">Here I will place projects that I have done that are not from Slim in ICT. These are projects I mostly did for fun</p>
						<h3 class="proj">Soundboard template</h3>
						<p>This is a template of a soundboard I made in 2019 during Campzone. There is a python sctipt behind it to make it work that was written by a friend of mine. This was used in the tent for some stupid fun. The code which sends the data to the server to make it work is kept intact. </p>
						<h3 class="proj">Soundboard</h3>
						<p>This is the same as the template of the soundboard on top, but with the code changed so that it does work.</p>
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