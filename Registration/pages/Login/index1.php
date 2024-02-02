<?php include "../../config/conn.php";?>


<?php
session_start();
//error_reporting(0);
//include('dbConnect.php');

$_SESSION['last_action'] = time();

if(isset($_POST['submit']))
{

  $password=$_POST['txtPWD'];
  $uid=$_POST['txtMobNo'];

 
  $sql="SELECT * FROM tbl_registration1 WHERE mobno='$uid'";

      if($result = mysqli_query($conn, $sql)){
        if(mysqli_num_rows($result) > 0){

      session_regenerate_id();
      $member = mysqli_fetch_array($result);

      
  if ($member['pwd']==$password) {

    $_SESSION['MEMBER_ID'] = $member['id'];
    $_SESSION['usrname'] = $member['fullname'];
    $_SESSION['usrtype'] = $member['registeras'];
    
    $_SESSION['login'] = $member['mobno'];

      session_write_close();

        $host=$_SERVER['HTTP_HOST'];
        $uri=rtrim(dirname($_SERVER['PHP_SELF']),'/\\');


    if ($member['registeras']=="Parents") {
      $extra="../../../Parents/";
        header("location:http://$host/$uri/$extra");
        exit();      
    }
    if ($member['registeras']=="Driver") {
      $extra="../../../Driver/";
        header("location:http://$host/$uri/$extra");
        exit();      
    }
    if ($member['registeras']=="Teacher") {
      $extra="../../../Teacher/";
        header("location:http://$host/$uri/$extra");
        exit();      
    }        
    




        }else {
              $_SESSION['error'] ='Wrong login details';
              header("location: ./");
              }

        }else {

              $_SESSION['usrtype'] ='Wrong login details';
              header("location: ./");
        }

    }else {die("Query failed");}

  }
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title><?php include "../../config/title.php";?> | Log in</title>

  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="../../plugins/fontawesome-free/css/all.min.css">
  <!-- icheck bootstrap -->
  <link rel="stylesheet" href="../../plugins/icheck-bootstrap/icheck-bootstrap.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="../../dist/css/adminlte.min.css">
  <style>
  .login-page, .register-page {
    height: 95VH!important;
  }
  </style>

</head>
<body class="hold-transition login-page mt-0 px-0 mx-0">
<img src="../../dist/img/image.png" class="img-responsive img-fluid mx-0 my-0" alt="" />
<div class="login-box">
  <!-- /.login-logo -->
  <div class="card card-outline card-primary">
    <div class="card-header text-center">
      <a href="../../../" class="h1">
        <!-- <b>b</b>SAFE -->
        <img src="../../../assets/images/logo.png">
      </a>
    </div>
    <div class="card-body">
      <p class="login-box-msg">Sign in to start your session</p>

      <form action="#" method="post">
        <div class="input-group mb-3">
          <input type="number" id="txtMobNo" name="txtMobNo" class="form-control" placeholder="Contact No.">
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-mobile"></span>
            </div>
          </div>
        </div>
        <div class="input-group mb-3">
          <input type="password" id="txtPWD" name="txtPWD" class="form-control" placeholder="Password">
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-lock"></span>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-8">
            <div class="icheck-primary">
              <input type="checkbox" id="remember">
              <label for="remember">
                Remember Me
              </label>
            </div>
          </div>
          <!-- /.col -->
          <div class="col-4">
            <input type="submit" id="submit" name="submit" class="btn btn-primary btn-block" value="Sign In"> 
          </div>
          <!-- /.col -->
        </div>
      </form>

      <p class="mb-1">
        <a href="../ForgotPassword/forgot-password.php">I forgot my password</a>
      </p>

    </div>
    <!-- /.card-body -->
  </div>
  <!-- /.card -->
</div>
<!-- /.login-box -->
      <p class="mb-0">
        <a href="../Registration/register.php" class="text-center">Register a new membership</a>
      </p>

<!-- jQuery -->
<script src="../../plugins/jquery/jquery.min.js"></script>
<!-- Bootstrap 4 -->
<script src="../../plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- AdminLTE App -->
<script src="../../dist/js/adminlte.min.js"></script>
</body>
</html>
