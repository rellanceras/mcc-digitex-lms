<?php

    // session_start();

    //changing password of users

    if (isset($_SESSION['school_id'])){   //pagka-login, sa school_id na naka-session magbe-base

    require_once($_SERVER['DOCUMENT_ROOT'] . '/mcc-digitex-lms/config.php'); 
    
    if(isset($_POST['currentpsw']) && isset($_POST['newpsw']) && isset($_POST['cnewpsw'])){

        function validate($data){
          $data = trim($data);
          $data = stripslashes($data);
          $data = htmlspecialchars($data);
         return $data;
        }

        $currentpsw = validate($_POST['currentpsw']);
        $newpsw = validate($_POST['newpsw']);
        $cnewpsw = validate($_POST['cnewpsw']);
        
        if(empty($currentpsw)){
            header("Location: security?error=Current password is required."); //pupunta ng security.php -- may magdi-display dapat na Alert
            exit();
        } else if(empty($newpsw)){
            header("Location: security?error=New password is required."); //pupunta ng security.php -- may magdi-display dapat na Alert
            exit();
        } else if(empty($cnewpsw)){
            header("Location: security?error=Confirm new password is required."); //pupunta ng security.php -- may magdi-display dapat na Alert
            exit();
        } else if($newpsw != $cnewpsw){
            header("Location: security?error=New password and confirm password did not match."); //pupunta ng security.php -- may magdi-display dapat na Alert
        } else{
            $current_schoolid_loggedin = $_SESSION['school_id'];   

            $sql = "SELECT password FROM user WHERE school_id=?";  
            $stmt = $conn->prepare($sql); 
            $stmt->bind_param("s", $current_schoolid_loggedin);
            $stmt->execute();
            $result = $stmt->get_result();
            $row = $result->fetch_assoc();
            
            //check if old password is correct
            if(password_verify($currentpsw, $row['password'])){ 
                    //check if new password matches retype password
                    if($newpsw == $cnewpsw){
                        //hash the password
                        $passw = password_hash($newpsw, PASSWORD_DEFAULT);     
    
                        //update the new password 
                        $sql = $conn->prepare("UPDATE user SET password = ? WHERE school_id = ?");
                        $sql->bind_param('ss', $passw, $current_schoolid_loggedin);
                        $sql->execute();

                        header("Location: security?success=Password has been changed.");  
                    } 
            } else{
                header("Location: security?error=Current password is incorrect.");
                exit();
            }
        }
    }elseif(!isset($_SESSION['loggedin'])) {
        header('Location: ../../../404.php'); //if user is trying to access page without logging in -- pupunta ng 404.php
        exit;
    } else{
            header("Location: security"); //insert location for change password page -- pupunta ng security.php
    }
}

?>