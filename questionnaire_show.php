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
            <div class="section">
                <div class="container">
                    <h3 class="title">สรุปผลแบบสำรวจความพึงพอใจของผู้ใช้ระบบสารสนเทศ</h3><hr><br>
                    <div id="typography">
                          <div class="row">
                            <div class="container">
                              <table width="950" border="0" align="center" cellpadding="2" cellspacing="2">
                                <tr>
                                  <td colspan="6" bgcolor="#CCCCCC"><b>ตอนที่ 1</b> ข้อมูลพื้นฐาน</td>
                                </tr>
                                <tr>
                                  <td width="104">&nbsp;</td>
                                  <td width="326">&nbsp;</td>
                                  <td width="263">&nbsp;</td>
                                  <td width="72">&nbsp;</td>
                                  <td width="72">&nbsp;</td>
                                  <td width="75">&nbsp;</td>
                                </tr>
                                <tr>
                                  <td>&nbsp;</td>
                                  <td align="center" bgcolor="#33CCFF">เพศ</td>
                                  <td align="center" bgcolor="#33CCFF">จำนวน(คน)</td>
                                  <td>&nbsp;</td>
                                  <td>&nbsp;</td>
                                  <td>&nbsp;</td>
                                </tr>
                                <tr>
                                <?php
                              // Make a MySQL Connection
                              include("config.php");
                              $query = "SELECT gender, COUNT(id_person) as qty FROM tb_person GROUP BY gender";
                              $result = mysql_query($query) or die(mysql_error());

                              // Print out result
                              while($row = mysql_fetch_array($result)){
                              ?>
                                  <td>&nbsp;</td>
                                  <td><?php echo $row['gender']; ?></td>
                                  <td><?php echo $row['qty']; ?></td>
                                  <td></td>
                                  <td>&nbsp;</td>
                                  <td>&nbsp;</td>
                                </tr>
                              <?php } ?>
                                <tr>
                              <?php
                              // Make a MySQL Connection
                              include("config.php");
                              $query = "SELECT COUNT(id_person) as qty FROM tb_person ";
                              $result = mysql_query($query) or die(mysql_error());

                              // Print out result
                              while($row = mysql_fetch_array($result)){
                              ?>
                                  <td>&nbsp;</td>
                                  <td align="center">รวม</td>
                                  <td><?php echo $row['qty']; ?></td>
                                  <td>&nbsp;</td>
                                  <td>&nbsp;</td>
                                  <td>&nbsp;</td>
                              <?php } ?>
                                </tr>
                                <tr>
                                  <td>&nbsp;</td>
                                  <td >&nbsp;</td>
                                  <td >&nbsp;</td>
                                  <td>&nbsp;</td>
                                  <td>&nbsp;</td>
                                  <td>&nbsp;</td>
                                </tr>
                                <tr>
                                  <td>&nbsp;</td>
                                  <td align="center" bgcolor="#FFCC99">อายุ</td>
                                  <td align="center" bgcolor="#FFCC99">จำนวน(คน)</td>
                                  <td>&nbsp;</td>
                                  <td>&nbsp;</td>
                                  <td>&nbsp;</td>
                                </tr>
                                <tr>
                                 <?php
                              // Make a MySQL Connection
                              include("config.php");
                              $query = "SELECT age, COUNT(id_person) as qtyage FROM tb_person GROUP BY age";
                              $result = mysql_query($query) or die(mysql_error());

                              // Print out result
                              while($row = mysql_fetch_array($result)){
                              ?>
                                  <td>&nbsp;</td>
                                  <td><?php echo $row['age']; ?></td>
                                  <td><?php echo $row['qtyage']; ?></td>
                                  <td>&nbsp;</td>
                                  <td>&nbsp;</td>
                                  <td>&nbsp;</td>
                                </tr>
                              <?php } ?>

                                <tr>

                              <?php
                              // Make a MySQL Connection
                              include("config.php");
                              $query = "SELECT COUNT(id_person) as qty FROM tb_person ";
                              $result = mysql_query($query) or die(mysql_error());

                              // Print out result
                              while($row = mysql_fetch_array($result)){
                              ?>
                                  <td>&nbsp;</td>
                                  <td align="center">รวม</td>
                                  <td><?= $row['qty']; ?></td>
                                  <td>&nbsp;</td>
                                  <td>&nbsp;</td>
                                  <td>&nbsp;</td>
                              <?php } ?>
                                </tr>

                                <tr>
                                  <td>&nbsp;</td>
                                  <td >&nbsp;</td>
                                  <td>&nbsp;</td>
                                  <td>&nbsp;</td>
                                  <td>&nbsp;</td>
                                  <td>&nbsp;</td>
                                </tr>
                                <tr>
                                  <td>&nbsp;</td>
                                  <td align="center" bgcolor="#CCCCFF">สถานภาพ</td>
                                  <td align="center" bgcolor="#CCCCFF">จำนวน(คน)</td>
                                  <td>&nbsp;</td>
                                  <td>&nbsp;</td>
                                  <td>&nbsp;</td>
                                </tr>
                                <tr>
                                     <?php
                              // Make a MySQL Connection
                              include("config.php");
                              $query = "SELECT status, COUNT(id_person) as qtystatus FROM tb_person GROUP BY status";
                              $result = mysql_query($query) or die(mysql_error());

                              // Print out result
                              while($row = mysql_fetch_array($result)){
                              ?>
                                  <td>&nbsp;</td>
                                  <td><?php echo $row['status']; ?></td>
                                  <td><?php echo $row['qtystatus']; ?></td>
                                  <td>&nbsp;</td>
                                  <td>&nbsp;</td>
                                  <td>&nbsp;</td>
                                </tr>
                              <?php } ?>
                                <tr>
                                  <td>&nbsp;</td>
                                  <td>&nbsp;</td>
                                  <td>&nbsp;</td>
                                  <td>&nbsp;</td>
                                  <td>&nbsp;</td>
                                  <td>&nbsp;</td>
                                </tr>
                                <tr>
                                  <td colspan="6" bgcolor="#CCCCCC"><b>ตอนที่ 2</b> ความพึงพอใจของผู้ใช้เว็บไซต์</td>
                                </tr>
                                <tr>
                                  <td>&nbsp;</td>
                                  <td align="center">รายการ</td>
                                  <td align="center">คะแนนเฉลี่ย</td>
                                  <td align="center">ระดับ</td>
                                  <td>&nbsp;</td>
                                  <td>&nbsp;</td>
                                </tr>
                                <tr>
                                       <?php
                              // Make a MySQL Connection
                              include("config.php");
                              $query = "SELECT tb_question.*,tb_answer.id_question, sum(tb_answer.score) as qtyscore ,count(tb_answer.id_person) as qtyperson  ";
                              $query .= "FROM tb_answer LEFT JOIN tb_question ON tb_answer.id_question = tb_question.id_question GROUP BY tb_answer.id_question";
                              $result = mysql_query($query) or die(mysql_error());


                              // Print out result
                              while($row = mysql_fetch_array($result)){

                              ?>
                                  <td>&nbsp;</td>
                                  <td><?php echo $row['question']; ?></td>
                                  <td align="center"><?php echo number_format(($row['qtyscore'] / $row['qtyperson']),2); ?></td>
                                  <td align="center"><?php
                              	 $answer = (number_format(($row['qtyscore'] / $row['qtyperson']),2));

                              	if ($answer >= 4.50)
                              	{
                              	    echo  "มากที่สุด";

                              	} else if ($answer >= 3.50)
                              	{
                              		echo "มาก";
                              	}else if ($answer >= 2.50)
                              	{
                              		echo "ปานกลาง";
                              	}else if ($answer >= 1.50)
                              	{
                              		echo "น้อย";
                              	}else
                              		echo "น้อยที่สุด";
                              	 ?></td>
                                  <td></td>
                                  <td></td>
                                </tr>
                              <?php } ?>
                                <tr>
                                  <td>&nbsp;</td>
                                  <td>&nbsp;</td>
                                  <td>&nbsp;</td>
                                  <td>&nbsp;</td>
                                  <td>&nbsp;</td>
                                  <td>&nbsp;</td>
                                </tr>
                                <tr>
                                  <td>&nbsp;</td>
                                  <td>&nbsp;</td>
                                  <td>&nbsp;</td>
                                  <td>&nbsp;</td>
                                  <td>&nbsp;</td>
                                  <td>&nbsp;</td>
                                </tr>
                                <tr>
                                  <td>&nbsp;</td>
                                  <td>&nbsp;</td>
                                  <td>&nbsp;</td>
                                  <td>&nbsp;</td>
                                  <td>&nbsp;</td>
                                  <td>&nbsp;</td>
                                </tr>
                              </table>
                            </div><br><br><br><br><br><br>
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
