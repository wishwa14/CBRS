// JavaScript Document

function validateName() { 
	
//validate Name

  var name = document.getElementById("name").value;
  var letters = /^[a-zA-Z\s]*$/;
  var n = name.length;


 if( name.match(letters) && (n>8)){
    return true;
  
  }
else{
  	notif({
  		type : 'warning',
  		msg  : 'Invalid Name',
  		bgcolor: "#F80000 ",
  		width: 200,
        height: 40
  	});
    document.getElementById("name").value = "";
    return false;		
  }
}


function nsbIDcheck() {

//validate nsb_id	

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

function NICcheck() {
	
//validate nic_no

	var nic = document.getElementById("nic").value;
	var pattern = /^[0-9|V|v]+$/;
	if (nic.match(pattern)) {
		if (nic.length == 10) {
			if ((nic.indexOf("v") != 9) && (nic.indexOf("V") != 9) ){
				notif({
			  		type : 'warning',
			  		msg  : 'Invalid NIC Number',
			  		bgcolor: "#F80000 ",
			  		width: 200,
			        height: 40
			  	});
				
    			document.getElementById("nic").value = "";
				return false;
			}
			
			else {
			
				return true;
			}
		}
		else {
				notif({
			  		type : 'warning',
			  		msg  : 'Invalid NIC Number',
			  		bgcolor: "#F80000 ",
			  		width: 200,
			        height: 40
			  	});
				
    			document.getElementById("nic").value = "";
				return false;
			
		}
	}
	else {
		notif({
			  		type : 'warning',
			  		msg  : 'Invalid NIC Number',
			  		bgcolor: "#F80000 ",
			  		width: 200,
			        height: 40
			  	});
	
    	document.getElementById("nic").value = "";
		return false;
		
	}
}


function branch_check() {

//validate branch

	var branch = document.getElementById("branch").value;
	if (branch.length <= 20) {
		
		var pattern = /^[a-zA-Z|\s]+$/;
		if (!branch.match(pattern)){
				notif({
			  		type : 'warning',
			  		msg  : 'Invalid Branch Name',
			  		bgcolor: "#F80000 ",
			  		width: 200,
			        height: 40
			  	});
    			document.getElementById("branch").value = "";
				return false;
		}
		else {
			return true;
		}
	
	}
	else {
		notif({
			  		type : 'warning',
			  		msg  : 'Maximum number of characters is 20',
			  		bgcolor: "#F80000 ",
			  		width: 300,
			        height: 40
			  	});
    	document.getElementById("branch").value = "";
		return false;

	}

}

function no_of_people_check() {

//validate number of people
	
	var no_of_people = document.getElementById("no_of_people").value;
	var pattern = /^[0-9]+$/;
	if (no_of_people.match(pattern)){
		
		if ((no_of_people <= 10) && (no_of_people != 0)) {
			return true;
		}
		
		else if ((no_of_people <= 10) && (no_of_people == 0)){
					notif({
			  		type : 'warning',
			  		msg  : 'Invalid No of People',
			  		bgcolor: "#F80000 ",
			  		width: 200,
			        height: 40
			  	});
			
    		document.getElementById("no_of_people").value = "";
			return false;
			
			
		}

		else {
					notif({
			  		type : 'warning',
			  		msg  : 'Too many people',
			  		bgcolor: "#F80000 ",
			  		width: 200,
			        height: 40
			  	});
			
    		document.getElementById("no_of_people").value = "";
			return false;
			
		}
	}
	else {
		notif({
			  		type : 'warning',
			  		msg  : 'Invalid',
			  		bgcolor: "#F80000 ",
			  		width: 300,
			        height: 40
			  	});
	
    	document.getElementById("no_of_people").value = "";
		return false;
	}
	
}


function mobcheck() {
	var mob = document.getElementById("contact_no").value;
	var pattern = /^[0-9]+$/;
	if (mob.match(pattern)) {
		if (mob.length == 10) {
			if((mob.charAt(0) == 0) && (mob.charAt(1)!= 0) && (mob.charAt(2) != 0)){
					return true;
				}
			else{
				notif({
			  		type : 'warning',
			  		msg  : 'Invalid Number',
			  		bgcolor: "#F80000 ",
			  		width: 200,
			        height: 40
			  	});
	
    			document.getElementById("contact_no").value = "";
				return false;
				}
			}
		else{
			notif({
			  		type : 'warning',
			  		msg  : 'Invalid Number',
			  		bgcolor: "#F80000 ",
			  		width: 200,
			        height: 40
			  	});
	
    		document.getElementById("contact_no").value = "";
			return false;
			}
			
		}
	else {
			notif({
			  		type : 'warning',
			  		msg  : 'Please enter only Numbers',
			  		bgcolor: "#F80000 ",
			  		width: 300,
			        height: 40
			  	});
			
    		document.getElementById("contact_no").value = "";
			return false;		
		}
	}
	
function date_check1(){
	

//validate departure date	

		var arrival= document.getElementById("a_date").value;
		var depature= document.getElementById("d_date").value;
		date1 = new Date(depature);
		date2 = new Date(arrival);
		d1 = date1.getTime();
		d2 = date2.getTime();
		var timeDiff = (d1 - d2);
		var diffDays = Math.ceil(timeDiff / (1000 * 3600 * 24)); 
		
	
		
		if(diffDays <1){
				notif({
			  		type : 'warning',
			  		msg  : 'Invalid Depature Date',
			  		bgcolor: "#F80000 ",
			  		width: 300,
			        height: 40
			  	});
    		document.getElementById("d_date").value = "";
			return false;
		}
		
		else if(diffDays>2){
				notif({
			  		type : 'warning',
			  		msg  : 'You can only stay maximum of 3 Days',
			  		bgcolor: "#F80000 ",
			  		width: 300,
			        height: 40
			  	});
		
    		document.getElementById("d_date").value = "";
			return false;
		}
		
		else{
		
			return true;
		}
}

function date_check(){
	
	
//validate arrival date

		var today=new Date();
		var arrival= document.getElementById("a_date").value;
		
		
		
	
		date = new Date(arrival);
	
		d1 = today.getTime();
		
		d2 = date.getTime();
		
		
		var timeDiff = (d2 - d1);
		var diffDays = Math.ceil(timeDiff / (1000 * 3600 * 24)); 
		
		
		
		
		if(diffDays>=14){
			return true;
			
		}
		else{
				notif({
			  		type : 'warning',
			  		msg  : 'You should reserve after 14 days from today',
			  		bgcolor: "#F80000 ",
			  		width: 300,
			        height: 40
			  	});
		
    		document.getElementById("a_date").value = "";
			return false;
		
			
		}
}



function ValidateEmail(){
	
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