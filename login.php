<?php
session_start();
    include('config.php');

    $username = $_POST['username'];
    $password = $_POST['password'];
   
    $username = stripcslashes($username);
    $password = stripcslashes($password);
    $username = mysqli_real_escape_string($conn, $username);
    $password = mysqli_real_escape_string($conn, $password);

    if($_SERVER["REQUEST_METHOD"] == "POST") {

        $sql = "SELECT * FROM user WHERE email = '$username' AND password = '$password'";

        $result = mysqli_query($conn,$sql);


        $row = mysqli_fetch_array($result,MYSQLI_ASSOC);
        $count = mysqli_num_rows($result);
        $account_type = $row["role"];  


        if($count == 1) {
            // initialize session variables
             if($account_type == "1"){
               $_SESSION['user'] = $username;
               date_default_timezone_set("Asia/Singapore");
               $datenow = date("M d, Y");
               $timenow = date("h:i a");
               $sql = "INSERT INTO `user_logins`(  `email`,`date`, `time`) 
                VALUES ('$username','$datenow','$timenow')";
                mysqli_query($conn, $sql);

            header("location: admin/");
        }  else if($account_type == "2"){
               $_SESSION['user'] = $username;
                   header("location: admin/");
                   date_default_timezone_set("Asia/Singapore");
               $datenow = date("M d, Y");
               $timenow = date("h:i a");
               $sql = "INSERT INTO `user_logins`(  `email`,`date`, `time`) 
                VALUES ('$username','$datenow','$timenow')";
                mysqli_query($conn, $sql);
          
        }
        else if($account_type == "3"){
               $_SESSION['user'] = $username;
                   header("location: admin/");
          
        }

            
        }else {
            header("location: index.php");
        }


   }
?>
