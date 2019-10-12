<?php
	$origin = 'http://localhost:8181';
	header("Access-Control-Allow-Origin: " . $origin);
	$myfile = fopen("studentDirectory.txt", "w") or die("Unable to open file!");
	fwrite($myfile, $_GET["obj"]);
	fclose($myfile);
?>