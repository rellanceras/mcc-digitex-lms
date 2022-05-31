<?php 

require_once('../../../config.php'); 

if(isset($_POST["addSub"])){

$subject_code = $_POST['scode'];
$subject_name = $_POST['sname'];
$department = $_POST['dept'];
$description = $_POST['desc'];

$duplicate=mysqli_query($conn,"select * from `subject` where subject_code='$subject_code' && department='$department'");
$count = mysqli_num_rows($duplicate);

if($count == 0){
$sql = "INSERT INTO `subject` (`subject_code`,`subject_name`,`department`,`subject_description`) 
	VALUES ('$subject_code','$subject_name','$department','$description')";

	$query_run = mysqli_query($conn, $sql);
	if($query_run){
       echo "<script> alert('Data Added') 
       location.href='../../../layout/admin.php'</script>";
	} 
}	
	else {
		echo "<script> alert('Data cannot be duplicated!')
		location.href='../../../layout/admin.php'</script>";
		
	}
}

if(isset($_POST["editSub"])){
	
	$id = $_POST['subjectID'];
	$name = $_POST['subjectName'];
	$code = $_POST['subjectCode'];
	$department = $_POST['department'];
	
		
	$query = "UPDATE subject SET subject_name='$name', subject_code='$code', department='$department' WHERE id='$id'";
	
	$query_run = mysqli_query($conn, $query);
		if($query_run){
			echo '<script> alert("Data Updated");
			window.location.href="../../../layout/admin.php"</script>';
		}
		else{
			echo '<script> alert("An error occured");</script>';
		}
}

if(isset($_POST["deleteSub"])){
	$userID = $_POST['deleteID'];
	
	$del_sub = "DELETE FROM subject WHERE id='$userID'";
	$query_run = mysqli_query($conn, $del_sub);
	
		if($query_run){
			echo '<script> alert("Data Deleted");
			window.location.href="../../../layout/admin.php"</script>';
		}
		else{
			echo '<script> alert("An error occured");</script>';
		}
}

?>