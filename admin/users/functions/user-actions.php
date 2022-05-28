<?php 

  require_once($_SERVER['DOCUMENT_ROOT'] . '/mcc-digitex-lms/config.php'); 
  // require_once($_SERVER['DOCUMENT_ROOT'] . '/digitex-lms-girang/admin/users/user-other-actions.php'); 

  $id = $school_id = $first_name = $middle_name = $last_name = $birthday = $address = $role = $department = $email = "";

  //retrieve all users 
  function getAllUsers(){
    global $conn;
    $res = $conn->prepare("SELECT id, school_id, last_name, first_name, middle_name, birthday, address, role, department, email FROM user"); 
    $res->execute();
    $result = $res->get_result();
  
    if($result){
      if(mysqli_num_rows($result) > 0){
        while($row = $result->fetch_assoc()){
          echo "<tr>
              <td class='d-none'>".$row["id"]. "</td>
              <td>".$row["school_id"]."</td>
              <td>".$row["first_name"]."</td> 
              <td>".$row["middle_name"]."</td>
              <td>".$row["last_name"]."</td>
              <td class='d-none'>".$row["birthday"]. "</td>
              <td class='d-none'>".$row["address"]. "</td>
              <td>".$row["role"]."</td>
              <td>".$row["department"]."</td>
              <td>".$row["email"]."</td>
              <td><button type='button' class='btn btn-primary btnShowEditModal' data-bs-toggle='modal' data-bs-target='#myModal'><i class='bi bi-pencil-square icon-white'></i> Edit</button></td>
            </tr>";
        }
      } 
    } else{
          echo "No record found."; 
      }  
  }
  //line 19 <td class='d-none'>".$row["id"]. "</td>

  // register new user
  if(isset($_POST['last_name']) && isset($_POST['first_name']) && isset($_POST['middle_name']) && isset($_POST['birthday']) && isset($_POST['address']) && isset($_POST['school_id']) && isset($_POST['email']) && isset($_POST['password']) && isset($_POST['role']) && isset($_POST['department'])){

    //check if fields are not empty
    if(!empty($_POST['last_name']) && !empty($_POST['first_name']) && !empty($_POST['birthday']) && !empty($_POST['address']) && !empty($_POST['school_id']) && !empty($_POST['email']) && !empty($_POST['password']) && !empty($_POST['role']) && !empty($_POST['department'])){
        
        $last_name = $_POST['last_name'];
        $first_name = $_POST['first_name'];
        $middle_name = $_POST['middle_name'];
        $birthday = $_POST['birthday'];
        $address = $_POST['address'];
        $school_id = $_POST['school_id'];
        $role = $_POST['role'];
        $department = $_POST['department'];
        $email = $_POST['email'];
        $password = $_POST['password'];
        
        //check if school id or email already exists
        $check_school_id = "SELECT * FROM user WHERE school_id=?";
        $stmt1 = $conn->prepare($check_school_id); 
        $stmt1->bind_param("i", $school_id);
        $stmt1->execute();
        $result1 = $stmt1->get_result();

        $check_email = "SELECT * FROM user WHERE email=?";
        $stmt2 = $conn->prepare($check_email); 
        $stmt2->bind_param("s", $email);
        $stmt2->execute();
        $result2 = $stmt2->get_result();
        
        if(mysqli_num_rows($result1) > 0){
          if($row1 = $result1->fetch_assoc()){
            echo "<script language='javascript'>alert('School ID already exists.')</script>"; 
          }              
        }else if(mysqli_num_rows($result2) > 0){
          if($row2 = $result2->fetch_assoc()){
            echo "<script language='javascript'>alert('Email already exists.')</script>"; 
          }
        }else{
            //password hashing
            $hashed_password = password_hash($password, PASSWORD_DEFAULT);

            //insert user to db if employee id and username have no match
            $statement = $conn->prepare("INSERT INTO user (last_name, first_name, middle_name, birthday, address, school_id, role, department, email, password) VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?)");
            $statement->bind_param("ssssssssss", $last_name, $first_name, $middle_name, $birthday, $address, $school_id, $role, $department, $email, $hashed_password);
            $result = $statement->execute();

            if($result){
              echo "<script language='javascript'>alert('Data has been saved.')</script>"; 
              header("location: ../../../layout/admin.php?page=Users");
              // header("location: ?page=Users");
              $resullt->close();
            } else{
              echo "<script language='javascript'>alert('Data has not been saved.')</script>"; 
              header("location: ../../../layout/admin.php?page=AddUsers");
              // header("location: ?page=AddUsers");

            }
                      
          }

      }
  }

?>
