<?php
	include_once '../scripts/functions.php';
	include_once '../database/database.php'
?>
<html>
	<head>
			<?php
			echo $meta;
			?>
		<link rel="stylesheet" href="../css/MinStat.css">
	</head>
	<body>
		
		<div class="container">
			<div class="row">
				<header class="col-12">
					<h1>Coaster Type Test</h1>
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
					<h2>Intoduction</h2>
					<p class="just">OpenRCT2 is open source project where a group of people are rewriting the code of the classic tycoon game Roller Coaster Tycoon 2. The project is adding cheats, quality of life changes, and streamlining parts of the game. One of the things they have done is merge some rides in the "construct coaster" window. This has caused a bit of confusion for some players for one type of scenario.</p>
					
					<p class="just">One of the scenario types asks players to build 10 different types of roller coasters. With the merging of some coasters in the build window some players have been confused about wether these scenarios can still be completed. This got me thinking and I created a test to see if it was still possible to beat these scenarios. To test this, I setup a custom scenario with the goal of building 10 different types of coasters and building different combinations of coasters. Through the testing I concluded that the game bases coaster types on train types used instead of coaster choice in the build menu.</p>
					<h2>Explanation of the problem</h2>
					<p class="just"></p>
					<h2>The Setup</h2>
					<p class="jsut">Using the scenario editor I made a setup of a park. For the ride selection, I chose all the roller coasters that use the twister roller coaster track type, and a large selection of other roller coasters. I made the park large and flat to leave enough room to build the roller coasters needed to test the premise. For financial options, I chose the "No Money" option. This removes the financial aspect of the game so that the focus remains on the coaster building. All other options were left alone because they were not relevant to the test. Using this park, testing could begin.</p>
					<h2>The Testing</h2>
					<p class="just">Testing was straigth forward. I started out with building 8 coasters which do not use the twister coaster track. </p>
					
					
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
	</body>
</html>