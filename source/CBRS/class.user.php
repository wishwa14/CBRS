<?php
   include "db_config.php";
   
   	class User{
   
   		public $db;
   
   		public function __construct(){
   			$this->db = new mysqli(DB_SERVER, DB_USERNAME, DB_PASSWORD, DB_DATABASE);
   
   			if(mysqli_connect_errno()) {
   				header('Location: sql_error.php');
   			        exit;
   			}
   		}
   
   		
   
   		/*** for login process ***/
   		public function check_login($emailusername, $password){
   
           	$password = md5($password);
   			$sql2="SELECT uid from users1 WHERE uemail='$emailusername' or uname='$emailusername' and upass='$password'";
   
   			//checking if the username is available in the table
           	$result = mysqli_query($this->db,$sql2);
           	$user_data = mysqli_fetch_array($result);
           	$count_row = $result->num_rows;
   
   	        if ($count_row == 1) {
   	            // this login var will use for the session thing
   	            $_SESSION['login'] = true;
   	            $_SESSION['uid'] = $user_data['uid'];
   	            return true;
   	        }
   	        else{
   			    return false;
   			}
       	}
   
       	/*** for showing the username or fullname ***/
       	public function get_fullname($uid){
       		$sql3="SELECT fullname FROM users1 WHERE uid = $uid";
   	        $result = mysqli_query($this->db,$sql3);
   	        $user_data = mysqli_fetch_array($result);
   	        return $user_data['fullname'];
       	}
   
       	/*** starting the session ***/
   	    public function get_session(){
   	        return $_SESSION['login'];
   	    }
   
   	    public function user_logout() {
   	        $_SESSION['login'] = FALSE;
   	        session_destroy();
   	    }
   
   	}
   	
   
   ?>