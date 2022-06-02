<!--

    Work in Progress | Template by Nicolas Honrade

-->
<?php  

session_start();  
if(!$_SESSION['user'])  
{  
  
    header("Location: ../admin/logout.php");//redirect to the login page to secure the welcome page without login access.  
}  
  
header("Location: ../layout/student.php");
  
?>
