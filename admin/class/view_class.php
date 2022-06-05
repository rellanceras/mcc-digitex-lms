
<!-- Page Content -->
<a class="btn btn-primary text-light mb-3" id="btn_addclass" data-page="addclass">Add Class</a>
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
                    <button type='button' class='btn btn-primary btnShowEditModal' data-bs-toggle='modal' data-bs-target='#editModal'><i class='bi bi-pencil-square icon-white'></i> Edit</button>
                </td>
            </tr>
            <tr>
                <td>Marie Claire</td>
                <td>Advanced Mathematics</td>
                <td>SCST</td>
                <td>
                    <button type='button' class='btn btn-primary btnShowEditModal' data-bs-toggle='modal' data-bs-target='#editModal'><i class='bi bi-pencil-square icon-white'></i> Edit</button>
                </td>
            </tr>
            <tr>
                <td>Josse Reezal</td>
                <td>Advanced Mathematics</td>
                <td>SCST</td>
                <td>
                    <button type='button' class='btn btn-primary btnShowEditModal' data-bs-toggle='modal' data-bs-target='#editModal'><i class='bi bi-pencil-square icon-white'></i> Edit</button>
                </td>
            </tr>
        </tbody>
    </table>

<!-- Modal -->
<form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method="POST">
    <div class="modal fade" id="editModal"  aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Update Class</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">

                    <label>Class Name: </label>
                    <input name="first_name" id="first_name" class="form-control block" pattern="[a-zA-Z]{1,}" required><br>

                    <label>Subject: </label>
                    <select class="form-select block" name="subject" id="subject" style="height: 45px;" required>
                        <option selected>--None Selected--</option>
                        <option value="1">.</option>
                        <option value="2">..</option>
                        <option value="3">...</option>
                    </select><br>
                    <label>Department: </label>
                    <select class="form-select block" name="department" id="department" style="height: 45px;" required>
                        <option selected>--None Selected--</option>
                            <option value="1">.</option>
                            <option value="2">..</option>
                            <option value="3">...</option>
                    </select><br>
                </div>
                <div class="modal-footer">
                    <button type="submit" name="btnSave" class="btn btn-primary">Save</button>
                    <button type="button" class="btn btn-light" data-bs-dismiss="modal">Cancel</button>
                </div>
            </div>
        </div>
    </div>
</form>
<!-- End Modal -->

<script>
    var table = $('#view_course').DataTable({
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
    $(document).ready(function(){
        $('#btn_addclass').click(function() {
            var page = $(this).attr('data-page');
            $.ajax({
                type: 'GET',
                url: '../admin/navAdmin.json',
                dataType: 'html',
            }).done(function(response) {
                var data = JSON.parse(response)
                switch(page) {
                    case 'addclass':
                        $('#pageContent').load(data[0].class.addclass);
                        break;
                    default:
                        $('#pageContent').load(data[0].class.viewclass);
                }
                $('#setSubPage').text("Add Class");
            });
        });
    });
</script>