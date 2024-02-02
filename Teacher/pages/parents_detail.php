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
            //   $sql = "SELECT a.*,b.pid,b.full_address,b.email,b.contact_no,b.gender,b.aadhar,b.pancard,b.photo FROM tbl_registration1 a, tbl_parents b where a.id=b.pid";
            $sql = "SELECT a.*,b.* FROM tbl_registration1 a, tbl_parents b where a.mobno='8603310090' LIMIT 1";

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
              <div class="card-header">
                <h3 class="card-title"><?php echo "Welcome ".$name;?></h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
              
                <div class="card-body">
                  
                  <div class="form-group row">
                    <label for="inputPassword3" class="col-sm-2 col-form-label">Full Name</label>
                    <div class="col-sm-4">
                      <span class="form-control"><?php echo $name;?></span>
                    </div>
                  
                    <label for="inputPassword3" class="col-sm-2 col-form-label">Gender</label>
                    <div class="col-sm-4">
                      <span class="form-control"><?php echo $gender;?></span>
                    </div>
                  </div>                  

                  <div class="form-group row">
                    <label for="inputEmail3" class="col-sm-2 col-form-label">Mobile No.</label>
                    <div class="col-sm-4">
                      <span class="form-control"><?php echo $mobno;?></span>
                    </div>
    
                    <label for="inputEmail3" class="col-sm-2 col-form-label">E-Mail</label>
                    <div class="col-sm-4">
                      <span class="form-control"><?php echo $email;?></span>
                    </div>
                  </div>

                  <div class="form-group row">
                    <label for="inputPassword3" class="col-sm-2 col-form-label">Full Address</label>
                    <div class="col-sm-10">
                      <span class="form-control"><?php echo $fulladdress;?></span>
                    </div>
                  </div>
                  

                  <div class="form-group row">
                    <label for="inputPassword3" class="col-sm-2 col-form-label" style="color:blueviolet;">Aadhar Card</label>
                    <div class="col-sm-4">
                       
                    <a href="uploads/<?php echo $mobno;?>/<?php echo $aadhar;?>" target="_blank"><img src="uploads/<?php echo $mobno;?>/<?php echo $aadhar;?>" alt="" style="width:150px; height: auto;"></a>
                    <input type="hidden" id="txtFileAadhar" name="txtFileAadhar" value="<?php echo $aadhar;?>">
                    </div>

                     
                    <label for="inputPassword3" class="col-sm-2 col-form-label" style="color:blue;">PAN Card</label>
                    <div class="col-sm-4">
                        <a href="uploads/<?php echo $mobno;?>/<?php echo $pancard;?>" target="_blank"><img src="uploads/<?php echo $mobno;?>/<?php echo $pancard;?>" alt="" style="width:150px; height: auto;"></a>
                        <input type="hidden" id="txtFilePAN" name="txtFilePAN" value="<?php echo $pancard;?>">
                    </div>
                  </div>     
                  <div class="form-group row">
                    <label for="inputPassword3" class="col-sm-2 col-form-label" style="color:red;">Self Photo</label>
                    <div class="col-sm-10">
                        <a href="uploads/<?php echo $mobno;?>/<?php echo $photo;?>" target="_blank"><img src="uploads/<?php echo $mobno;?>/<?php echo $photo;?>" alt="" style="width:150px; height: auto;"></a>
                        <input type="hidden" id="txtFilePhoto" name="txtFilePhoto" value="<?php echo $photo;?>">
                    </div>
                  </div>  
                           
                </div>
                <!-- /.card-body -->
                <div class="card-footer">
                  <a href="profile.php" class="btn btn-info"><i class="far fa-edit nav-icon"></i>&nbsp;&nbsp;&nbsp;Edit&nbsp;&nbsp;&nbsp;&nbsp;</a>
                  
                </div>
                 
            </div>
            <!-- /.card -->

          </div>
          <!--/.col (left) -->
           
        </div>
        <!-- /.row -->
      </div><!-- /.container-fluid -->
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
