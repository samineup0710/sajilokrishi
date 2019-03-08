<?php include 'database.php';
	$json = file_get_contents('php://input');
 
	 // decoding the received JSON and store into $obj variable.
	 $obj = json_decode($json,true);
	 
	 // name store into $name.
	$userame = $obj['Userame'];
	 
	// same with $email.
	$email = $obj['Email'];
	 
	// same with $password.
	$password = $obj['Password'];
	
	if($obj['Email']!="")
	{
	
	$result= $mysqli->query("SELECT * FROM login where Email='$email'");
	
	
		if($result->num_rows>0){
			echo json_encode('email already exist');  // alert msg in react native		 		
		}
		else
		{		
		   $add = $mysqli->query("insert into users (Userame,Email,Password) values('$name','$email','$password')");
			
			if($add){
				echo  json_encode('User logedin Successfully'); // alert msg in react native
			}
			else{
			   echo json_encode('check internet connection'); // our query fail 		
			}
				
		}
	}
	
	else{
	  echo json_encode('try again');
	}
	
?>