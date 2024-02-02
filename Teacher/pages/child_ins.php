<?php
 include "../config/config.php";
//error_reporting(0);

            $txtID = $_POST['txtID'];
			$txtFullName= $_POST['txtFullName'];
			$txtDOB= $_POST['txtDOB'];
			$txtGender=trim($_POST['txtGender']);
			$txtBloodGrp= $_POST['txtBloodGrp'];
            
            $txtClass= $_POST['txtClass'];
            $txtSchoolName= $_POST['txtSchoolName'];

			$txtVRegNo= $_POST['txtVRegNo']; 
            $txtEMail= $_POST['txtEMail'];
            $txtVehicleType= $_POST['txtVehicleType'];

//============================= Final Data save =========================================
    $fldr = $_SESSION['login'];
     
     if (!file_exists('uploads/'.$fldr)){
    mkdir('uploads/'.$fldr,0755,true); //0755 will be allowed to read/write the new folder
}
     
    //=============== Photo upload =========================================
    $filePhoto = $_FILES['filePhoto']['name'];
    if($filePhoto==""){
        $filename3= $_POST['txtFilePhoto'];
    }else{    
    $temp3 = explode(".", $_FILES["filePhoto"]["name"]);
    $flnm3 = pathinfo($filePhoto, PATHINFO_FILENAME);
    $filename3 =$fldr."Pic_". round(microtime(true)) . '.' . end($temp3);
    $destination3 = 'uploads/'.$fldr.'/' . $filename3;
    $extension3 = pathinfo($filename3, PATHINFO_EXTENSION);
    $file3 = $_FILES['filePhoto']['tmp_name'];
    $size3 = $_FILES['filePhoto']['size'];

    if (!in_array($extension3, ['pdf', 'jpg', 'png'])) {
        echo "You file extension must be .pdf or .jpg or .png";exit();
        } 
    elseif ($_FILES['filePhoto']['size'] > 100000) {
        echo "File too large!";exit();
        } 
    else {
        if (move_uploaded_file($file3, $destination3)) {}
    }
}
       
 
//===========================//record number generater//============//
 
    $sql = "INSERT INTO tbl_child (pid,child_name,dob,gender,blood_grp,class,school_name,vehicle_no,vehicle_type,photo) values('$txtID','$txtFullName','$txtDOB','$txtGender','$txtBloodGrp','$txtClass','$txtSchoolName','$txtVRegNo','$txtVehicleType','$filename3')";
                                               
    if (mysqli_query($conn, $sql)) {
        echo "<script>alert('File saved successfully')</script>";
        echo "<script>window.location.href='parents_detail.php'</script>";                 
    }else{echo $conn->error;}
                           
?>