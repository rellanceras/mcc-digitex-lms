<form>
    <div class="row limited mx-auto">
        <div class="col">
            <h4 class="mb-3 fw-bold mt-2"> Change Password </h4>
            <hr/>
            <div class="mb-3">
                <label for="Password" class="form-label">Old Password</label>
                <div class="input-group">
                    <input type="password" class="form-control block-sm" id="oldPass" name="oldPass" required>
                </div>
            </div>
            <div class="mb-3">
                <label for="Password" class="form-label">New Password</label>
                <div class="input-group">
                    <input type="password" class="form-control block-sm" id="newPass" name="newPass" required> 
                </div>
            </div>
            <div class="mb-3">
                <label for="Password" class="form-label">Confirm Password</label>
                <div class="input-group">
                    <input type="password" class="form-control block-sm" id="newPassC" name="newPassC" required> 
                </div>
            </div>
        </div>
    </div>
    <hr/>
    <div class="d-flex justify-content-center">
        <button type="submit" class="btn btn-success w-25">Submit</button>
    </div>
</form>