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
              $sql = "SELECT a.*,b.*,c.mobno FROM tbl_parents a, tbl_child b, tbl_registration1 c where a.pid=b.pid and c.mobno='$mobno'";
              $query = $conn->query($sql);
              if($row = $query->fetch_assoc()){
                $id = $row['pid']; 
                $name = $row['child_name'];
                $fulladdress = $row['full_address'];
                $email = $row['email'];
                $emergency_no = $row['contact_no'];
                $gender = $row['gender'];
                $aadhar = $row['aadhar'];
                $pancard = $row['pancard'];
                $photo = $row['photo'];
                $dob = $row['dob'];
                $bloodgrp = $row['blood_grp']; 
                $class = $row['class'];
                $schoolname = $row['school_name'];
                $vehicle_no = $row['vehicle_no'];
                $vehicle_type = $row['vehicle_type'];
              }
            //   print_r($id);exit;
            ?>
<!-- ============================================================= -->            
            <!-- /.card -->
            <!-- Horizontal Form -->
            <div class="card card-purple">
              <div class="card-header">
                <h3 class="card-title"><?php echo "Enter Child Detail";?></h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
              <form class="form-horizontal" action="child_ins.php" method="post" enctype="multipart/form-data">
                <input type="hidden" id="txtID" name="txtID" value="<?php echo $id;?>">
                <div class="card-body">
                  
                  <div class="form-group row">
                    <label for="inputPassword3" class="col-sm-2 col-form-label">Full Name</label>
                    <div class="col-sm-10">
                      <input type="text" class="form-control" id="txtFullName" name="txtFullName" value="<?php echo $name;?>" placeholder="Full Name">
                    </div>
                  </div>
<!-- =========================================== -->
                  <div class="form-group row">
                    <label for="inputPassword3" class="col-sm-2 col-form-label">DOB</label>
                    <div class="col-sm-10">
                      <input type="text" class="form-control" id="txtDOB" name="txtDOB" value="<?php echo $dob;?>" placeholder="Date of Birth">
                    </div>
                  </div>                 

                  <div class="form-group row">
                    <label for="inputPassword3" class="col-sm-2 col-form-label">Gender</label>
                    <div class="col-sm-10">
                      <select class="form-control" id="txtGender" name="txtGender">
                        <option value="<?php echo $gender;?>"><?php echo $gender;?></option>
                        <option value="-">--Select Gender--</option>
                        <option value="Male">Male</option>
                        <option value="Female">Female</option>
                        <option value="Transgender">Transgender</option>
                      </select>
                    </div>
                  </div> 

                  <div class="form-group row">
                    <label for="inputPassword3" class="col-sm-2 col-form-label">Blood Grp.</label>
                    <div class="col-sm-10">
                      <select class="form-control" id="txtBloodGrp" name="txtBloodGrp">
                        <option value="<?php echo $bloodgrp;?>"><?php echo $bloodgrp;?></option>
                        <option value="-">--Select Blood Grp--</option>               
                        <option value="A+">A+</option>
                        <option value="A-">A-</option>
                        <option value="B+">B+</option>
                        <option value="B-">B-</option>
                        <option value="O+">O+</option>
                        <option value="O-">O-</option>
                        <option value="AB+">AB+</option>
                        <option value="AB-">AB-</option>

                      </select>
                    </div>
                  </div>
<!-- =========================================== -->                  
                  <div class="form-group row">
                    <label for="inputEmail3" class="col-sm-2 col-form-label">Class</label>
                    <div class="col-sm-10">
                      <input type="text" class="form-control" id="txtClass" name="txtClass" value="<?php echo $class;?>" placeholder="Class Name">
                    </div>
                  </div>
                  
                  <div class="form-group row">
                    <label for="txtSchoolName" class="col-sm-2 col-form-label">School Name</label>
                    <div class="col-sm-10">
                      <input type="text" class="form-control" id="txtSchoolName" name="txtSchoolName" value="<?php echo $schoolname;?>" placeholder="School Name">
                    </div>
                  </div>
  
                   <div class="form-group row">
                    <label for="inputPassword3" class="col-sm-2 col-form-label" style="color:red;">Child Photo</label>
                    <div class="col-sm-10">
                      <input type="file" class="custom-file-input" id="filePhoto" name="filePhoto">
                        <label class="custom-file-label" for="exampleInputFile">Choose file</label>
                        <a href="uploads/<?php echo $mobno;?>/<?php echo $photo;?>" target="_blank"><img src="uploads/<?php echo $mobno;?>/<?php echo $photo;?>" alt="" style="width:150px; height: auto;"></a>
                        <input type="hidden" id="txtFilePhoto" name="txtFilePhoto" value="<?php echo $photo;?>">
                    </div>
                  </div>
                  
                  <div class="form-group row">
                    <label for="inputPassword3" class="col-sm-2 col-form-label">Vehicle Reg. No.</label>
                    <div class="col-sm-10">
                      <input type="text" class="form-control" id="txtVRegNo" name="txtVRegNo" value="<?php echo $vehicle_no;?>" placeholder="Vehicle Reg. No.">
                    </div>
                  </div> 
                  
                  <div class="form-group row">
                    <label for="inputPassword3" class="col-sm-2 col-form-label">Vehicle Type</label>
                    <div class="col-sm-10">
                      <select class="form-control" id="txtVehicleType" name="txtVehicleType">
                        
                        <option value="<?php echo $vehicletype;?>"><?php echo $vehicle_type;?></option>
                        <option value="-">--Select Vehicle Type--</option>
                        <option value="Bus">Bus</option>
                        <option value="Auto">Auto</option>
                        <option value="Van">Van</option>
                        <option value="Winger">Winger</option>
                      </select>
                    </div>
                  </div>

                  
                   
                </div>
                <!-- /.card-body -->
                <div class="card-footer">
                  <button type="submit" class="btn btn-info">Submit</button>
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
