<?php include('fheader.php'); ?>    
<?php include('session.php'); ?>    

<script type="text/javascript" src="family.js"></script>

<body>
	
<!--Form for editing the details of the social network members-->



   <div id="masthead">
      <div class="container">
         <div class="row">
            <div class="col-md-3">
               <center><img src="<?php echo $image; ?>" height="210" width="200" style="margin-top:20px"></center>
               <div style="margin-left:30px">
                  <a class="btn btn-info" href="fchange_pic.php">Change Profile Picture</a>
               </div>
            </div>
            <div class="col-md-6">
               <?php
                  $query = $conn->query("select * from members where member_id = '$session_id'");
                  $row = $query->fetch();
                  $id = $row['member_id'];
                  ?>
               <form class="form-horizontal" method="post" action="fsave_edit.php">
                  <input type="hidden" name="member_id" value="<?php echo $id; ?>">
                  <div class="form-group">
                     <label class="col-sm-2 control-label">User Name</label>
                     <div class="col-sm-10">
                        <input type="text" name="username" required value="<?php echo $row['username']; ?>">
                     </div>
                  </div>
                  <div class="form-group">
                     <label class="col-sm-2 control-label">First Name</label>
                     <div class="col-sm-10">
                        <input type="text" name="firstname" id="firstname" onchange="validateName1();" value="<?php echo $row['firstname']; ?>">
                     </div>
                  </div>
                  <div class="form-group">
                     <label class="col-sm-2 control-label">Last Name</label>
                     <div class="col-sm-10">
                        <input type="text" name="lastname" id="lastname" onchange="validateName();" value="<?php echo $row['lastname']; ?>">
                     </div>
                  </div>
                  <div class="form-group">
                     <label class="col-sm-2 control-label">Gender</label>
                     <div class="col-sm-10">
                        <select name="gender">
                           <option><?php echo $row['gender']; ?></option>
                           <option>Male</option>
                           <option>Female</option>
                        </select>
                     </div>
                  </div>
                  <div class="form-group">
                     <label class="col-sm-2 control-label">Birthday</label>
                     <div class="col-sm-10">
                        <input name="birthdate" id="birthdate" type="date"  value="<?php echo $row['birthdate']; ?>">
                     </div>
                  </div>
                  <div class="form-group">
                     <label class="col-sm-2 control-label">Address</label>
                     <div class="col-sm-10">
                        <input name="address" id="address" type="text" value="<?php echo $row['address']; ?>">
                     </div>
                  </div>
                  <div class="form-group">
                     <label class="col-sm-2 control-label">Status</label>
                     <div class="col-sm-10">
                        <input name="status" id="status" type="text" onchange="validatestatus();" value="<?php echo $row['status']; ?>">
                     </div>
                  </div>
                  <div class="form-group">
                     <label class="col-sm-2 control-label">Mobile No</label>
                     <div class="col-sm-10">
                        <input name="mobile" id="mobile" type="text"  onchange="mobcheck();" value="<?php echo $row['mobile']; ?>">
                     </div>
                  </div>
                  <div class="form-group">
                     <label class="col-sm-2 control-label">Designation</label>
                     <div class="col-sm-10">
                        <input name="work" id="work" type="text" onchange="validatedesignation();" value="<?php echo $row['work']; ?>">
                     </div>
                  </div>
                  <div class="form-group">
                     <label class="col-sm-2 control-label">Religion</label>
                     <div class="col-sm-10">
                        <input name="religion" id="religion" onchange="validatereligion();" type="text" value="<?php echo $row['religion']; ?>">
                     </div>
                  </div>
                  <br>
                  <div class="form-group">
                     <center>
                        <button class="btn btn-info" name="save" class="btn edit">Save</button>
                     </center>
                  </div>
                  <br>
               </form>
			   
			   
            </div>
         </div>
      </div>
      
   </div>
   <!-- Form Ends -->
</body>
</html>