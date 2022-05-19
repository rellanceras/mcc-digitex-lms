<!--

    Work in Progress | Template by Nicolas Honrade

-->

<?php
      require_once($_SERVER['DOCUMENT_ROOT'] . '/mcc-digitex-lms/admin/users/functions/user-actions.php'); 
      require_once($_SERVER['DOCUMENT_ROOT'] . '/mcc-digitex-lms/admin/users/functions/user-other-actions.php'); 
?>

<!-- Main Content -->
<div class="d-flex flex-column flex-grow-1 gap-3 main-content">
    <!-- Page Header -->
    <div class="block" id="page-header">
        <div class="px-4 pt-4">
            <h3 class="mb-3 fw-bold">
                <div class="d-flex align-items-center">
                    <span class="material-icons material-icons-round">local_library</span>
                    <span class="ms-3">Users</span>
                </div>
            </h3>
            <h6 class="fst-italic mb-3">Manage User Accounts</h6>
        </div>
        <nav class="block bread_block">
            <ol class="breadcrumb px-4 py-2 m-0">
                <li class="breadcrumb-item"><a class="text-decoration-none" href="#">A.Y. 2023-2024</a></li>
                <li class="breadcrumb-item active" aria-current="page">Users</li>
            </ol>
        </nav>
    </div>
    <!-- Page Content -->
    <div class="block h-100 p-4">
        
        <br><br>
        <table id="example" class="display table table-bordered" style="width:100%">
            <thead>
                <tr>
                    <th class="d-none">ID</th>
                    <th>School ID</th>
                    <th>First Name</th>
                    <th>Middle Name</th>
                    <th>Last Name</th>
                    <th class="d-none">Birthday</th>
                    <th class="d-none">Address</th>
                    <th>Role</th>
                    <th>Department</th>
                    <th>Program</th>
                    <th>Email</th>
                    <th></th>
                </tr>
            </thead>
            <tbody>
                <?php getAllUsers(); ?>
            </tbody>
        </table>
    </div>
</div>
<!-- Modal -->
<form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method="POST">
    <div class="modal fade" id="myModal"  aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Update User</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    
                    <input input type="hidden" name="id" class="form-control block"/>
                    <input input type="hidden" name="school_id" id="school_id" class="form-control block"/>

                    <label>First Name: </label>
                    <input name="first_name" id="first_name" class="form-control block" pattern="[a-zA-Z]{1,}" required><br>
                    <label>Middle Name: </label>
                    <input name="middle_name" id="middle_name" class="form-control block" pattern="[a-zA-Z]{1,}"><br>
                    <label>Last Name: </label>
                    <input name="last_name" id="last_name" class="form-control block" pattern="[a-zA-Z]{1,}" required><br>

                    <input type="hidden" name="birthday" id="birthday" class="form-control block" required>
                    <input type="hidden" name="address" id="address" class="form-control block"/>

                    <label>Role: </label>
                    <select class="form-select block" name="role" id="role" style="height: 45px;" required>
                        <option id="role" name="role" value="1" <?php if($role == "1") { echo "selected"; }?>>Admin</option>
                        <option id="role" name="role" value="2" <?php if($role == "2") { echo "selected"; }?>>Teacher</option>
                        <option id="role" name="role" value="3" <?php if($role == "3") { echo "selected"; }?>>Student</option>
                    </select><br>
                    <label>Department: </label>
                    <select class="form-select block" name="department" id="department" style="height: 45px;" required>
                        <option id="department" name="department" value="1" <?php if($department == "1") { echo "selected"; }?>>Sample Dept. 1</option>
                        <option id="department" name="department" value="2" <?php if($department == "2") { echo "selected"; }?>>Sample Dept. 2</option>
                        <option id="department" name="department" value="3" <?php if($department == "3") { echo "selected"; }?>>Sample Dept. 3</option>
                    </select><br>
                    <label>Program: </label>
                    <select class="form-select block" name="program" id="program" style="height: 45px;" required>
                        <option id="program" name="program" value="1" <?php if($program == "1") { echo "selected"; }?>>Sample Prog. 1</option>
                        <option id="program" name="program" value="2" <?php if($program == "2") { echo "selected"; }?>>Sample Prog. 2</option>
                        <option id="program" name="program" value="3" <?php if($program == "3") { echo "selected"; }?>>Sample Prog. 3</option>
                    </select><br>
                    <label>Email: </label>
                    <input name="email" id="email" class="form-control block" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,}$" required><br>
                </div>
                <div class="modal-footer">
                    <button type="submit" name="btnSave" class="btn btn-primary">Save</button>
                    <button type="button" class="btn btn-light" data-bs-dismiss="modal">Cancel</button>
                </div>
            </div>
        </div>
    </div>
</form>
<!-- End Modal -->
