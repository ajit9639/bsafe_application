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
            <?php
              $mobno = $_SESSION['login'];
              $sql = "SELECT a.*,b.pid,b.full_address,b.email,b.contact_no,b.gender,b.aadhar,b.pancard,b.photo FROM tbl_registration1 a, tbl_parents b where a.id=b.pid";
              $query = $conn->query($sql);
              if($row = $query->fetch_assoc()){
                $name = $row['fullname'];
                $fulladdress = $row['full_address'];
                $email = $row['email'];
                $emergency_no = $row['contact_no'];
                $gender = $row['gender'];
                $aadhar = $row['aadhar'];
                $pancard = $row['pancard'];
                $photo = $row['photo'];
              }
            ?>
<!-- ============================================================= -->            
            <!-- /.card -->
            <!-- Horizontal Form -->
            <div class="card card-info">
  
                <!-- /.card-body -->
                <div class="card-footer">  
                  <a href="#" class="btn btn-warning" data-toggle="modal" data-target="#AddParents"><i class="far fa-user nav-icon"></i>&nbsp;Add Parent</a>
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
                <h3 class="card-title">Parents Detail</h3>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
                <table id="example1" class="table table-bordered table-striped nowrap">
                  <thead>
                  <tr>
                    <th>#</th>
                    <th>Parents Name</th>
                    <th>Address</th>
                    <th>Mob. No.</th>
                    <th>Child Info</th>
                    <th>Ph. No.</th>
                    <th>E-Mail</th>
                    <th>Gender</th>
                    <th>Aadhar No.</th>
                    <th>PAN No.</th>
                    <th>Photo</th>
                    <th>Action</th>
                  </tr>
                  </thead>
                  <tbody>
                  <?php
                    $mobno = $_SESSION['login'];
                    $sln=1;
                    $sql = "SELECT a.*, b.fullname,b.mobno,b.registeras FROM tbl_parents a, tbl_registration1 b  where a.pid=b.id";
                    $query = $conn->query($sql);
                    while($row = $query->fetch_assoc()){                    

                      echo"<tr>
                          <td>".$sln."</td>
                          <td>".$row['fullname']."</td>
                          <td>".$row['full_address']."</td>
                          <td>".$row['mobno']."</td>
                          <td><a href='#' class='btn btn-info' data-toggle='modal' data-target='#modal-default'><i class='far fa-user nav-icon'></i> Child Info</a></td>
                          <td>".$row['contact_no']."</td>
                          <td>".$row['email']."</td>
                          <td>".$row['gender']."</td>
                          <td>".$row['aadhar']."</td>
                          <td>".$row['pancard']."</td>
                          <td><a href='uploads/$mobno/$photo' target='_blank'><img src='uploads/".$mobno."/".$row['photo']."' alt='' style='width:50px;height:auto;'></a></td>
                          <td>
                          <a href='approved_registration.php?id=".$row['rid']."' class='btn btn-success'><i class='fas fa-check nav-icon'></i></a>
                          <a href='#' class='btn btn-warning'><i class='far fa-edit nav-icon'></i></a>
                          <a href='#' class='btn btn-danger'><i class='far fa-user nav-icon'></i></a>
                          </td>                          
                        </tr>";  


                        $sln++;
                    }
                    ?>
                 

                  </tbody>
               
                </table>
                <?php include "include/child_detail_modal.php";?>
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
