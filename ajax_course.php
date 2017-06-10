<?php
require_once("libs/Db.php");
$objDb = new Db();
$db = $objDb->database;

if($_GET['field_u_id']) {
		$field_u_id = isset($_GET['field_u_id']) ? $_GET['field_u_id'] : "";

		$query = $db->prepare("SELECT * FROM subject_tbl NATURAL JOIN major_tbl NATURAL JOIN university_tbl WHERE u_id=$field_u_id");
		$query->execute(); //ประมวลผลคำสั่ง sql
    $i=1;
		if($query->rowCount() > 0){ //rowCount เช็คจำนวนแถวที่ได้มา
			?>
				<thead>
						<tr>
								<th class="text-center" width="100">#</th>
								<th class="text-center" width="">ชื่อรายวิชา</th>
								<th class="text-center" width="250">สาขา</th>
						</tr>
				</thead>
			<?php
		while($Result = $query->fetch(PDO::FETCH_ASSOC)){ //ดึงข้อมูลแต่ละรอบใส่ใน $Result
      ?>
			<tbody>
	      <tr>
	        <td><center><?php echo $i; ?></center></td>
	        <td><?php echo $Result['s_name']; ?></td>
	        <td><?php echo $Result['m_name']; ?></td>
	      </tr>
			</tbody>
    <?php
    $i++;
			}
		}else{?>
					<th class="text-center">ไม่มีหลักสูตรในมหาวิทยาลัยนี้</th>
		<?php
		}

	}


?>
