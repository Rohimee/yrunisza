<?php
  require_once("libs/Db.php");
  $objDb = new Db();
  $db = $objDb->database;



	if($_GET['field_university_id']) {
    $field_university_id = isset($_GET['field_university_id']) ? $_GET['field_university_id'] : "";

    $query = $db->prepare("SELECT c.*,u.* FROM course c left join university u ON c.university_id = u.university_id
			WHERE c.university_id='{$field_university_id}' ORDER BY course_id");
    $query->execute();

    if ($query->rowCount()>0) {
      while ($row = $query->fetch(PDO::FETCH_ASSOC)) {
      echo "<option value=\"" . $row['course_id'] . "\">".$row['course_name_th'] ." / ".$row['course_name_eng']."</option>";
			}
      echo "<option value='new_c'>อื่น / Others ...</option>";
		}else{
			echo "<option value=\"\">ไม่พบหลักสูตร</option>";
      echo "<option value='new_c'>อื่น / Others ...</option>";
		}

	}else if($_GET['field_subject_id1']) {
    $field_subject_id = isset($_GET['field_subject_id1']) ? $_GET['field_subject_id1'] : "";

    $query = $db->prepare("SELECT * FROM subject WHERE subject_id='{$field_subject_id}' ");
    $query->execute();

    if ($query->rowCount()>0) {
      while ($row = $query->fetch(PDO::FETCH_ASSOC)) {
        $value1=$row["subject_description_th"];
        $value2=$row["subject_description_eng"];

        echo "<h5>ภาษาท้องถิ่น</h5>".$value1."<br><br><h5>ภาษาอังกฤษ</h5>".$value2;
      }
    }else{
      echo "ไม่พบข้อมูล";
    }
    
  }else if($_GET['field_university_id1']) {
   $field_university_id = isset($_GET['field_university_id1']) ? $_GET['field_university_id1'] : "";

    $query = $db->prepare("SELECT c.*,u.* FROM course c left join university u ON c.university_id = u.university_id
      WHERE c.university_id='{$field_university_id}' ORDER BY course_id");
    $query->execute();

    if ($query->rowCount()>0) {
      echo "<option>-- เลือกหลักสูตร / Select Course --</option>";
      while ($row = $query->fetch(PDO::FETCH_ASSOC)) {
      echo "<option value=\"" . $row['course_id'] . "\">".$row['course_name_th'] ." / ".$row['course_name_eng']."</option>";
      }
    }else{
      echo "<option value=\"\">ไม่พบหลักสูตร</option>";
    }

  }else if($_GET['field_course_id']) {
    $field_course_id = isset($_GET['field_course_id']) ? $_GET['field_course_id'] : "";

    $query = $db->prepare("SELECT s.*,c.* FROM subject s left join course c ON s.course_id = c.course_id
      WHERE s.course_id='{$field_course_id}' ORDER BY subject_id");
    $query->execute();

    if ($query->rowCount()>0) {
      echo"<option>-- เลือกวิชา / Select Subject --</option>";
      while ($row = $query->fetch(PDO::FETCH_ASSOC)) {
      echo "<option value=\"" . $row['subject_id'] . "\">".$row['subject_name_th'] ." / ".$row['subject_name_eng']."</option>";
      }
    }else{
      echo "<option value=\"\">ไม่พบวิชา</option>";
    }

  }else if($_GET['field_subject_id2']) {
    $field_subject_id = isset($_GET['field_subject_id2']) ? $_GET['field_subject_id2'] : "";

    $query = $db->prepare("SELECT * FROM subject WHERE subject_id='{$field_subject_id}' ");
    $query->execute();

    if ($query->rowCount()>0) {
      while ($row = $query->fetch(PDO::FETCH_ASSOC)) {
      
      $value1=$row["subject_description_th"];
      $value2=$row["subject_description_eng"];

      
      echo "<h5>ภาษาท้องถิ่น</h5>".$value1."<br><br><h5>ภาษาอังกฤษ</h5>".$value2;
      }
    }else{
      echo "ไม่พบข้อมูล";
    }
  }else if($_GET['field_subject_id3']) {
    $field_subject_id = isset($_GET['field_subject_id3']) ? $_GET['field_subject_id3'] : "";

    $query = $db->prepare("SELECT * FROM subject WHERE subject_id='{$field_subject_id}' ");
    $query->execute();

    if ($query->rowCount()>0) {
      while ($row = $query->fetch(PDO::FETCH_ASSOC)) {
      
      $value1=$row["subject_description_th"];
      $value2=$row["subject_description_eng"];

      
      echo "<h5>ภาษาท้องถิ่น</h5>".$value1."<br><br><h5>ภาษาอังกฤษ</h5>".$value2;
      }
    }else{
      echo "ไม่พบข้อมูล";
    }
  }else if($_GET['field_subject_description_th2']) {
    $field_subject_id = isset($_GET['field_subject_id2']) ? $_GET['field_subject_id2'] : "";

    $query = $db->prepare("SELECT * FROM subject WHERE subject_id='{$field_subject_id}' ");
    $query->execute();

    if ($query->rowCount()>0) {
      while ($row = $query->fetch(PDO::FETCH_ASSOC)) {
      
      $value1=$row["subject_description_th"];
      }
    }
    $b='กหหฟฟ';
    $number = similar_text($value1, $b, $percent);
    
    if ($percent==100) {?>
          <br>
          <div class="progress">
          <div class="progress-bar progress-bar-success loading" role="progressbar" aria-valuenow="<?php echo (int)$percent; ?>" aria-valuemin="0" aria-valuemax="100" style="width: <?php echo (int)$percent."%";?>">
              <?php echo (int)$percent."%"; ?>
          </div>
          </div>
          <br>
          <center>ผ่าน</center>
      <?php }elseif ($percent>=80) {?>
          <br>
          <div class="progress">
          <div class="progress-bar progress-bar-success loading" role="progressbar" aria-valuenow="<?php echo (int)$percent; ?>" aria-valuemin="0" aria-valuemax="100" style="width: <?php echo (int)$percent."%";?>">
              <?php echo (int)$percent."%"; ?>
          </div>
          </div>
          <br>
          <center>ผ่าน</center>
      <?php }elseif ($percent>=75) {?>
          <br>
          <div class="progress">
          <div class="progress-bar progress-bar-success loading" role="progressbar" aria-valuenow="<?php echo (int)$percent; ?>" aria-valuemin="0" aria-valuemax="100" style="width: <?php echo (int)$percent."%";?>">
              <?php echo (int)$percent."%"; ?>
          </div>
          </div>
          <center>ปานกลาง <img src="./assets/img/warning.png" width='20px' height='20px'></center>
      <?php }else {?>
          <br>
          <div class="progress">
          <div class="progress-bar progress-bar-success loading" role="progressbar" aria-valuenow="<?php echo (int)$percent; ?>" aria-valuemin="0" aria-valuemax="100" style="width: <?php echo (int)$percent."%";?>">
              <?php echo (int)$percent."%"; ?>
          </div>
          </div>
          ไม่ผ่าน
      <?php } 
  
  }
?>
