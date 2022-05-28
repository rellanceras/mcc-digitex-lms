<?php

    // session_start();

    //changing password of users

    if (isset($_SESSION['school_id'])){   

    require_once($_SERVER['DOCUMENT_ROOT'] . '/mcc-digitex-lms/config.php'); //still in localhost
    
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
            header("Location: ?error=Current password is required."); //location to be inserted once UI is done
            exit();
        } else if(empty($newpsw)){
            header("Location: ?error=New password is required."); //location to be inserted once UI is done
            exit();
        } else if(empty($cnewpsw)){
            header("Location: ?error=Confirm new password is required."); //location to be inserted once UI is done
            exit();
        } else if($newpsw != $cnewpsw){
            header("Location: ?error=New password and confirm password did not match."); //location to be inserted once UI is done
            exit();
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

                        header("Location: change-password?success=Password has been changed.");  
                    } 
            } else{
                header("Location: change-password?error=Current password is incorrect.");
                exit();
            }
        }
    }elseif(!isset($_SESSION['loggedin'])) {
        header('Location: ../page_403');    //if user is trying to access page without logging in
        exit;
    } else{
            header("Location: "); //insert location for change password page
    }
}

?>