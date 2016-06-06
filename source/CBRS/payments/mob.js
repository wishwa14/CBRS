// JavaScript Document



function mobcheck() {
	var mob = document.getElementById("mob").value;
	var pattern = /^[0-9]+$/;
	if (mob.match(pattern)) {
		if (mob.length == 10) {
			if((mob.charAt(0) == 0) && (mob.charAt(1)!= 0) && (mob.charAt(2) != 0)){
					return true;
				}
			else{
				
				alert("Invalid Number");
				
	
    			document.getElementById("mob").value = "";
				return false;
				}
			}
		else{
			alert("Invalid Number");	
			
	
    		document.getElementById("mob").value = "";
			return false;
			}
			
		}
	else {
		
		alert("Please enter only Numbers");	
    	document.getElementById("mob").value = "";
		return false;		
		}
	}
	
