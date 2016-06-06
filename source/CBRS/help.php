<!DOCTYPE>
<html>
   <head>
      <title>Help</title>
   </head>
   <body >
   
   <!--Interface of the help tab-->
   
      <?php include '../navbar1.php'; ?>
      <div class="row">
         <div class="container">
            <div class="col-md-4">
               <h3>Call Us</h3>
               <hr noshade>
               <p>Ranjith Gunathilake</p>
               <p>Manager Welfare</p>
               <p>011- 2913870</p>
               <p>071-4884320</p>
            </div>
            <div class="col-md-4">
               <h3>Visit Us</h3>
               <hr noshade>
               <p>NATIONAL SAVINGS BANK</p>
               <p>Savings House</p>
               <p>255, Galle Road</p>
               <p>Colombo 03</p>
               <p>SriLanka</p>
            </div>
            <div class="col-md-4">
               <h3>Mail Us</h3>
               <hr noshade>
               <p>manager.welfare@nsb.lk</p>
            </div>
         </div>
      </div>
      <div class="row">
         <div class="container">
            <div class="col-md-6">
               <h3 class="text-center">Contact Us</h3>
               <hr noshade>
               <p>If you have anymore problems regarding Reservation,Cancellation, Payments or any other don't hesitate to contact us.</p>
			   
			   <!-- Contact form starts-->
			   
               <form class="form-horizontal" method="post" action="help1.php">
                  <div class="form-group">
                     <label for="inputEmail3" class="col-sm-2 control-label">Name</label>
                     <div class="col-sm-10">
                        <input type="text" class="form-control" name="name" id="inputEmail3" placeholder="Name">
                     </div>
                  </div>
                  <div class="form-group">
                     <label for="inputPassword3" class="col-sm-2 control-label">Email Address</label>
                     <div class="col-sm-10">
                        <input type="text" class="form-control" name="email" id="inputEmail3" placeholder="Email">
                     </div>
                  </div>
                  <div class="form-group">
                     <label for="inputPassword3" class="col-sm-2 control-label">Subject</label>
                     <div class="col-sm-10">
                        <input type="text" class="form-control" name="subject" id="inputEmail3" placeholder="Subject">
                     </div>
                  </div>
                  <div class="form-group">
                     <label for="inputPassword3" class="col-sm-2 control-label">Add Your Query</label>
                     <div class="col-sm-10">
                        <textarea class="form-control" name="query" rows="3"></textarea>
                     </div>
                  </div>
                  <div class="form-group">
                     <div class="col-sm-offset-2 col-sm-10">
                        <button type="submit" name="send" class="btn btn-info">Send</button>
                     </div>
                  </div>
               </form>
			   
			   <!--Contact form ends-->
			   
            </div>
			
			<!--map-->
			
            <div class="col-md-6">
               <h3 class="text-center">Get Directions</h3>
               <hr noshade>
               <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m12!1m3!1d2800.7306745137207!2d79.84970017894581!3d6.910764814932937!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!5e0!3m2!1sen!2slk!4v1451808131778" width="600" height="260" frameborder="0" style="border:0" allowfullscreen></iframe>
            </div>
         </div>
      </div>
   </body>
</html>