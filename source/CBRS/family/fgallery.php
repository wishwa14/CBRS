<?php include('fheader.php'); ?>    
<?php include('session.php'); ?>    
<body>

<!--Select all the photos from the database and preview it in a gallery -->

   <div class="container">
      <div class="row">
         <div class="col-md-12" >
            <div class="panel" style="background-color:#faf2e0">
               <div class="panel-body">
                  <h2 id="po">Gallery</h2>
                  <hr>
               </div>
               <div class="row">
                  <?php
                     $query = $conn->query("select * from photos,members where photos.member_id=members.member_id");
                     while($row = $query->fetch()){
                     $id = $row['photos_id'];
                     $posted_by = $row['firstname']." ".$row['lastname'];
                     ?>
                  <div class="col-md-2 col-sm-3 text-center">
                     <img class="photo" src="<?php echo $row['location']; ?>" width="160" height="150"><br>
                     <h4><span class="label label-info"> <?php echo $row['date_posted']; ?></span></h4>
                     <h4>
                        <small style="font-family:courier,'new courier';" class="text-muted">Posted By:<a href="#" class="text-muted"><?php echo $posted_by; ?></a></small>
                     </h4>
                  </div>
                  <?php } ?>
               </div>
            </div>
         </div>
         <!--/col-12-->
      </div>
   </div>
</body>
</html>