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
    <?php
      if($_GET["Action"] == "Save"){
        include('connect.php');

      			$question = $_POST["field_questionnaire"];

      			//Check for dupplicate
      			$check = "SELECT * FROM tb_question WHERE question = '$question' ";
      			$result = mysql_query($check) ;
      			$num = mysql_num_rows($result);
      		        if($num > 0)
      		        {
      		             echo "<script>";
      								 echo "alert('ข้อคำถามนี้มีอยู่ในฐานข้อมูลแล้ว');";
      								 echo "window.location='questionnaire_add.php';";
      		          	 echo "</script>";
      				}
      						/*End Check for dupplicate*/
      						else{

      			//Insert to Database
      				$sql = "INSERT INTO tb_question (question) VALUES ('$question')";

      				$result = mysql_query($sql) ;

      					}

      				if($result > 0){
      						echo "<script type='text/javascript'> </script>";
      						echo "<script>alert('ระบบทำการบันทึกข้อมูลเรียบร้อยแล้ว'); </script>";
      						echo "<script>window.location = 'questionnaire_add.php'; </script>";
      				  }
      				  else{
      						echo "<script type='text/javascript'> </script>";
      						echo "<script>alert('ระบบมีข้อผิดพลาดบางอย่าง (กรุณาสมัครสมาชิกใหม่ หรือ ติดต่อเจ้าหน้าที่)'); </script>";
      						echo "<script>history.back();</script>";
      				  }
      					exit();
      }
    ?>
    <?php require_once 'menu.php'; ?>
    <!-- Start class="wrapper" -->
    <div class="wrapper">
      <!-- Start class="main" -->
        <div class="main"><br>
            <!-- Typography -->
            <!-- Start class="section" -->
            <div class="section">
                <div class="container">
                    <h3 class="title">เพิ่มข้อคำถาม</h3><hr><br>
                    <div id="typography">
                          <div class="row">
                            <div class="container">
                              <form class="" action="questionnaire_add.php?Action=Save" method="post">
                                <div class="form-group">
                                    <label class="col-md-3 control-label">เพิ่มข้อคำถาม</label>
                                    <div class="col-md-4">
                                      <div class="input-group">
                                        <span class="input-group-addon"><i class="fa fa-home fa" aria-hidden="true"></i></span>
                                        <input type="text" class="form-control" autocomplete="off" name="field_questionnaire" placeholder="Add..." required="required">
                                      </div>
                                    </div>
                                </div><br>
                                <div class="form-group">
                                    <!-- Button -->
                                    <div class="col-md-offset-3 col-md-9">
                                        <button type="Submit" class="btn btn-success">เพิ่ม</button>
                                        <button type="Reset" class="btn btn-danger">ล้างข้อมูล</button>
                                    </div>
                                </div>
                              </form>
                            </div><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>
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

</html>
