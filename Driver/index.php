 <?php include "config/config.php";?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title><?php include "config/title.php";?></title>

  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="plugins/fontawesome-free/css/all.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
  <!-- Tempusdominus Bootstrap 4 -->
  <link rel="stylesheet" href="plugins/tempusdominus-bootstrap-4/css/tempusdominus-bootstrap-4.min.css">
  <!-- iCheck -->
  <link rel="stylesheet" href="plugins/icheck-bootstrap/icheck-bootstrap.min.css">
  <!-- JQVMap -->
  <link rel="stylesheet" href="plugins/jqvmap/jqvmap.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="dist/css/adminlte.min.css">
  <!-- overlayScrollbars -->
  <link rel="stylesheet" href="plugins/overlayScrollbars/css/OverlayScrollbars.min.css">
  <!-- Daterange picker -->
  <link rel="stylesheet" href="plugins/daterangepicker/daterangepicker.css">
  <!-- summernote -->
  <link rel="stylesheet" href="plugins/summernote/summernote-bs4.min.css">
</head>
<body class="hold-transition skin-light sidebar-mini">
<div class="wrapper">
 <!--  -->
  <!-- Preloader -->
  <div class="preloader flex-column justify-content-center align-items-center">
    <img class="animation__shake" src="dist/img/logo.png" alt="bSafe" height="60" width="60">
  </div>
<!-- <img src="../Registration/dist/img/footer.jpg"> -->
  <!-- Navbar -->
    <?php include "includes/navbar.php"?>
  <!-- /.navbar -->

  <!-- Main Sidebar Container -->
    <?php include "includes/menubar.php"?>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper" style="background-image: url('../Registration/dist/img/footer.jpg'); background-repeat: no-repeat; left: 0; bottom: 0; right: 0; z-index:9999;">
      <div class="row">
        <div class="col-md-12">
          <div class="card card-info">
            <div class="card-header">
              <h3 class="card-title">&nbsp;</h3>
            </div>
        </div>
      </div>
    </div>
    <!-- Content Header (Page header) -->
