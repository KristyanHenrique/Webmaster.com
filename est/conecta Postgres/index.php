<?php
	$con_string = "host=localhost port=5432 dbname=webmaster user=postgres password=power2486";
	$bdcon = pg_connect($con_string);
	$a=1;
	$result=pg_query($bdcon, "SELECT * FROM usuario where idusuario = '".$a."'");
	$rs = pg_fetch_assoc($result);
	echo "<pre>";
	var_dump($rs);
	echo "</pre>";
?>