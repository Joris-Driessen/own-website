<?php 
$sounds = 
[
["pink-fluffy-unicorns","", "unicorn"], 
["pikachu-pika-pika-sound-fx","", "derpachu"],
["star-wars-b1-battle-droid_kampfdroide-roger-roger-sound", "Roger!", "other-buttons"],
["tuba_hwu62g6", "Waddle Trombone", "other-buttons"],
["hitler-nein_1", "Nein, nein, nein", "other-buttons"],
["spoiler-just-a-huni-thing-trimmed-v2", "Quadrakill Phreak", "other-buttons"],
["beer", "Ik heb dorst", "other-buttons"],
["joke_drum_effect", "Rimshot", "other-buttons"],
["slayer-angel-of-death-scream-when-you-accidentally-step-on-a-lego-reign-in-blood-_lZoi0xL", "", "tom"],
["takeo-ischi-new-bibi-hendl-chicken-yodeling-2011-mp3cut", "", "chicken"],
["teemo_4", "", "teemo"],
["hallelujahshort.swf", "", "holyhand"],
["trololo", "Trololo", "other-buttons"],
["nathan-explosion-noooooo", "Nathan nooooooo", "other-buttons"],
["koniggratzer", "Konig", "other-buttons"],
["psychostick_-__beer__mp3cut", "Beer is good", ""],
["metalgearsolid.swf", "Metal Gear", ""],
["sound-9", "Wololo", ""],
["chewbacca.swf", "", "chewy"],
["demacia", "", "garen"],
["pentakill-lol", "Pentakill", ""],
["better-duck", "Sivir Duck", ""],
["meu-filme_63", "Tristana Dance", ""],
["erro", "Windows error", ""],
["imthegod_1", "Hellfire", ""],
["sadtrombone.swf", "Sad Trombone", ""],
["spongebob-fail", "Spongebob fail", ""],
["spongebob-2000-years-later-2019-download-link", "2000 years later", ""],
["engineer_no01", "Nope", ""],
["r2d2_scream_converted", "R2D2 Scream", ""],
["groetenuitbrabant", "Groeten uit Brabant", ""],
["first-solo", "", "torgue"],
["halloooooooooo", "Lang hallo", ""],
["hallo_1", "hallo 2", ""],
["hallo_bM9rf9A", "hallo 3", ""],
["thor-is-here", "Thor is here", ""],
["very_twisty_rL8rb7d", "", "ryan"],
["byebye", "Jinx Bye Bye", ""],
["doh.swf", "Annoyed Grunt", ""],
["noot-noot", "Noot Noot", ""],
["seinfeld-theme_1", "Seinfeld", ""],
["jimmy-scream-stream_vHwFCqX", "Screaming Cowboy", ""],
["cricket_1", "Crickets", ""],
["i-am-the-senate", "Senate", "other-buttons"],
["doit_1", "Do it", "other-buttons"],
["allons-y2", "The Doctor Allonsy", ""],
["turret-thankyou", "Thank You", ""],
["portal2buzzer", "Buzzer", ""],
];




function make_table($sounds){
	$html = "<tr>";
	$t = 0;
	foreach($sounds as $sound){
		$html .= "<td><button type='submit' name='instant' value=".$sound[0]." class='".$sound[2]."'>".$sound[1]."</button></td>";
		$t++;
		if ($t == 6){
			$t = 0;
			$html .= "</tr><tr>";
			
		}
	}
	return $html;
}
?>