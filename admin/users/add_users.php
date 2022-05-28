<?php

    require_once($_SERVER['DOCUMENT_ROOT'] . '/mcc-digitex-lms/admin/users/functions/user-actions.php'); 

?>
<form action="../admin/users/functions/user-actions.php" method="POST">
    <div class="row limited mx-auto">
        <div class="col-md-6 mt-2">
            <h4 class="mb-3 fw-bold"> Basic Information </h4>
            <hr/>
            <div class="mb-3">
                <label for="className" class="form-label">Last Name:</label>
                <input type="text" class="form-control block-sm" name="last_name" required="required">
            </div>
            <div class="mb-3">
                <label for="className" class="form-label">First Name:</label>
                <input type="text" class="form-control block-sm" name="first_name" required="required">
            </div>
            <div class="mb-3">
                <label for="className" class="form-label">Middle Name:</label>
                <input type="text" class="form-control block-sm" name="middle_name" required="required">
            </div>
            <div class="mb-3">
                <label for="className" class="form-label">Birthdate:</label>
                <input type="date" class="form-control block-sm" name="birthday" required="required">
            </div>
            <div class="mb-3">
                <label for="className" class="form-label">Address:</label>
                <textarea class="form-control block-sm" placeholder="" name="address" style="height: 200px; resize: none;" maxlength="300" required></textarea>
            </div>
        </div>
        <hr class="d-md-none my-3"/>
        <div class="col-md-6 mt-2">
            <h4 class="mb-3 fw-bold"> Account Information </h4>
            <hr/>
            <div class="mb-3">
                <label for="className" class="form-label">School ID:</label>
                <input type="number" class="form-control block-sm" name="school_id" required="required">
            </div>
            <div class="mb-3">
                <label for="className" class="form-label">Email Address:</label>
                <input type="text" class="form-control block-sm" name="email" required="required">
            </div>
            <div class="mb-3">
                <label for="className" class="form-label">Password:</label>
                <input type="password" class="form-control block-sm" name="password" placeholder="Password" pattern="^(?=.*[a-z])(?=.*[A-Z])(?=.*[0-9])(?=.*[!@#$%^&*_=+-]).{8,}$" title="Must contain at least one numeric value, one special symbol, one uppercase and lowercase letter, and at least 8 or more characters." required="required">
            </div>
            <div class="mb-3">
                <label for="className" class="form-label">Role:</label>
                <select class="form-select block-sm" name="role" id="role" required>
                    <option value="" disabled="disabled" selected>--None Selected--</option>
                    <option id="role" name="role" value="1" <?php if($role == "1") { echo "selected"; }?>>Admin</option>
                    <option id="role" name="role" value="2" <?php if($role == "2") { echo "selected"; }?>>Teacher</option>
                    <option id="role" name="role" value="3"<?php if($role == "3") { echo "selected"; }?>>Student</option>
                </select>
            </div>
            <div class="mb-3">
                <?php 
                    $sql = "SELECT abbreviation FROM `department`";
                    $abbreviations = mysqli_query($conn,$sql);
                ?>
                <label for="courseSubject" class="form-label">Choose Department</label>
                <select class="form-select block-sm" name="department" id="department" required>
                    <option value="" disabled="disabled" selected>--None Selected--</option>
                    <?php

					while ($abbreviation = mysqli_fetch_array(
						    $abbreviations,MYSQLI_ASSOC)):;
					?>
					<option name="department" id="department" value="<?php echo $abbreviation["abbreviation"];?>">
					<?php echo $abbreviation["abbreviation"];?>
					</option>
					<?php endwhile;?>
                    
                </select>
            </div>
        </div>
    </div>
    <hr/>
    <div class="d-flex justify-content-center gap-3">
        <button type="submit" class="btn btn-success w-25">Submit</button>
        <button type="reset" class="btn btn-secondary w-25">Cancel</button>
    </div>
</form>

