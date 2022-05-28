<?php  

session_start();  
if(!$_SESSION['user'])  
{  
  
    header("Location: 404.php");//redirect to the login page to secure the welcome page without login access.  
}  
  

  
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title></title>
    <!-- Website Icon -->
    <link rel="icon" href="../resources/img/logo-sm-trans.png">

    <!-- Bootstrap Style/Icons -->
        <!-- Bootstrap CSS -->
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
        <!-- Bootstrap Icons -->
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.1/font/bootstrap-icons.css"/>
        

    <!-- Google Font/Icons -->
        <!-- Inter Font Style -->
        <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Inter"/>
        <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons"/>

    <!-- PLUGINS -->
        <!-- Calendar -->
        <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/evo-calendar@1.1.2/evo-calendar/css/evo-calendar.min.css"/>
        <link rel="stylesheet" type="text/css" href="../resources/css/evo-calendar.css" />
        <link rel="stylesheet" type="text/css" href="../resources/css/evo-calendar.royal-navy.css" />
        <link rel="stylesheet" href="../resources/css/calendarstyle.css" />
        <link rel="stylesheet" href="../resources/css/theme.css" />

        <!-- Date Range Picker -->
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/daterangepicker/daterangepicker.css" />
        <!-- Datatables -->
        <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.11.5/css/jquery.dataTables.css">
        <link rel="stylesheet" href="https://cdn.datatables.net/1.11.5/css/jquery.dataTables.min.css">
        <link rel="stylesheet" href="https://cdn.datatables.net/buttons/2.2.2/css/buttons.dataTables.min.css">
        <link rel="stylesheet" href="https://cdn.datatables.net/rowreorder/1.2.8/css/rowReorder.dataTables.min.css">
        <link rel="stylesheet" href="https://cdn.datatables.net/responsive/2.2.9/css/responsive.dataTables.min.css">
        <link rel="stylesheet" href="https://cdn.datatables.net/select/1.3.4/css/select.dataTables.min.css">
        <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/select/1.4.0/css/select.dataTables.min.css"/>
        <!-- Smart Wizard -->
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/smartwizard@5/dist/css/smart_wizard_all.min.css" type="text/css" />
        <!-- Year Picker -->
        <link rel='stylesheet' href='../resources/css/yearpicker.css' />
        


    <!-- Custom CSS -->
    <link rel="stylesheet" href="../resources/css/style.css"/>
    <link rel="stylesheet" id="themeCSS"/>

    
</head>