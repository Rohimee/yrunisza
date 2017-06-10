<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <link rel="apple-touch-icon" sizes="76x76" href="./assets/img/apple-icon.png">
    <link rel="icon" type="image/png" href="./assets/img/favicon.png">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
    <title>เทียบโอนหน่วยกิต</title>
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
    <link href="./assets/css/menu.css" rel="stylesheet" />
    <link href="./assets/css/loading.min.css" rel="stylesheet" />
    <style media="screen">
        @import url('https://fonts.googleapis.com/css?family=Kanit:100,100i,200,200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i');
             body{
               font-family: 'Kanit', sans-serif;
             }
    </style>
</head>

<body class="index-page">
    <?php require_once 'menu.php'; ?><br><br><br>
    <div class="row affix-row">
      <div class="col-sm-3 col-md-2 affix-sidebar">
          <div class="sidebar-nav">
            <nav class="navbar">
                <ul class="navbar-nav">
                    <li class="nav-item" id="main-menu" style="margin-top:30px;">
                        <a class="nav-link" href="step_transfer.php">
                            <p><font color="black" size="2">ขั้นตอนการเทียบโอน</font></p>
                        </a>
                    </li>
                    <li class="nav-item active">
                        <a class="nav-link" href="transfer.php">
                            <p><font color="black" size="2">เทียบโอนหน่วยกิต</font></p>
                        </a>
                    </li>
                </ul>
            </nav>
          </div>
      </div>
    <div class="col-sm-9 col-md-10 affix-content">
      <div class="container"><br><br>
        <font size="5">เทียบโอนหน่วยกิต</font> <hr><br>
        <form action="transfer.php?Action=Save" method="post">
          <div class="row">
              <div class="col-md-6">
                <div class="form-group">
                  <label>มหาวิทยาลัย</label>
                  <select class="form-control" id="field_u_id" name="field_u_id" required="require">
                    <option value="">-- เลือกมหาวิทยาลัย --</option>
                    <?php
                        require_once ("connectdb.php");
                        $query = mysql_query ("SELECT * FROM university_tbl");
                        while($viewcat=mysql_fetch_array($query)){ ?>
                        <option id="<?php echo $viewcat['u_id'];?>" value="<?php echo $viewcat['u_id'];?>"><?php echo $viewcat['u_name'];?></option>
                    <?php } ?>
                  </select>
                </div>
              </div>
              <div class="col-md-6">
                <div class="form-group">
                  <label>มหาวิทยาลัย</label>
                  <select class="form-control" id="field_u1_id" name="field_u1_id" required="require">
                    <option value="">-- เลือกมหาวิทยาลัย --</option>
                    <?php
                        require_once ("connectdb.php");
                        $query = mysql_query ("SELECT * FROM university_tbl");
                        while($viewcat=mysql_fetch_array($query)){ ?>
                        <option id="<?php echo $viewcat['u_id'];?>" value="<?php echo $viewcat['u_id'];?>"><?php echo $viewcat['u_name'];?></option>
                    <?php } ?>
                  </select>
                </div>
              </div>
              <div class="col-md-6">
                <div class="form-group">
                  <label>หลักสูตร</label>
                  <select class="form-control" id="field_m_id" name="field_m_id" required="require">
                    <option value="">-- เลือกหลักสูตร --</option>
                  </select>
                </div>
              </div>
              <div class="col-md-6">
                <div class="form-group">
                  <label>หลักสูตร</label>
                  <select class="form-control" id="field_m1_id" name="field_m1_id" required="require">
                    <option value="">-- เลือกหลักสูตร --</option>
                  </select>
                </div>
              </div>
              <div class="col-md-6">
                <div class="form-group">
                  <label>วิชา</label>
                  <select class="form-control" id="field_s_id" name="field_s_id" required="require">
                    <option value="">-- เลือกวิชา --</option>
                  </select>
                </div>
              </div>
              <div class="col-md-6">
                <div class="form-group">
                  <label>วิชา</label>
                  <select class="form-control" id="field_s1_id" name="field_s1_id" required="require">
                    <option value="">-- เลือกวิชา --</option>
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
        </form>
        <?php
          if($_GET["Action"] == "Save"){
              require_once 'connectdb.php';
              $a = $_POST['field_s_id'];
              $b = $_POST['field_s1_id'];
              $select = "SELECT * FROM subject_tbl WHERE s_id=".$_POST['field_s_id']." ";
              $result = mysql_query($select) or die ("Error Query [".$select."]");
              $objResult = mysql_fetch_array($result);
                $a = $objResult['s_id'] . " , ";
                $b = $objResult['s_name'] . " , ";
                $c = $objResult['s_explanation_th'] . " , ";
                $d = $objResult['s_explanation_en'] . "<br>";

                $select = "SELECT * FROM subject_tbl WHERE s_id=".$_POST['field_s1_id']." ";
                $result = mysql_query($select) or die ("Error Query [".$select."]");
                $objResult = mysql_fetch_array($result);
                  $e = $objResult['s_id'] . " , ";
                  $f = $objResult['s_name'] . " , ";
                  $g = $objResult['s_explanation_th'] . " , ";
                  $h = $objResult['s_explanation_en'] . "<br>";

                  /*echo "<br>";
                  echo $a;
                  echo $b;
                  echo $c;
                  echo $d;
                  echo "<br>";
                  echo $e;
                  echo $f;
                  echo $g;
                  echo $h;*/

                  if( $b == $f AND $c == $g ){ ?>
                    <br>
                    <div class="progress">
                      <div class="progress-bar progress-bar-success loading" role="progressbar" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100" style="width: 100%;">
                        100%
                      </div>
                    </div><br>
                    <center>ผ่าน <img src="./assets/img/success.png" width='20px' height='20px'></center>
                  <?php
                  }else if($b != $f AND $c == $g) {
                  ?>
                    <br>
                    <div class="progress">
                      <div class="progress-bar progress-bar-warning loading" role="progressbar" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100" style="width: 50%;">
                        50%
                      </div>
                    </div><br>
                    <center>ปานกลาง <img src="./assets/img/warning.png" width='20px' height='20px'></center>
                  <?php
                  }else if($b == $f AND $c != $g) {
                  ?>
                    <br>
                    <div class="progress">
                      <div class="progress-bar progress-bar-warning loading" role="progressbar" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100" style="width: 50%;">
                        50%
                      </div>
                    </div><br>
                    <center>ปานกลาง <img src="./assets/img/warning.png" width='20px' height='20px'></center>
                  <?php
                  }else {
                  ?>
                    <br>
                    <div class="progress">
                      <div class="progress-bar progress-bar-danger loading" role="progressbar" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100" style="width: 0%; color:#000000;">
                        0%
                      </div>
                    </div><br>
                    <center>ไม่ผ่าน <img src="./assets/img/not.png" width='20px' height='20px'></center>
                  <?php
                  }

              /*
              echo $field_s_id ."<br>";
              echo $field_s1_id ."<br>";
              if( $field_s_id == $field_s1_id )
              {
                echo "ผ่าน";
              }else if ($field_s_id <> $field_s1_id) {
                {
                  echo "ปานกลาง";
                }
              }else {
                echo "ไม่ผ่าน";
              }*/
            }?>
            <br><br><br><br><br>
        <!-- Start class="footer" -->
        <footer class="footer">
            <div class="container">
                <nav>
                    <ul>
                        <li>
                            <a href="index.php">
                                หน้าหลัก
                            </a>
                        </li>
                        <li>
                            <a href="check_university.php">
                                ตรวจสอบมหาวิทยาลัย
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
        </div><br><br><br>
      </div>
    </div>

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
     $('#field_u_id').change(function() {
                var aaa=$(this).val()
                $.ajax({

                        type: 'GET',
                        data: {field_u_id:aaa},
                        url: 'ajax.php',
                        success: function(data) {
                                $('#field_m_id').html(data);
                        }
                });
        });
        $('#field_m_id').change(function() {
                   var bbb=$(this).val()
                   $.ajax({

                           type: 'GET',
                           data: {field_m_id:bbb},
                           url: 'ajax.php',
                           success: function(data) {
                                   $('#field_s_id').html(data);
                           }
                   });
           });
    </script>
    <script type="text/javascript">
         $('#field_u1_id').change(function() {
                    var xxx=$(this).val()
                    $.ajax({

                            type: 'GET',
                            data: {field_u1_id:xxx},
                            url: 'ajax1.php',
                            success: function(data) {
                                    $('#field_m1_id').html(data);
                            }
                    });
            });
            $('#field_m1_id').change(function() {
                       var yyy=$(this).val()
                       $.ajax({

                               type: 'GET',
                               data: {field_m1_id:yyy},
                               url: 'ajax1.php',
                               success: function(data) {
                                       $('#field_s1_id').html(data);
                               }
                       });
               });
        </script>

</html>
