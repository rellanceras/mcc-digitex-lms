<?php
    require_once($_SERVER['DOCUMENT_ROOT'] . '/mcc-digitex-lms/config.php'); 
    
    //update a user
    if(isset($_POST['school_id'])){  
        $school_id = $_POST['school_id'];
        $first_name = $_POST['first_name'];
        $middle_name = $_POST['middle_name'];
        $last_name = $_POST['last_name'];   
        $role = $_POST['role'];
        $department = $_POST['department'];
        $email = $_POST['email'];

        if($first_name && $last_name && $role && $department && $email){
            $update_query = $conn->prepare("UPDATE user SET first_name=?, middle_name=?, last_name=?, role=?, department=?, email=? WHERE school_id=?");
            $update_query->bind_param('sssissi', $first_name, $middle_name, $last_name, $role, $department, $email, $school_id);
            $update_query->execute();

            if($update_query){
                echo "<script language='javascript'>alert('User has been updated.')</script>";
                header("location: ../../../layout/admin.php?page=Users");
            }else{
                echo "<script language='javascript'>alert('User not updated.')</script>";
                header("location: ../../../layout/admin.php?page=Users");
            }
        }
        
    }


?>