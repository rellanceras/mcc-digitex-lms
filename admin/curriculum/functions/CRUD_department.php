<?php 

require_once($_SERVER['DOCUMENT_ROOT'] . '/mcc-digitex-lms/config.php'); 

if(isset($_POST["addDept"])){

$department_name = $_POST['dept'];
$description = $_POST['desc'];

$duplicate=mysqli_query($conn,"select * from `department` where dept_name='$department_name'");
$count = mysqli_num_rows($duplicate);

if($count == 0){
$sql = "INSERT INTO `department` (`dept_name`,  `abbreviation`) 
	VALUES ('$department_name','$description')";

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

if(isset($_POST["editDepartment"])){
	
	$id = $_POST['departmentID'];
	$year = $_POST['department_name'];
	$semester = $_POST['department_description'];
	
		
	$query = "UPDATE department SET  dept_name='$year', abbreviation ='$semester' WHERE id='$id'";
	
	$query_run = mysqli_query($conn, $query);
		if($query_run){
			echo '<script> alert("Data Updated");
			window.location.href="../../../layout/admin.php"</script>';
		}
		else{
			echo '<script> alert("An error occured");</script>';
		}
}

if(isset($_POST["deleteDepartment"])){
	$userID = $_POST['deleteID'];
	
	$del_dept = "DELETE FROM department WHERE id='$userID'";
	$query_run = mysqli_query($conn, $del_dept);
	
		if($query_run){
			echo '<script> alert("Data Deleted");
			window.location.href="../../../layout/admin.php"</script>';
		}
		else{
			echo '<script> alert("An error occured");</script>';
		}
}

?>