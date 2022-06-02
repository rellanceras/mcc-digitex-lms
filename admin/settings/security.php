<?php
    $error = $success = "";

    session_start();
    
    if (isset($_SESSION['error'])){
        $error = $_SESSION['error'];
        $success = "";
        unset($_SESSION['error']);
    }

    if (isset($_SESSION['success'])){
        $success = $_SESSION['success'];
        $error = "";
        unset($_SESSION['success']);
    }
?>

<form action="../admin/settings/functions/change-ps.php" method="POST">
    <div class="row limited mx-auto">
        <div class="col">
            <h4 class="mb-3 fw-bold mt-2"> Change Password</h4>
            <hr/>

            <?php if (!empty($error)){?> 
                <div class="alert alert-danger alert-dismissible" role="alert">
                    <?php echo $error; ?>
                </div>
            <?php } ?>
            <?php if (!empty($success)){?>
                <div class="alert alert-success alert-dismissible" role="alert">
                    <?php echo $success; ?>
                </div>
            <?php } ?>
            <div class="mb-3">
                <label for="Password" class="form-label">Old Password</label>
                <div class="input-group">
                    <input type="password" class="form-control block-sm" id="currentpsw" name="currentpsw" required>
                </div>
            </div>
            <div class="mb-3">
                <label for="Password" class="form-label">New Password</label>
                <div class="input-group">
                    <input type="password" class="form-control block-sm" id="newpsw" name="newpsw" required> 
                </div>
            </div>
            <div class="mb-3">
                <label for="Password" class="form-label">Confirm Password</label>
                <div class="input-group">
                    <input type="password" class="form-control block-sm" id="cnewpsw" name="cnewpsw" required> 
                </div>
            </div>
        </div>
    </div>
    <hr/>
    <div class="d-flex justify-content-center">
        <button type="submit" class="btn btn-success w-25" id="btnSave">Submit</button>
    </div>
</form>