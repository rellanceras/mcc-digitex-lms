<!--

    Work in Progress | Template by Nicolas Honrade

-->


<!-- Main Content -->
<div class="d-flex flex-column flex-grow-1 gap-3 main-content">
    <!-- Page Header -->
    <div class="block" id="page-header">
        <div class="px-4 pt-4">
            <h3 class="mb-3 fw-bold">
                <div class="d-flex align-items-center">
                    <span class="material-icons material-icons-round">manage_accounts</span>
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
        <div class="container p-4">
            <div class="row">
                <div class="col-6">
                    <h3>Basic Information</h3>
                    <br><br>
                    <div class="form-floating mb-3 col-md-8">
                        <input type="text" class="form-control block" id="floatingInput" placeholder="Course Name">
                        <label for="floatingInput">Last Name</label>
                    </div>
                    <br>
                    <div class="form-floating mb-3 col-md-8">
                        <input type="text" class="form-control block" id="floatingInput" placeholder="Course Name">
                        <label for="floatingInput">First Name</label>
                    </div>
                    <br>
                    <div class="form-floating mb-3 col-md-8">
                        <input type="text" class="form-control block" id="floatingInput" placeholder="Course Name">
                        <label for="floatingInput">Middle Name</label>
                    </div>
                    <br>
                    <div class="form-floating mb-3 col-md-8">
                        <input type="date" class="form-control block" id="floatingInput" placeholder="Course Name">
                        <label for="floatingInput">Birthday</label>
                    </div>
                    <br>
                    <div class="form-floating mb-3 col-md-8">
                        <textarea class="form-control block" placeholder="Course Description" id="floatingTextarea" style="height: 100px"></textarea>
                        <label for="floatingTextarea" >Complete Address</label>
                    </div>
                </div>

                <div class="col-6">
                    <h3>Account Information</h3>
                    <br><br>
                    <div class="form-floating mb-3 col-md-8">
                        <input type="text" class="form-control block" id="floatingInput" placeholder="Course Name">
                        <label for="floatingInput">Student ID</label>
                        </div>
                        <br>
                        <div class="form-floating mb-3 col-md-8">
                        <input type="text" class="form-control block" id="floatingInput" placeholder="Course Name">
                        <label for="floatingInput">Email Address</label>
                        </div>
                        <br>
                        <div class="form-floating mb-3 col-md-8">
                        <input type="text" class="form-control block" id="floatingInput" placeholder="Course Name">
                        <label for="floatingInput">Password</label>
                        </div>
                        <br>
                        <div class="form mb-3 col-md-8">
                        <select class="form-select block" aria-label="Default select example" style="height: 60px;">
                            <option selected>Role</option>
                            <option value="1">.</option>
                            <option value="2">..</option>
                            <option value="3">...</option>
                            </select>
                        </div>
                        <br>
                        <div class="form mb-3 col-md-8">
                        <select class="form-select block" aria-label="Default select example" style="height: 60px;">
                            <option selected>Department</option>
                            <option value="1">.</option>
                            <option value="2">..</option>
                            <option value="3">...</option>
                            </select>
                        </div>
                        <br>
                        <div class="form mb-3 col-md-8">
                        <select class="form-select block" aria-label="Default select example" style="height: 60px;">
                            <option selected>Program</option>
                            <option value="1">.</option>
                            <option value="2">..</option>
                            <option value="3">...</option>
                            </select>
                        </div>
                    </div>

            </div>
            <br><br>
            <button type="button" class="btn btn-primary">Save</button>
            <a href="view_users.html">
                <button type="button" class="btn btn-secondary">Cancel</button>
            </a>
        </div>
    </div>
</div>
<!-- Modal -->
<div class="modal fade" id="myModal"  aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Update User</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <label>Student ID: </label>
                <input name="studentID" class="form-control"/><br>
                <label>Full Name: </label>
                <input name="Name" class="form-control"/><br>
                <label>Email: </label>
                <input name="email" class="form-control"/><br>
                <label>Role: </label>
                <select class="form-select" aria-label="Default select example" style="height: 45px;">
                    <option value="1">Admin</option>
                    <option value="2">Teacher</option>
                    <option value="3">Student</option>
                  </select><br>
                <label>Department: </label>
                <input name="dept" class="form-control"/><br>
                <label>Program: </label>
                <input name="program" class="form-control"/>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-primary">Save</button>
                <button type="button" class="btn btn-light">Cancel</button>
            </div>
        </div>
    </div>
</div>
<!-- End Modal -->