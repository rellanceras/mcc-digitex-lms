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
                <li class="breadcrumb-item active" aria-current="page">Program</li>
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
            <li class="subnav_select">
                <a class="nav-link text-reset" href="?page=Curriculum&sub=Subject">
                    Subject
                </a>
            </li>
            <li class="subnav_select">
                <a class="nav-link text-reset" href="?page=Curriculum&sub=Department">
                    Department
                </a>
            </li>
            <li class="nav-item subnav_active">
                <a class="nav-link text-reset" href="?page=Curriculum&sub=Program">
                    Program
                </a>
            </li>
        </ul>
    </div>
    <!-- Page Content -->
    <div class="block h-100 p-4">
                        
        <table id="view_course" class="display table table-bordered" style="width:100%">
            <thead style="width:100%">
                <tr>
                    <tr>
                    <th class="thborderleft" style="width:35%">Department</th>
                    <th style="width:20%">Suject</th>
                    <th>Semester</th>
                    <th class="thborderright">Options</th>
                    </tr>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>School of Computer Science and Technology</td>
                    <td style = "text-align: center;">Advance Mathematics</td>
                    <td style = "text-align: center;">2nd Semester</td>
                    <td style = "text-align: center;">
                        <label class="toggle">
                            <input type="checkbox">
                            <span class="labels" data-on="Active" data-off="Set as Active"></span>
                        </label>            
                    </td>
                </tr>
                <tr>
                    <td>School of Engineering and Architecture</td>
                    <td style = "text-align: center;">Calculus</td>
                    <td style = "text-align: center;">1st Semester</td>
                    <td style = "text-align: center;">
                        <label class="toggle">
                                <input type="checkbox">
                                <span class="labels" data-on="Active" data-off="Set as Active"></span>
                        </label>
                    </td>
                </tr>
                <tr>
                    <td>School of Tourism and Hospitality Management</td>
                    <td style = "text-align: center;">Phisycal Education</td>
                    <td style = "text-align: center;">1st Semester</td>
                    <td style = "text-align: center;">
                        <label class="toggle">
                                <input type="checkbox">
                                <span class="labels" data-on="Active" data-off="Set as Active"></span>
                        </label>
                    </td>
                </tr>
                <tr>
                    <td>School of Business Management and Accountancy</td>
                    <td style = "text-align: center;">Algebra</td>
                    <td style = "text-align: center;">2nd Semester</td>
                    <td style = "text-align: center;">
                        <label class="toggle">
                                <input type="checkbox">
                                <span class="labels" data-on="Active" data-off="Set as Active"></span>
                        </label>
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
                <label>Year </label>
                <input name="year" class="form-control block"/>
                <label>Semester </label>
                <input name="semester" class="form-control block"/>
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
                <h5 class="modal-title">Delete Academic Year</h5>
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

