<?php include('fheader.php'); ?>    
<?php include('session.php'); ?>    
<body>

<!-- Messaging Function of the system -->

   <div id="masthead">  
   </div>
   <div class="container">
      <div class="row">
         <div class="col-md-12">
            <h3>Chat With Your Friends</h3>
            <hr>
            <div class="panel">
               <div class="panel-body" style="background-color:#faf2e0">
			   
                  <!--/stories-->
                  <div class="row" style="margin-top:20px">
                     <div class="col-md-3">
                     </div>
                     <div class="col-md-6 col-sm-3 text-center">
                        <form method="post" id="send_message" action="fsend_message.php">
                           <div class="control-group">
                              <label>To</label>
                              <div class="controls">
                                 <select name="friend_id" class="combo form-control" required >
                                    <option></option>
                                    <?php
                                       $query = $conn->query("select members.member_id , members.firstname , members.lastname , members.image , friends.friends_id   from members  , friends
                                       where friends.my_friend_id = '$session_id' and members.member_id = friends.my_id
                                       OR friends.my_id = '$session_id' and members.member_id = friends.my_friend_id
                                       ");
                                       	while($row = $query->fetch()){
                                       	$friend_name = $row['firstname']." ".$row['lastname'];
                                       	$friend_image = $row['image'];
                                       	$id = $row['member_id'];
                                       	?>
                                    <option value="<?php echo $id; ?>"><?php echo $friend_name; ?></option>
                                    <?php } ?>
                                 </select>
                              </div>
                           </div>
                           <div class="control-group">
                              <label>Content:</label>
                              <div class="controls">
                                 <textarea name="my_message" class="my_message form-control" rows="6"  required></textarea>
                              </div>
                           </div>
                           <div class="control-group">
                              <div class="controls">
                                 <button  class="btn btn-info"><i class="icon-envelope-alt"></i> Send </button>
                              </div>
                           </div>
                        </form>
                     </div>
                     <div class="col=md-3">
                     </div>
                  </div>
                  <div class="row">
				  
                     <!--inbox starts-->
					 
                     <div class="col-md-6 col-sm-9">
                        <h3>Inbox</h3>
                        <hr>
                        <?php 
                           $query = $conn->query("select * from message
                           LEFT JOIN members on message.sender_id = members.member_id where reciever_id = '$session_id' ");
                           while($row = $query->fetch()){
                           $id = $row['message_id'];
                           
                           
                           ?>
                        <div class="alert alert-info">
                           <div class="message">
                              <?php echo $row['content']; ?>
                              <hr>
                              <div class="pull-left"><?php echo $row['date_sended']; ?></div>
                              <div class="pull-right">Sent by: <?php echo $row['firstname']." ".$row['lastname']; ?></div>
                              <hr>
                              <br>
                              <a href="fdelete_message.php<?php echo '?id='.$id; ?>" class="btn btn-info"><i class="icon-remove"></i> Remove</a>
                           </div>
                        </div>
                        <?php } ?>
                     </div>
					 
                     <!--inbox ends-->
					 
                     <!--out box-->
					 
                     <div class="col-md-6">
                        <h3>Outbox</h3>
                        <hr>
                        <?php 
                           $query = $conn->query("select * from message
                           LEFT JOIN members on message.reciever_id = members.member_id where sender_id = '$session_id' ");
                           while($row1 = $query->fetch()){
                           $id = $row1['message_id'];
                           
                           
                           ?>
                        <div class="alert alert-info">
                           <div class="message">
                              <?php echo $row1['content']; ?>
                              <hr>
                              <div class="pull-left"><?php echo $row1['date_sended']; ?></div>
                              <div class="pull-right">Sent to: <?php echo $row1['firstname']." ".$row['lastname']; ?></div>
                              <hr>
                              <br>
                              <a href="fdelete_message.php<?php echo '?id='.$id; ?>" class="btn btn-info"><i class="icon-remove"></i> Remove</a>
                           </div>
                        </div>
                        <?php } ?>
                     </div>
					 
					   <!--outbox ends -->
					   
                  </div>
				  
                  <!--row  ends-->
				  
               </div>
            </div>
         </div>
      </div>
      <!--/col-12-->
   </div>
</body>
</html>