<?php
	include_once "../scripts/functions.php";
?>
<html>
	<head>
		<link rel="stylesheet" href="../css/MinStat.css">
		<?php 
			echo $meta;
		?>
	</head>
	<body>
		<div class="container">
			<div class="row">
				<header class="col-12">
					<h1>RCT Homepage</h1>
				</header>
			</div>
			<div class="row">
				<div class="col-2" id="menu">
					<?php
						$menu = makeMenu($menu);
						print_r($menu);
					?>
				</div>
				<div class="col-9">
					<h2>Introduction</h2>
					<p id="p-1" class="rct-p">I have been a fan of Roller Coaster Tycoon 2 for a long time and it is the longest game that I have kept playing. The pupose of this page is to show things that I have either found in the game or other content that I create that is relevant to the game. I will make individual pages with the content and link them here with a short description.
					</p>
					
					<h2>Minimum Stat Overview</h2>
					<p id="p-2" class="rct-p"> Marcel Vos is a Youtuber who makes videos about roller coaster tycoon. He also made a <a href="https://www.reddit.com/r/LordMarcel/comments/78maqk/rct2_table_with_the_minimum_stat_requirements_for/" target="_blank">table</a> with the minimum statistic requirements for different roller coasters. I decided to make a <a href="MinStatOverview.php">table</a> with it and make it interactive with some Javascript.</p>
					
					<h2>Rollercoaster car testing</h2>
					<p id="p-3" class="rct-p">I am somehwhat active in the rollercoaster tycoon community. I participate in community activities and help people if I can. A question I have seen asked many times is conserning the rollercoaster tycoon scenarios concerning the building 10 rollercoaster. <a href="coastertest.php">Here</a> I will discribe my findings on it.</p>
				</div>
			</div>
			<div id="footer" class="bord row">
					<div class="col-5">
					</div>
					<div class="2">
					<p id="foot"><i>Copyright Joris Driessen</i></p>
					</div>
					<div class="5">
					</div>
				</div>
		</div>
	</body>
</html>