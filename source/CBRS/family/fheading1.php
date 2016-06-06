<!-- Profile Details -->

<div class="row">
<div class="col-md-3">
   <center><img src="<?php echo $image; ?>" height="210" width="200" style="margin-top:20px"></center>
   <div style="margin-left:30px">
      <a class="btn btn-info" href="fchange_pic.php">Change Profile Picture</a>
   </div>
</div>
<div class="col-md-9">
<hr>
<div class="pull-right"><a href="fedit_profile.php" class="btn btn-info"><i class="icon-pencil"></i> Edit</a></div>
<h3>Personal Info</h3>
<?php
   $query = $conn->query("select * from members where member_id = '$session_id'");
   $row = $query->fetch();
   $id = $row['member_id'];
   ?>
<hr>
<p><b>Name:</b>
<div class="fg">
<div class="alert alert-warning" style="font-size:16"><?php echo $row['firstname']." ".$row['lastname']; ?></div>
</p> 
<p><b>Gender: </b> 
<div class="fg">
<div class="alert alert-warning" style="font-size:16"> <?php echo $row['gender']; ?></div>
</p> 
<p><b>Address:  </b>
<div class="fg">
<div class="alert alert-warning" style="font-size:16">  <?php echo $row['address']; ?></div>
</p> 
<p><b>Birthday:  </b>
<div class="fg">
<div  class="alert alert-warning"tyle="font-size:16">   <?php echo $row['birthdate']; ?></div>
</p> 
<p><b>Contact No: </b> 
<div class="fg">
<div class="alert alert-warning" style="font-size:16">   <?php echo $row['mobile']; ?></div>
</p> 
<p><b>Status: </b> 
<div class="fg">
<div class="alert alert-warning" style="font-size:16">   <?php echo $row['status']; ?></div>
</p> 
<p><b>Designation: </b> 
<div class="fg">
   <div class="alert alert-warning" style="font-size:16">   <?php echo $row['work']; ?></div>
   </p> 
   <p><b>Religion: </b> 
   <div class="fg">
      <div class="alert alert-warning" style="font-size:16">   <?php echo $row['religion']; ?></div>
      </p> 
   </div>
</div>