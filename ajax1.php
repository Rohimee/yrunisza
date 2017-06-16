<?php
require_once("libs/Db.php");
$objDb = new Db();
$db = $objDb->database;

if($_GET['field_university1_id']) {
		$field_university1_id = isset($_GET['field_university1_id']) ? $_GET['field_university1_id'] : "";

		$query = $db->prepare("SELECT c.*,u.* FROM course c left join university u ON c.university_id = u.university_id WHERE c.university_id='{$field_university1_id}'");
		$query->execute(); //ประมวลผลคำสั่ง sql
    ?>
    <option value="">-- เลือกหลักสูตร --</option>
    <?php
		if($query->rowCount() > 0){ //rowCount เช็คจำนวนแถวที่ได้มา
		while($Result = $query->fetch(PDO::FETCH_ASSOC)){ //ดึงข้อมูลแต่ละรอบใส่ใน $row
			echo "<option value=\"" . $Result['course_id'] . "\">" . $Result['course_name_th'] ."</option>";
			}
		}else{
			echo "<option value=\"\">ไม่มีหลักสูตรในมหาวิทยาลัยนี้</option>";
		}

	}else {
		$field_course1_id = isset($_GET['field_course1_id']) ? $_GET['field_course1_id'] : "";

		$query = $db->prepare("SELECT s.*,c.* FROM subject s left join course c ON s.course_id = c.course_id WHERE s.course_id='{$field_course1_id}'");
		$query->execute(); //ประมวลผลคำสั่ง sql
    ?>
    <option value="">-- เลือกวิชา --</option>
    <?php
		if($query->rowCount() > 0){ //rowCount เช็คจำนวนแถวที่ได้มา
		while($Result = $query->fetch(PDO::FETCH_ASSOC)){ //ดึงข้อมูลแต่ละรอบใส่ใน $row
				echo "<option value=\"" . $Result['subject_id'] . "\">" . $Result['subject_name_th'] ."</option>";
			}
		}else{
			echo "<option value=\"\">ไม่มีวิชาในสาขานี้</option>";
		}
	}

?>
