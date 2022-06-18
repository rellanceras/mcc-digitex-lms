<form>
    <div class="row limited mx-auto">
        <div class="col-md-6 mt-2">
            <h4 class="mb-3 fw-bold"> Basic Information </h4>
            <hr/>
            <div class="mb-3">
                <label for="className" class="form-label">Last Name:</label>
                <input type="text" class="form-control block-sm" required="required">
            </div>
            <div class="mb-3">
                <label for="className" class="form-label">First Name:</label>
                <input type="text" class="form-control block-sm" required="required">
            </div>
            <div class="mb-3">
                <label for="className" class="form-label">Middle Name:</label>
                <input type="text" class="form-control block-sm" required="required">
            </div>
            <div class="mb-3">
                <label for="className" class="form-label">Birthdate:</label>
                <input type="date" class="form-control block-sm" required="required">
            </div>
            <div class="mb-3">
                <label for="className" class="form-label">Address:</label>
                <textarea class="form-control block-sm" placeholder="" name="useraddress" style="height: 200px; resize: none;" maxlength="300" required></textarea>
            </div>
        </div>
        <hr class="d-md-none my-3"/>
        <div class="col-md-6 mt-2">
            <h4 class="mb-3 fw-bold"> Account Information </h4>
            <hr/>
            <div class="mb-3">
                <label for="className" class="form-label">School ID:</label>
                <input type="text" class="form-control block-sm" required="required">
            </div>
            <div class="mb-3">
                <label for="className" class="form-label">Email Address:</label>
                <input type="text" class="form-control block-sm" required="required">
            </div>
            <div class="mb-3">
                <label for="className" class="form-label">Password:</label>
                <input type="text" class="form-control block-sm" required="required">
            </div>
            <div class="mb-3">
                <label for="className" class="form-label">Role:</label>
                <input type="text" class="form-control block-sm" required="required">
            </div>
            <div class="mb-3">
                <label for="courseSubject" class="form-label">Choose Department</label>
                <select class="form-select block-sm" name="udept" id="userDept" required>
                    <option value="" disabled="disabled" selected>--None Selected--</option>
                    <option value="1">.</option>
                    <option value="2">..</option>
                    <option value="3">...</option>
                </select>
            </div>
    </div>
    <hr/>
    <div class="d-flex justify-content-center gap-3">
        <button type="submit" class="btn btn-success w-25">Submit</button>
        <button type="reset" class="btn btn-secondary w-25">Cancel</button>
    </div>
</form>