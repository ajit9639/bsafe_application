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


<style>
/* The container */
.container {
  display: block;
  position: relative;
  padding-left: 35px;
  margin-bottom: 12px;
  cursor: pointer;
  font-size: 22px;
  -webkit-user-select: none;
  -moz-user-select: none;
  -ms-user-select: none;
  user-select: none;
}

/* Hide the browser's default checkbox */
.container input {
  position: absolute;
  opacity: 0;
  cursor: pointer;
  height: 0;
  width: 0;
}

/* Create a custom checkbox */
.checkmark {
  position: absolute;
  top: 0;
  left: 0;
  height: 25px;
  width: 25px;
  background-color: #eee;
}

/* On mouse-over, add a grey background color */
.container:hover input ~ .checkmark {
  background-color: #ccc;
}

/* When the checkbox is checked, add a blue background */
.container input:checked ~ .checkmark {
  background-color: #2196F3;
}

/* Create the checkmark/indicator (hidden when not checked) */
.checkmark:after {
  content: "";
  position: absolute;
  display: none;
}

/* Show the checkmark when checked */
.container input:checked ~ .checkmark:after {
  display: block;
}

/* Style the checkmark/indicator */
.container .checkmark:after {
  left: 9px;
  top: 5px;
  width: 5px;
  height: 13px;
  border: solid white;
  border-width: 0 3px 3px 0;
  -webkit-transform: rotate(45deg);
  -ms-transform: rotate(45deg);
  transform: rotate(45deg);
}
</style>  
</head>
<body class="hold-transition sidebar-mini">
<div class="wrapper">
  <!-- Navbar -->
  <?php include "../includes/navbar.php"?>
  <!-- /.navbar -->

  <!-- Main Sidebar Container -->
  <?php include "../includes/menubar.php"?>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper" style="background-image: url('../../Registration/dist/img/footer.jpg'); background-repeat: no-repeat; left: 0; bottom: 0; right: 0; z-index:9999;">
    <!-- Content Header (Page header) -->
    <section class="content">
      <div class="row">
        <div class="col-md-12">
          <div class="card card-info">
            <div class="card-header">
              <h3 class="card-title">&nbsp;</h3>
            </div>
        </div>
      </div>
    </div>
    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <form action="attn_ins.php" method="post">
        <div class="row">
          <div class="col-12">
 
            <!-- /.card -->

            <div class="card">
              <div class="card-header">
                <h3 class="card-title">Attendance : <input type="text" id="txtDate" name="txtDate" value="<?php echo date('d-m-Y');?>" readonly style="border: 0px; width: 100px;"></h3>
                
              </div>
              <!-- /.card-header -->

                  <?php
                    $mobno = $_SESSION['login'];
                    $sln=1;
                    $phno=0;
                    $parentName="";
 
                    $sql = "SELECT * FROM tbl_registration1 where mobno='$mobno'";
                  
                    $query = $conn->query($sql);
                    if($row = $query->fetch_assoc()){   

                      $parentName= $row['fullname'];
                      $phno= $row['mobno'];
                      $id = $row['id'];
                      $sq = "SELECT * FROM tbl_parents WHERE driverid='$id'";
                      $query = $conn->query($sq);
                      if($row1 = $query->fetch_assoc()){
                        $phno1= $row1['contact_no'];
                        $address= $row1['full_address'];

                        $sq1 = "SELECT * FROM tbl_child WHERE pid='$row1[pid]'";
                        $query1 = $conn->query($sq1);
                        while($row2 = $query1->fetch_assoc()){
                          $childname = $row2['child_name'];
                          $class= $row2['class'];
                          $pid = $row2['pid'];
                           
                  ?>
            <div class="col-12 col-sm-6 col-md-4 d-flex align-items-stretch flex-column">
              <div class="card bg-light d-flex flex-fill">
                <div class="card-body pl-0 pt-0">
                  <div class="row">
                    <div class="col-3">
                      <img src="../dist/img/avatar3.png" alt="user-avatar" class="img-circle img-fluid">
                    </div>                    
                    <div class="col-9">
                      <input type="hidden" id="hdnEmpId<?php echo $sln;?>" name="hdnEmpId<?php echo $sln;?>" value="<?php echo $pid;?>">
                      <label class="container" style="margin-top: 20px;"><b style="color:blue; font-size:16px;">Name : <?php echo $childname?></b>
                        <input type="checkbox" checked="checked" name='chkAttn<?php echo $sln;?>' id='chkAttn<?php echo $sln;?>'>
                        <span class="checkmark"></span>
                      </label>

                    </div>
                  </div>
                </div>
                <div class="card-footer"></div>
              </div>
            </div>
          <?php 
              $sln++;

                }  
              } else{echo $conn->error;} 
            } 
          ?>

              <button class='btn btn-info btn-sm btn-flat' style="width:100px;"><i class='fa fa-edit'></i> Submit</button>
              <input type="hidden" name="hdnLine" value="<?php echo $sln;?>">
            </div>
            <!-- /.card -->
          </div>
          <!-- /.col -->
        </div>
      </form>
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
