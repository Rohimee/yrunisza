<?php
require_once("libs/Db.php");
$objDb = new Db();
$db = $objDb->database;
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <link rel="icon" href="./assets/img/favicon.png" type="image/png" sizes="16x16">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
    <title>ตรวจสอบรายวิชาที่สามารถเทียบโอน</title>
    <meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0, shrink-to-fit=no' name='viewport' />
    <!--     Fonts and icons     -->
    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700,200" rel="stylesheet" />
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css" />
    <!-- CSS Files -->
    <link href="./assets/css/bootstrap.min.css" rel="stylesheet" />
    <link href="./assets/css/now-ui-kit.css" rel="stylesheet" />
    <!-- CSS Just for demo purpose, don't include it in your project -->
    <link href="./assets/css/demo.css" rel="stylesheet" />
    <link href="./assets/css/dropdown.css" rel="stylesheet" />
    <style media="screen">
        @import url('https://fonts.googleapis.com/css?family=Kanit:100,100i,200,200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i');
             body{
               font-family: 'Kanit', sans-serif;
             }
    </style>
</head>

<body class="index-page">
    <?php require_once 'menu.php'; ?>
    <!-- Start class="wrapper" -->
    <div class="wrapper">
      <!-- Start class="main" -->
        <div class="main"><br>
            <!-- Typography -->
            <!-- Start class="section" -->
            <div class="section" style="background-image: url('assets/img/bg.jpg'); background-size: cover; background-position: top center; min-height: 700px;">
                <div class="container">
                    <h3 class="title">ตรวจสอบรายวิชาที่สามารถเทียบโอน</h3><hr><br><br>
                    <div id="typography">
                          <div class="row">
                            <div class="container">
                              <form action="check_course.php?Action=Save" method="post">
                                <div class="row">
                                    <div class="col-md-6">
                                      <div class="form-group">
                                        <label>มหาวิทยาลัย</label>
                                        <select class="form-control" id="field_university_id" name="field_university_id" required="require">
                                          <option value="">-- เลือกมหาวิทยาลัย --</option>
                                          <?php
                                            $query = $db->prepare("SELECT * FROM university");
                                            $query->execute(); //ประมวลผลคำสั่ง sql
                                            if($query->rowCount() > 0){ //rowCount เช็คจำนวนแถวที่ได้มา
                                            while($viewcat = $query->fetch(PDO::FETCH_ASSOC)){ //ดึงข้อมูลแต่ละรอบใส่ใน $row?>
                                            <option id="<?php echo $viewcat['university_id'];?>" value="<?php echo $viewcat['university_id'];?>"><?php echo $viewcat['university_name_th'];?></option>
                                          <?php }} ?>
                                        </select>
                                      </div>
                                    </div>
                                    <div class="col-md-6">
                                      <div class="form-group">
                                        <label>มหาวิทยาลัย</label>
                                        <select class="form-control" id="field_university1_id" name="field_university1_id" required="require">
                                          <option value="">-- เลือกมหาวิทยาลัย --</option>
                                          <?php
                                            $query = $db->prepare("SELECT * FROM university");
                                            $query->execute(); //ประมวลผลคำสั่ง sql
                                            if($query->rowCount() > 0){ //rowCount เช็คจำนวนแถวที่ได้มา
                                            while($viewcat = $query->fetch(PDO::FETCH_ASSOC)){ //ดึงข้อมูลแต่ละรอบใส่ใน $row?>
                                            <option id="<?php echo $viewcat['university_id'];?>" value="<?php echo $viewcat['university_id'];?>"><?php echo $viewcat['university_name_th'];?></option>
                                          <?php }} ?>
                                        </select>
                                      </div>
                                    </div>
                                    <div class="col-md-6">
                                      <div class="form-group">
                                        <label>หลักสูตร</label>
                                        <select class="form-control" id="field_course_id" name="field_course_id" required="require">
                                          <option value="">-- เลือกหลักสูตร --</option>
                                        </select>
                                      </div>
                                    </div>
                                    <div class="col-md-6">
                                      <div class="form-group">
                                        <label>หลักสูตร</label>
                                        <select class="form-control" id="field_course1_id" name="field_course1_id" required="require">
                                          <option value="">-- เลือกหลักสูตร --</option>
                                        </select>
                                      </div>
                                    </div>

                                    <br><br><br><br><br>
                                    <div class="col text-center">
                                      <button class="btn btn-success btn-round" type="submit">
                                          <i class="now-ui-icons gestures_tap-01"></i> ตรวจสอบ
                                      </button>
                                      <button class="btn btn-danger btn-round" type="reset">
                                          <i class="now-ui-icons ui-1_simple-remove"></i> ยกเลิก
                                      </button>
                                    </div>
                                </div>
                              </form><br>
                              <?php
                              $field_course_id=$_POST['field_course_id'];
                              $field_course1_id=$_POST['field_course1_id'];
                              echo $field_course_id;
                              echo "<br>";
                              echo $field_course1_id;
                                if($_GET["Action"] == "Save"){?>
                                  <br><h5><center>รายวิชาที่สามารถเทียบโอนได้</center></h5><hr>
                                  <div class="row">
                                  <?php
                                    $query = $db->prepare("SELECT * FROM subject NATURAL JOIN transfer WHERE course_id=".$_POST['field_course_id']." ");
                                    $query->execute(); //ประมวลผลคำสั่ง sql
                                    $i=1;
                                    ?>
                                    <div class="col-md-6">
                                    <table class="table table-bordered">
                                      <thead>
                                          <tr>
                                              <th class="text-center" width="100">#</th>
                                              <th class="text-center" width="">YRU</th>
                                              <th class="text-center" width="120">Status</th>
                                          </tr>
                                      </thead>
                                      <tbody>
                                          <?php
                                            if($query->rowCount() > 0){ //rowCount เช็คจำนวนแถวที่ได้มา
                                            while($objResult = $query->fetch(PDO::FETCH_ASSOC)){?>
                                              <tr>
                                                <td><center><?php echo $i; ?></center></td>
                                                <td><?php echo $objResult['subject_name_eng']; ?></td>
                                                <td class="text-center">
                                                <?php
                                                  if ($objResult['transfer_status']==1) {
                                                    echo "<font style='color:#197513'> เทียบโอนได้ </font>";
                                                  }else {
                                                    echo "<font style='color:#f72a43'> เทียบโอนไม่ได้ </font>";
                                                  }
                                                ?>
                                                </td>
                                              </tr>
                                              <?php
                                              $i++;
                                            }
                                          }
                                          ?>
                                        </tbody>
                                      </table>
                                    </div>
                                  <?php

                                  $query = $db->prepare("SELECT * FROM subject NATURAL JOIN transfer WHERE course_id=".$_POST['field_course1_id']." ");
                                  $query->execute(); //ประมวลผลคำสั่ง sql
                                  $i=1;
                                  ?>
                                  <div class="col-md-6">
                                  <table class="table table-bordered">
                                    <thead>
                                        <tr>
                                            <th class="text-center" width="100">#</th>
                                            <th class="text-center" width="">UNISZA</th>
                                            <th class="text-center" width="120">Status</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                  <?php
                                  if($query->rowCount() > 0){ //rowCount เช็คจำนวนแถวที่ได้มา
                                  while($objResult = $query->fetch(PDO::FETCH_ASSOC)){?>
                                    <tr>
                                      <td><center><?php echo $i; ?></center></td>
                                      <td><?php echo $objResult['subject_name_eng']; ?></td>
                                      <td class="text-center">
                                      <?php
                                        if ($objResult['transfer_status']==1) {
                                          echo "<font style='color:#197513'> เทียบโอนได้ </font>";
                                        }else {
                                          echo "<font style='color:#f72a43'> เทียบโอนไม่ได้ </font>";
                                        }
                                      ?>
                                      </td>
                                    </tr>
                                    <?php
                                    $i++;
                                  }
                                }
                                ?>
                              </tbody>
                            </table>
                            </div>
                                <?php

                                  }
                              ?>
                              </div>
                            </div><br><br>
                          </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- End class="main" -->
        <!-- Start class="footer" -->
        <footer class="footer" data-background-color="black">
            <div class="container">
                <nav>
                  <ul>
                      <li>
                          <img src="./assets/img/favicon.png" width="30" height="25"/>
                      </li>
                      <li>
                          <a href="index.php">
                              หน้าหลัก
                          </a>
                      </li>
                      <li>
                          <a href="check_course.php">
                              ตรวจสอบรายวิชา
                          </a>
                      </li>
                      <li>
                          <a href="step_transfer.php">
                              ขั้นตอนการเทียบโอน
                          </a>
                      </li>
                      <li>
                          <a href="transfer.php">
                              เทียบโอนหน่วยกิจ
                          </a>
                      </li>
                      <li>
                          <a href="contact.php">
                              ติดต่อเรา
                          </a>
                      </li>
                  </ul>
                </nav>
                <div class="copyright">
                    YRUNISZA
                    &copy;
                    <script>
                        document.write(new Date().getFullYear())
                    </script>. All rights reserved.
                    <a href="http://www.yru.ac.th/" target="_blank">YRU</a>.
                    <a href="https://www.unisza.edu.my/index.php?lang=ms" target="_blank">UNISZA</a>.
                </div>
            </div>
        </footer>
        <!-- End class="footer" -->
    </div>
    <!-- End class="wrapper" -->
