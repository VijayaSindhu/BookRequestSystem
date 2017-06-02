
<?php

	if($_SERVER['REQUEST_METHOD']=='POST'){


		$name = $_POST['username'];
		$email = $_POST['email'];
		$password = $_POST['password'];
		$userlevel = 2;
		
		require_once('dbConnect.php');
		
		$sql = "INSERT INTO users (name,email,password,userlevel) VALUES ('$name','$email','$password',2)";
		
		
		if(mysqli_query($con,$sql)){
			echo "Successfully Registered";
		}else{
			echo "Could not register";

		}
	}else{
echo 'error';
}