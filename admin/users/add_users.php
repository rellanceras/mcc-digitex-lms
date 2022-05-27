<!--

    Work in Progress | Template by Nicolas Honrade

-->
<?php

    require_once($_SERVER['DOCUMENT_ROOT'] . '/mcc-digitex-lms/admin/users/functions/user-actions.php'); 

?>
<!-- Page Content -->
<div class="block h-100 p-4">
    <div class="container p-4">
        <form action="../admin/users/functions/user-actions.php" method="POST"> 
            <div class="row">
            <div class="col-6">
                <h3>Basic Information</h3>
                <br><br>
                <div class="form-floating mb-3 col-md-8">
                    <input type="text" class="form-control block" id="last_name" name="last_name" placeholder="Last Name" pattern="[A-Za-z ]{1,32}" required>
                    <label for="floatingInput">Last Name</label>
                </div>
                <br>
                <div class="form-floating mb-3 col-md-8">
                    <input type="text" class="form-control block" id="first_name" name="first_name" placeholder="First Name" pattern="[A-Za-z ]{1,32}" required>
                    <label for="floatingInput">First Name</label>
                </div>
                <br>
                <div class="form-floating mb-3 col-md-8">
                    <input type="text" class="form-control block" id="middle_name" name="middle_name" placeholder="Middle Name" pattern="[A-Za-z ]{1,32}"> 
                    <label for="floatingInput">Middle Name</label>
                </div>
                <br>
                <div class="form-floating mb-3 col-md-8">
                    <input type="date" class="form-control block" id="birthday" name="birthday" placeholder="Birthday" required>
                    <label for="floatingInput">Birthday</label>
                </div>
                <br>
                <div class="form-floating mb-3 col-md-8">
                    <textarea class="form-control block" placeholder="Complete Address" id="address" name="address" style="height: 100px" required></textarea>
                    <label for="floatingTextarea" >Complete Address</label>
                </div>
            </div>

            <!-- Form Aligned Left -->
            <div class="col-6">
                <h3>Account Information</h3>
                <br><br>
                <div class="form-floating mb-3 col-md-8">
                    <input type="text" class="form-control block" id="school_id" name="school_id" placeholder="School ID" pattern="[0-9]{1,}" required>
                    <label for="floatingInput">School ID</label>
                </div>
                <br>
                <div class="form-floating mb-3 col-md-8">
                    <input type="email" class="form-control block" id="email" name="email" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,}$" placeholder="Email Address" required>
                    <label for="floatingInput">Email Address</label>
                </div>
                <br>
                <div class="form-floating mb-3 col-md-8">
                    <input type="password" class="form-control block" id="password" name="password" placeholder="Password" pattern="^(?=.*[a-z])(?=.*[A-Z])(?=.*[0-9])(?=.*[!@#$%^&*_=+-]).{8,}$" title="Must contain at least one numeric value, one special symbol, one uppercase and lowercase letter, and at least 8 or more characters." required>
                    <label for="floatingInput">Password</label>
                </div>
                <br>
                <div class="form mb-3 col-md-8">
                    <select name="role" class="form-select block" aria-label="Default select example" style="height: 60px;" required>
                        <option selected hidden value="">Role</option> 
                        <option id="role" name="role" value="1" <?php if($role == "1") { echo "selected"; }?>>Admin</option>
                        <option id="role" name="role" value="2" <?php if($role == "2") { echo "selected"; }?>>Teacher</option>
                        <option id="role" name="role" value="3"<?php if($role == "3") { echo "selected"; }?>>Student</option>
                    </select>
                </div>
                <br>
                <div class="form mb-3 col-md-8">
                    <select name="department" class="form-select block" aria-label="Default select example" style="height: 60px;" required>
                        <option selected hidden value="">Department</option> 
                        <option id="department" name="department" value="1" <?php if($department == "1") { echo "selected"; }?>>Sample Dept. 1</option>
                        <option id="department" name="department" value="2" <?php if($department == "2") { echo "selected"; }?>>Sample Dept. 2</option>
                        <option id="department" name="department" value="3" <?php if($department == "3") { echo "selected"; }?>>Sample Dept. 3</option>
                    </select>
                </div>
                <br>
                <div class="form mb-3 col-md-8">
                    <select name="program" class="form-select block" aria-label="Default select example" style="height: 60px;" required>
                        <option selected hidden value="">Program</option> 
                        <option id="program" name="program" value="1" <?php if($program == "1") { echo "selected"; }?>>Sample Prog. 1</option>
                        <option id="program" name="program" value="2" <?php if($program == "2") { echo "selected"; }?>>Sample Prog. 2</option>
                        <option id="program" name="program" value="3" <?php if($program == "3") { echo "selected"; }?>>Sample Prog. 3</option>
                    </select>
                </div>
            </div>
                
            </div>
            <br><br>
            <button type="submit" class="btn btn-primary" style="text-align:right">Save</button>
            <button type="button" class="btn btn-secondary" style="text-align:right">Cancel</button>
        </form> 
    </div>
</div>
