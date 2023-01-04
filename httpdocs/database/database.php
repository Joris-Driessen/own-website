<?php
	$url="";
	$user="";
	$password="";
	$con=mysqli_connect($url, $username, $passworl);
	if(!$con){
		die('Could not Connect to Database', .mysql_error());
	}

?>