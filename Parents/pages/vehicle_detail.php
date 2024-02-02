<?php include "../config/config.php";?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title><?php include "../config/title.php";?></title>

  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="../plugins/fontawesome-free/css/all.min.css">
  <!-- DataTables -->
  <link rel="stylesheet" href="../plugins/datatables-bs4/css/dataTables.bootstrap4.min.css">
  <link rel="stylesheet" href="../plugins/datatables-responsive/css/responsive.bootstrap4.min.css">
  <link rel="stylesheet" href="../plugins/datatables-buttons/css/buttons.bootstrap4.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="../dist/css/adminlte.min.css">
</head>
<body class="hold-transition sidebar-mini">
<div class="wrapper">
  <!-- Navbar -->
  <?php include "../includes/navbar.php"?>
  <!-- /.navbar -->

  <!-- Main Sidebar Container -->
  <?php include "../includes/menubar.php"?>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
 <br>
    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <div class="row">
          <div class="col-12">
 
            <!-- /.card -->

            <div class="card card-warning">
              <div class="card-header">
                <h3 class="card-title">Vehicle Detail</h3>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
                <table id="example1" class="table table-bordered table-striped">
                  <thead>
                  <tr>
                    <th>#</th>
                    <th>Driver Name</th>
                    <th>Photo</th>
                    <th>Contact No.</th>
                    <th>Reg. No.</th>
                    <th>Vehicle Type</th>
                    <th>Vehicle Pic</th>
                    
                  </tr>
                  </thead>
                  <tbody>
                  <?php
                    $mobno = $_SESSION['login'];
                    $sln=1;
                    $sql = "SELECT a.*,b.vehicle_no FROM tbl_registration1 a, tbl_child b where a.regno=b.vehicle_no";
                    $query = $conn->query($sql);
                    while($row = $query->fetch_assoc()){                    
                      $photo = $row['photo'];
                      $vphoto = $row['fullpic'];
                      $mobno1 = $row['mobno'];
                      echo"<tr>
                          <td>".$sln."</td>
                          <td>".$row['fullname']."</td>
                          <td><a href='../../Driver/pages/uploads/$mobno1/$photo' target='_blank'><img src='../../Driver/pages/uploads/".$mobno1."/".$row['photo']."' alt='' style='width:50px;height:auto;'></a></td>
                          <td>".$row['mobno']."</td>
                          <td>".$row['regno']."</td>
                          <td>".$row['vehicletype']."</td>                        
                          <td><a href='../../Driver/pages//uploads/$mobno1/$vphoto' target='_blank'><img src='../../Driver/pages/uploads/".$mobno1."/".$row['fullpic']."' alt='' style='width:50px;height:auto;'></a></td>
                        </tr>";
                        $sln++;
                    }
                    ?>
                 
                  </tbody>
               
                </table>
              </div>
              <!-- /.card-body -->
            </div>
            <!-- /.card -->
          </div>
          <!-- /.col -->
        </div>
        <!-- /.row -->
      </div>
      <!-- /.container-fluid -->
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
  <?php include "../includes/footer.php"?>

  <!-- Control Sidebar -->
  <!-- <aside class="control-sidebar control-sidebar-dark"> -->
    <!-- Control sidebar content goes here -->
  <!-- </aside> -->
  <!-- /.control-sidebar -->
</div>
<!-- ./wrapper -->

<!-- jQuery -->
<script src="../plugins/jquery/jquery.min.js"></script>
<!-- Bootstrap 4 -->
<script src="../plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- DataTables  & Plugins -->
<script src="../plugins/datatables/jquery.dataTables.min.js"></script>
<script src="../plugins/datatables-bs4/js/dataTables.bootstrap4.min.js"></script>
<script src="../plugins/datatables-responsive/js/dataTables.responsive.min.js"></script>
<script src="../plugins/datatables-responsive/js/responsive.bootstrap4.min.js"></script>
<script src="../plugins/datatables-buttons/js/dataTables.buttons.min.js"></script>
<script src="../plugins/datatables-buttons/js/buttons.bootstrap4.min.js"></script>
<script src="../plugins/jszip/jszip.min.js"></script>
<script src="../plugins/pdfmake/pdfmake.min.js"></script>
<script src="../plugins/pdfmake/vfs_fonts.js"></script>
<script src="../plugins/datatables-buttons/js/buttons.html5.min.js"></script>
<script src="../plugins/datatables-buttons/js/buttons.print.min.js"></script>
<script src="../plugins/datatables-buttons/js/buttons.colVis.min.js"></script>
<!-- AdminLTE App -->
<script src="../dist/js/adminlte.min.js"></script>

<!-- Page specific script -->
<script>
  $(function () {
    $("#example1").DataTable({
      "responsive": true, 
      "lengthChange": true, 
      "autoWidth": false,
      
    }).buttons().container().appendTo('#example1_wrapper .col-md-6:eq(0)');

    $('#example2').DataTable({
      "paging": true,
      "lengthChange": true,
      "searching": false,
      "ordering": true,
      "info": true,
      "autoWidth": false,
      "responsive": true,
      "buttons": ["copy", "csv", "excel", "pdf", "print", "colvis"]
    });
  });
</script>
</body>
</html>
