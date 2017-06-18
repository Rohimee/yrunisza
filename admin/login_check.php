<?php
	session_start();
	  if($_SESSION['name']==""){
	  	echo "<script>alert ('กรุณาเข้าสู่ระบบ');</script>";
	    echo "<script>window.location='/admin';</script>";
	}
?>
