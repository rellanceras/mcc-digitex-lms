<?php
//require_once "config.php";
function update_active_year($id){
    require_once "../../../config.php";
    $sql = "UPDATE academic_year SET active=1 WHERE active=0 && id='$id'";
    if($stmt = mysqli_prepare($conn, $sql)){
        // Bind variables to the prepared statement as parameters
        
        // Attempt to execute the prepared statement
        if(mysqli_stmt_execute($stmt)){
            // Records created successfully. Redirect to landing page
            //header("location: academic_year.php");
            $sql = "UPDATE academic_year SET active=0 WHERE active=1 && id!='$id'";
            if($stmt = mysqli_prepare($conn,$sql)){
                if(mysqli_stmt_execute($stmt)){
                    header("location: ../../../layout/admin.php?page=Curriculum");
                    exit();
                }
            }
            //exit();
        } else{
            echo "Oops! Something went wrong. Please try again later.";
        }
    }
}

function create_academic_year($name,$year,$semester){
    require_once "../../../config.php";
        // Validate name
        $input_name = trim($name);
        if(empty($input_name)){
            $name_err = "Please enter a name.";
        } elseif(!filter_var($input_name, FILTER_VALIDATE_REGEXP, array("options"=>array("regexp"=>"/^[0-9a-zA-Z\s\-]+$/")))){
            $name_err = "Please enter a valid name.";
        } else{
            $name = $input_name;
        }
        
        // Validate year
        $input_year = trim($year);
        if(empty($input_year)){
            $year_err = "Please enter an address.";     
        }
        //elseif(!filter_var($input_name, FILTER_VALIDATE_REGEXP, array("options"=>array("regexp"=>"/^[0-9\-]+$/")))){
        //   $year_err = "Invalid Year! Please enter a valid year.";
        //}
        else{
            $year = $input_year;
        }
        
        // Validate semester
        $input_sem = trim($semester);
        if(empty($input_sem)){
            $semester_err = "Please select a semester.";     
        } else{
            $semester = $input_sem;
        }
        
        // Check input errors before inserting in database
        if(empty($name_err) && empty($year_err) && empty($semester_err)){
            // Prepare an insert statement
            $sql = "INSERT INTO academic_year (name, acad_year, semester, active) VALUES (?, ?, ?, 0)"; 
            
            if($stmt = mysqli_prepare($conn, $sql)){
                // Bind variables to the prepared statement as parameters
                mysqli_stmt_bind_param($stmt, "sss", $param_name, $param_year, $param_semester);
                
                // Set parameters
                $param_name = $name;
                $param_year = $year;
                $param_semester = $semester;
                
                // Attempt to execute the prepared statement
                if(mysqli_stmt_execute($stmt)){
                    // Records created successfully. Redirect to landing page
                    header("location: ../../../layout/admin.php?page=Curriculum");
                    exit();
                } else{
                    echo "Oops! Something went wrong. Please try again later.";
                }
            }
            
            // Close statement
            mysqli_stmt_close($stmt);
        }
        
        // Close connection
        //mysqli_close($conn);
    
}

function update_academic_year($id){
    require_once "../../../config.php";
    //temporary sql still waiting for front-end update form modal
    $sql = "UPDATE academic_year SET name=$name, acad_year=$year, semester=$semeter WHERE id='$id'";

    if($stmt = mysqli_prepare($conn, $sql)){
        // Bind variables to the prepared statement as parameters
        
        // Attempt to execute the prepared statement
        if(mysqli_stmt_execute($stmt)){
            // Records created successfully. Redirect to landing page
            header("location: ../../../layout/admin.php?page=Curriculum");
            //exit();
        } else{
            echo "Oops! Something went wrong. Please try again later.";
        }
    }
}

function delete_academic_year($id){
    require_once "../../../config.php";
    //temporary sql will be updated
    //have to update database
    $sql = "DELETE academic_year WHERE id='$id'";
    if($stmt = mysqli_prepare($conn, $sql)){
        // Bind variables to the prepared statement as parameters
        
        // Attempt to execute the prepared statement
        if(mysqli_stmt_execute($stmt)){
            // Records created successfully. Redirect to landing page
            header("location: ../../../layout/admin.php?page=Curriculum");
            exit();
        } else{
            echo "Oops! Something went wrong. Please try again later.";
        }
    }
}

if(isset($_GET['id'])){
    update_active_year($_GET['id']);
}

if(isset($_POST['year'],$_POST['sem'])){
    $yearsem = $_POST['year']." ".$_POST['sem'];
    create_academic_year($yearsem,$_POST['year'],$_POST['sem']);
}
else{
    header("location: academic_year.php");
}
?>