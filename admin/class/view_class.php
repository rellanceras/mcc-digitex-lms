<!-- Main Content -->
<div class="d-flex flex-column flex-grow-1 gap-3 main-content">
    <!-- Page Header -->
    <div class="block" id="page-header">
        <div class="px-4 pt-4">
            <h3 class="mb-3 fw-bold">
                <div class="d-flex align-items-center">
                    <span class="material-icons">class</span>
                    <span class="ms-3">Class</span>
                </div>
            </h3>
            <h6 class="mb-3">Current Academic year: <span class="fw-bold">2023-2024</span></h6>
        </div>
        <nav class="block bread_block">
            <ol class="breadcrumb px-4 py-2 m-0">
                <li class="breadcrumb-item"><a class="text-decoration-none" href="#">A.Y. 2023-2024</a></li>
                <li class="breadcrumb-item active" aria-current="page">Class</li>
            </ol>
        </nav>
    </div>
    <!-- Page Content -->
    <div class="block h-100 p-4">
        <a class="btn btn-primary text-light mb-3" href="?page=AddClass">Add Class</a>
        <table id="view_course" class="display table table-bordered" style="width:100%">
            <thead>
                <tr>
                    <th>Class Name</th>
                    <th>Subject</th>
                    <th>Department</th>
                    <th>Option</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>Tiger Nixon</td>
                    <td>Advanced Mathematics</td>
                    <td>SCST</td>
                    <td>
                        <button type='button' class='btn btn-primary btnShowEditModal' data-bs-toggle='modal' data-bs-target='#myModal'><i class='bi bi-pencil-square icon-white'></i> Edit</button>
                    </td>
                </tr>
                <tr>
                    <td>Marie Claire</td>
                    <td>Advanced Mathematics</td>
                    <td>SCST</td>
                    <td>
                        <button type='button' class='btn btn-primary btnShowEditModal' data-bs-toggle='modal' data-bs-target='#myModal'><i class='bi bi-pencil-square icon-white'></i> Edit</button>
                    </td>
                </tr>
                <tr>
                    <td>Josse Reezal</td>
                    <td>Advanced Mathematics</td>
                    <td>SCST</td>
                    <td>
                        <button type='button' class='btn btn-primary btnShowEditModal' data-bs-toggle='modal' data-bs-target='#myModal'><i class='bi bi-pencil-square icon-white'></i> Edit</button>
                    </td>
                </tr>
            </tbody>
        </table>
    </div>
</div>