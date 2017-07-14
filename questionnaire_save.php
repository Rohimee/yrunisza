<?php
	include('Config.php');

// INSERT TABLE tb_roomreserv

	$strSQL = "INSERT INTO tb_person (created,gender,age,education,status) VALUES ('".date("d-m-Y H:i:s")."','".$_POST["rdo_gender"]."','". $_POST["rdo_age"] ."','".$_POST["rdo_education"]."','".$_POST["rdo_state"]."')";

	$objQuery = mysql_query($strSQL);
	if($objQuery)
	{

		//SELECT id_person

		$strSQL3 = "SELECT id_person FROM tb_person ORDER BY id_person  DESC LIMIT 1";
		$objQuery3 = mysql_query($strSQL3);
		$objResult3 = mysql_fetch_array($objQuery3);
		if(!$objResult3)
		{
			$id_person  = 1;
		}
		else
		{
			$id_person  = $objResult3["id_person"];

	}
	}
	else
	{
	echo "Error Save tb_person 	 [".$strSQL."]";
	}

	for($i=1;$i<=8;$i++)
		{
				if($_POST["radionNo".$i] != "")
			{

					// INSERT TABLE calendar
					$strSQL2 = "INSERT INTO tb_answer  ";
					$strSQL2 .="(id_person,id_question,score) VALUES ('".$id_person."','". $i ."','".$_POST["radionNo".$i]."')";
					mysql_query($strSQL2);
			}
		}

			echo "<script>";
			echo "alert('คุณได้ส่งแบบสอบถามเรียบร้อยแล้ว');";
			echo "window.location='questionnaire_show.php';";
			echo "</script>";


?>
