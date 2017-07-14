 <?php
	/*การตรวจสอบ Error E_NOTICE*/
	error_reporting( error_reporting() & ~E_NOTICE );
	/*สิ้นสุด*/

	$connect = mysql_connect("localhost","root","") or die("Error Connect to Database");
	$db_select = mysql_select_db("yrunisza");

	mysql_query("SET NAMES UTF8");
	mysql_query("SET character_set_result=utf8");
?>
