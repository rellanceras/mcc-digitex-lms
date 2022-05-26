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
        <a href="?page=AddUsers">
            <button type="button" class="btn btn-primary"><i class="bi bi-plus-lg icon-white"></i> Add User</button>
        </a>
        
        <br><br>
        <table id="view_course" class="display table table-bordered" style="width:100%">
            <thead>
                <tr>
                    <th>Student ID</th>
                    <th>Full Name</th>
                    <th>Email</th>
                    <th>Role</th>
                    <th>Department</th>
                    <th>Program</th>
                    <th></th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>215678</td>
                    <td>Minatozaki, Sana</td>
                    <td>minatozakisana@gmail.com</td>
                    <td>Student</td>
                    <td>SCST</td>
                    <td>1IT1</td>
                    <td><button type="button" class="btn btn-primary"  data-bs-toggle="modal" data-bs-target="#myModal"><i class="bi bi-pencil-square icon-white"></i> Edit</button></td>
                </tr>
                <tr>
                    <td>215678</td>
                    <td>Park, Jihyo</td>
                    <td>parkjihyo@gmail.com</td>
                    <td>Student</td>
                    <td>SCST</td>
                    <td>1IT1</td>
                    <td><button type="button" class="btn btn-primary"  data-bs-toggle="modal" data-bs-target="#myModal"><i class="bi bi-pencil-square icon-white"></i> Edit</button></td>
                </tr>
                <tr>
                    <td>215678</td>
                    <td>Myoui, Mina</td>
                    <td>minamyoui@gmail.com</td>
                    <td>Student</td>
                    <td>SCST</td>
                    <td>1IT1</td>
                    <td><button type="button" class="btn btn-primary"  data-bs-toggle="modal" data-bs-target="#myModal"><i class="bi bi-pencil-square icon-white"></i> Edit</button></td>
                </tr>
            </tbody>
        </table>
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
            <div class="modal-body p-4">
                <label>Student ID: </label>
                <input name="studentID" class="form-control block"/><br>
                <label>Full Name: </label>
                <input name="Name" class="form-control block"/><br>
                <label>Email: </label>
                <input name="email" class="form-control block"/><br>
                <label>Role: </label>
                <select class="form-select block" aria-label="Default select example" style="height: 45px;">
                    <option value="1">Admin</option>
                    <option value="2">Teacher</option>
                    <option value="3">Student</option>
                  </select><br>
                <label>Department: </label>
                <input name="dept" class="form-control block"/><br>
                <label>Program: </label>
                <input name="program" class="form-control block"/>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-primary">Save</button>
                <button type="button" class="btn btn-light">Cancel</button>
            </div>
        </div>
    </div>
</div>
<!-- End Modal -->