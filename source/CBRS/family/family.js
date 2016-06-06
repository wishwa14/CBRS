
function mobcheck() {
	var mob = document.getElementById("mobile").value;
	var pattern = /^[0-9]+$/;
	if (mob.match(pattern)) {
		if (mob.length == 10) {
			if((mob.charAt(0) == 0) && (mob.charAt(1)!= 0) && (mob.charAt(2) != 0)){
					return true;
				}
			else{
				
				alert("Invalid Number");
				
	
    			document.getElementById("mobile").value = "";
				return false;
				}
			}
		else{
			
			alert("Invalid Number");
			
			
	
    		document.getElementById("mobile").value = "";
			return false;
			}
			
		}
	else {
		
		alert("Please enter only Numbers");
			
			
    		document.getElementById("mobile").value = "";
			return false;		
		}
	}
	
function validateName1() { 
	
//validate Name

  var name = document.getElementById("firstname").value;
  var letters = /^[a-zA-Z\s]*$/;
  var n = name.length;


 if( name.match(letters) && (n>8)){
    return true;
  
  }
else{
	alert("Invalid Name");
	
  	
    document.getElementById("firstname").value = "";
    return false;		
  }
}

function validateName() { 
	
//validate Name

  var name = document.getElementById("lastname").value;
  var letters = /^[a-zA-Z\s]*$/;
  var n = name.length;


 if( name.match(letters) && (n>8)){
    return true;
  
  }
else{
	alert("Invalid Name");
	
  	
    document.getElementById("lastname").value = "";
    return false;		
  }
}

function validatestatus() { 
	
//validate Name

  var status = document.getElementById("status").value;
  var letters = /^[a-zA-Z\s]*$/;
  var n = status.length;


 if( status.match(letters) && (n>8)){
    return true;
  
  }
else{
	alert("Invalid status");
	
  	
    document.getElementById("status").value = "";
    return false;		
  }
}

function validatestatus() { 
	
//validate Name

  var status = document.getElementById("status").value;
  var letters = /^[a-zA-Z\s]*$/;
  var n = status.length;


 if( status.match(letters) && (n>4)){
    return true;
  
  }
else{
	alert("Invalid status");
	
  	
    document.getElementById("status").value = "";
    return false;		
  }
}

function validatedesignation() { 
	
//validate Name

  var designation = document.getElementById("work").value;
  var letters = /^[a-zA-Z\s]*$/;
  var n = designation.length;


 if( designation.match(letters) && (n>4)){
    return true;
  
  }
else{
	alert("Invalid status");
	
  	
    document.getElementById("work").value = "";
    return false;		
  }
}

function validatereligion() { 
	
//validate Name

  var religion = document.getElementById("religion").value;
  var letters = /^[a-zA-Z\s]*$/;
  var n = religion.length;


 if( religion.match(letters) && (n>4)){
    return true;
  
  }
else{
	alert("Invalid Religion");
	
  	
    document.getElementById("religion").value = "";
    return false;		
  }
}

