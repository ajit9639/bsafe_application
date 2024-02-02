<?php 
  include '../../config/conn.php';
?>
  
<?php
  
      $yr = date('Y');
      $mt = date('m');
      $dy = date('d');
      $dt = date('d-m-Y');
      
      $tm = date('h:i:sa');

      $ddlRegAs= $_POST['ddlRegAs'];
      $txtName= $_POST['txtName'];
      $txtMobNo= $_POST['txtMobNo'];
      $txtPWD1= $_POST['txtPWD1'];
      
//===============================================================
  
          $strSQL = "INSERT into tbl_registration1 (registeras,fullname,mobno,pwd,status,dt,tm) values('$ddlRegAs','$txtName','$txtMobNo','$txtPWD1','P','$dt','$tm')";

          if($conn->query($strSQL)){
          
        // ========================================================
            $sql = "SELECT * FROM tbl_registration1 where mobno='$txtMobNo'";
            $query = $conn->query($sql);
            if($row = $query->fetch_assoc()){$pid=$row['id'];}  
        // ========================================================    
          $strSQL1 = "INSERT into tbl_parents (pid,gender,full_address,email,contact_no,aadhar,pancard,photo) values('$pid','-','-','-','0','-','-','-')";
          if($conn->query($strSQL1)){}
        // ========================================================    
          // $strSQL1 = "INSERT into tbl_child (pid,child_name,dob,gender,blood_grp,class,school_name,vehicle_no,vehicle_type,photo) values('$pid','-','-','-','-','-','-','-','-','-')";
          // if($conn->query($strSQL1)){}            
        // ========================================================

            echo "<script>alert('Your Successfully Register with bSafe......Please Login to access your control panel!');window.location.href='../Login/';</script>";
          }
          else{
            echo $conn->error;
          }          

?>