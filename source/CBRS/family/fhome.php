<?php include('fheader.php'); ?>  
<?php include('session.php'); ?> 
<body>

<!-- Homepage of the social network-->

   <div id="masthead">
      <div class="container">
         <?php include('fheading.php'); ?>
      </div>
      <!-- /cont -->
   </div>
   <div class="container">
      <div class="row">
         <div class="col-md-2">
         </div>
         <div class="col-md-8">
            <hr>
            <div class="panel">
               <div class="panel-body" style= "background-color:#faf2e0">
			   
                  <!--/stories-->
				  
                  <div class="row">
                     <br>
                     <?php
                        $query = $conn->query("select * from post LEFT JOIN members on members.member_id = post.member_id order by post_id DESC");
                        while($row = $query->fetch()){
                        $posted_by = $row['firstname']." ".$row['lastname'];
                        $posted_image = $row['image'];
                        $id = $session_id;
						$id1= $row['post_id'];
						
						
                        ?>
                     <div class="col-md-2 col-sm-3 text-center">
                        <img  src="<?php echo $posted_image; ?>" style="width:100px;height:100px" class="img-circle"></a>
                     </div>
                     <div class="col-md-10 col-sm-9">
                        <div class="alert"><?php echo $row['content']; ?></div>
                        <div class="row">
                           <div class="col-xs-9">
                              <h4><span class="label label-info"> <?php echo $row['date_posted']; ?></span></h4>
                              <h4>
                                 <small style="font-family:courier,'new courier';" class="text-muted">Posted By:<a href="#" class="text-muted"><?php echo $posted_by; ?></a></small>
                              </h4>
                           </div>
                           <div class="col-xs-3"><a href="fdelete_post.php<?php echo '?id='.$id.'&pid='.$id1; ?>" class="btn btn-danger"><i class="icon-trash"></i> Delete</a></div>
                        </div>
                        <br><br><br>
                     </div>
                     <?php } ?>		
                  </div>
                  <hr>
               </div>
            </div>
         </div>
		 
         <!--/col-8-->
		 
         <div class="col-md-2">
         </div>
      </div>
   </div>
</body>