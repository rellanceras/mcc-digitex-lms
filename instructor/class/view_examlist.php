<!-- <button class="btn btn-primary text-light mb-3" id="btn_addexamform" data-page="addexamform">Add Exam Items</button> -->
<button class="btn btn-primary text-light mb-3" id="btn_viewexamform" data-page="viewexamform">View Exam</button>

<button type="button" class="btn btn-primary text-light mb-3" data-bs-toggle="modal" data-bs-target="#addExam">Add Exam</button>

<button type="button" class="btn btn-primary text-light mb-3" id="btn_viewexam" data-page="viewexam">Exam page</button>

<table id="view_course" class="display row-border" style="width:100%">
    <thead>
        <tr>
            <th>ID</th>
            <th>Exam Name</th>
            <th>Total Items</th>
            <th>Date Created</th>
            <th>Date Due</th>
            <th>Options</th>
            <th>Visibility</th>
        </tr>
    </thead>
    <tbody>
        <tr>
            <td></td>
            <td>Quiz #1</td>
            <td>10 items</td>
            <td>January 1, 2022</td>
            <td>February 5, 2022</td>
            <td>
                <button class="btn btn-primary"><span class="material-icons" data-bs-toggle="modal" data-bs-target="#addExam">edit</span></button>
                <button class="btn btn-danger"><span class="material-icons">delete</span></button>
            </td>
            <td>
                <button class="btn btn-warning"><span class="material-icons">visibility</span></button>
            </td>
        </tr>
        <tr>
            <td></td>
            <td>Quiz #2</td>
            <td><span class="text-danger">No items</span></td>
            <td>January 5, 2022</td>
            <td>February 20, 2022</td>
            <td>
                <button class="btn btn-primary"><span class="material-icons" data-bs-toggle="modal" data-bs-target="#addExam">edit</span></button>
                <button class="btn btn-danger"><span class="material-icons">delete</span></button>
            </td>
            <td>
                <button class="btn btn-warning disabled"><span class="material-icons">visibility_off</span></button>
            </td>
        </tr>
    </tbody>
    <tfoot>
        <tr>
            <th>ID</th>
            <th>Exam Name</th>
            <th>Total Items</th>
            <th>Date Created</th>
            <th>Date Due</th>
            <th>Options</th>
            <th>Visibility</th>
        </tr>
    </tfoot>
</table>

<!-- Modal for add exam entry -->
<div class="modal fade" id="addExam" tabindex="-1" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content block_md block_primary">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Add Exam</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <form>
            <div class="modal-body">
                <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label">Exam Name:</label>
                    <input type="text" class="form-control block-sm" id="">
                </div>
                <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label">Exam Instruction:</label>
                    <textarea class="form-control block-sm" name="" id="" cols="30" rows="3"></textarea>
                </div>
                <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label">Timer: (minutes)</label>
                    <input type="number" class="form-control block-sm" id="">
                </div>
                <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label">Date Due:</label>
                    <input type="date" class="form-control block-sm" id="">
                </div>
            </div>
            <div class="modal-footer justify-content-center">
                <div>
                    <button type="reset" class="btn btn-secondary" data-bs-dismiss="modal">Cancel</button>
                    <button type="button"  class="btn btn-success" id="btn_addexamform" data-page="addexamform">Submit</button>
                </div>
                <p class="text-info">Pressing submit will take you to 'add exam items' page)</p>
            </div>
            </form>
        </div>
    </div>
</div>

<script>
$(document).ready(function(){
    $('#btn_addexamform').click(function() {
        var page = $(this).attr('data-page');
        $.ajax({
            type: 'GET',
            url: 'navInstructor.json',
            dataType: 'html',
        }).done(function(response) {
            var data = JSON.parse(response)
            switch(page) {
                case 'addexamform':
                    window.open(data[0].class.creq["vexamform"], '_self');
                    break;
                default:
                    $('#subContent').load(data[0].class.creq.vexamlist);
            }
            $('#setSubPage').text("Add Class");
        });
    });
    $('#btn_viewexamform').click(function() {
        var page = $(this).attr('data-page');
        $.ajax({
            type: 'GET',
            url: 'navInstructor.json',
            dataType: 'html',
        }).done(function(response) {
            var data = JSON.parse(response)
            switch(page) {
                case 'viewexamform':
                    window.open(data[0].class.creq["vexamform"], '_blank');
                    break;
                default:
                    $('#subContent').load(data[0].class.creq.vexamlist);
            }
            $('#setSubPage').text("Add Class");
        });
    });

    $('#btn_viewexam').click(function() {
        var page = $(this).attr('data-page');
        $.ajax({
            type: 'GET',
            url: 'navInstructor.json',
            dataType: 'html',
        }).done(function(response) {
            var data = JSON.parse(response)
            switch(page) {
                case 'viewexam':
                    $('#subContent').load(data[0].class.creq["vexam"]);
                    break;
                default:
                    $('#subContent').load(data[0].class.creq.vexamlist);
            }
            $('#setSubPage').text("Add Class");
        });
    });

    $('#view_course').DataTable({
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