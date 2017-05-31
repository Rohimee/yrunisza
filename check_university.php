<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <link rel="apple-touch-icon" sizes="76x76" href="./assets/img/apple-icon.png">
    <link rel="icon" type="image/png" href="./assets/img/favicon.png">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
    <title>ตรวจสอบมหาวิทยาลัย</title>
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
                  <li class="nav-item active" id="main-menu" style="margin-top:30px;">
                      <a class="nav-link" href="check_university.php">
                          <p><font color="black" size="2">ตรวจสอบมหาวิทยาลัย</font></p>
                      </a>
                  </li>
                  <li class="nav-item">
                      <a class="nav-link" href="check_course.php">
                          <p><font color="black" size="2">ตรวจสอบรายวิชา</font></p>
                      </a>
                  </li>
              </ul>
            </nav>
          </div>
      </div>
    <div class="col-sm-9 col-md-10 affix-content">
      <div class="container"><br><br>
        <font size="5">ตรวจสอบมหาวิทยาลัย</font> <hr><br>
        <form action="#" method="post">
          <div class="row">
            <table class="table table-bordered">
              <thead>
                  <tr>
                      <th class="text-center" width="150">#</th>
                      <th class="text-center" width="">รายชื่อมหาวิทยาลัย</th>
                  </tr>
              </thead>
              <tr>
                <td></td>
                <td></td>
              </tr>
            </table>
          </div>
        </form>
        </div><br><br><br><br>
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

</html>
