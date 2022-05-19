<?php
    $allowed = array(
        'Curriculum' => '../admin/curriculum/',
        'Class' => '../admin/class/view_class',
        'AddClass' => '../admin/class/add_class',
        'Users' => '../admin/users/view_users',
        'AddUsers' => '../admin/users/add_users'
    );
    $subPages = array(
        'AcademicYear' => '../admin/curriculum/view_acadyear',
        'Subject' => '../admin/curriculum/view_subject',
        'Department' => '../admin/curriculum/view_department',
        'Program' => '../admin/curriculum/view_program',
    );

    $page = ( isset($_GET['page']) ) ? $_GET['page'] : ' ';
    $sub = ( isset($_GET['sub']) ) ? $_GET['sub'] : ' ';
    if ( array_key_exists($page, $allowed) ){
        if ( $page == "Curriculum" && array_key_exists($sub, $subPages) ) {
            include($subPages[$sub] . ".php");
            return;
        }
        
        include($allowed[$page] . ".php");
       
    } else {
        include("404.php");
    }
?>