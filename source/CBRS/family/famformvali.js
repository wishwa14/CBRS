    function validateName(name) {
        var name1 = document.getElementById(name).value;
        var letters = /^[a-zA-Z\s]*$/;
    


       if( name1.match(letters)){
          return true;
        
        }
      else{
          notif({
              type : 'warning',
              msg  : 'Invalid Name',
              bgcolor: "#F80000 ",
              width: 200,
              height: 40,
              position: 'right'
            });
          document.getElementById(name).value = "";
          return false;   
        }
      }



      function CheckPasswordStrength() {
        var password = document.getElementById("passwordsignup").value;
 
        //TextBox left blank.
        if (password.length < 6) {
          notif({
            type : 'warning',
            msg  : 'password must contain at least 6 characters',
            bgcolor: "#F80000 ",
            width: 350,
            height: 40,
            position: 'right'

        });
          document.getElementById("passwordsignup").value = "";
            return false;
        }
    else{
        //Regular Expressions.
        var regex = new Array();
        regex.push("[A-Z]"); //Uppercase Alphabet.
        regex.push("[a-z]"); //Lowercase Alphabet.
        regex.push("[0-9]"); //Digit.
        regex.push("[$@$!%*#?&]"); //Special Character.
 
        var passed = 0;
 
        //Validate for each Regular Expression.
        for (var i = 0; i < regex.length; i++) {
            if (new RegExp(regex[i]).test(document.getElementById("passwordsignup").value)) {
                passed++;
            }
        }
 
      
 
        //Display status.
        var color = "";
        var strength = "";
        switch (passed) {
            case 0:

            case 1:
                strength = "Weak";               
                break;
            case 2:
                strength = "Strong";
                break;
            case 3:
              strength = "Strong";
                break;

            case 4:
                strength = "Strong";
                break;
            case 5:
                strength = "Strong";
                break;


        }
        if(strength=="Weak"){
        notif({
            type : 'warning',
          msg  : 'Weak. Enter at least one digit',
          bgcolor: "#F80000 ",
          width: 300,
            height: 40,
            multiline: 2,
            position: 'right'
        });
          document.getElementById("passwordsignup").value = "";
            return false;         

        }
        else if(strength=="Strong"){
          notif({
            bgcolor : "#00FFFF",
            msg  : 'A Strong password',
            width: 200,
            height:40,
            position: 'right'
        });
        
            return true; 
       
          }
      }

    }


function ValidateEmail() 
{
  var $email = $('form input[name="email'); //change form to id or containment selector
  var re = /^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/;
  if ($email.val() == '' || !re.test($email.val()))
  {
     notif({
      type : 'warning',
      msg  : 'Invalid Email address',
      bgcolor: "#F80000 ",
      width: 200,
        height: 40,
           position: 'right'
    });
    document.getElementById("email").value = "";
    return false
  }

}