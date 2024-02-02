<!--add drivers detail-->
      <div class="modal fade" id="AddDriver">
        <div class="modal-dialog">
          <div class="modal-content" style="width: 600px;">
            <div class="modal-header bg-info">
              <h4 class="modal-title">Add Drivers Detail</h4>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <div class="modal-body">
<!-- =========================================================== -->
 
              <form class="form-horizontal" action="update_profile.php" method="post" enctype="multipart/form-data">
                <div class="card-body">
                  
                  <div class="form-group row">
                    <label for="inputPassword3" class="col-sm-2 col-form-label">Full Name</label>
                    <div class="col-sm-10">
                      <input type="text" class="form-control" id="txtFullName" name="txtFullName" placeholder="Full Name">
                    </div>
                  </div>

                  <div class="form-group row">
                    <label for="inputEmail3" class="col-sm-2 col-form-label">Mobile No.</label>
                    <div class="col-sm-10">
                      <input type="number" class="form-control" id="txtMobNo" name="txtMobNo" placeholder="Mobile No.">
                    </div>
                  </div>
                  
                  <div class="form-group row">
                    <label for="inputEmail3" class="col-sm-2 col-form-label">E-Mail</label>
                    <div class="col-sm-10">
                      <input type="email" class="form-control" id="txtEMail" name="txtEMail" placeholder="E-Mail ID">
                    </div>
                  </div>

                  <div class="form-group row">
                    <label for="inputPassword3" class="col-sm-2 col-form-label">Full Address</label>
                    <div class="col-sm-10">
                      <textarea class="form-control" id="txtAddress" name="txtAddress" rows="3"></textarea>
                    </div>
                  </div>

                  <div class="form-group row">
                    <label for="inputPassword3" class="col-sm-2 col-form-label">DOB</label>
                    <div class="col-sm-10">
                      <input type="text" class="form-control" id="txtDOB" name="txtDOB" placeholder="Date of Birth">
                    </div>
                  </div>                  

                  <div class="form-group row">
                    <label for="inputPassword3" class="col-sm-2 col-form-label">Gender</label>
                    <div class="col-sm-10">
                      <select class="form-control" id="txtGender" name="txtGender">
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
                    </div>

                    
                  </div>
                  <div class="form-group row">
                    <label for="inputPassword3" class="col-sm-2 col-form-label" style="color:blue;">PAN Card</label>
                    <div class="col-sm-10">
                      <input type="file" class="custom-file-input" id="filePan" name="filePan">
                        <label class="custom-file-label" for="exampleInputFile">Choose file</label>
                    </div>
                  </div>     
                  <div class="form-group row">
                    <label for="inputPassword3" class="col-sm-2 col-form-label" style="color:red;">Self Photo</label>
                    <div class="col-sm-10">
                      <input type="file" class="custom-file-input" id="filePhoto" name="filePhoto">
                        <label class="custom-file-label" for="exampleInputFile">Choose file</label>
                    </div>
                  </div>
                  
                  <div class="form-group row">
                    <label for="inputPassword3" class="col-sm-2 col-form-label">Vehicle Reg. No.</label>
                    <div class="col-sm-10">
                      <input type="text" class="form-control" id="txtVRegNo" name="txtVRegNo" placeholder="Vehicle Reg. No.">
                    </div>
                  </div> 
                  
                  <div class="form-group row">
                    <label for="inputPassword3" class="col-sm-2 col-form-label">Vehicle Type</label>
                    <div class="col-sm-10">
                      <select class="form-control" id="txtVehicleType" name="txtVehicleType">
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
                    </div>
                  </div> 

                  <div class="form-group row">
                    <label for="inputPassword3" class="col-sm-2 col-form-label">Vehicle Pic Front</label>
                    <div class="col-sm-10">
                      <input type="file" class="custom-file-input" id="fileFrontPic" name="fileFrontPic">
                        <label class="custom-file-label" for="exampleInputFile">Choose file</label>
                    </div>
                  </div>
                  <div class="form-group row">
                    <label for="inputPassword3" class="col-sm-2 col-form-label">Vehicle Pic Rear</label>
                    <div class="col-sm-10">
                      <input type="file" class="custom-file-input" id="fileRearPic" name="fileRearPic">
                        <label class="custom-file-label" for="exampleInputFile">Choose file</label>
                    </div>
                  </div>
                  <div class="form-group row">
                    <label for="inputPassword3" class="col-sm-2 col-form-label">Vehicle Pic Left</label>
                    <div class="col-sm-10">
                      <input type="file" class="custom-file-input" id="fileLeftPic" name="fileLeftPic">
                        <label class="custom-file-label" for="exampleInputFile">Choose file</label>
                    </div>
                  </div>
                  <div class="form-group row">
                    <label for="inputPassword3" class="col-sm-2 col-form-label">Vehicle Pic Right</label>
                    <div class="col-sm-10">
                      <input type="file" class="custom-file-input" id="fileRightPic" name="fileRightPic">
                        <label class="custom-file-label" for="exampleInputFile">Choose file</label>
                    </div>
                  </div>
                  <div class="form-group row">
                    <label for="inputPassword3" class="col-sm-2 col-form-label">Vehicle Pic Inside</label>
                    <div class="col-sm-10">
                      <input type="file" class="custom-file-input" id="fileInsidePic" name="fileInsidePic">
                        <label class="custom-file-label" for="exampleInputFile">Choose file</label>
                    </div>
                  </div>                                                                        
                  <div class="form-group row">
                    <label for="inputPassword3" class="col-sm-2 col-form-label">Vehicle Full Pic </label>
                    <div class="col-sm-10">
                      <input type="file" class="custom-file-input" id="fileFullPic" name="fileFullPic">
                        <label class="custom-file-label" for="exampleInputFile">Choose file</label>
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
<!-- =========================================================== -->
            </div>
             
          </div>
          <!-- /.modal-content -->
        </div>
        <!-- /.modal-dialog -->
      </div>



<!--Edit drivers detail-->
      <div class="modal fade" id="EditDriver">
        <div class="modal-dialog">
          <div class="modal-content" style="width: 600px;">
            <div class="modal-header bg-warning">
              <h4 class="modal-title">Edit Drivers Detail</h4>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <div class="modal-body">
<!-- ============================================================= -->
            <?php
              $mobno = $_SESSION['login'];
              $sql = "SELECT * FROM tbl_driver where mobno='$mobno'";
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
<!-- =========================================================== -->
 
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

                </div>
                <!-- /.card-body -->
                <div class="card-footer">
                  <button type="submit" class="btn btn-info">Submit</button>
                  <button type="submit" class="btn btn-default float-right">Cancel</button>
                </div>
                <!-- /.card-footer -->
              </form>
<!-- =========================================================== -->
            </div>
             
          </div>
          <!-- /.modal-content -->
        </div>
        <!-- /.modal-dialog -->
      </div>

<!--Delete drivers detail-->
      <div class="modal fade" id="DeleteDriver">
        <div class="modal-dialog">
          <div class="modal-content" style="width: 600px;">
            <div class="modal-header bg-danger">
              <h4 class="modal-title">Delete Drivers Detail</h4>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <div class="modal-body">
<!-- =========================================================== -->
 
Delete.....................
<!-- =========================================================== -->
            </div>
             
          </div>
          <!-- /.modal-content -->
        </div>
        <!-- /.modal-dialog -->
      </div>