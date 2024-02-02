      <div class="modal fade" id="modal-default">
        <div class="modal-dialog" style="margin-left: 50px;">
          <div class="modal-content" style="width: 1000px;">
            <div class="modal-header bg-warning">
              <h4 class="modal-title">Childs Detail</h4>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <div class="modal-body">
<!-- =========================================================== -->
                <table id="example1" class="table table-bordered table-striped nowrap">
                  <thead>
                                    <tr>
                    <th>#</th>
                    <th>Children Name</th>
                    <th>DOB</th>
                    <th>Gender</th>
                    <th>Blood Grp</th>
                    <th>Class</th>
                    <th>School Name</th>
                    <th>Vehicle No.</th>
                    <th>Vehicle Type</th>
                    <th>Photo</th>
                    <th>Action</th>
                  </tr>
                  </thead>
                  <tbody>
                  <?php
                    $mobno = $_SESSION['login'];
                    $sln=1;
                    $sql = "SELECT a.*,b.pid FROM tbl_child a, tbl_parents b where a.pid=b.id";
                    $query = $conn->query($sql);
                    while($row = $query->fetch_assoc()){                    

                      echo"<tr>
                          <td>".$sln."</td>
                          <td>".$row['child_name']."</td>
                          <td>".$row['dob']."</td>
                          <td>".$row['gender']."</td>
                          <td>".$row['blood_grp']."</td>
                          <td>".$row['class']."</td>
                          <td>".$row['school_name']."</td>
                          <td>".$row['vehicle_no']."</td>
                          <td>".$row['vehicle_type']."</td>
                          <td><a href='uploads/$mobno/$photo' target='_blank'><img src='uploads/".$mobno."/".$row['photo']."' alt='' style='width:50px;height:auto;'></a></td>
                          <td>
                          <a href='#' class='btn btn-warning'><i class='far fa-edit nav-icon'></i></a>
                          <a href='#' class='btn btn-danger'><i class='far fa-user nav-icon'></i></a>
                          </td>                            
                        </tr>";
                        $sln++;
                    }
                    ?>
                 

                  </tbody>
               
                </table>
<!-- =========================================================== -->
            </div>
            <!-- <div class="modal-footer justify-content-between">
              <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
              <button type="button" class="btn btn-primary">Save changes</button>
            </div> -->
          </div>
          <!-- /.modal-content -->
        </div>
        <!-- /.modal-dialog -->
      </div>

<!--add parents detail-->
      <div class="modal fade" id="AddParents">
        <div class="modal-dialog">
          <div class="modal-content" style="width: 600px;">
            <div class="modal-header bg-info">
              <h4 class="modal-title">Add Parents Detail</h4>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <div class="modal-body">
<!-- =========================================================== -->
 
              <form class="form-horizontal" action="update_profile.php" method="post" enctype="multipart/form-data">
                <input type="hidden" id="txtID" name="txtID" value="<?php echo $id;?>">
                <div class="card-body">
                  
                  <div class="form-group row">
                    <label for="inputPassword3" class="col-sm-3 col-form-label">Full Name</label>
                    <div class="col-sm-9">
                      <input type="text" class="form-control" id="txtFullName" name="txtFullName" value="<?php echo $name;?>" placeholder="Full Name">
                    </div>
                  </div>

                  <div class="form-group row">
                    <label for="inputEmail3" class="col-sm-3 col-form-label">Emergency No.</label>
                    <div class="col-sm-9">
                      <input type="number" class="form-control" id="txtMobNo" name="txtMobNo" value="<?php echo $mobno;?>" placeholder="Mobile No.">
                    </div>
                  </div>
                  
                  <div class="form-group row">
                    <label for="inputEmail3" class="col-sm-3 col-form-label">E-Mail</label>
                    <div class="col-sm-9">
                      <input type="email" class="form-control" id="txtEMail" name="txtEMail" value="<?php echo $email;?>" placeholder="E-Mail ID">
                    </div>
                  </div>

                  <div class="form-group row">
                    <label for="inputPassword3" class="col-sm-3 col-form-label">Full Address</label>
                    <div class="col-sm-9">
                      <textarea class="form-control" id="txtAddress" name="txtAddress" rows="3"> <?php echo $fulladdress;?></textarea>
                    </div>
                  </div>

                  <div class="form-group row">
                    <label for="inputPassword3" class="col-sm-3 col-form-label">Gender</label>
                    <div class="col-sm-9">
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
                    <label for="inputPassword3" class="col-sm-3 col-form-label" style="color:blueviolet;">Aadhar Card</label>
                    <div class="col-sm-9">
                      <input type="file" class="custom-file-input" id="fileAadhar" name="fileAadhar">
                        <label class="custom-file-label" for="exampleInputFile">Choose file</label>
                    <a href="uploads/<?php echo $mobno;?>/<?php echo $aadhar;?>" target="_blank"><img src="uploads/<?php echo $mobno;?>/<?php echo $aadhar;?>" alt="" style="width:150px; height: auto;"></a>
                    <input type="hidden" id="txtFileAadhar" name="txtFileAadhar" value="<?php echo $aadhar;?>">
                    </div>

                    
                  </div>
                  <div class="form-group row">
                    <label for="inputPassword3" class="col-sm-3 col-form-label" style="color:blue;">PAN Card</label>
                    <div class="col-sm-9">
                      <input type="file" class="custom-file-input" id="filePan" name="filePan">
                        <label class="custom-file-label" for="exampleInputFile">Choose file</label>
                        <a href="uploads/<?php echo $mobno;?>/<?php echo $pancard;?>" target="_blank"><img src="uploads/<?php echo $mobno;?>/<?php echo $pancard;?>" alt="" style="width:150px; height: auto;"></a>
                        <input type="hidden" id="txtFilePAN" name="txtFilePAN" value="<?php echo $pancard;?>">
                    </div>
                  </div>     
                  <div class="form-group row">
                    <label for="inputPassword3" class="col-sm-3 col-form-label" style="color:red;">Self Photo</label>
                    <div class="col-sm-9">
                      <input type="file" class="custom-file-input" id="filePhoto" name="filePhoto">
                        <label class="custom-file-label" for="exampleInputFile">Choose file</label>
                        <a href="uploads/<?php echo $mobno;?>/<?php echo $photo;?>" target="_blank"><img src="uploads/<?php echo $mobno;?>/<?php echo $photo;?>" alt="" style="width:150px; height: auto;"></a>
                        <input type="hidden" id="txtFilePhoto" name="txtFilePhoto" value="<?php echo $photo;?>">
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
            <!-- <div class="modal-footer justify-content-between">
              <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
              <button type="button" class="btn btn-primary">Save changes</button>
            </div> -->
          </div>
          <!-- /.modal-content -->
        </div>
        <!-- /.modal-dialog -->
      </div>
