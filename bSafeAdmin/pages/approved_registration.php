<?php
 include "../config/config.php";
//error_reporting(0);

 

//============================= Final Data save =========================================
    $fldr = $_SESSION['login'];
     $id=$_GET['id'];
     $as=$_GET['as'];
 $sql = "UPDATE tbl_registration1 set status='A' where id='$id'";
                                               
            if (mysqli_query($conn, $sql)) {
                echo "<script>alert('Driver Data Approved........')</script>";
                echo "<script>window.location.href='drivers_detail.php'</script>"; 
            }else{echo $conn->error;}
              
?>