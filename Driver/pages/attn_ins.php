<?php include "../config/config.php";?>
<?php
  $cnt=0;
      // $sql = "SELECT count(*) as recnt FROM tbl_emp";
      // $query = $conn->query($sql);
      //   if($row1 = $query->fetch_assoc()){
      //     $rcnt = $row1['recnt'];                
      //   }

      $mobno = $_SESSION['login'];
       
      // $sql1 = "SELECT * FROM tbl_emp where PhNo1='$supuid'";
      // $query1 = $conn->query($sql1);
      //   if($row1 = $query1->fetch_assoc()){
      //     $supid = $row1['id'];
      //     $supName = $row1['EmpName'];
      //   }


  $weekName = date('l');

  $rcnt=$_POST["hdnLine"]-1;
  for($i=1;$i<=$rcnt;$i++)
  {
     
    if (isset($_POST["chkAttn$i"])) {
       
      $EmpId = ($_POST["hdnEmpId$i"]);
      $txtDate = $_POST['txtDate'];
      $c = $_POST["chkAttn$i"];

      $yr = date('Y');
      $mt = date('m');

      $timestamp = strtotime($txtDate);

      $dy = date('d', $timestamp);

      $dt = date('d-m-Y');
      $tm = date('h:i:sa');
      //exit();
//===============================================================
      $sql = "SELECT * FROM tbl_holiday";
      $query = $conn->query($sql);
        if($rowH = $query->fetch_assoc()){
          $hldy = $rowH['holiday_name'];                
        }
//===============================================================
$SiteName="";
      $nh = "Independance Day1"; //National Holiday
      //$ph = ""; //Paid Holiday
      //check national and paid holiday from holidayday setup page
            if ($weekName=="Sunday") {
              $atn = "WO";
            }else if($nh == "Independance Day"){$atn = "NH";}
            else{$atn = "P";}

      //tbl_attn_sheet//select query to check the emp id, month, yr, if exist then update the day field, else insert new record with above info for this empid
      // month, year, time auto

      //tbl_attn//lunch_in/out // make page for in/out time setup// before insert or update check from in/out criteria page
      
      $sln=1;
      $sql = "SELECT * FROM tbl_attn_sheet where empid='$EmpId' and yr='$yr' and mnth='$mt' order by id desc";
      $query = $conn->query($sql);
        if($row = $query->fetch_assoc()){
          include "attn_updt.php";  
          $cnt++;              
        }else{

          //loc == school name
          // supid==driverid
          //empid==parentid

          $strSQL = "INSERT into tbl_attn_sheet (supid,empid,loc,longitude,latitude,yr,mnth,d1,d2,d3,d4,d5,d6,d7,d8,d9,d10,d11,d12,d13,d14,d15,d16,d17,d18,d19,d20,d21,d22,d23,d24,d25,d26,d27,d28,d29,d30,d31) values('$mobno','$EmpId','$SiteName','0','0','$yr','$mt','A','A','A','A','A','A','A','A','A','A','A','A','A','A','A','A','A','A','A','A','A','A','A','A','A','A','A','A','A','A','A')";
            echo $strSQL;exit;
          if($conn->query($strSQL)){
            include "attn_updt.php";
            $cnt++;
          }
          else{
            echo $conn->error;
          }          

        }

//0000000000000000000000000000000000000000000000000000000000000
      $sql2 = "SELECT * FROM tbl_daily_attn where empid='$EmpId' and yr='$yr' and mnth='$mt' and dy='$dy'";
      $query2 = $conn->query($sql2);
        if($row2 = $query2->fetch_assoc()){
            $strSQLUpdate = "UPDATE tbl_daily_attn SET status= 'P' WHERE empid='$EmpId' and yr='$yr' and mnth='$mt' and dy='$dy'";
            if($conn->query($strSQLUpdate)){}              
        }else{        
// ===============================================================
          $strSQL3 = "INSERT into tbl_daily_attn (supid,empid,dt,dy,mnth,yr,tm,status) values('$mobno','$EmpId','$dt','$dy','$mt','$yr','$tm','A')";

          if($conn->query($strSQL3)){
            
            $strSQLUpdate = "UPDATE tbl_daily_attn SET status= 'P' WHERE empid='$EmpId' and yr='$yr' and mnth='$mt' and dy='$dy'";
            if($conn->query($strSQLUpdate)){}
          }
// ===============================================================      
        }  


    }else if(isset($_POST["chkAttn$i"])==""){
      
    }
  }

?>