<?php 
$instant = $_POST['instant'];
if ($instant == ""){
	$instant = "erro";
}
$data = ["instant" => ["name" => $instant]];
$data_string = json_encode($data);                                                                                   
//$ch = curl_init('http://lahaije.at.event.campzone.nl:8000/instant ');       
$ch = curl_init('http://192.168.178.80:8000/instant');       
                                                               
curl_setopt($ch, CURLOPT_CUSTOMREQUEST, "POST");                                                                     
curl_setopt($ch, CURLOPT_POSTFIELDS, $data_string);                                                                  
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);                                                                      
curl_setopt($ch, CURLOPT_HTTPHEADER, array(                                                                          
    'Content-Type: application/json',                                                                                
    'Content-Length: ' . strlen($data_string))                                                                       
);         
$result = curl_exec($ch);
//var_dump($instant);
?>

<!DOCTYPE html>

<html>
<head>
<link rel="stylesheet" href="myinstant.css">
</head>
	<body>
		<div id="container">
		<div id="boe">
		</div>
			<div id="content">
				<div id="header">
				<h1>My Instant</h1>
				</div>
				<form id="my_instant" action="myinstant.php" method="POST">
					<fieldset>
						<input type="text" id="element" name="instant">
						<button id="button">Klik me voor "My instant"</button>
					</fieldset>
							<!--
							Hier is de code voor een nieuwe rij voor makkelijk een toevoegen
							<tr>
							<td>
							<button type="submit" name="instant" value="erro" class="other-buttons"></button>
							</td>
							<td>
							<button type="submit" name="instant" value="erro" class="other-buttons"></button>
							</td>
							<td>
							<button type="submit" name="instant" value="erro" class="other-buttons"></button>
							</td>
							<td>
							<button type="submit" name="instant" value="erro" class="other-buttons"></button>
							</td>
							<td>
							<button type="submit" name="instant" value="erro" class="other-buttons"></button>
							</td>
							<td>
							<button type="submit" name="instant" value="erro" class="other-buttons"></button>
							</td>
						</tr>
							-->
							<table>
							
						<tr id="een">
									<td>
							<button type="submit" value="pink-fluffy-unicorns" name="instant" class="pics"id="unicorn"></button>
									</td>
									<td>
							<button type="submit" value="pikachu-pika-pika-sound-fx" name="instant" class="pics" id="derpachu" ></button>
									</td>
									<td>
							<button type="submit" name="instant" value="star-wars-b1-battle-droid_kampfdroide-roger-roger-sound" class="other-buttons">Roger!</button>
									</td>
									<td>
							<button type="submit" value="tuba_hwu62g6" name="instant">Waddle Trombone</button>
									</td>
									<td>
							<button type="submit" name="instant" value="hitler-nein_1" class="other-buttons">Nein, nein, nein</button>
									</td>
									<td>
							<button type="submit" name="instant" value="spoiler-just-a-huni-thing-trimmed-v2" class="other-buttons">Quadrakill Phreak</button>
									</td>
						</tr>
						
						<tr id="twee">
									<td>
							<button type="submit" name="instant" value="beer" class="other-buttons">Ik heb dorst</button>
									</td>
									<td>
							<button type="submit" name="instant" value="joke_drum_effect" class="other-buttons">Rimshot</button>
									</td>
									<td>
							<button type="submit" name="instant" value="slayer-angel-of-death-scream-when-you-accidentally-step-on-a-lego-reign-in-blood-_lZoi0xL" class="pics" id="tom"></button>
									</td>									
									<td>
							<button type="submit" name="instant" value="takeo-ischi-new-bibi-hendl-chicken-yodeling-2011-mp3cut" class="pics" id="chicken"></button>
									</td>
									<td>
							<button type="submit" name="instant" value="teemo_4" class="pics" id="teemo"></button>
									</td>
									<td>
							<button type="submit" name="instant" value="hallelujahshort.swf" class="other-buttons">Hallelujah</button>
								</td>
						</tr>
						
						<tr id="drie">
									<td>
							<button type="submit" value="trololo" name="instant" class="other-buttons">Trololo</button>
									</td>
									<td>
							<button type="submit" value="nathan-explosion-noooooo" name="instant" class="otherbuttons">Nathan Nooooo!!!</button>
									</td>
									<td>
							<button type="submit" value="koniggratzer" name="instant" class="otherbuttons">Konig</button>
									</td>
									<td>
							<button type="submit" name="instant" value="psychostick_-__beer__mp3cut" class="other-buttons">Beer is good!</button>
							</td>
							<td>
							<button type="submit" name="instant" value="metalgearsolid.swf" class="other-buttons">Metal Gear</button>
							</td>
							<td>
							<button type="submit" name="instant" value="sound-9" class="other-buttons">Wolollo</button>
							</td>
						</tr>
						<tr>
							<td>
							<button type="submit" name="instant" value="chewbacca.swf" class="pics" id="chewy"></button>
							</td>
							<td>
							<button type="submit" name="instant" value="demacia" class="pics" id="test"></button>
							</td>
							<td>
							<button type="submit" name="instant" value="pentakill-lol" class="other-buttons">pentakill</button>
							</td>
							<td>
							<button type="submit" name="instant" value="better-duck" class="other-buttons">Sivir - duck</button>
							</td>
							<td>
							<button type="submit" name="instant" value="meu-filme_63" class="other-buttons">Tristana dance</button>
							</td>
							<td>
							<button type="submit" name="instant" value="erro" class="other-buttons">Error</button>
							</td>
						</tr>
						<tr>
							<td>
							<button type="submit" name="instant" value="imthegod_1" class="other-buttons">Hellfire</button>
							</td>
							<td>
							<button type="submit" name="instant" value="sadtrombone.swf" class="other-buttons">Sad Trombone</button>
							</td>
							<td>
							<button type="submit" name="instant" value="spongebob-fail" class="other-buttons">Spongebob fail</button>
							</td>
							<td>
							<button type="submit" name="instant" value="spongebob-2000-years-later-2019-download-link" class="other-buttons">2000 years later</button>
							</td>
							<td>
							<button type="submit" name="instant" value="engineer_no01" class="other-buttons">No</button>
							</td>
							<td>
							<button type="submit" name="instant" value="r2d2_scream_converted" class="other-buttons">R2D2</button>
							</td>
						</tr>
						<tr>
							<td>
							<button type="submit" name="instant" value="groetenuitbrabant" class="other-buttons">Groetje New Kids</button>
							</td>
							<td>
							<button type="submit" name="instant" value="first-solo" class="pics" id="torgue"></button>
							</td>
							<td>
							<button type="submit" name="instant" value="halloooooooooo" class="other-buttons">Lang Hallo</button>
							</td>
							<td>
							<button type="submit" name="instant" value="hallo_1" class="other-buttons">Hallo</button>
							</td>
							<td>
							<button type="submit" name="instant" value="hallo_bM9rf9A" class="other-buttons">Hallo 3</button>
							</td>
							<td>
							<button type="submit" name="instant" value="thor-is-here" class="other-buttons">Thor</button>
							</td>
							</tr>
							<tr>
							<td>
							<button type="submit" name="instant" value="very_twisty_rL8rb7d" class="pics" id="ryan"></button>
							</td>
							<td>
							<button type="submit" name="instant" value="byebye" class="other-buttons">Jinx Bye Bye</button>
							</td>
							<td>
							<button type="submit" name="instant" value="doh.swf" class="other-buttons">Annoyed Grunt</button>
							</td>
							<td>
							<button type="submit" name="instant" value="erro" class="other-buttons"></button>
							</td>
							<td>
							<button type="submit" name="instant" value="erro" class="other-buttons"></button>
							</td>
							<td>
							<button type="submit" name="instant" value="erro" class="other-buttons"></button>
							</td>
						</tr>
							</table>
						</form>
			</div>
		</div>
	</body>
</html>
