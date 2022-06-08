<?php 
	// require_once('..layout/admin-header.php');
	session_start();  
	if(!$_SESSION['user'])  
	{  
	  
		header("Location: /mcc-digitex-lms/404.php");//redirect to the login page to secure the welcome page without login access.  
	}  	
	
	include('../../config.php');
    $sid = $_SESSION['sid'];
    $sql = "SELECT * FROM user, user_roles WHERE school_id = '$sid'";

    $result = mysqli_query($conn,$sql);
    $row = mysqli_fetch_array($result,MYSQLI_ASSOC);

    $wname = $row['first_name'] . " " . $row['last_name'];
	$role = $row['role'];
	$user_role = $role;

?>

<form action="CRUD_general.php" method="POST">
    <div class="row limited mx-auto">
        <div class="col-md-6 mt-2">
            <h4 class="mb-3 fw-bold"> Display Profile Information </h4>
            <hr/>
            <div class="container">
                <div class="avatar-upload">
                    <div class="avatar-edit">
                        <input type='file' id="imageUpload" accept=".png, .jpg, .jpeg" />
                        <label for="imageUpload"></label>
                    </div>
                    <div class="avatar-preview">
                        <div id="imagePreview"></div>
                    </div>
                </div>
            </div>    
            <div class="mb-3">
                <label for="className" class="form-label fw-bold">Nickname:</label>
                <input type="text" class="form-control block-sm" required="required" name="nickname" value="<?php echo $wname; ?>">
            </div>
            <div class="mb-3">
                <label for="className" class="form-label fw-bold">Bio:</label>
                <input type="text" class="form-control block-sm" >
            </div>
        </div>
        <hr class="d-md-none my-3"/>
        <div class="col-md-6 mt-2">
            <h4 class="mb-3 fw-bold"> Personal Information </h4>
            <hr/>
            <div class="mb-3">
                <label for="className" class="form-label fw-bold">First Name:</label>
                <input type="text" class="form-control block-sm" required="required" name="first_name" value="<?php echo $row["first_name"]; ?>">
            </div>
            <div class="mb-3">
                <label for="className" class="form-label fw-bold">Last Name:</label>
                <input type="text" class="form-control block-sm" required="required" name="last_name" value="<?php echo $row["last_name"]; ?>">
            </div>
            <div class="mb-3">
                <label for="className" class="form-label fw-bold">Email Address:</label>
                <input type="text" class="form-control block-sm" required="required" name="email" value="<?php echo $row["email"]; ?>">
            </div>
            <div class="mb-3">
                <label for="className" class="form-label fw-bold">Contact:</label>
                <input type="text" class="form-control block-sm"  name="contact" value="">
            </div>
            <div class="mb-3">
                <label for="className" class="form-label fw-bold">Role:</label>
                <input type="text" class="form-control block-sm" disabled name="role" value="<?php echo $user_role ?>">
            </div>
            <div class="mb-3">
                <label for="className" class="form-label fw-bold">Department:</label>
                <input type="text" class="form-control block-sm" disabled name="department" value="<?php echo $row["department"]; ?>">
            </div>
            <div class="mb-3">
                <label for="className" class="form-label fw-bold">Personnel Number:</label>
                <input type="text" class="form-control block-sm" readonly name="school_id" value="<?php echo $row["school_id"]; ?>">
            </div>
        </div>
    </div>
    <hr/>
    <div class="d-flex justify-content-center">
        <button type="submit" class="btn btn-success w-25" name="data">Submit</button>
    </div>
</form>