<!--     <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0">Dashboard</h1>
          </div> 
        </div> 
      </div> 
    </div> -->
    <!-- /.content-header -->

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <!-- Small boxes (Stat box) -->
        <div class="row">

          <img src="adv/rp2024.jpg" class="pl-sm-0 pr-sm-0 pl-xs-0 pr-xs-0" alt="" title="" style="width:100%; height: 100px;">
              
          <div class="col-12 col-sm-3 col-md-3">
             <hr>
          </div>          

          <div class="col-6 col-sm-3 col-md-3">
            <div class="info-box">
              <img src="dist/img/students.png" alt="" title="" style="width: 50px; height: auto;">
              <div class="info-box-content">
                <span class="info-box-text"><a href="pages/students_list.php">Students</a></span>
                  <?php
                    $mobno = $_SESSION['login'];
                    $sln=0;
                    $sql = "SELECT * FROM tbl_registration1 where mobno='$mobno'";
                    $query = $conn->query($sql);
                    if($row = $query->fetch_assoc()){   
                      $id = $row['id'];
                      $sq = "SELECT * FROM tbl_parents WHERE driverid='$id'";
                      $query = $conn->query($sq);
                      if($row1 = $query->fetch_assoc()){
                      
                        $sq1 = "SELECT * FROM tbl_child WHERE pid='$row1[pid]'";
                        $query1 = $conn->query($sq1);
                        while($row2 = $query1->fetch_assoc()){$sln++;}  
                      } else{echo $conn->error;}
                    }
                  ?>               
                <span class="info-box-number"><?php echo $sln;?></span>
              </div>
            </div>
          </div>

          <div class="col-6 col-sm-3 col-md-3">
            <div class="info-box">
              <img src="dist/img/teachers.png" alt="" title="" style="width: 50px; height: auto;">
              <div class="info-box-content">
                <span class="info-box-text"><a href="pages/teachers_list.php">Teachers</a></span>
                  <?php
                     
                    $tsln=0;
                    $sql = "SELECT * FROM tbl_registration1 where mobno='$mobno'";
                    $query = $conn->query($sql);
                    if($row = $query->fetch_assoc()){   
                      $id = $row['id'];
                      $sq = "SELECT * FROM tbl_teachers WHERE driverid='$id'";
                      $query = $conn->query($sq);
                      while($row1 = $query->fetch_assoc()){$tsln++;}  
                    }
                  ?>               
                <span class="info-box-number"><?php echo $tsln-1;?></span>
              </div>
            </div>
          </div>


          <div class="col-6 col-sm-3 col-md-3">
            <div class="info-box">
              <img src="dist/img/attendance.png" alt="" title="" style="width: 50px; height: auto;">
              <div class="info-box-content">
                <span class="info-box-text">Attendance</span>
                <span class="info-box-number">10</span>
              </div>
            </div>
          </div>

          <div class="col-6 col-sm-3 col-md-3">
            <div class="info-box">
              <img src="dist/img/payment.png" alt="" title="" style="width: 50px; height: auto;">
              <div class="info-box-content">
                <span class="info-box-text">Payment</span>
                <span class="info-box-number">10</span>
              </div>
            </div>
          </div>

        </div>
        <!-- /.row -->
  
      </div><!-- /.container-fluid -->

      <div class="row">
        <div class="col-md-12">
          <!-- <div class="card card-info">
            <div class="card-header">
              <h3 class="card-title">&nbsp;</h3>
            </div>
        </div> -->
      </div>
    </div>
          
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
    <?php //include "includes/footer.php"?>


  <footer class="main-footer" style="background-color:#56a5ec;color: #ffffff;position: fixed; left: 0; bottom: 0; right: 0; z-index:9999; font-size: 14px; padding-bottom: 30px;">
     
    <center>     
      <a href="<?php echo Dashboard;?>" style="color: #ffffff;margin-left: -10px;"> <i class="fa fa-home"></i>&nbsp;Home</a>&nbsp;&nbsp;
      <a href="#" style="color: #ffffff;"> <i class="fa fa-recycle"></i>&nbsp;Tracking</a>&nbsp;&nbsp;
      <a href="#" style="color: #ffffff;"><i class="fa fa-bell"></i>&nbsp;Notification</a>&nbsp;&nbsp;
      <a href="<?php echo Profile;?>" style="color: #ffffff;"><i class="fa fa-user"></i>&nbsp;Profile</a>
    </center>  
  </footer>


  <!-- Control Sidebar -->
 
  <!-- /.control-sidebar -->
</div>
<!-- ./wrapper -->

<!-- jQuery -->
<script src="plugins/jquery/jquery.min.js"></script>
<!-- jQuery UI 1.11.4 -->
<script src="plugins/jquery-ui/jquery-ui.min.js"></script>
<!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
<script>
  $.widget.bridge('uibutton', $.ui.button)
</script>
<!-- Bootstrap 4 -->
<script src="plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- ChartJS -->
<script src="plugins/chart.js/Chart.min.js"></script>
<!-- Sparkline -->
<script src="plugins/sparklines/sparkline.js"></script>
<!-- JQVMap -->
<script src="plugins/jqvmap/jquery.vmap.min.js"></script>
<script src="plugins/jqvmap/maps/jquery.vmap.usa.js"></script>
<!-- jQuery Knob Chart -->
<script src="plugins/jquery-knob/jquery.knob.min.js"></script>
<!-- daterangepicker -->
<script src="plugins/moment/moment.min.js"></script>
<script src="plugins/daterangepicker/daterangepicker.js"></script>
<!-- Tempusdominus Bootstrap 4 -->
<script src="plugins/tempusdominus-bootstrap-4/js/tempusdominus-bootstrap-4.min.js"></script>
<!-- Summernote -->
<script src="plugins/summernote/summernote-bs4.min.js"></script>
<!-- overlayScrollbars -->
<script src="plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js"></script>
<!-- AdminLTE App -->
<script src="dist/js/adminlte.js"></script>
<script src="dist/js/pages/dashboard.js"></script>
</body>
</html>