</body>
<!--   Core JS Files   -->
<script src="./assets/js/core/jquery.3.2.1.min.js" type="text/javascript"></script>
<script src="./assets/js/core/tether.min.js" type="text/javascript"></script>
<script src="./assets/js/core/bootstrap.min.js" type="text/javascript"></script>
<!--  Plugin for Switches, full documentation here: http://www.jque.re/plugins/version3/bootstrap.switch/ -->
<script src="./assets/js/plugins/bootstrap-switch.js"></script>
<!--  Plugin for the Sliders, full documentation here: http://refreshless.com/nouislider/ -->
<script src="./assets/js/plugins/nouislider.min.js" type="text/javascript"></script>
<!--  Plugin for the DatePicker, full documentation here: https://github.com/uxsolutions/bootstrap-datepicker -->
<script src="./assets/js/plugins/bootstrap-datepicker.js" type="text/javascript"></script>
<!-- Control Center for Now Ui Kit: parallax effects, scripts for the example pages etc -->
<script src="./assets/js/now-ui-kit.js" type="text/javascript"></script>
<script type="text/javascript">
    $(document).ready(function() {
        // the body of this function is in assets/js/now-ui-kit.js
        nowuiKit.initSliders();
    });

    function scrollToDownload() {

        if ($('.section-download').length != 0) {
            $("html, body").animate({
                scrollTop: $('.section-download').offset().top
            }, 1000);
        }
    }
</script>

<script type="text/javascript">
 $('#field_university_id').change(function() {
            var aaa=$(this).val()
            $.ajax({

                    type: 'GET',
                    data: {field_university_id:aaa},
                    url: 'ajax.php',
                    success: function(data) {
                            $('#field_course_id').html(data);
                    }
            });
    });
    $('#field_course_id').change(function() {
               var bbb=$(this).val()
               $.ajax({

                       type: 'GET',
                       data: {field_course_id:bbb},
                       url: 'ajax.php',
                       success: function(data) {
                               $('#field_subject_id').html(data);
                       }
               });
       });
</script>
<script type="text/javascript">
 $('#field_university1_id').change(function() {
            var xxx=$(this).val()
            $.ajax({

                    type: 'GET',
                    data: {field_university1_id:xxx},
                    url: 'ajax1.php',
                    success: function(data) {
                            $('#field_course1_id').html(data);
                    }
            });
    });
    $('#field_course1_id').change(function() {
               var yyy=$(this).val()
               $.ajax({

                       type: 'GET',
                       data: {field_course1_id:yyy},
                       url: 'ajax1.php',
                       success: function(data) {
                               $('#field_subject1_id').html(data);
                       }
               });
       });
</script>

</html>
