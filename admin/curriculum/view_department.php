<!--

    Work in Progress | Template by Nicolas Honrade

-->

<!-- Page Content -->
<button type="button" class="btn btn-primary" style="margin-bottom: 1%;" data-bs-toggle="modal" data-bs-target="#myModal">
    Add Department
</button>

<table id="view_course" class="display table table-bordered" style="width:100%">
    <thead style="width:100%">
        <tr>
            <tr>
            <th class="thborderleft" margin-right>Name</th>
            <th class="thborderright">Options</th>
            </tr>
        </tr>
    </thead>
    <tbody>
        <tr>
            <td>School of Computer Science and Technology</td>
            <td style="text-align:center">
                <button type="button" class="btn bi bi-pen" style="background-color: #2196f3;color: white;" data-bs-toggle="modal" data-bs-target="#editModal"></button>
                <button type="button" class="btn bi bi-trash" style="background-color: #f44336;color: white;" data-bs-toggle="modal" data-bs-target="#deleteModal"></button>
            </td>
        </tr>
        <tr>
            <td>School of Engineering and Architecture</td>
            <td style="text-align:center">
                <button type="button" class="btn bi bi-pen" style="background-color: #2196f3;color: white;" data-bs-toggle="modal" data-bs-target="#editModal"></button>
                <button type="button" class="btn bi bi-trash" style="background-color: #f44336;color: white;" data-bs-toggle="modal" data-bs-target="#deleteModal"></button>
            </td>
        </tr>
        <tr>
            <td>School of Tourism and Hospitality Management</td>
            <td style="text-align:center">
                <button type="button" class="btn bi bi-pen" style="background-color: #2196f3;color: white;" data-bs-toggle="modal" data-bs-target="#editModal"></button>
                <button type="button" class="btn bi bi-trash" style="background-color: #f44336;color: white;" data-bs-toggle="modal" data-bs-target="#deleteModal"></button>
            </td>
        </tr>
        <tr>
            <td>School of Business Management and Accountancy</td>
            <td style="text-align:center">
                <button type="button" class="btn bi bi-pen" style="background-color: #2196f3;color: white;" data-bs-toggle="modal" data-bs-target="#editModal"></button>
                <button type="button" class="btn bi bi-trash" style="background-color: #f44336;color: white;" data-bs-toggle="modal" data-bs-target="#deleteModal"></button>
            </td>
        </tr>
    </tbody>
</table>                  



<!-- Modal -->
<div class="modal fade" id="myModal"  aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Add Department</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <label>Department Name </label>
                <input name="dept" class="form-control block"/>
                <label>Description </label>
                <input name="desc" class="form-control block"/>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-primary">Save</button>
            </div>
        </div>
    </div>
</div>

<!--Edit Modal -->
<div class="modal fade" id="editModal"  aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Edit Department</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
                <div class="modal-body p-4">
                <label>Department Name </label>
                <input name="year" class="form-control block"/>
                <label>Description </label>
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
                <h5 class="modal-title">Delete Department</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body p-4">
                <p>Are you sure you want to delete this department?</p>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancel</button>
                <button type="button" class="btn btn-danger">Delete</button>
            </div>
        </div>
    </div>
</div>


<script>
    var table = $('.table').DataTable({
        dom: 'Bfrtip',
        pageLength : 5,
        buttons: [
        {
            
        text: '<i class="bi bi-arrow-clockwise"></i>'
        },
        {
        extend: 'colvis',
        text: '<i class="bi bi-layout-three-columns"></i>'

        },
        
        ]
    });
</script>