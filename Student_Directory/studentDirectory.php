<?php
	$myfile = fopen("studentDirectory.txt", "w") or die("Unable to open file!");
	fwrite($myfile, $_GET["obj"]);
	fclose($myfile);
?>