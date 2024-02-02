<?php
 include "../config/config.php";
//error_reporting(0);

			$txtFullName= $_POST['txtFullName'];
			//$txtMobNo= $_POST['txtMobNo'];
			$txtAddress=trim($_POST['txtAddress']);
			
			$txtDOB= $_POST['txtDOB'];
			$txtGender= $_POST['txtGender'];
			$txtBloodGrp= $_POST['txtBloodGrp'];
			$txtVRegNo= $_POST['txtVRegNo']; 
            $txtEMail= $_POST['txtEMail'];
            $txtVehicleType= $_POST['txtVehicleType'];

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
    //=============== DL upload =========================================
    $fileDL = $_FILES['fileDL']['name'];
    if($fileDL==""){
        $filename4= $_POST['txtFileDL'];
    }else{    
    $temp4 = explode(".", $_FILES["fileDL"]["name"]);
    $flnm4 = pathinfo($fileDL, PATHINFO_FILENAME);
    $filename4 =$fldr."DL_". round(microtime(true)) . '.' . end($temp4);
    $destination4 = 'uploads/'.$fldr.'/' . $filename4;
    $extension4 = pathinfo($filename4, PATHINFO_EXTENSION);
    $file4 = $_FILES['fileDL']['tmp_name'];
    $size4 = $_FILES['fileDL']['size'];

    if (!in_array($extension4, ['pdf', 'jpg', 'png'])) {
        echo "You file extension must be .pdf or .jpg or .png";exit();
        } 
    elseif ($_FILES['fileDL']['size'] > 100000) {
        echo "File too large!";exit();
        } 
    else {

        if (move_uploaded_file($file4, $destination4)) {}
    }
}
    //=============== Pic Front upload =========================================
    $fileFrontPic = $_FILES['fileFrontPic']['name'];
    if($fileFrontPic==""){
        $filename5= $_POST['txtFileFrontPic'];
    }else{    
    $temp5 = explode(".", $_FILES["fileFrontPic"]["name"]);
    $flnm5 = pathinfo($fileFrontPic, PATHINFO_FILENAME);
    $filename5 =$fldr."FRONTPIC_". round(microtime(true)) . '.' . end($temp5);
    $destination5 = 'uploads/'.$fldr.'/' . $filename5;
    $extension5 = pathinfo($filename5, PATHINFO_EXTENSION);
    $file5 = $_FILES['fileFrontPic']['tmp_name'];
    $size5 = $_FILES['fileFrontPic']['size'];

    if (!in_array($extension5, ['pdf', 'jpg', 'png'])) {
        echo "You file extension must be .pdf or .jpg or .png";exit();
        } 
    elseif ($_FILES['fileFrontPic']['size'] > 100000) {
        echo "File too large!";exit();
        } 
    else {

        if (move_uploaded_file($file5, $destination5)) {}
    }
}
    //=============== Pic Rear upload =========================================
    $fileRearPic = $_FILES['fileRearPic']['name'];
    if($fileRearPic==""){
        $filename6= $_POST['txtFileRearPic'];
    }else{    
    $temp6 = explode(".", $_FILES["fileRearPic"]["name"]);
    $flnm6 = pathinfo($fileRearPic, PATHINFO_FILENAME);
    $filename6 =$fldr."REARPIC_". round(microtime(true)) . '.' . end($temp6);
    $destination6 = 'uploads/'.$fldr.'/' . $filename6;
    $extension6 = pathinfo($filename6, PATHINFO_EXTENSION);
    $file6 = $_FILES['fileRearPic']['tmp_name'];
    $size6 = $_FILES['fileRearPic']['size'];

    if (!in_array($extension6, ['pdf', 'jpg', 'png'])) {
        echo "You file extension must be .pdf or .jpg or .png";exit();
        } 
    elseif ($_FILES['fileRearPic']['size'] > 100000) {
        echo "File too large!";exit();
        } 
    else {

        if (move_uploaded_file($file6, $destination6)) {}
    }
}
    //=============== Pic Left upload =========================================
    $fileLeftPic = $_FILES['fileLeftPic']['name'];
    if($fileLeftPic==""){
        $filename7= $_POST['txtFileLeftPic'];
    }else{    
    $temp7 = explode(".", $_FILES["fileLeftPic"]["name"]);
    $flnm7 = pathinfo($fileLeftPic, PATHINFO_FILENAME);
    $filename7 =$fldr."LEFTPIC_". round(microtime(true)) . '.' . end($temp7);
    $destination7 = 'uploads/'.$fldr.'/' . $filename7;
    $extension7 = pathinfo($filename7, PATHINFO_EXTENSION);
    $file7 = $_FILES['fileLeftPic']['tmp_name'];
    $size7 = $_FILES['fileLeftPic']['size'];

    if (!in_array($extension7, ['pdf', 'jpg', 'png'])) {
        echo "You file extension must be .pdf or .jpg or .png";exit();
        } 
    elseif ($_FILES['fileLeftPic']['size'] > 100000) {
        echo "File too large!";exit();
        } 
    else {

        if (move_uploaded_file($file7, $destination7)) {}
    }
}
    //=============== Pic Right upload =========================================
    $fileRightPic = $_FILES['fileRightPic']['name'];
    if($fileRightPic==""){
        $filename8= $_POST['txtFileRightPic'];
    }else{    
    $temp8 = explode(".", $_FILES["fileRightPic"]["name"]);
    $flnm8 = pathinfo($fileRightPic, PATHINFO_FILENAME);
    $filename8 =$fldr."RIGHTPIC_". round(microtime(true)) . '.' . end($temp8);
    $destination8 = 'uploads/'.$fldr.'/' . $filename8;
    $extension8 = pathinfo($filename8, PATHINFO_EXTENSION);
    $file8 = $_FILES['fileRightPic']['tmp_name'];
    $size8 = $_FILES['fileRightPic']['size'];

    if (!in_array($extension8, ['pdf', 'jpg', 'png'])) {
        echo "You file extension must be .pdf or .jpg or .png";exit();
        } 
    elseif ($_FILES['fileRightPic']['size'] > 100000) {
        echo "File too large!";exit();
        } 
    else {

        if (move_uploaded_file($file8, $destination8)) {}
    }
}
    //=============== Pic Inside upload =========================================
    $fileInsidePic = $_FILES['fileInsidePic']['name'];
    if($fileInsidePic==""){
        $filename9= $_POST['txtFileInside'];
    }else{    
    $temp9 = explode(".", $_FILES["fileInsidePic"]["name"]);
    $flnm9 = pathinfo($fileInsidePic, PATHINFO_FILENAME);
    $filename9 =$fldr."INPIC_". round(microtime(true)) . '.' . end($temp9);
    $destination9 = 'uploads/'.$fldr.'/' . $filename9;
    $extension9 = pathinfo($filename9, PATHINFO_EXTENSION);
    $file9 = $_FILES['fileInsidePic']['tmp_name'];
    $size9 = $_FILES['fileInsidePic']['size'];

    if (!in_array($extension9, ['pdf', 'jpg', 'png'])) {
        echo "You file extension must be .pdf or .jpg or .png";exit();
        } 
    elseif ($_FILES['fileInsidePic']['size'] > 100000) {
        echo "File too large!";exit();
        } 
    else {

        if (move_uploaded_file($file9, $destination9)) {}
    }
}
    //=============== Pic Full upload =========================================
    $fileFullPic = $_FILES['fileFullPic']['name'];
    if($fileFullPic==""){
        $filename10= $_POST['txtFileFullPic'];
    }else{    
    $temp10 = explode(".", $_FILES["fileFullPic"]["name"]);
    $flnm10 = pathinfo($fileFullPic, PATHINFO_FILENAME);
    $filename10 =$fldr."FULLPIC_". round(microtime(true)) . '.' . end($temp10);
    $destination10 = 'uploads/'.$fldr.'/' . $filename10;
    $extension10 = pathinfo($filename10, PATHINFO_EXTENSION);
    $file10 = $_FILES['fileFullPic']['tmp_name'];
    $size10 = $_FILES['fileFullPic']['size'];

    if (!in_array($extension10, ['pdf', 'jpg', 'png'])) {
        echo "You file extension must be .pdf or .jpg or .png";exit();
        } 
    elseif ($_FILES['fileFullPic']['size'] > 100000) {
        echo "File too large!";exit();
        } 
    else {

        if (move_uploaded_file($file10, $destination10)) {}
    }
}
//===========================//record number generater//============//
 
 $sql = "UPDATE tbl_registration1 set fullname='$txtFullName',fulladdress='$txtAddress',email='$txtEMail',dob='$txtDOB',gender='$txtGender',bloodgrp='$txtBloodGrp',aadhar='$filename1',pancard='$filename2',photo='$filename3',regno='$txtVRegNo',vehicletype='$txtVehicleType',dl='$filename4',frontpic='$filename5',rearpic='$filename6',leftpic='$filename7',rightpic='$filename8',insidepic='$filename9',fullpic='$filename10' where mobno='$fldr'";
                                               
            if (mysqli_query($conn, $sql)) {
                echo "<script>alert('File saved successfully')</script>";
                echo "<script>window.location.href='profile.php'</script>"; 
            }else{echo $conn->error;}
              
?>