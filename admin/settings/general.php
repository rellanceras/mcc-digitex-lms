<!-- Main Content -->
<div class="d-flex flex-column flex-grow-1 gap-3 main-content">
    <!-- Page Header -->
    <div class="block" id="page-header">
        <div class="px-4 pt-4">
            <h3 class="mb-3 fw-bold">
                <div class="d-flex align-items-center">
                    <span class="material-icons">class</span>
                    <span class="ms-3">Add Class</span>
                </div>
            </h3>
            <h6 class="mb-3">Current Academic year: <span class="fw-bold">2023-2024</span></h6>
        </div>
        <nav class="block2">
            <ol class="breadcrumb px-4 py-2 m-0">
                <li class="breadcrumb-item"><a class="text-decoration-none" href="#">A.Y. 2023-2024</a></li>
                <li class="breadcrumb-item"><a class="text-decoration-none" href="?page=Class">Class</a></li>
                <li class="breadcrumb-item active" aria-current="page">Add Class</li>
            </ol>
        </nav>
    </div>
    <!-- Page Content -->
    <div class="block p-4">
        <form>
            <div class="row">
                <div class="col-md-6">
                    <h4 class="mb-3 fw-bold">
                        <div class="d-flex align-items-center">
                            <span class="ms-3">Personal Information</span>
                        </div>
                    </h4>
                    <div class="mb-3">
                        <label for="className" class="form-label fw-bold">First Name:</label>
                        <input type="text" class="form-control block-sm" required="required">
                    </div>
                    <div class="inputbox">
                        <input type="text" required="required">
                        <span>Last Name</span>
                    </div>
                    
                    <div class="inputbox">
                        <input type="text" required="required">
                        <span>Email Address</span>
                    </div>
                    <div class="inputbox">
                        <input type="text" required="required">
                        <span>Contact Number</span>
                    </div>
                    <div class="inputbox">
                        <input type="text" required="required">
                        <span>Role</span>
                    </div>
                    <div class="inputbox">
                        <input type="text" required="required">
                        <span>Department</span>
                    </div>
                    <div class="inputbox">
                        <input type="text" required="required">
                        <span>Personnel Number</span>
                    </div>
                </div>
                <div class="col-md-6">
                    <h4 class="mb-3 fw-bold">
                        <div class="d-flex align-items-center">
                            <span class="ms-3">Display Profile Information</span>
                        </div>
                    </h4>
                        <div class="container">
                            <h1>Upload</h1>
                                <div class="avatar-upload">
                                    <div class="avatar-edit">
                                        <input type='file' id="imageUpload" accept=".png, .jpg, .jpeg" />
                                        <label for="imageUpload"></label>
                                    </div>
                                    <div class="avatar-preview">
                                        </div>
                                    </div>
                        </div>    
                    <div class="inputbox">
                        <input type="text" required="required">
                        <span>Nickname</span>
                    </div>
                        <div class="inputbox">
                            <input type="text" required="required">
                            <span>Bio</span>
                        </div>
                    <div class="inputbox">
                            <input type="button" value="submit">
                    </div> 
                </div>
            </div>
        </form>
        <hr/>
    </div>
</div>