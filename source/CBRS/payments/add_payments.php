<!DOCTYPE html >
<html >


<!--Find a relevant reservation from the resrvation ID-->

   <head>
      <title>Add Payments</title>
      <style>
         body {
         background-color: #ff9900;
         }
      </style>
   </head>
   <body>
      <?php include '../adminnavbar.php';?>
      <section style=" padding-top: 10px; padding-bottom: 20px;
         padding-left: 104px; padding-right: 105px; ">
         <h1>
         Add Payments</h2>
         <hr noshade>
      </section>
      <section>
         <div class="container">
            <div class="row">
               <div class="col-lg-12 col-md-12 col-sm-12 "  >
                  <div class="jumbotron" style="background-color:#e5b75b; padding-top: 10px; padding-bottom: 30px;
                     padding-left: 30px; padding-right: 30px;">
					 
                     <!-- find details form -->	
					 
                     <form role="form" name="myform" action="add_payments1.php" method="post">
                        <div class="form-group">
                           <label>Reservation No:</label>
                           <input type="text" name="res_no" pattern="^[0-9]+$" maxlength="15"class="form-inline" id="usr" required>
                           <button type="submit" name="find" class="btn btn-default">Find Details</button>							
                        </div>
                     </form>
                  </div>
               </div>
            </div>
         </div>
      </section>
   </body>
</html>