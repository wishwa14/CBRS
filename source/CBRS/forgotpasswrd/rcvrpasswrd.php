<!DOCTYPE>
<html>
   <head>
      <title>Password Recovery</title>
      <script type="text/javascript" language="javascript">
         function submitreg() {
         var form = document.administrator;
         if(form.uname.value == ""){
         alert( "Enter User name" );
         return false;
         }
         else if(form.upass.value == ""){
         alert( "Enter password" );
         return false;
         }
         else if(form.nsb_id.value == ""){
         alert( "Enter your NSB ID" );
         return false;
         }
         }
      </script>
   </head>
   <body >
      <?php include '../navbar1.php'?>
      <div class="container">
         <div class="row">
		 
            <!-- Password Recovery form starts-->
			
            <div class="col-md-3"></div>
            <div class="col-md-6">
               <h3>Forgot Your Password ?</h3>
               <hr noshade>
               <div class="panel panel-info">
                  <div class="panel-heading">Forgot Your Password ?</div>
                  <div class="panel-body">
                     <form  name="myform" action="rcvrpasswrd1.php" method="post" >
                        <div class="form-group">
                           <label >Full Name:</label>
                           <input type="text" name="name"  class="form-control" id="usr" required>
                        </div>
                        <div class="form-group">
                           <label >Email:</label>
                           <input type="text" name="email"  class="form-control" id="usr" required>
                        </div>
                        <button type="submit" name="update" class="btn btn-info">Verify</button>
                  </div>
                  </form>
               </div>
            </div>
         </div>
         <div class="col-md-3"></div>
      </div>
      </div>
	  
      <!--form ends-->
	  
   </body>
</html>