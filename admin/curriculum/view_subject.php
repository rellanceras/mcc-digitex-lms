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
                    <span class="material-icons material-icons-round">local_library</span>
                    <span class="ms-3">Curriculum</span>
                </div>
            </h3>
            <h6 class="mb-3">Current Academic year: <span class="fw-bold">2023-2024</span></h6>
        </div>
        <nav class="block bread_block">
            <ol class="breadcrumb px-4 py-2 m-0">
                <li class="breadcrumb-item"><a class="text-decoration-none" href="#">A.Y. 2023-2024</a></li>
                <li class="breadcrumb-item"><a class="text-decoration-none" href="#">Curriculum</a></li>
                <li class="breadcrumb-item active" aria-current="page">Subject</li>
            </ol>
        </nav>
    </div>
    <div class="block">
        <ul class="d-flex flex-row list-unstyled align-items-center gap-3 m-2 subnav">
            <li class="subnav_select">
                <a class="nav-link text-reset" href="?page=Curriculum&sub=AcademicYear">
                    Academic Year
                </a>
            </li>
            <li class="nav-item subnav_active">
                <a class="nav-link text-reset" href="?page=Curriculum&sub=Subject">
                    Subject
                </a>
            </li>
            <li class="subnav_select">
                <a class="nav-link text-reset" href="?page=Curriculum&sub=Department">
                    Department
                </a>
            </li>
            <li class="subnav_select">
                <a class="nav-link text-reset" href="?page=Curriculum&sub=Program">
                    Program
                </a>
            </li>
        </ul>
    </div>
    <!-- Page Content -->
    <div class="block h-100 p-4">
                        
        <button type="button" class="btn btn-primary" style="margin-bottom: 1%;" data-bs-toggle="modal" data-bs-target="#myModal">
            Add Subject
        </button>
                                
        <table id="view_course" class="display table table-bordered" style="width:100%"> 
            <thead>
                <tr>
                    <th class="thborderleft">Name</th>
                    <th>Subject Code</th>
                    <th>Department</th>
                    <th class="thborderright">Options</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td><button type="button" class="btn bi bi-info" style="background-color: #FF9800;color: white;"></button> Advanced Mathematics</td>
                    <td>GEC-0001</td>
                    <td>GenEd</td>
                    <td>
                        <button type="button" class="btn bi bi-pen" style="background-color: #2196f3;color: white;" data-bs-toggle="modal" data-bs-target="#editModal"></button>
                        <button type="button" class="btn bi bi-trash" style="background-color: #f44336;color: white;" data-bs-toggle="modal" data-bs-target="#deleteModal"></button>
                    </td>
                </tr>
                <tr>
                    <td><button type="button" class="btn bi bi-info" style="background-color: #FF9800;color: white;"></button> Object Oriented Programming</td>
                    <td>CSIT-0123</td>
                    <td>SCST</td>
                    <td>
                        <button type="button" class="btn bi bi-pen" style="background-color: #2196f3;color: white;" data-bs-toggle="modal" data-bs-target="#editModal"></button>
                        <button type="button" class="btn bi bi-trash" style="background-color: #f44336;color: white;" data-bs-toggle="modal" data-bs-target="#deleteModal"></button>
                    </td>
                </tr>
                <tr>
                    <td><button type="button" class="btn bi bi-info" style="background-color: #FF9800;color: white;" data-bs-toggle="modal" data-bs-target="#deleteModal"></button> Calculus </td>
                    <td>CE101</td>
                    <td>SEA</td>
                    <td>
                        <button type="button" class="btn bi bi-pen" style="background-color: #2196f3;color: white;" data-bs-toggle="modal" data-bs-target="#editModal"></button>
                        <button type="button" class="btn bi bi-trash" style="background-color: #f44336;color: white;" data-bs-toggle="modal" data-bs-target="#deleteModal"></button>
                    </td>
                </tr>
                <tr>
                    <td><button type="button" class="btn bi bi-info" style="background-color: #FF9800;color: white;"></button> Physical Education</td>
                    <td>PE-0002</td>
                    <td>STHM</td>
                    <td>
                        <button type="button" class="btn bi bi-pen" style="background-color: #2196f3;color: white;" data-bs-toggle="modal" data-bs-target="#editModal"></button>
                        <button type="button" class="btn bi bi-trash" style="background-color: #f44336;color: white;" data-bs-toggle="modal" data-bs-target="#deleteModal"></button>
                    </td>
                </tr>
            </tbody>
        </table>                  
    </div>
</div>

<!-- Modal Add-->
<div class="modal fade" id="myModal"  aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Add Subject</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body p-4">
                <label>Subject Code</label>
                <input name="scode" class="form-control block"/>
                <label>Subject Name </label>
                <input name="sname" class="form-control block"/>
                <label>Department </label>
                <select name="dept" class="form-control block">
                    <option value="" disabled selected> Choose Account Type</option>
                    <option value="school">school</option>
                </select>
                <label>Description </label>
                <input name="desc" class="form-control block"/>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-primary">Save</button>
            </div>
        </div>
    </div>
</div>
<!-- Modal Edit -->
<div class="modal fade" id="editModal"  aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Edit Subject</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body p-4">
                <label>Subject Code</label>
                <input name="scode" class="form-control block"/>
                <label>Subject Name </label>
                <input name="sname" class="form-control block"/>
                <label>Department </label>
                <select name="dept" class="form-control block">
                    <option value="" disabled selected> Choose Account Type</option>
                    <option value="school">school</option>
                </select>
                <label>Description </label>
                <input name="desc" class="form-control block"/>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-primary">Save</button>
            </div>
        </div>
    </div>
</div>

<!--DELETE Modal -->
<div class="modal fade" id="deleteModal"  aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Delete Subject</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
                <div class="modal-body p-4">
                <p>Are you sure you want to delete this subject?</p>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancel</button>
                <button type="button" class="btn btn-primary">Delete</button>
            </div>
        </div>
    </div>
</div>