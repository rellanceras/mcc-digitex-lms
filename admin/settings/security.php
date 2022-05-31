<?php
    require_once($_SERVER['DOCUMENT_ROOT'] . '/mcc-digitex-lms/admin/settings/functions/change-ps.php'); 
?>

<form action="../admin/settings/functions/change-ps.php" method="POST">
    <div class="row limited mx-auto">
        <div class="col">
            <h4 class="mb-3 fw-bold mt-2"> Change Password</h4>
            <hr/>

            <?php if (isset($_GET['error'])){?> 
                <div class="alert alert-danger alert-dismissible" role="alert">
                    <?php echo $_GET['error']; ?>
                </div>
            <?php } ?>

            <?php if (isset($_GET['success'])){?>
                <div class="alert alert-success alert-dismissible" role="alert">
                    <?php echo $_GET['success']; ?>
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
        <button type="submit" class="btn btn-success w-25">Submit</button>
    </div>
</form>