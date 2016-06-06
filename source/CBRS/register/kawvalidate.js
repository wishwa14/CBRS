function nsbIDcheck() {

//validate nsbID

	var nsb_id = document.getElementById("nsb_id").value;
	var pattern = /^[0-9]+$/;
	if (nsb_id.match(pattern)){
		
		if (nsb_id.length == 4) {
			return true;
		}
		else {
			notif({
	  		type : 'warning',
	  		msg  : 'Invalid ID',
	  		bgcolor: "#F80000 ",
	  		width: 200,
	        height: 40
  	});
    		document.getElementById("nsb_id").value = "";
			return false;
		}
	}
	else {
		notif({
  		type : 'warning',
  		msg  : 'Invalid ID',
  		bgcolor: "#F80000 ",
  		width: 200,
        height: 40
  	});
    	document.getElementById("nsb_id").value = "";
		return false;
	}
		
}


function validateName() {
	
//validate name

  var name = document.getElementById("name").value;
  var letters = /^[a-zA-Z\s]*$/;
  var n = name.length;


 if( name.match(letters) && (n>=8) ){
    return true;
  
  }
else if(n<8 && name.match(letters)){
  	notif({
  		type : 'warning',
  		msg  : 'Max length of this field is 8',
  		bgcolor: "#F80000 ",
  		width: 200,
        height: 40
  	});
    document.getElementById("name").value = "";
    return false;		
  }
  else{
  	notif({
  		type : 'warning',
  		msg  : 'Invalid name',
  		bgcolor: "#F80000 ",
  		width: 200,
        height: 40
  	});
    document.getElementById("name").value = "";
    return false
  }
}


function validateName1() {
	
//validate username

  var name = document.getElementById("uname").value;
  var letters = /^[a-zA-Z\s]*$/;
  var n = name.length;


 if( name.match(letters) && (n>=3) ){
    return true;
  
  }
else if(n<3 && name.match(letters)){
  	notif({
  		type : 'warning',
  		msg  : 'Minimum length of this field is 3',
  		bgcolor: "#F80000 ",
  		width: 250,
        height: 40
  	});
    document.getElementById("uname").value = "";
    return false;		
  }
  else{
  	notif({
  		type : 'warning',
  		msg  : 'Please enter only letters',
  		bgcolor: "#F80000 ",
  		width: 200,
        height: 40
  	});
    document.getElementById("uname").value = "";
    return false
  }
}

function ValidateEmail() 
{
	
//validate email

	var $email = $('form input[name="email'); //change form to id or containment selector
	var re = /^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/;
	if ($email.val() == '' || !re.test($email.val()))
	{
	   notif({
  		type : 'warning',
  		msg  : 'Invalid Email address',
  		bgcolor: "#F80000 ",
  		width: 200,
        height: 40
  	});
    document.getElementById("email").value = "";
    return false
	}

}

function CheckPasswordStrength() {
	
//checking the password strength
        var password = document.getElementById("password").value;
 
        //TextBox left blank.
        if (password.length < 6) {
        	notif({
		       	type : 'warning',
		  		msg  : 'password must contain at least 6 characters',
		  		bgcolor: "#F80000 ",
		  		width: 350,
		        height: 40
  			});
        	document.getElementById("password").value = "";
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
            if (new RegExp(regex[i]).test(document.getElementById("password").value)) {
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
		        multiline: 2
  			});
        	document.getElementById("password").value = "";
            return false;        	

        }
        else if(strength=="Strong"){
        	notif({
				bgcolor : "#00FFFF",
		  		msg  : 'A Strong password',
		  		width: 200,
		        height:40
  			});
        
            return true; 
       
        	}
    	}

    }


    function confirmpwd(){
		
//Checking whether the password are matching

    	var password = document.getElementById("password").value;
    	var cnf_password = document.getElementById("password1").value;
    	if (password==cnf_password){
			notif({
		       	
		  		msg  : 'Passwords Matches',
		  		bgcolor : "#00FFFF",
		  		width: 200,
		        height: 40,
		        multiline: 0
  			});
    		return true;
    	}
    	else{
    		notif({
		       	type : 'warning',
		  		msg  : 'Passwords Do not match',
		  		bgcolor: "#F80000 ",
		  		width: 200,
		        height: 40,
		        multiline: 0
  			});
        	document.getElementById("password").value = "";
            return false;
    	}
    }






