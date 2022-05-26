<?php
   
   //include("config.php");
 $servername = "localhost";
	$username = "root";
	$password = "";
 	$db="lms3";
	$conn = mysqli_connect($servername, $username, $password,$db);

	$className=$_POST['className'];
	$classDesc=$_POST['classDesc'];
	$classSubject=$_POST['classSubject'];
	$classDept=$_POST['classDept'];

	//$duplicate=mysqli_query($conn,"select * from class where class_name='$className'");
	//$count2 = mysqli_num_rows($duplicate);
	//if($count2==0){
	$sql = "INSERT INTO `class`(  `class_name`,`class_desc`, `subject`, `department`) 
	VALUES ('$className','$classDesc','$classSubject','$classDept')";
	
	if (mysqli_query($conn, $sql)) {
	
	} 
	else {
		echo json_encode(array("statusCode"=>201));		
	}

	//}else{
	//	echo "<script>alert('same message');</script>";
	//}
		
	
	

 ?>
 

