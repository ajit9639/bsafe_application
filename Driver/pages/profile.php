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
              $sql = "SELECT * FROM tbl_registration1 where mobno='$mobno'";
              $query = $conn->query($sql);
              if($row = $query->fetch_assoc()){
                $name = $row['fullname'];
                $fulladdress = $row['fulladdress'];
                $email = $row['email'];
                $dob = $row['dob'];
                $gender = $row['gender'];

                $bloodgrp = $row['bloodgrp'];
                $aadhar = $row['aadhar'];
                $pancard = $row['pancard'];
                $photo = $row['photo'];
                $regno = $row['regno'];
                $vehicletype = $row['vehicletype'];
                $dl = $row['dl'];
                $frontpic = $row['frontpic'];
                $rearpic = $row['rearpic'];
                $leftpic = $row['leftpic'];
                $rightpic = $row['rightpic'];
                $insidepic = $row['insidepic'];
                $fullpic = $row['fullpic'];

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
              <form class="form-horizontal" action="update_profile.php" method="post" enctype="multipart/form-data">
                <div class="card-body">
                  
                  <div class="form-group row">
                    <label for="inputPassword3" class="col-sm-2 col-form-label">Full Name</label>
                    <div class="col-sm-10">
                      <input type="text" class="form-control" id="txtFullName" name="txtFullName" value="<?php echo $name;?>" placeholder="Full Name">
                    </div>
                  </div>

                  <div class="form-group row">
                    <label for="inputEmail3" class="col-sm-2 col-form-label">Mobile No.</label>
                    <div class="col-sm-10">
                      <input type="number" class="form-control" id="txtMobNo" name="txtMobNo" value="<?php echo $mobno;?>" placeholder="Mobile No.">
                    </div>
                  </div>
                  
                  <div class="form-group row">
                    <label for="inputEmail3" class="col-sm-2 col-form-label">E-Mail</label>
                    <div class="col-sm-10">
                      <input type="email" class="form-control" id="txtEMail" name="txtEMail" value="<?php echo $email;?>" placeholder="E-Mail ID">
                    </div>
                  </div>

                  <div class="form-group row">
                    <label for="inputPassword3" class="col-sm-2 col-form-label">Full Address</label>
                    <div class="col-sm-10">
                      <textarea class="form-control" id="txtAddress" name="txtAddress" rows="3"> <?php echo $fulladdress;?></textarea>
                    </div>
                  </div>

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


                  <div class="form-group row">
                    <label for="inputPassword3" class="col-sm-2 col-form-label" style="color:blueviolet;">Aadhar Card</label>
                    <div class="col-sm-10">
                      <input type="file" class="custom-file-input" id="fileAadhar" name="fileAadhar">
                        <label class="custom-file-label" for="exampleInputFile">Choose file</label>
                    <a href="uploads/<?php echo $mobno;?>/<?php echo $aadhar;?>" target="_blank"><img src="uploads/<?php echo $mobno;?>/<?php echo $aadhar;?>" alt="" style="width:150px; height: auto;"></a>
                    <input type="hidden" id="txtFileAadhar" name="txtFileAadhar" value="<?php echo $aadhar;?>">
                    </div>

                    
                  </div>
                  <div class="form-group row">
                    <label for="inputPassword3" class="col-sm-2 col-form-label" style="color:blue;">PAN Card</label>
                    <div class="col-sm-10">
                      <input type="file" class="custom-file-input" id="filePan" name="filePan">
                        <label class="custom-file-label" for="exampleInputFile">Choose file</label>
                        <a href="uploads/<?php echo $mobno;?>/<?php echo $pancard;?>" target="_blank"><img src="uploads/<?php echo $mobno;?>/<?php echo $pancard;?>" alt="" style="width:150px; height: auto;"></a>
                        <input type="hidden" id="txtFilePAN" name="txtFilePAN" value="<?php echo $pancard;?>">
                    </div>
                  </div>     
                  <div class="form-group row">
                    <label for="inputPassword3" class="col-sm-2 col-form-label" style="color:red;">Self Photo</label>
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
                      <input type="text" class="form-control" id="txtVRegNo" name="txtVRegNo" value="<?php echo $regno;?>" placeholder="Vehicle Reg. No.">
                    </div>
                  </div> 
                  
                  <div class="form-group row">
                    <label for="inputPassword3" class="col-sm-2 col-form-label">Vehicle Type</label>
                    <div class="col-sm-10">
                      <select class="form-control" id="txtVehicleType" name="txtVehicleType">
                        
                        <option value="<?php echo $vehicletype;?>"><?php echo $vehicletype;?></option>
                        <option value="-">--Select Vehicle Type--</option>
                        <option value="Bus">Bus</option>
                        <option value="Auto">Auto</option>
                        <option value="Van">Van</option>
                        <option value="Winger">Winger</option>
                      </select>
                    </div>
                  </div>

                  <div class="form-group row">
                    <label for="inputPassword3" class="col-sm-2 col-form-label" style="color:green;">DL</label>
                    <div class="col-sm-10">
                      <input type="file" class="custom-file-input" id="fileDL" name="fileDL">
                        <label class="custom-file-label" for="exampleInputFile">Choose file</label>
                        <a href="uploads/<?php echo $mobno;?>/<?php echo $dl;?>" target="_blank"><img src="uploads/<?php echo $mobno;?>/<?php echo $dl;?>" alt="" style="width:150px; height: auto;"></a>
                        <input type="hidden" id="txtFileDL" name="txtFileDL" value="<?php echo $dl;?>">
                    </div>
                  </div> 

                  <div class="form-group row">
                    <label for="inputPassword3" class="col-sm-2 col-form-label">Vehicle Pic Front</label>
                    <div class="col-sm-10">
                      <input type="file" class="custom-file-input" id="fileFrontPic" name="fileFrontPic">
                        <label class="custom-file-label" for="exampleInputFile">Choose file</label>
                        <a href="uploads/<?php echo $mobno;?>/<?php echo $frontpic;?>" target="_blank"><img src="uploads/<?php echo $mobno;?>/<?php echo $frontpic;?>" alt="" style="width:150px; height: auto;"></a>
                        <input type="hidden" id="txtFileFrontPic" name="txtFileFrontPic" value="<?php echo $frontpic;?>">
                    </div>
                  </div>
                  <div class="form-group row">
                    <label for="inputPassword3" class="col-sm-2 col-form-label">Vehicle Pic Rear</label>
                    <div class="col-sm-10">
                      <input type="file" class="custom-file-input" id="fileRearPic" name="fileRearPic">
                        <label class="custom-file-label" for="exampleInputFile">Choose file</label>
                        <a href="uploads/<?php echo $mobno;?>/<?php echo $rearpic;?>" target="_blank"><img src="uploads/<?php echo $mobno;?>/<?php echo $rearpic;?>" alt="" style="width:150px; height: auto;"></a>
                        <input type="hidden" id="txtFileRearPic" name="txtFileRearPic" value="<?php echo $rearpic;?>">
                    </div>
                  </div>
                  <div class="form-group row">
                    <label for="inputPassword3" class="col-sm-2 col-form-label">Vehicle Pic Left</label>
                    <div class="col-sm-10">
                      <input type="file" class="custom-file-input" id="fileLeftPic" name="fileLeftPic">
                        <label class="custom-file-label" for="exampleInputFile">Choose file</label>
                        <a href="uploads/<?php echo $mobno;?>/<?php echo $leftpic;?>" target="_blank"><img src="uploads/<?php echo $mobno;?>/<?php echo $leftpic;?>" alt="" style="width:150px; height: auto;"></a>
                        <input type="hidden" id="txtFileLeftPic" name="txtFileLeftPic" value="<?php echo $leftpic;?>">
                    </div>
                  </div>
                  <div class="form-group row">
                    <label for="inputPassword3" class="col-sm-2 col-form-label">Vehicle Pic Right</label>
                    <div class="col-sm-10">
                      <input type="file" class="custom-file-input" id="fileRightPic" name="fileRightPic">
                        <label class="custom-file-label" for="exampleInputFile">Choose file</label>
                        <a href="uploads/<?php echo $mobno;?>/<?php echo $rightpic;?>" target="_blank"><img src="uploads/<?php echo $mobno;?>/<?php echo $rightpic;?>" alt="" style="width:150px; height: auto;"></a>
                        <input type="hidden" id="txtFileRightPic" name="txtFileRightPic" value="<?php echo $rightpic;?>">
                    </div>
                  </div>
                  <div class="form-group row">
                    <label for="inputPassword3" class="col-sm-2 col-form-label">Vehicle Pic Inside</label>
                    <div class="col-sm-10">
                      <input type="file" class="custom-file-input" id="fileInsidePic" name="fileInsidePic">
                        <label class="custom-file-label" for="exampleInputFile">Choose file</label>
                        <a href="uploads/<?php echo $mobno;?>/<?php echo $insidepic;?>" target="_blank"><img src="uploads/<?php echo $mobno;?>/<?php echo $insidepic;?>" alt="" style="width:150px; height: auto;"></a>
                        <input type="hidden" id="txtFileInside" name="txtFileInside" value="<?php echo $insidepic;?>">
                    </div>
                  </div>                                                                        
                  <div class="form-group row">
                    <label for="inputPassword3" class="col-sm-2 col-form-label">Vehicle Full Pic </label>
                    <div class="col-sm-10">
                      <input type="file" class="custom-file-input" id="fileFullPic" name="fileFullPic">
                        <label class="custom-file-label" for="exampleInputFile">Choose file</label>
                        <a href="uploads/<?php echo $mobno;?>/<?php echo $fullpic;?>" target="_blank"><img src="uploads/<?php echo $mobno;?>/<?php echo $fullpic;?>" alt="" style="width:150px; height: auto;"></a>
                        <input type="hidden" id="txtFileFullPic" name="txtFileFullPic" value="<?php echo $fullpic;?>">
                    </div>
                  </div>             

                  <!-- <div class="form-group row">
                    <div class="offset-sm-2 col-sm-10">
                      <div class="form-check">
                        <input type="checkbox" class="form-check-input" id="exampleCheck2">
                        <label class="form-check-label" for="exampleCheck2">Remember me</label>
                      </div>
                    </div>
                  </div> -->
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
