
    <button type="button" class="btn btn-primary" style="margin-bottom: 1%;" data-bs-toggle="modal" data-bs-target="#myModal">
        Add Academic Year
    </button>


    <table id="viewAcadYear" class="display row-border">
        <thead>
            <tr>
                <th class="thborderleft">Name</th>
                <th>Year</th>
                <th>Semester</th>
                <th class="thborderright">Options</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td><button type="button" class="btn bi bi-lock-fill" style="background-color: #FF9800;color: white;"></button> 2021-2022 2nd Semester</td>
                <td>2021-2022</td>
                <td>2nd Semester</td>
                <td>
                    <label class="toggle">
                        <input type="checkbox">
                        <span class="labels" data-on="Active" data-off="Set as Active"></span>
                    </label>
                    <button type="button" class="btn bi bi-pen" style="background-color: #2196f3;color: white;" data-bs-toggle="modal" data-bs-target="#editModal"></button>
                    <button type="button" class="btn bi bi-trash" style="background-color: #f44336;color: white;"  data-bs-toggle="modal" data-bs-target="#deleteModal"></button>
                </td>
            </tr>
            <tr>
                <td><button type="button" class="btn bi bi-unlock-fill" style="background-color: #FF9800;color: white;"></button> 2022-2023 1st Semester</td>
                <td>2022-2023</td>
                <td>1st Semester</td>
                <td>
                    <label class="toggle">
                        <input type="checkbox">
                        <span class="labels" data-on="Active" data-off="Set as Active"></span>
                    </label>
                    <button type="button" class="btn bi bi-pen" style="background-color: #2196f3;color: white;" data-bs-toggle="modal" data-bs-target="#editModal"></button>
                    <button type="button" class="btn bi bi-trash" style="background-color: #f44336;color: white;" data-bs-toggle="modal" data-bs-target="#deleteModal"></button>
                </td>
            </tr>
            <tr>
                <td><button type="button" class="btn bi bi-unlock-fill" style="background-color: #FF9800;color: white;"></button> 2023-2024 1st Semester</td>
                <td>2023-2024</td>
                <td>1st Semester</td>
                <td>
                    <label class="toggle">
                        <input type="checkbox">
                        <span class="labels" data-on="Active" data-off="Set as Active"></span>
                    </label>
                    <button type="button" class="btn bi bi-pen" style="background-color: #2196f3;color: white;" data-bs-toggle="modal" data-bs-target="#editModal"></button>
                    <button type="button" class="btn bi bi-trash" style="background-color: #f44336;color: white;" data-bs-toggle="modal" data-bs-target="#deleteModal"></button>
                </td>
            </tr>
            <tr>
                <td><button type="button" class="btn bi bi bi-lock-fill" style="background-color: #FF9800;color: white;"></button> 2024-2025 2nd Semester</td>
                <td>2024-2025</td>
                <td>2nd Semester</td>
                <td>
                    <label class="toggle">
                        <input type="checkbox">
                        <span class="labels" data-on="Active" data-off="Set as Active"></span>
                    </label>
                    <button type="button" class="btn bi bi-pen" style="background-color: #2196f3;color: white;" data-bs-toggle="modal" data-bs-target="#editModal"></button>
                    <button type="button" class="btn bi bi-trash" style="background-color: #f44336;color: white;" data-bs-toggle="modal" data-bs-target="#deleteModal"></button>
                </td>
            </tr>
        </tbody>
    </table>

<!--ADD Modal -->
<div class="modal fade" id="myModal"  aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-sm">
        <div class="modal-content block_md block_primary">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Add Academic Year</h5>
                <a data-bs-dismiss="modal" aria-label="Close" style="cursor:pointer;">
                    <span class="material-icons">close</span>
                </a>
                
            </div>
            <div class="modal-body">
                <div class="mb-3">
                    <label>Year </label>
                    <input name="year" class="form-control"/>
                </div>
                <div class="mb-3">
                    <label>Semester </label>
                    <input name="semester" class="form-control"/>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-success">Save</button>
            </div>
        </div>
    </div>
</div>

<!--EDIT Modal -->
<div class="modal fade" id="editModal"  aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Edit Academic Year</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
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
        <div class="modal-body">
          <p>Are you want to delete this academic year?</p>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancel</button>
          <button type="button" class="btn btn-primary">Delete</button>
        </div>
      </div>
    </div>
  </div>
<script>
$(document).ready(function() {
    $('#viewAcadYear').DataTable({
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
        ],
        order: [[ 1, 'asc' ]]
    });
});
</script>