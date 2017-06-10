<?php
	require_once("libs/Db.php");
	$objDb = new Db();
	$db = $objDb->database;

	if($_GET['field_u1_id']) {
			$field_u1_id = isset($_GET['field_u1_id']) ? $_GET['field_u1_id'] : "";

			$query = $db->prepare("SELECT m.*,u.* FROM major_tbl m left join university_tbl u ON m.u_id = u.u_id WHERE m.u_id='{$field_u1_id}'");
			$query->execute(); //ประมวลผลคำสั่ง sql
	    ?>
	    <option value="">-- เลือกหลักสูตร --</option>
	    <?php
			if($query->rowCount() > 0){ //rowCount เช็คจำนวนแถวที่ได้มา
			while($Result = $query->fetch(PDO::FETCH_ASSOC)){ //ดึงข้อมูลแต่ละรอบใส่ใน $row
				echo "<option value=\"" . $Result['m_id'] . "\">" . $Result['m_name'] ."</option>";
				}
			}else{
				echo "<option value=\"\">ไม่มีหลักสูตรในมหาวิทยาลัยนี้</option>";
			}

		}else {
			$field_m1_id = isset($_GET['field_m1_id']) ? $_GET['field_m1_id'] : "";

			$query = $db->prepare("SELECT s.*,m.* FROM subject_tbl s left join major_tbl m ON s.m_id = m.m_id WHERE s.m_id='{$field_m1_id}'");
			$query->execute(); //ประมวลผลคำสั่ง sql
	    ?>
	    <option value="">-- เลือกวิชา --</option>
	    <?php
			if($query->rowCount() > 0){ //rowCount เช็คจำนวนแถวที่ได้มา
			while($Result = $query->fetch(PDO::FETCH_ASSOC)){ //ดึงข้อมูลแต่ละรอบใส่ใน $row
					echo "<option value=\"" . $Result['s_id'] . "\">" . $Result['s_name'] ."</option>";
				}
			}else{
				echo "<option value=\"\">ไม่มีวิชาในสาขานี้</option>";
			}
		}
?>
