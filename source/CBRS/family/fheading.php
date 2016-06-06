<!-- Content of the profile -->

<div class="row">
   <div class="container">
      <div class="col-md-2">
      </div>
      <div class="col-md-8" style="padding-bottom:20px">
         <?php
            $query = $conn->query("select * from members where member_id = '$session_id'");
            $row = $query->fetch();
            $id = $row['member_id'];
            ?>
         <h3>
            <div> <?php echo $row['firstname']." ".$row['lastname']; ?></div>
         </h3>
      </div>
      <div class="col-md-2">
      </div>
   </div>
</div>
<div class="row">
   <div class="container">
      <div class="col-md-2">
      </div>
      <div class="col-md-2">
         <img src="<?php echo $image; ?>" height="220" width="200"><br>
         <a class="btn btn-info" href="fchange_pic.php">Change Profile Picture</a>
      </div>
      <div class="col-md-6" style= " height:220px;background-color:#faf2e0">
         <div style ="margin-top:10px">
            <p>BirthDay : 
            <div class="alert alert-warning "><?php echo $row['birthdate']; ?></div>
            </p>
            <p>Designation : 
            <div class="alert alert-warning"><?php echo $row['work']; ?></div>
            </p><br>
         </div>
      </div>
      <div class="col-md-2">
      </div>
   </div>
</div>
<br>
<div class="row">
   <div class="col-md-2">
   </div>
   <div class="col-md-8">
      <h3>Update Your Status</h3>
      <hr>
      <form method="post" action="fpost.php">
	  <textarea class="form-control" rows="3" style="background-color:#faf2e0""  name="content" placeholder="Share your Story Here"></textarea>
         
         <br>
         <button class="btn btn-info"><i class="icon-share"></i> Share </button>
      </form>
   </div>
   <div class="col-md-2">
   </div>
</div>