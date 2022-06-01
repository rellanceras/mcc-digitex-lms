<?php
session_start();
    include('config.php');

    $username = $_POST['username'];
    $password = $_POST['password'];
    $erruser = $errpass = "";
   
    $username = stripcslashes($username);
    $password = stripcslashes($password);
    $username = mysqli_real_escape_string($conn, $username);
    $password = mysqli_real_escape_string($conn, $password);

    if($_SERVER["REQUEST_METHOD"] == "POST") {

        $sql = "SELECT * FROM user WHERE email = '$username'";

        $result = mysqli_query($conn,$sql);
        $row = mysqli_fetch_array($result,MYSQLI_ASSOC);
        $count = mysqli_num_rows($result);

        $verify = password_verify($password, $row["password"]);

        $id = $row["id"];
        $sid = $row["school_id"];
        $fname = $row["first_name"];
        $lname = $row["last_name"];
        $account_type = $row["role"];
        
        $wname = $fname . " " . $lname;

        //check user
        if($count == 1) {
            //test password
            if($verify==true){
            // initialize session variables
                if($account_type == "1"){
                    $_SESSION['sid'] = $sid;
                    $_SESSION['role'] = $account_type;
                    date_default_timezone_set("Asia/Singapore");
                    $datenow = date("M d, Y");
                    $timenow = date("h:i a");
                    $sql = "INSERT INTO `user_logins`(  `email`,`date`, `time`) 
                        VALUES ('$username','$datenow','$timenow')";
                        mysqli_query($conn, $sql);
                    header("location: layout/admin.php");
                    echo "welcome admin";
                }else if($account_type == "2"){
                    $_SESSION['sid'] = $sid;
                    $_SESSION['role'] = $account_type;
                    date_default_timezone_set("Asia/Singapore");
                    $datenow = date("M d, Y");
                    $timenow = date("h:i a");
                    echo "welcome teacher";
                    //$sql = "INSERT INTO `user_logins`(  `email`,`date`, `time`) 
                    //    VALUES ('$username','$datenow','$timenow')";
                    //    mysqli_query($conn, $sql);
                    header("location: layout/instructor.php");
                }else if($account_type == "3"){
                    $_SESSION['sid'] = $sid;
                    $_SESSION['role'] = $account_type;
                    echo "welcome student";
                    header("location: layout/student.php");
                }
            }else{
                $_SESSION['errpass'] = "Invalid Password";
                header("location: index.php");
            }
            
        }else {
            $_SESSION['erruser'] = "Invalid Email";
            header("location: index.php");
        }


   }
?>
