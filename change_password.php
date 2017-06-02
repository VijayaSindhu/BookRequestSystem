<?php

	if($_SERVER['REQUEST_METHOD']=='POST'){

		$uid = $_POST['uid'];
		$curr = $_POST['curr_pass'];
		$new = $_POST['new_pass'];
		$value = $_POST['value'];


 require_once('dbConnect.php');
 
 $sql = "SELECT * FROM users WHERE uid = '$uid' AND password='$curr'";
 
 $result = mysqli_query($con,$sql);
 
 $check = mysqli_fetch_array($result);
 
 if(isset($check)){
 	$sql = "UPDATE users SET password = '$new' WHERE uid = '$uid' ";
 	if(mysqli_query($con,$sql)){
			echo "Password Updated";
		}else{
			echo "Could not Order!";
		}


 #	array_push($result,array("uid"=>$res['uid']));
 #	echo json_encode(array("result"=>$result));
}
 else{
 echo 'failure';
 }

 #mysqli_close($con);
}