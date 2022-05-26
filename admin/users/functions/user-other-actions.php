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
        $program = $_POST['program'];
        $email = $_POST['email'];

        if($first_name && $last_name && $role && $department && $program && $email){
            $update_query = $conn->prepare("UPDATE user SET first_name=?, middle_name=?, last_name=?, role=?, department=?, program=?, email=? WHERE school_id=?");
            $update_query->bind_param('sssiiisi', $first_name, $middle_name, $last_name, $role, $department, $program, $email, $school_id);
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

    //delete a user
    // if(isset($_POST['btnDelete'])){ 
    //     $school_id = $_POST['delete_school_id'];

    //     $delete_query  =  "DELETE FROM user WHERE school_id=?";
    //     $dqr = $connections->prepare($delete_query);
    //     $dqr->bind_param("i", $school_id);
    //     $dqr->execute();
    //     $dqr->close();


    //     if($delete_query){
    //     echo "<script language='javascript'>alert('User has been deleted.')</script>";
    //     //  header("Location: ");
    //     }else{
    //     echo "<script language='javascript'>alert('User not deleted.')</script>";
    //     }
    // }

?>