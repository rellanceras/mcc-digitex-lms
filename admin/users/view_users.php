<!--

    Work in Progress | Template by Nicolas Honrade

-->

<?php
      require_once($_SERVER['DOCUMENT_ROOT'] . '/mcc-digitex-lms/admin/users/functions/user-actions.php'); 
      require_once($_SERVER['DOCUMENT_ROOT'] . '/mcc-digitex-lms/admin/users/functions/user-other-actions.php'); 
?>



<!-- Page Content -->
    
<button type="button" class="btn btn-primary d-flex align-items-center mb-3" id="btn_addusers" data-page="addusers"><span class="material-icons">add</span> Add User</button>

<table id="example" class="display table table-bordered" style="width:100%">
    <thead>
        <tr>
            <!-- <th class="d-none">ID</th> -->
            <th class="d-none">ID</th>
            <th>School ID</th>
            <th>First Name</th>
            <th>Middle Name</th>
            <th>Last Name</th>
            <th class="d-none">Birthday</th>
            <th class="d-none">Address</th>
            <th>Role</th>
            <th>Department</th>
            <th>Program</th>
            <th>Email</th>
            <th></th>
        </tr>
    </thead>
    <tbody>
        <?php getAllUsers(); ?>
    </tbody>
</table>



<!-- Modal -->
<form action="../admin/users/functions/user-other-actions.php" method="POST">
    <div class="modal fade" id="myModal"  aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Update User</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    
                    <input input type="hidden" name="id" id="id" class="form-control block"/>
                    <input input type="hidden" name="school_id" id="school_id" class="form-control block"/>

                    <label>First Name: </label>
                    <input name="first_name" id="first_name" class="form-control block" pattern="[A-Za-z ]{1,32}" required><br>
                    <label>Middle Name: </label>
                    <input name="middle_name" id="middle_name" class="form-control block" pattern="[A-Za-z ]{1,32}"><br>
                    <label>Last Name: </label>
                    <input name="last_name" id="last_name" class="form-control block" pattern="[A-Za-z ]{1,32}" required><br>

                    <input type="hidden" name="birthday" id="birthday" class="form-control block">
                    <input type="hidden" name="address" id="address" class="form-control block"/>

                    <label>Role: </label>
                    <select class="form-select block" name="role" id="role" style="height: 45px;" required>
                        <option name="role" id="role" value="1" <?php if($role == "1") { echo "selected"; }?>>Admin</option>
                        <option name="role" id="role" value="2" <?php if($role == "2") { echo "selected"; }?>>Teacher</option>
                        <option name="role" id="role" value="3" <?php if($role == "3") { echo "selected"; }?>>Student</option>
                    </select><br>
                    <label>Department: </label>
                    <select class="form-select block" name="department" id="department" style="height: 45px;" required>
                        <option name="department" id="department" value="1" <?php if($department == "1") { echo "selected"; }?>>Sample Dept. 1</option>
                        <option name="department" id="department" value="2" <?php if($department == "2") { echo "selected"; }?>>Sample Dept. 2</option>
                        <option name="department" id="department" value="3" <?php if($department == "3") { echo "selected"; }?>>Sample Dept. 3</option>
                    </select><br>
                    <label>Program: </label>
                    <select class="form-select block" name="program" id="program" style="height: 45px;" required>
                        <option name="program" id="program" value="1" <?php if($program == "1") { echo "selected"; }?>>Sample Prog. 1</option>
                        <option name="program" id="program" value="2" <?php if($program == "2") { echo "selected"; }?>>Sample Prog. 2</option>
                        <option name="program" id="program" value="3" <?php if($program == "3") { echo "selected"; }?>>Sample Prog. 3</option>
                    </select><br>
                    <label>Email: </label>
                    <input name="email" id="email" class="form-control block" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,}$" required><br>
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
    $('.btnShowEditModal').on('click', function(){
    $('#myModal').modal('show'); 
            $tr = $(this).closest('tr');

        var data = $tr.children("td").map(function() {
            return $(this).text();
        }).get();

        console.log(data);
        $('#id').val(data[0]);
        $('#school_id').val(data[1]);
        $('#first_name').val(data[2]);
        $('#middle_name').val(data[3]);
        $('#last_name').val(data[4]);
        $('#birthday').val(data[5]);
        $('#address').val(data[6]);  
        $('#role').val(data[7]);
        $('#department').val(data[8]);  
        $('#program').val(data[9]);
        $('#email').val(data[10]);
    });

    var table = $('#example').DataTable( {
        // rowReorder: {
        //     selector: 'td:nth-child(2)'
        // },
        // responsive: true,
        dom: 'Bfrtip',
        
        buttons: [
        {
            
        text: '<i class="bi bi-arrow-clockwise"></i>'
        },
        {
        extend: 'colvis',
        text: '<i class="bi bi-layout-three-columns"></i>'

        },
        
        ]
    } );

    $(document).ready(function(){
    $('#btn_addusers').click(function() {
        var page = $(this).attr('data-page');
        $.ajax({
            type: 'GET',
            url: '../admin/navAdmin.json',
            dataType: 'html',
        }).done(function(response) {
            var data = JSON.parse(response)
            switch(page) {
                case 'addusers':
                    $('#pageContent').load(data[0].users.addusers);
                    break;
                default:
                    console.log("Page does not exist");
            }
            document.title = page.charAt(0).toUpperCase() + page.slice(1)  + ' | DigiTeach LMS';
        });
        
    });
});
</script>