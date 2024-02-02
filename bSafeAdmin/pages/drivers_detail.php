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

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <div class="row">
          <!-- left column -->
          <div class="col-md-12">
 
<!-- ============================================================= -->            
 
            <div class="card card-info">
  
                <!-- /.card-body -->
                <div class="card-footer">  
                  <a href="#" class="btn btn-warning" data-toggle="modal" data-target="#AddDriver"><i class="far fa-user nav-icon"></i>&nbsp;Add Driver</a>
                </div>
                 
            </div>
            <!-- /.card -->

          </div>
          <!--/.col (left) -->
           
        </div>
        <!-- /.row -->
      </div><!-- /.container-fluid -->
    </section>

    <section class="content">
      <div class="container-fluid">
        <div class="row">
          <div class="col-12">
 
            <!-- /.card -->

            <div class="card card-purple">
              <div class="card-header">
                <h3 class="card-title">Drivers Detail</h3>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
                <table id="example1" class="table table-bordered table-striped">
                  <thead>
                  <tr>
                    <th>#</th>
                    <th>Drivers Name</th>
                    <th>Reg. Mob. No.</th>
                    <th>Address</th>
                    <th>E-Mail</th>
                    <th>DOB</th>
                    <th>Gender</th>
                    <th>Blood Grp</th>
                    <th>Aadhar</th>
                    <th>PAN</th>
                    <th>Photo</th>
                    <th>Vehicle Reg. No.</th>
                    <th>Vehicle Type</th>
                    <th>DL</th>
                    <th>Front Pic</th>
                    <th>Rear Pic</th>
                    <th>Left Pic</th>
                    <th>Right Pic</th>
                    <th>Inside Pic</th>
                    <th>Full Pic</th>
                    <th>Action</th>
                  </tr>
                  </thead>
                  <tbody>

                  <?php
                    $mobno = $_SESSION['login'];
                    $photo="";
                    $sln=1;
                    $sql = "SELECT * FROM tbl_driver";
                    $query = $conn->query($sql);
                    while($row = $query->fetch_assoc()){                    

                      echo"<tr>
                          <td>".$sln."</td>
                          <td>".$row['fullname']."</td>
                          <td>".$row['mobno']."</td>
                          <td>".$row['fulladdress']."</td>
                          <td>".$row['email']."</td>
                          <td>".$row['dob']."</td>
                          <td>".$row['gender']."</td>
                          <td>".$row['bloodgrp']."</td>
                          <td>".$row['aadhar']."</td>
                          <td>".$row['pancard']."</td>
                          <td><a href='uploads/$mobno/$photo' target='_blank'><img src='uploads/".$mobno."/".$row['photo']."' alt='' style='width:50px;height:auto;'></a></td>
                          <td>".$row['regno']."</td>
                          <td>".$row['vehicletype']."</td>
                          <td>".$row['dl']."</td>
                          <td><a href='uploads/$mobno/$photo' target='_blank'><img src='uploads/".$mobno."/".$row['frontpic']."' alt='' style='width:50px;height:auto;'></a></td>
                          <td><a href='uploads/$mobno/$photo' target='_blank'><img src='uploads/".$mobno."/".$row['rearpic']."' alt='' style='width:50px;height:auto;'></a></td>
                          <td><a href='uploads/$mobno/$photo' target='_blank'><img src='uploads/".$mobno."/".$row['leftpic']."' alt='' style='width:50px;height:auto;'></a></td>
                          <td><a href='uploads/$mobno/$photo' target='_blank'><img src='uploads/".$mobno."/".$row['rightpic']."' alt='' style='width:50px;height:auto;'></a></td>
                          <td><a href='uploads/$mobno/$photo' target='_blank'><img src='uploads/".$mobno."/".$row['insidepic']."' alt='' style='width:50px;height:auto;'></a></td>
                          <td><a href='uploads/$mobno/$photo' target='_blank'><img src='uploads/".$mobno."/".$row['fullpic']."' alt='' style='width:50px;height:auto;'></a></td>
                          <td>
                          <a href='approved_registration.php?id=".$row['rid']."' class='btn btn-success'><i class='fas fa-check nav-icon'></i></a>
                          <a href='#' class='btn btn-warning' data-toggle='modal' data-target='#EditDriver'><i class='far fa-edit nav-icon'></i></a>
                          <a href='#' class='btn btn-danger' data-toggle='modal' data-target='#DeleteDriver'><i class='fa fa-trash nav-icon'></i></a>
                          </td> 
                        </tr>";
                        $sln++;
                    }
                    ?>
                 
                  </tbody>
               
                </table>
                <?php include "include/drivers_detail_modal.php";?>
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
  <aside class="control-sidebar control-sidebar-dark">
    <!-- Control sidebar content goes here -->
  </aside>
  <!-- /.control-sidebar -->
</div>
<!-- ./wrapper -->

<!-- jQuery -->
<script src="../plugins/jquery/jquery.min.js"></script>
<!-- Bootstrap 4 -->
<script src="../plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- bs-custom-file-input -->
<script src="../plugins/bs-custom-file-input/bs-custom-file-input.min.js"></script>
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
      "lengthChange": false, 
      "searching": false,
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
