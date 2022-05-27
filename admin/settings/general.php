<form>
    <div class="row limited mx-auto">
        <div class="col-md-6 mt-2">
            <h4 class="mb-3 fw-bold"> Display Profile Information </h4>
            <hr/>
            <div class="container">
                <div class="avatar-upload">
                    <div class="avatar-edit">
                        <input type='file' id="imageUpload" accept=".png, .jpg, .jpeg" />
                        <label for="imageUpload"></label>
                    </div>
                    <div class="avatar-preview">
                        <div id="imagePreview"></div>
                    </div>
                </div>
            </div>    
            <div class="mb-3">
                <label for="className" class="form-label fw-bold">Nickname:</label>
                <input type="text" class="form-control block-sm" required="required">
            </div>
            <div class="mb-3">
                <label for="className" class="form-label fw-bold">Bio:</label>
                <input type="text" class="form-control block-sm" required="required">
            </div>
        </div>
        <hr class="d-md-none my-3"/>
        <div class="col-md-6 mt-2">
            <h4 class="mb-3 fw-bold"> Personal Information </h4>
            <hr/>
            <div class="mb-3">
                <label for="className" class="form-label fw-bold">First Name:</label>
                <input type="text" class="form-control block-sm" required="required">
            </div>
            <div class="mb-3">
                <label for="className" class="form-label fw-bold">Last Name:</label>
                <input type="text" class="form-control block-sm" required="required">
            </div>
            <div class="mb-3">
                <label for="className" class="form-label fw-bold">Email Address:</label>
                <input type="text" class="form-control block-sm" required="required">
            </div>
            <div class="mb-3">
                <label for="className" class="form-label fw-bold">Contact:</label>
                <input type="text" class="form-control block-sm" required="required">
            </div>
            <div class="mb-3">
                <label for="className" class="form-label fw-bold">Role:</label>
                <input type="text" class="form-control block-sm" disabled>
            </div>
            <div class="mb-3">
                <label for="className" class="form-label fw-bold">Department:</label>
                <input type="text" class="form-control block-sm" disabled>
            </div>
            <div class="mb-3">
                <label for="className" class="form-label fw-bold">Personnel Number:</label>
                <input type="text" class="form-control block-sm" disabled>
            </div>
        </div>
    </div>
    <hr/>
    <div class="d-flex justify-content-center">
        <button type="submit" class="btn btn-success w-25">Submit</button>
    </div>
</form>