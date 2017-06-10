<?php
	error_reporting( error_reporting() & ~E_NOTICE );
	$connect = mysql_connect("localhost","root","");
	$db_select = mysql_select_db("yru_db",$connect);

	mysql_query("SET NAMES UTF8");
	mysql_query("SET character_set_result=utf8");
?>
