<?php include('fheader.php'); ?>    
<?php include('session.php'); ?>    
<body>

  <!--Upload photos to the gallery-->
  
   <div id="masthead">
      <div class="container">
         <?php include('fheading.php'); ?> 
      </div>
      <!-- /cont -->
   </div>
   <div class="container">
      <hr>
      <div class="row">
         <div class="col-md-2">
         </div>
         <div class="col-md-8">
            <div class="panel">
               <div class="panel-body" style="background-color:#faf2e0">
                  <h2 id="po">Upload Photos</h2>
                  <hr>
                  <div >
                     <form id="photos"   method="POST" enctype="multipart/form-data">
                        <label class="control-label" for="input01">Choose an Image</label>
                        <input type="file" name="image" class="font" required>
                        <button class="btn btn-info"type="submit" name="submit" class="btn btn-success"><i class="icon-upload"></i> Upload</button>
                     </form>
                     <?php 
                        if (isset($_POST['submit'])) {
                        
                        $image = addslashes(file_get_contents($_FILES['image']['tmp_name']));
                        $image_name = addslashes($_FILES['image']['name']);
                        $image_size = getimagesize($_FILES['image']['tmp_name']);
                        
                        move_uploaded_file($_FILES["image"]["tmp_name"], "upload/" . $_FILES["image"]["name"]);
                        $location = "upload/" . $_FILES["image"]["name"];
                        $conn->query("insert into photos (location,member_id,date_posted) values ('$location','$session_id',NOW())");
                        ?>
                     <script>
                        window.location = 'fphoto.php';
                     </script>
                     <?php
                        }
                        ?>
                  </div>
                  <div class="row">
                     <hr>
                     <?php
                        $query = $conn->query("select * from photos where member_id='$session_id'");
                        while($row = $query->fetch()){
                        $id = $row['photos_id'];
                        ?>
                     <div class="col-md-2 col-sm-3 text-center">
                        <img class="photo" src="<?php echo $row['location']; ?>" width="100" height="100">
                        <hr>
                        <a class="btn btn-danger" href="fdelete_photos.php<?php echo '?id='.$id; ?>"><i class="icon-remove"></i> Delete</a>
                     </div>
                     <?php } ?>
                  </div>
               </div>
            </div>
         </div>
         <!--/col-8-->
      </div>
   </div>
</body>
</html>