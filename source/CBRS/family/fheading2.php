
  <!--changing the profile picture-->
  
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
            <?php
               $query = $conn->query("select * from members where member_id = '$session_id'");
               $row = $query->fetch();
               $id = $row['member_id'];
               ?>
            <p>BirthDay : 
            <div class="alert alert-warning "><?php echo $row['birthdate'];?></div>
            </p>
            <p>Designation : 
            <div class="alert alert-warning"><?php echo $row['work']; ?></div>
            </p><br>
         </div>
      </div>
      <div class="col-md-2">
         <form  id="upload_image"  class="form-horizontal" method="POST" enctype="multipart/form-data">
            <div class="control-group">
               <label class="control-label" for="input01">Image:</label>
               <div class="controls">
                  <input type="file" name="image" class="font" required>
               </div>
            </div>
            <div class="control-group">
               <div class="controls">
                  <button type="submit" name="submit" class="btn btn-success">Upload</button>
               </div>
            </div>
         </form>
      </div>
      <?php
         if (isset($_POST['submit'])) {
         
         	$image = addslashes(file_get_contents($_FILES['image']['tmp_name']));
         	$image_name = addslashes($_FILES['image']['name']);
         	$image_size = getimagesize($_FILES['image']['tmp_name']);
         
         	move_uploaded_file($_FILES["image"]["tmp_name"], "images/" . $_FILES["image"]["name"]);
         	$location = "images/" . $_FILES["image"]["name"];
         	$conn->query("update members set image = '$location' where member_id  = '$session_id' ");
         ?>
      <script>
         window.location = 'fhome.php';
      </script>
      <?php
         }
         ?>
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
         <textarea style="width:760px;height:180px;background-color:#faf2e0""  name="content" placeholder="Share your Story Here"></textarea>
         <br>
         <button class="btn btn-info"><i class="icon-share"></i> Share </button>
      </form>
   </div>
   <div class="col-md-2">
   </div>
</div>