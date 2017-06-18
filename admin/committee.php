<!DOCTYPE html>
<html lang="en">
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="icon" href="build/images/logo-header.png" type="image/png" sizes="16x16">

    <title>ผู้ประเมิน | YRU & UniSZA</title>

    <link href="build/css/bootstrap.min.css" rel="stylesheet">
    <link href="build/css/font-awesome.min.css" rel="stylesheet">
    <link href="build/css/custom.min.css" rel="stylesheet">

  </head>

  <body class="nav-md">

    <?php require_once 'header.php'; ?>

        <!-- page content -->
        <div class="right_col">
          <br><br><br>
          <div class="panel panel-default">
            <div class="panel-body">
                <h3>คณะกรรมการ</h3>
                <hr>
                <?php
                  $query = $db->prepare("SELECT * FROM member NATURAL JOIN course WHERE university_id=:university AND member_id!=:member AND member_verified=1");
                  $query->execute(["university"=>$_SESSION['university'],"member"=>$_SESSION['id']]);

                  if ($query->rowCount()===0) {
                    echo "ขออภัย ระบบไม่พบข้อมูลอาจารย์ที่สังกัดมหาวิทยาลัยของท่านใหขณะนี้...";
                  }else {
                ?>
                <form action="insert.php?action=committee" method="post">
                
                <button class="btn btn-success" type="button" data-toggle="modal" data-target="#add"><i class="fa fa-plus"></i> เลือกวิชาที่จะประเมิน</button>

                <div class="modal fade" id="add">
                  <div class="modal-dialog modal-lg">
                    <div class="modal-content">
                      <div class="modal-header">
                        <h2>เลือกวิชาเทียบโอน</h2>
                      </div>
                      <div class="modal-body">
                        <div class="row">
                          <div class="col-md-6" style="border-right: solid #eeeeee;">
                            <?php
                                $query1 = $db->prepare("SELECT * FROM course NATURAL JOIN university WHERE course_id=:course");
                                $query1->execute(["course"=>$_SESSION['course']]);
                                $row1 = $query1->fetch(PDO::FETCH_ASSOC);
                            ?>
                              <div class="form-group">
                                  <label>มหาวิทยาลัย</label>
                                  <select class="form-control" name="field_university_id" required="required" disabled>
                                  <option value="<?=$row1['university_id']?>"><?=$row1['university_name_th']." / ".$row1['university_name_eng']?></option>
                                  </select>
                                  <input type="hidden" name="university1" value="<?=$row1['university_id']?>">
                              </div>
                              <div class="form-group">
                                  <label>หลักสูตร</label>
                                  <select class="form-control" name="field_course_id" required="required" disabled>
                                  <option value="<?=$row1['course_id']?>"><?=$row1['course_name_th']." / ".$row1['course_name_eng']?></option>
                                  </select>
                              </div>
                              <div class="form-group">
                                  <label>วิชา</label>
                                  <select class="form-control" id="field_subject_id3" name="field_subject_id" required >
                                  <option value="">-- เลือกวิชา / Select Subject --</option>
                                  <?php
                                  $query2 = $db->prepare("SELECT * FROM subject WHERE course_id = :course");
                                  $query2->execute(["course"=>$row1['course_id']]);

                                  if ($query2->rowCount()>0) {
                                    while ($row2 = $query2->fetch(PDO::FETCH_ASSOC)) {
                                  ?>
                                  <option value="<?=$row2['subject_id']?>" data-target="#detail"><?=$row2['subject_name_th']." / ".$row2['subject_name_eng']?></option>
                                  <?php
                                    }
                                  }?>
                                  </select>
                              </div>
                              <div class="form-group">
                                  <label>คำอธิบายรายวิชา</label>
                                  <br>
                                  <div class="panel panel-default">
                                  <div class="panel-body">
                                      <p id="field_subject_description_th3" style="color:#605560;font-size: 14px">
                                      กรุณาเลือกวิชา...
                                      </p>
                                  </div>
                                  </div>
                              </div>
                              <br>
                          </div>                            
                          <div class="col-md-6">
                              <div class="form-group">
                                  <label>มหาวิทยาลัย</label>
                                  <select class="form-control" id="field_university_id1" name="university2" required>
                                      <option value="">-- เลือกวิชา / Select Subject --</option>
                                      <?php
                                      $query2 = $db->prepare("SELECT * FROM university WHERE university_id != :university");
                                      $query2->execute(["university"=>$_SESSION['university']]);

                                      if ($query2->rowCount()>0) {
                                        while ($row2 = $query2->fetch(PDO::FETCH_ASSOC)) {
                                      ?>
                                      <option value="<?=$row2['university_id']?>" data-target="#detail"><?=$row2['university_name_th']." / ".$row2['university_name_eng']?></option>
                                      <?php
                                        }
                                      }?>
                                  </select>
                              </div>
                              <div class="form-group">
                                  <label>หลักสูตร</label>
                                  <select class="form-control" id="field_course_id" required>
                                      <option>-- เลือกหลักสูตร / Select Course --</option>
                                  </select>
                              </div>
                              <div class="form-group">
                                  <label>วิชา</label>
                                  <select class="form-control" id="field_subject_id2" name="field_subject_id2" required>
                                      <option value="">-- เลือกวิชา / Select Subject --</option>
                                  </select>
                              </div>
                              <div class="form-group">
                                  <label>คำอธิบายรายวิชา</label>
                                  <br>
                                  <div class="panel panel-default">
                                  <div class="panel-body">
                                      <p id="field_subject_description_th2" style="color:#605560;font-size: 14px">
                                      กรุณาเลือกวิชา...
                                      </p>
                                  </div>
                                  </div>
                              </div>
                          </div>
                          <input type="hidden" name="selector" value="<?=$_SESSION['id']?>">
                      

                      </div>
                      </div>
                      <div class="modal-footer text-center">
                        <button type="button" class="btn btn-success" data-dismiss="modal">ยืนยัน</button>
                      </div>
                    </div>
                  </div>
                </div>
                
                <table class="table table-striped table-bordered">
                  <thead>
                    <tr>
                      <th>ชื่อ - นามสกุล</th>
                      <th>หลักสูตร</th>
                      <th class="text-center" width="5%">เลือก</th>
                    </tr>
                  </thead>
                  <?php 
                    while ($row = $query->fetch(PDO::FETCH_ASSOC)) {
                  ?>
                  <tbody>
                    <tr>
                      <td><?=$row['member_name'].' '.$row['member_lastname']?></td>
                      <td><?=$row['course_name_th']?></td>
                      <td class="text-center"><input type="checkbox" name="select[<?=$row['member_id']?>]"></td>
                    </tr>
                  </tbody>
                  <?php } ?>
                </table>
                <div class="form-group" style="float: right;">
                  <button class="btn btn-success" type="submit">บันทึก</button>
                  <button class="btn btn-danger" type="reset">ยกเลิก</button>
                </div>
                </form>
                <?php } ?>
            </div>
          </div>
        </div>
        <!-- /page content -->

        <!-- footer content -->
        
        <!-- /footer content -->

      </div>
    </div>

    <script src="build/js/jquery.min.js"></script>
    <script src="build/js/bootstrap.min.js"></script>
    <script src="build/js/custom.min.js"></script>
    <script type="text/javascript">
        $('#field_subject_id3').change(function() {
            var eee=$(this).val()
            $.ajax({
                type: 'GET',
                data: {field_subject_id3:eee},
                url: 'ajax.php',
                success: function(data) {
                    $('#field_subject_description_th3').html(data);
                }
            });
        });
        $('#field_university_id1').change(function() {
            var bbb=$(this).val()
            $.ajax({
                type: 'GET',
                data: {field_university_id1:bbb},
                url: 'ajax.php',
                success: function(data) {
                    $('#field_course_id').html(data);
                }
            });
        });
        $('#field_course_id').change(function() {
            var ccc=$(this).val()
            $.ajax({
                type: 'GET',
                data: {field_course_id:ccc},
                url: 'ajax.php',
                success: function(data) {
                    $('#field_subject_id2').html(data);
                }
            });
        });
        $('#field_subject_id2').change(function() {
            var ddd=$(this).val()
            $.ajax({
                type: 'GET',
                data: {field_subject_id2:ddd},
                url: 'ajax.php',
                success: function(data) {
                    $('#field_subject_description_th2').html(data);
                }
            });
        });
    </script>

  </body>
</html>
