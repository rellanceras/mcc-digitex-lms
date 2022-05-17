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
        <form id="addClass" method="POST" action="">

        </form>
        <div id="smartwizard">
            <ul class="nav">
                <li>
                    <a class="nav-link" href="#step-1">
                        Step 1: <br />
                        <span class="fw-bold">Configure Class Information</span>
                    </a>
                </li>
                <li>
                    <a class="nav-link" href="#step-2">
                        Step 2: <br />
                        <span class="fw-bold">Assign Instructor</span>
                    </a>
                </li>
                <li>
                    <a class="nav-link" href="#step-3">
                        Step 3: <br />
                        <span class="fw-bold">Enroll Students</span>
                    </a>
                </li>
                <li>
                    <a class="nav-link" href="#step-4">
                        Step 4: <br />
                        <span class="fw-bold">Summary & Finish</span>
                    </a>
                </li>
            </ul>
            <div class="tab-content">
                <div id="step-1" class="tab-pane p-4 block2 mx-auto" role="tabpanel">
                    <div class="row">
                        <div class="col-md-6 mb-3">
                            <label for="className" class="form-label fw-bold">Class Name:</label>
                            <input type="text" class="form-control block-sm" id="className" placeholder="Enter Course Name" required>
                        </div>
                        <div class="col-md-6 mb-3">
                            <label for="classPic" class="form-label fw-bold">Upload Class Banner:</label>
                            <input type="file" class="form-control block-sm" id="classBanner" required>
                        </div>
                    </div>
                    <div class="mb-3">
                        <label for="classDesc" class="form-label fw-bold">Enter Class Description <p class="fw-normal d-inline-block mb-0">(Limited to 300 characters)</p></label>
                        <textarea class="form-control block-sm" placeholder="Enter Course Description" id="classDesc" style="height: 200px; resize: none;" maxlength="300" required></textarea>
                        <p id="the-count" class="d-flex justify-content-end">
                            <span id="current">0</span>
                            <span id="maximum">/ 300</span>
                        </p>
                    </div>
                    <div class="row">
                        <div class="col-md-6 mb-3">
                            <label for="classSubject" class="form-label fw-bold">Choose Subject</label>
                            <select class="form-select block-sm" id="classSubject" required>
                                <option selected>--None Selected--</option>
                                <option value="1">.</option>
                                <option value="2">..</option>
                                <option value="3">...</option>
                            </select>
                        </div>
                        <div class="col-md-6 mb-3">
                            <label for="courseSubject" class="form-label fw-bold">Choose Department</label>
                            <select class="form-select block-sm" id="classDept" required>
                                <option selected>--None Selected--</option>
                                <option value="1">.</option>
                                <option value="2">..</option>
                                <option value="3">...</option>
                            </select>
                        </div>
                    </div>
                </div>
                <div id="step-2" class="tab-pane p-4 block2 mx-auto" role="tabpanel">
                    <div class="d-flex align-items-center justify-content-between mb-3">
                        <a class="nav-link nav_active" href="#">
                            <div class="d-flex align-items-center">
                                <span class="nav_label me-3">Instructors: <span id="selectedStuds">0</span></span>
                                <span class="material-icons">info</span>
                            </div>
                        </a>
                    </div>
                    <table id="courseIns" class="display table table-bordered" style="width:100%">
                        <thead>
                            <tr>
                                <th>ID</th>
                                <th>Name</th>
                                <th>Department</th>
                                <th></th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td></td>
                                <td>Tiger Nixon</td>
                                <td>SCST</td>
                                <td>
                                    <input class="form-check-input" type="checkbox" value="" id="2">
                                </td>
                            </tr>
                            <tr>
                                <td></td>
                                <td>Marie Claire</td>
                                <td>SCST</td>
                                <td>
                                    <input class="form-check-input" type="checkbox" value="" id="2">
                                </td>
                            </tr>
                            <tr>
                                <td></td>
                                <td>Josse Reezal</td>
                                <td>SCST</td>
                                <td>
                                    <input class="form-check-input" type="checkbox" value="" id="2">
                                </td>
                            </tr>
                            <tr>
                                <td></td>
                                <td>Josse Reezal</td>
                                <td>SCST</td>
                                <td>
                                    <input class="form-check-input" type="checkbox" value="" id="2">
                                </td>
                            </tr>
                            <tr>
                                <td></td>
                                <td>Josse Reezal</td>
                                <td>SCST</td>
                                <td>
                                    <input class="form-check-input" type="checkbox" value="" id="2">
                                </td>
                            </tr>
                            <tr>
                                <td></td>
                                <td>Josse Reezal</td>
                                <td>SCST</td>
                                <td>
                                    <input class="form-check-input" type="checkbox" value="" id="2">
                                </td>
                            </tr>
                            <tr>
                                <td></td>
                                <td>Josse Reezal</td>
                                <td>SCST</td>
                                <td>
                                    <input class="form-check-input" type="checkbox" value="" id="2">
                                </td>
                            </tr>
                        </tbody>
                        <tfoot>
                            <tr>
                                <th>ID</th>
                                <th>Name</th>
                                <th>Department</th>
                                <th></th>
                            </tr>
                        </tfoot>
                    </table>
                </div>
                <div id="step-3" class="tab-pane p-4 block2 mx-auto" role="tabpanel">
                    <div class="d-flex align-items-center justify-content-between mb-3">
                        <a class="nav-link nav_active" href="#">
                            <div class="d-flex align-items-center">
                                <span class="nav_label me-3">Students: <span id="selectedStuds">0</span></span>
                                <span class="material-icons">info</span>
                            </div>
                        </a>
                    </div>
                    <table id="courseStuds" class="display table table-bordered" style="width:100%">
                        <thead>
                            <tr>
                                <th>ID</th>
                                <th>Name</th>
                                <th>Department</th>
                                <th></th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td></td>
                                <td>Tiger Nixon</td>
                                <td>SCST</td>
                                <td>
                                    <input class="form-check-input" type="checkbox" value="" id="2">
                                </td>
                            </tr>
                            <tr>
                                <td></td>
                                <td>Marie Claire</td>
                                <td>SCST</td>
                                <td>
                                    <input class="form-check-input" type="checkbox" value="" id="2">
                                </td>
                            </tr>
                            <tr>
                                <td></td>
                                <td>Josse Reezal</td>
                                <td>SCST</td>
                                <td>
                                    <input class="form-check-input" type="checkbox" value="" id="2">
                                </td>
                            </tr>
                        </tbody>
                        <tfoot>
                            <tr>
                                <th>ID</th>
                                <th>Name</th>
                                <th>Department</th>
                                <th></th>
                            </tr>
                        </tfoot>
                    </table>
                </div>
                <div id="step-4" class="tab-pane p-4 block2 mx-auto" role="tabpanel">
                    <div class="row">
                        <div class="col-md-6">
                            <div class="mb-3">
                                <label for="className" class="form-label fw-bold">Class Name:</label>
                                <input type="text" class="form-control-plaintext text-muted block-sm px-3" id="className"  value="Sample Class Name" readonly>
                            </div>
                            <div class="mb-3">
                                <label for="className" class="form-label fw-bold">Class Description:</label>
                                <textarea class="form-control-plaintext text-muted block-sm px-3" style="height: 300px; resize: none;" id="classDesc" readonly>Sample Class Desc</textarea>
                            </div>
                            <div class="mb-3">
                                <label for="classBanner" class="form-label fw-bold">Class Banner:</label>
                                <input type="text" class="form-control-plaintext text-muted block-sm px-3" id="classBanner" value="Sample File Name" readonly>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="mb-3">
                                <label for="className" class="form-label fw-bold">Subject Name:</label>
                                <input type="text" class="form-control-plaintext text-muted block-sm px-3" id="subjectName"  value="Sample Subject Name" readonly>
                            </div>
                            <div class="mb-3">
                                <label for="className" class="form-label fw-bold">Department Name:</label>
                                <input type="text" class="form-control-plaintext text-muted block-sm px-3" id="deptName"  value="Sample Department Name" readonly>
                            </div>
                            <div class="mb-3">
                                <label for="className" class="form-label fw-bold">Instructor/s:</label>
                                <table id="courseIns" class="display table table-bordered" style="width:100%">
                                    <thead>
                                        <tr>
                                            <th>ID</th>
                                            <th>Name</th>
                                            <th>Department</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>3186543</td>
                                            <td>Maria Clara</td>
                                            <td>SCST</td>
                                        </tr>
                                        <tr>
                                            <td>3186543</td>
                                            <td>Maria Clara</td>
                                            <td>SCST</td>
                                        </tr>
                                    </tbody>
                                    <tfoot>
                                        <tr>
                                            <th>ID</th>
                                            <th>Name</th>
                                            <th>Department</th>
                                        </tr>
                                    </tfoot>
                                </table>
                            </div>
                        </div>
                    </div>
                    <hr/>
                    <div class="row">
                            <div class="mb-3">
                                <label for="className" class="form-label fw-bold">Student/s:</label>
                                <table id="courseIns" class="display table table-bordered" style="width:100%">
                                    <thead>
                                        <tr>
                                            <th>ID</th>
                                            <th>Name</th>
                                            <th>Department</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>3186543</td>
                                            <td>Juan Dela Cruz</td>
                                            <td>SCST</td>
                                        </tr>
                                        <tr>
                                            <td>3186543</td>
                                            <td>Padre Damaso</td>
                                            <td>SCST</td>
                                        </tr>
                                        <tr>
                                            <td>3186543</td>
                                            <td>Juan Dela Cruz</td>
                                            <td>SCST</td>
                                        </tr>
                                        <tr>
                                            <td>3186543</td>
                                            <td>Padre Damaso</td>
                                            <td>SCST</td>
                                        </tr>
                                        <tr>
                                            <td>3186543</td>
                                            <td>Juan Dela Cruz</td>
                                            <td>SCST</td>
                                        </tr>
                                        <tr>
                                            <td>3186543</td>
                                            <td>Padre Damaso</td>
                                            <td>SCST</td>
                                        </tr>
                                        <tr>
                                            <td>3186543</td>
                                            <td>Juan Dela Cruz</td>
                                            <td>SCST</td>
                                        </tr>
                                        <tr>
                                            <td>3186543</td>
                                            <td>Padre Damaso</td>
                                            <td>SCST</td>
                                        </tr>
                                        <tr>
                                            <td>3186543</td>
                                            <td>Juan Dela Cruz</td>
                                            <td>SCST</td>
                                        </tr>
                                        <tr>
                                            <td>3186543</td>
                                            <td>Padre Damaso</td>
                                            <td>SCST</td>
                                        </tr>
                                    </tbody>
                                    <tfoot>
                                        <tr>
                                            <th>ID</th>
                                            <th>Name</th>
                                            <th>Department</th>
                                        </tr>
                                    </tfoot>
                                </table>
                            </div>
                    </div>
                    <div class="d-flex justify-content-center">
                        <button class="btn btn-success">Create Class</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>