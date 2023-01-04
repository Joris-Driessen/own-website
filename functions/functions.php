<?php
	$meta = "
		<link rel='stylesheet' href='https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css'>
		<script src='https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js'></script>
		<script src='https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js'></script>
		<script src='https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js'></script>
		<meta name='viewport' content='width=device-width, initial-scale=1'>
		<meta charset='utf-8'>
		<meta name='author' content='Joris Driessen'>
		<meta name='description' content='HTML, CSS, Javascript PHP';>";
		
	$menu = [ 
		['text' => 'Home', 'url' => 'http://jjpdriessen.nl', 'target' => '_self'],
		['text' => 'RCT', 'url' => '../RCT/rct.php', 'target' => '_self'],
		['text' => 'Projects', 'url' => 'projects.php', 'target' => '_self'],
		['text' => 'Model Building', 'url' => 'model_building.php', 'target' => '_self'],
		['text' => 'Blog', 'url' => 'blog.php', 'target' => '_self'],
		];
	
	
	function makeMenu($menu) {
		$html = '<ul>';
		foreach($menu as $item) {
			$html .= '<li class = "list_menu"><a href="'.$item['url'].'" target="'.$item['target'].'">'.$item['text'].'</a></li>';
		}
		$html .= '</ul>';
		return($html);
	};
	
?>