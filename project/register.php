<?php  
$con = new  mysqli('localhost','root','','users');
	if(!$con){
		die($con->error);
	}
	$fullname = $_POST['name']; 
	$userName = $_POST['user']; 
	$email = $_POST['email'];
	$password = $_POST['pass'];
	$query = "INSERT INTO project (fullname,userName,email,pass) VALUES ('$fullname','$userName','$email','$password')"; 
	
	if($con->query($query)){ 
		echo "YOUR REGISTRATION IS COMPLETED..."; 
		} 

	 
	else{
		echo $con->error;
	}
}
?>


