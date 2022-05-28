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
        $id = $row["id"];
        $sid = $row["school_id"];
        $fname = $row["first_name"];
        $lname = $row["last_name"];
        $account_type = $row["role"];
        
        $wname = $fname . " " . $lname;


        if($count == 1) {
            // initialize session variables
             if($account_type == "1"){
               $_SESSION['user'] = $wname;
               $_SESSION['sid'] = $sid;
            header("location: layout/admin.php");
        }  else if($account_type == "2"){
               $_SESSION['user'] = $wname;
               $_SESSION['sid'] = $sid;
                   header("location: layout/admin.php");
          
        }
        else if($account_type == "3"){
               $_SESSION['user'] = $wname;
               $_SESSION['sid'] = $sid;
                   header("location: layout/admin.php");
          
        }

            
        }else {
            header("location: index.php");
        }


   }
?>
