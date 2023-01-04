<?php
	include_once '../scripts/functions.php';
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
					<p class="just">In Roller Coaster Tycoon 2, there exists a group of scenarios where the goal is to build 10 different coaster types with a specific excitment rating. The excitment rating is a number which indicates how "good" a coaster is. For this test, it is not relevant what the excitement rating is so this is the last time it will be mentioned. What is relevant is what counts as a coaster type. Why is this relevant. The developers of OpenRCT2 have fused certain coasters in the build list together so that they do not show up as different coasters, but as one coaster where you need to select the train type. This has confused players and have seen some of these to ask the question if it is still posible to beat these scenarios. I have tested this and concluded that you can still beat these scenarios and complete them using the same coasters from the build menu. I will explain how I came to the conclusion and why.</p>
					<h2>Coasters and Trains</h2>
					<p class="just">If you play the original Roller Coaster Tycoon 2, you get a list of all the coaster types in the build menu. Certain coasters which use nearly the exact same track, with the exception of certain track pieces missing, are listed as different coasters in the build list. The ones I will use in this example are the floorless coaster, the twister coaster, and the standup twister coaster. In this case, it is quite clear that we are talking about different coaster types as they are listed as different coasters. For OpenRCT2, these coasters have been fused and is listed as one coaster. Now it is unclear if building coasters with different trains, but using the same coaster through the build menu counts as different coaster types. This is where these questions come from. I will now go and explain how I was able to show that these still are different coaster types.</p>
					<h2>The Setup</h2>
					<p>Before we can test the premise, we have a bit of setup work to do. To properly test this, we need to make a custom scenario just to make it easier for us. We need to chose certain parameters for this scenario. Both Roller Coaster Tycoon 2 and OpenRCT2 let us make a new custom scenario with ease. First we need to create a large flat open area. This is done quite easilly. Secondly, we need to chose the no money option for our park. No money allows us to build whatever we want without a financial restriction. </p>
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