
<!--Sigining form for the family-->


<form  action="signup_save.php" method="post" autocomplete="on">
   <h4> Sign up </h4>
   <hr>
   <p> 
      <label for="usernamesignup" class="uname" data-icon="u">Username</label>
      <input id="usernamesignup" name="username" required="required" type="text" placeholder="Username" />
   </p>
   <p> 
      <label for="passwordsignup" class="youpasswd" data-icon="p">Password </label>
      <input id="passwordsignup" name="password" required="required" type="password" placeholder="eg. X8df!90EO"/>
   </p>
   <p> 
      <label for="passwordsignup" class="youpasswd" data-icon="u">First Name </label>
      <input id="passwordsignup" name="firstname" required="required" type="text" placeholder="First Name"/>
   </p>
   <p> 
      <label for="passwordsignup" class="youpasswd" data-icon="u">Last Name </label>
      <input id="passwordsignup" name="lastname" required="required" type="text" placeholder="Last Name"/>
   </p>
   <p>
      <label for="passwordsignup" class="youpasswd" data-icon="">Gender </label>
      <select id="passwordsignup"  name="gender">
         <option></option>
         <option>Male</option>
         <option>Female</option>
      </select>
   </p>
   <p class="signin button"> 
      <input type="submit" value="Sign up"/> 
   </p>
   <p class="change_link">  
      Already a member ?
      <a href="#tologin" class="to_register"> Go and log in </a>
   </p>
</form>