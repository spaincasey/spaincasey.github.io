<?php
	$myfile = fopen("studentDirectory.php", "w") or die("Unable to open file!");
	fwrite($myfile, $_GET["obj"]);
	fclose($myfile);
?>