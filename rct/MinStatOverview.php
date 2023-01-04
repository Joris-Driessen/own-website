<?php
	include_once "../scripts/functions.php";
?>
<html>
	<head>
		<link rel="stylesheet" href="../css/MinStat.css">
		<meta name="Marcel Vos">
		<?php 
			echo $meta;
		?>
		<script src="MinStatData.js"></script>
		<script>
			let reset = 0;
			function CoasterHighlight(){
				document.getElementById(reset).style.backgroundColor = "rgb(179, 79, 79)";
				const a = document.getElementById("coasterSelect");
				const highlight = a.options[a.selectedIndex].value;
				//alert(highlight);
				document.getElementById(highlight).style.backgroundColor = "rgba(95, 7, 7, 0.6)";
				reset = highlight;
				
			}
			function load(){
				for (let i = 0; i < coasters.length; i++){
					let select = "<option value="+i+" id=option"+i+">"+coasters[i].name+"</option>";
					document.getElementById("coasterSelect").innerHTML +=  select;
					
					let table = "<tr id="+i+"></tr>";
					document.getElementById("CoasterTable").innerHTML += table;
					
					const coaster 	= coasters[i].name;
					const high 		= coasters[i].drop_height;
					const num_drop 	= coasters[i].num_drops;
					const max_speed = coasters[i].max_speed;
					const c_length	= coasters[i].coaster_length;
					const neg_G 	= coasters[i].max_neg_Gs;
					const lat_G	 	= coasters[i].max_lat_Gs;
					document.getElementById(i).innerHTML += "<td>"+coaster+"</td>";
					document.getElementById(i).innerHTML += "<td>"+high+"</td>";
					document.getElementById(i).innerHTML += "<td>"+num_drop+"</td>";
					document.getElementById(i).innerHTML += "<td>"+max_speed+"</td>";
					document.getElementById(i).innerHTML += "<td>"+c_length+"</td>";
					document.getElementById(i).innerHTML += "<td>"+neg_G+"</td>";
					document.getElementById(i).innerHTML += "<td>"+lat_G+"</td>";
				}
			}
			
		</script>
	</head>
	<body onload="load()">
		<div class="container">
			<div class="row">
			<header class="col-12"><h1>Minimum Stat Requirements for Coasters</h1></header>
			</div>
			<div class="row">
			<div id="menu" class="col-2">
				<?php
					$menu = makeMenu($menu);
						print_r($menu);
				?>
			</div>
			<div class="col-9">
			<fieldset id="content">
				<section>
				<label><b>Select your coaster</b></label>
				<select id="coasterSelect">
				</select>
				<button onclick="CoasterHighlight()">Get Min Stats</button>
				</section>
				
				<table id="CoasterTable">
				<tr>
					<th>Coaster Name</th>
					<th>Min drop <br>height</th>
					<th># of drops</th>
					<th>Max speed</th>
					<th>Length</th>
					<th>Max neg G</th>
					<th>Max lat G</th>
				</tr>
				</table>
			</fieldset>
			</div>
		</div>
	</body>
</html>