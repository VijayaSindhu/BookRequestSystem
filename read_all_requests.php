<?php
 
 if($_SERVER['REQUEST_METHOD']=='POST'){

 require_once('dbConnect.php');
 
 $sql = "SELECT * FROM ticket";

 $result = mysqli_query($con,$sql);
 
 $jsonData = array();
 while($check = mysqli_fetch_array($result))
 {
 	$jsonData[] = $check;
 }	

 echo json_encode(array("result"=>$jsonData));
}