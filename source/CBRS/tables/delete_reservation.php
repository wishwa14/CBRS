<!DOCTYPE html >
<html >
   <head>
      <title>Delete Reservation</title>
      <style>
         body {
         background-color: #ff9900;
         }
      </style>
   </head>
   <body>
   
   <!--Deletin a reservation-->
   
      <?php include '../adminnavbar.php';?>
      <section style=" padding-top: 10px; padding-bottom: 20px;
         padding-left: 104px; padding-right: 105px; ">
         <h1>
         Delete Reservation </h2>
         <hr noshade>
      </section>
      <section>
         <div class="container">
            <div class="row">
               <div class="col-lg-12 col-md-12 col-sm-12 "  >
                  <div class="jumbotron" style="background-color:#e5b75b; padding-top: 10px; padding-bottom: 30px;
                     padding-left: 30px; padding-right: 30px;">
                     <form class="form-horizontal" name="myform" action="delete_reservation1.php" method="post">
                        <div class="form-group">
                           <label  class="control-label col-sm-4" >Reservation ID:</label>
                           <?php
                              if(isset($_POST['delete'])) {
                              $id = $_POST['resid'];
                              echo $id;
                              }
                              ?>
                           <input type="hidden" name="res_no" id="myvalue" value= <?php echo $_POST['resid']?> >
                        </div>
                        <div class="form-group">
                           <label  class="control-label col-sm-4"  for="reason">Reason for cancelation:</label>
                           <textarea class="form-inline" required name="reason" minlength="15" maxlength="250" rows="5" cols="60" id="reason" placeholder="Enter Your Message"></textarea>
                        </div>
                        <div class="form-group">
                           <div class="col-sm-offset-4 col-sm-10" >
                              <button type="submit" name="delete" class="btn btn-default">Delete Reservation</button>	
                           </div>
                        </div>
                        <div class="form-group">
                           <div  class="col-sm-offset-4 col-sm-10"><a href="reservation_table.php"> GO BACK </a></div>
                        </div>
                     </form>
                  </div>
               </div>
            </div>
         </div>
      </section>
   </body>
</html>