<?php
include_once "data.php";
$instant = $_POST['instant'];

$data = ["instant" => ["name" => $instant]];
$data_string = json_encode($data);                                                                                   
//$ch = curl_init('http://lahaije.at.event.campzone.nl:8000/instant');                                              
$ch = curl_init('http://192.168.178.80:8000/instant');                                                                      
curl_setopt($ch, CURLOPT_CUSTOMREQUEST, "POST");                                                                     
curl_setopt($ch, CURLOPT_POSTFIELDS, $data_string);                                                                  
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);                                                                      
curl_setopt($ch, CURLOPT_HTTPHEADER, array(                                                                          
    'Content-Type: application/json',                                                                                
    'Content-Length: ' . strlen($data_string))                                                                       
);         
$result = curl_exec($ch);


?>

<html>
<head>
<link rel="stylesheet" href="myinstantneat.css">
</head>
	<body>
		<div id="container">
		<div id="boe">
		</div>
			<div id="content">
				<div id="header">
				<h1>My Instant</h1>
				</div>
				<form id="my_instant" action="myinstantneat.php" method="POST">
					<table>
					<?php
						$table = make_table($sounds);
						echo $table;
					?>
					</table>
				</form>
			</div>
		</div>
	</body>
</html>
