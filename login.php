<?php
 
 if($_SERVER['REQUEST_METHOD']=='POST'){
 $email = $_POST['username'];
 $password = $_POST['password'];
 #$uid  = $_GET['uid']; 		

 
 require_once('dbConnect.php');
 
 $sql = "SELECT * FROM users WHERE email = '$email' AND password='$password'";
 
 $result = mysqli_query($con,$sql);
 
 $check = mysqli_fetch_array($result);
 $res = array();
		
		array_push($res,		
			array(	"uid"=>$check['uid']
			)			
		);

		

 if(isset($check)){
 	#echo 'success';
 	#echo json_encode(array("result"=>$res));

 	echo json_encode(array("result"=>$check));



 #	array_push($result,array("uid"=>$res['uid']));
 #	echo json_encode(array("result"=>$result));
}
 else{
 	 echo 'failure';
 }

 #mysqli_close($con);
}