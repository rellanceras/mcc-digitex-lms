<!--

    Work in Progress | Template by Nicolas Honrade

-->
<?php  

session_start();  
if(!$_SESSION['user'])  
{  
  
    header("Location: ../admin/404.php");//redirect to the login page to secure the welcome page without login access.  
}  
  

  
?>
