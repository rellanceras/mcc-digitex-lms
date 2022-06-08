<?php 

include('admin-header.php'); 
include('../config.php'); 

	
if(isset($_POST["data"])){
	
	$id = $_POST['school_id'];
	
	
	$first_name = $_POST['first_name'];
	$last_name = $_POST['last_name'];
	$email = $_POST['email'];
	//$contact = $_POST['contact'];
	
		
	$query = "UPDATE user SET first_name='$first_name', last_name='$last_name', email='$email' WHERE school_id='$_SESSION[sid]'";
	
	$query_run = mysqli_query($conn, $query);
		if($query_run){
			echo '<script> alert("Data Updated");
			window.location.href="../layout/admin.php"</script>';
		}
		else{
			echo '<script> alert("Data Not Updated");</script>';
		}
}
?>