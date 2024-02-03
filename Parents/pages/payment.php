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
<!--     <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>General Form</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">General Form</li>
            </ol>
          </div>
        </div>
      </div>
    </section> -->

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <div class="row">
          <!-- left column -->
          <div class="col-md-12">
<!-- ============================================================= -->


            <?php
            $mobno = $_SESSION['login'];
            $child_data = "SELECT a.*,b.*,c.mobno FROM tbl_parents a, tbl_child b, tbl_registration1 c where a.pid=b.pid and c.mobno='$mobno'";
              $query_child = mysqli_query($conn,$child_data);
              $row_child = mysqli_fetch_assoc($query_child);
                // $cid = $row_child['pid']; 
                $child_name = $row_child['child_name'];
                // print_r($child_name);
                // exit;                         
            // print_r($_SESSION);
            // print_r($_GET);
            

            if(isset($_POST['submit'])){             
              $date = date("d-m-Y");
              $pid = $_SESSION['MEMBER_ID'];
              $cid = $_SESSION['user_id'];
              $month = $_POST['month'];
              $amout_to_pay = $_POST['amout_to_pay'];
              $pay_mode = $_POST['pay_mode'];

              $sql = "insert into `tbl_child_payment`(`pid`, `cid`, `month`, `amout_to_pay`, `pay_mode`) values('$pid','$cid','$month','$amout_to_pay','$pay_mode')";
              if(mysqli_query($conn,$sql)){
                echo "<script>alert('Please Your payment Processing..')</script>";
                if($pay_mode == "online"){
                  echo "<script>window.location.href='get_invoice.php?date=$date&amount=$amout_to_pay&payMode=$pay_mode&pid=$pid&cid=$cid&month=$month'</script>"; 
                }else{
                  echo "<script>window.location.href='get_invoice.php?date=$date&amount=$amout_to_pay&payMode=$pay_mode&pid=$pid&cid=$cid&month=$month'</script>"; 
                }
              }else{echo $conn->error;}
              
            }
            

              // $sql = "SELECT a.*,b.*,c.mobno FROM tbl_parents a, tbl_child b, tbl_registration1 c where a.pid=b.pid and c.mobno='$mobno'";
              // $query = $conn->query($sql);
              // if($row = $query->fetch_assoc()){
              //   $id = $row['pid']; 
              //   $name = $row['child_name'];
              //   $fulladdress = $row['full_address'];
              //   $email = $row['email'];
              //   $emergency_no = $row['contact_no'];
              //   $gender = $row['gender'];
              //   $aadhar = $row['aadhar'];
              //   $pancard = $row['pancard'];
              //   $photo = $row['photo'];
              //   $dob = $row['dob'];
              //   $bloodgrp = $row['blood_grp']; 
              //   $class = $row['class'];
              //   $schoolname = $row['school_name'];
              //   $vehicle_no = $row['vehicle_no'];
              //   $vehicle_type = $row['vehicle_type'];
              // }
            //   print_r($id);exit;
            ?>
<!-- ============================================================= -->            
            <!-- /.card -->
            <!-- Horizontal Form -->
            <div class="card card-purple">
              <div class="card-header">
                <h3 class="card-title"><?php echo "Pay Your Child Transportation Fee";?></h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
              <form class="form-horizontal" method="post" enctype="multipart/form-data">
                <div class="card-body">
                  
                  <div class="form-group row">
                    <label for="inputPassword3" class="col-sm-2 col-form-label">Full Name</label>
                    <div class="col-sm-10">
                      <input type="text" class="form-control" name="txtFullName"  value="<?php echo $child_name;?>" placeholder="Full Name" readonly>
                    </div>
                  </div>

                  <div class="form-group row">
                    <label for="inputPassword3" class="col-sm-2 col-form-label">Today Date</label>
                    <div class="col-sm-10">
                      <input type="text" class="form-control"  placeholder="Date of Birth" value="<?= date('d-m-Y')?>" readonly>
                    </div>
                  </div>

                  <div class="form-group row">
                    <label for="inputPassword3" class="col-sm-2 col-form-label">Month</label>
                    <div class="col-sm-10">
                      <input type="text" class="form-control"  name="month"  placeholder="Date of Birth" value="<?= date('M')?>" readonly>
                    </div>
                  </div>                 
                                                                             
                  <div class="form-group row">
                    <label for="txtSchoolName" class="col-sm-2 col-form-label">Total Due Amount</label>
                    <div class="col-sm-10">
                      <input type="text" class="form-control" name="amout_to_pay" placeholder="School Name" value="2000" readonly>
                    </div>
                  </div>
                  
                  <div class="form-group row">
                    <label for="inputPassword3" class="col-sm-2 col-form-label">Payment Mode</label>
                    <div class="col-sm-10">
                      <select class="form-control" name="pay_mode">
                        <option disabled>Select Your Payment Mode</option>
                        <option value="online">Online</option>
                        <option value="offline">Offline</option>
                      </select>
                    </div>
                  </div>
                   
                </div>
                <!-- /.card-body -->
                <div class="card-footer">
                  <input type="submit" value="submit" name="submit" class="btn btn-info" >
                  <!-- <button type="submit" class="btn btn-info" name="name">Submit</button> -->
                  <button type="submit" class="btn btn-default float-right">Cancel</button>
                </div>
                <!-- /.card-footer -->
              </form>
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
<!-- AdminLTE App -->
<script src="../dist/js/adminlte.min.js"></script>
 
</body>
</html>
