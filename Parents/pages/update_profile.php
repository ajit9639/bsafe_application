<?php
 include "../config/config.php";
//error_reporting(0);

            $txtID = $_POST['txtID'];
			$txtFullName= $_POST['txtFullName'];
			$txtMobNo= $_POST['txtMobNo'];
			$txtAddress=trim($_POST['txtAddress']);
			
			//$txtDOB= $_POST['txtDOB'];
			$txtGender= $_POST['txtGender'];
			//$txtBloodGrp= $_POST['txtBloodGrp'];
			//$txtVRegNo= $_POST['txtVRegNo']; 
            $txtEMail= $_POST['txtEMail'];
            //$txtVehicleType= $_POST['txtVehicleType'];

//============================= Final Data save =========================================
    $fldr = $_SESSION['login'];
     
     if (!file_exists('uploads/'.$fldr)){
    mkdir('uploads/'.$fldr,0755,true); //0755 will be allowed to read/write the new folder
}
    //=============== Aadhar upload =========================================
    $fileAadhar = $_FILES['fileAadhar']['name'];

    if($fileAadhar==""){
        $filename1= $_POST['txtFileAadhar'];
    }else{

    $temp1 = explode(".", $_FILES["fileAadhar"]["name"]);
    $flnm1 = pathinfo($fileAadhar, PATHINFO_FILENAME);
    $filename1 =$fldr."Aadhar_". round(microtime(true)) . '.' . end($temp1);

    $destination1 = 'uploads/'.$fldr.'/'. $filename1;
    $extension1 = pathinfo($filename1, PATHINFO_EXTENSION);
    $file1 = $_FILES['fileAadhar']['tmp_name'];
    $size1 = $_FILES['fileAadhar']['size'];

    if (!in_array($extension1, ['pdf', 'jpg', 'png'])) {
        echo "You file extension must be .pdf or .jpg or .png";
        exit();
        } 
    elseif ($_FILES['fileAadhar']['size'] > 100000) {
        echo "File too large!";
        exit();
        } 
    else {

        if (move_uploaded_file($file1, $destination1)) {}
    }
       // $tCoverPage1 = $filename;
   }     
    //=============== PAN upload =========================================
    $filePan = $_FILES['filePan']['name'];
    if($filePan==""){
        $filename2= $_POST['txtFilePAN'];
    }else{    
    $temp2 = explode(".", $_FILES["filePan"]["name"]);
    $flnm2 = pathinfo($filePan, PATHINFO_FILENAME);
    $filename2 =$fldr."PAN_". round(microtime(true)) . '.' . end($temp2);
    $destination2 = 'uploads/'.$fldr.'/' . $filename2;
    $extension2 = pathinfo($filename2, PATHINFO_EXTENSION);
    $file2 = $_FILES['filePan']['tmp_name'];
    $size2 = $_FILES['filePan']['size'];

    if (!in_array($extension2, ['pdf', 'jpg', 'png'])) {
        echo "You file extension must be .pdf or .jpg or .png";exit();
        } 
    elseif ($_FILES['filePan']['size'] > 100000) {
        echo "File too large!";exit();
        } 
    else {

        if (move_uploaded_file($file2, $destination2)) {}
    }
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
 
    $sql = "UPDATE tbl_registration1 set fullname='$txtFullName',fulladdress='$txtAddress',email='$txtEMail',gender='$txtGender',aadhar='$filename1',pancard='$filename2',photo='$filename3' where mobno='$fldr'";
                                               
            if (mysqli_query($conn, $sql)) {}else{echo $conn->error;}
              
    $sql = "UPDATE tbl_parents set gender='$txtGender',full_address='$txtAddress',email='$txtEMail',contact_no='$txtMobNo',aadhar='$filename1',pancard='$filename2',photo='$filename3' where pid='$txtID'";
                                               
            if (mysqli_query($conn, $sql)) {
                echo "<script>alert('File saved successfully')</script>";
                echo "<script>window.location.href='parents_detail.php'</script>"; 
            }else{echo $conn->error;}              
?>