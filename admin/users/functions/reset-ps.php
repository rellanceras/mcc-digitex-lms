<?php

    require_once($_SERVER['DOCUMENT_ROOT'] . '/mcc-digitex-lms/config.php');
    use PHPMailer\PHPMailer\PHPMailer;
    use PHPMailer\PHPMailer\Exception;

    // require "vendor/autoload.php";
    require '../../../vendor/phpmailer/phpmailer/src/Exception.php';
    require '../../../vendor/phpmailer/phpmailer/src/PHPMailer.php';
    require '../../../vendor/phpmailer/phpmailer/src/SMTP.php';

    //resetting of user's password thru school_id
    if(isset($_POST['school_id'])){

        //check if fields are not empty
        if(!empty($_POST['school_id'])){
            
            $school_id = $_POST['school_id'];
    
            //check if school id exists
            $check_school_id = "SELECT * FROM user WHERE school_id=?";
            $stmt1 = $conn->prepare($check_school_id); 
            $stmt1->bind_param("i", $school_id);
            $stmt1->execute();
            $result1 = $stmt1->get_result();
            
            if(mysqli_num_rows($result1) > 0){
                
                // to check if school_id is existing
                if($row1 = $result1->fetch_assoc()){
                    //if existing --> fetch email matching the school_id input of admin
                    $name_equivalent = "SELECT first_name FROM user WHERE school_id=?"; 
                    $stmt = $conn->prepare($name_equivalent); 
                    $stmt->bind_param("i", $school_id);
                    $stmt->execute();
                    $result = $stmt->get_result(); 
                    $name_equivalent_fetch = $result->fetch_assoc(); 

                    $name = implode("",$name_equivalent_fetch);

                    //if existing --> fetch email matching the school_id input of admin
                    $email_equivalent = "SELECT email FROM user WHERE school_id=?"; 
                    $stmt = $conn->prepare($email_equivalent); 
                    $stmt->bind_param("i", $school_id);
                    $stmt->execute();
                    $result = $stmt->get_result(); 
                    $email_equivalent_fetch = $result->fetch_assoc();   

                    $email = implode("",$email_equivalent_fetch);

                    //if existing --> fetch birthday matching the school_id input of admin
                    $bday_equivalent = "SELECT birthday FROM user WHERE school_id=?"; 
                    $stmt = $conn->prepare($bday_equivalent); 
                    $stmt->bind_param("i", $school_id);
                    $stmt->execute();
                    $result = $stmt->get_result(); 
                    $bday_equivalent_fetch = $result->fetch_assoc();   

                    //strip dash from birthday
                    $bday_equivalent = str_replace("-", "", $bday_equivalent_fetch);

                    //convert $bday_equivalent (the stripped data) from array to string
                    $bday = implode("",$bday_equivalent);
                    
                    function validate($data){
                       $data = trim($data);
                       $data = stripslashes($data);
                       $data = htmlspecialchars($data);
                      return $data;
                    }

                    $new_user_password = validate($bday);
                    
                    //hash the new password
                    $passw = password_hash($new_user_password, PASSWORD_DEFAULT);   

                    //update password query
                     $sql = $conn->prepare("UPDATE user SET password=? WHERE school_id=?");
                     $sql->bind_param('si', $passw, $school_id);
                     $sql->execute();

                    //message if the resetting is successful
                    echo "<script language='javascript'>alert('Reset password successful.')</script>"; 

                        //after saving to db - send email to requestor
                        //sending email to user requesting for reset password
                        
                        $mail = new PHPMailer(); 

                        //SMTP settings
                        $mail->isSMTP();
                        $mail->Host = 'smtp.gmail.com';
                        $mail->SMTPAuth = true;
                        $mail->Username = 'digitex.lms@gmail.com'; //email address of the sender
                        $mail->Password = 'mcc_digitex_lms'; //email password of the sender
                        $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;
                        $mail->Port = 587;
                        
                        //email settings
                        $mail->From = 'digitex.lms@gmail.com';
                        $mail->FromName = 'MCC Digitex LMS';
                        $mail->addAddress($email); //email of the requestor/receiver
                        $mail->isHTML(true);

                        //email content
                        $mail->Subject = 'Request for Password Reset';
                        $mail->Body ="Hi, $name! <br>   
                        Please be advised that your Digitex LMS password has been reset as you requested.  Your reset password is <b>$new_user_password</b>."; //email content
                        // $mail->AltBody = "This is the plain text version of the email content";

                        try {
                            $mail->send();
                            echo 'Message has been sent successfully.';
                        } catch (Exception $e) {
                            echo "Mailer Error: " . $mail->ErrorInfo;
                        }

                }

            }else{
                //alert message if school_id doesn't exist
                 echo "<script language='javascript'>alert('School ID does not exist.')</script>";         
            }
    
        }

    }

?>