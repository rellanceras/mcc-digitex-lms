<!--

    Work in Progress | Template by Nicolas Honrade

-->
<?php
	//include("config.php");
	require_once('../../config.php'); 
?>

<!-- Page Content -->
<button type="button" class="btn btn-primary" style="margin-bottom: 1%;" data-bs-toggle="modal" data-bs-target="#myModal">
    Add Department
</button>

<table id="view_dept" class="display table table-bordered" style="width:100%">
    <thead>
        <tr>
            <tr>
            <th class="thborderleft" hidden margin-right>ID</th>
            <th class="thborderleft" margin-right>Name</th>
            <th class="thborderleft" hidden margin-right>Year</th>
            <th class="thborderright">Options</th>
            </tr>
        </tr>
    </thead>
        <?php 
            
            $sql = "SELECT * FROM department";
            $res_data = mysqli_query($conn,$sql);
            
            while($row=mysqli_fetch_assoc($res_data))
            {

        ?>
        
        <tr>
            <td hidden><?php echo $row["id"]; ?></td>
            <td class=""><?php echo $row["dept_name"]; ?></td>
            <td hidden><?php echo $row["abbreviation"]; ?></td>
            <td style="text-align:center">
                <button type="button" class="btn bi bi-pen btn-primary editDept" data-bs-toggle="modal" data-bs-target="#editModal"></button>
                <button type="button"  class="btn bi bi-trash btn-danger deleteDept" data-bs-toggle="modal" data-bs-target="#deleteModal"></button>
            </td>
            
        </tr>
        
        <?php
            }
        ?>
    
</table>             

<!-- Add Modal -->
<div class="modal fade" id="myModal"  aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Add Department</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
			<form action="../admin/curriculum/functions/CRUD_department.php" method="POST">
            <div class="modal-body">
                <label>Department Name </label>
                <input name="dept" class="form-control block" required/>
                <label>Abbreviation </label>
                <input name="desc" class="form-control block" required/>
            </div>
            <div class="modal-footer">
                <button type="submit" class="btn btn-primary" name="addDept">Save</button>
            </div>
			</form>
        </div>
    </div>
</div>
<!-- Edit Modal -->
<div class="modal fade" id="editModal"  aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Edit Department</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
			<form action="../admin/curriculum/functions/CRUD_department.php" method="POST">
                <div class="modal-body">
				<input class="form-control block" type="hidden" name="departmentID" id="departmentID">
					<label>Department Name </label>
					<input name="department_name" id="department_name" class="form-control block" required/>
					<label>Description </label>
					<input name="department_description" id="department_description" class="form-control block" required/>
				</div>
				<div class="modal-footer">
					<button type="submit" class="btn btn-primary" name="editDepartment">Save</button>
				</div>
			</form>
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
			<form action="../admin/curriculum/functions/CRUD_department.php" method="POST">
            <div class="modal-body p-4">
			<input class="form-control block" type="hidden" name="deleteID" id="deleteID">
                <p>Are you sure you want to delete this department?</p>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancel</button>
                <button type="submit" class="btn btn-danger" name="deleteDepartment">Delete</button>
            </div>
			</form>
        </div>
    </div>
</div>


<script>
    $('#view_dept').DataTable({
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
    });

    $(document).ready(function(){
    //script for department update
    $('.editDept').on('click', function(){
        $('#editModal').modal('show');
        
        $tr = $(this).closest('tr');
        
        var data = $tr.children("td").map(function(){
            return $ (this).text();
        }).get();
        
        console.log(data);
        
        $('#departmentID').val(data[0]);
        $('#department_name').val(data[1]);
        $('#department_description').val(data[2]);
        
    });

	//script for department delete
    $('.deleteDept').on('click', function(){
        $('#deleteModal').modal('show');
        
        $tr = $(this).closest('tr');
        
        var data = $tr.children("td").map(function(){
            return $ (this).text();
        }).get();
        
        console.log(data);
        
        $('#deleteID').val(data[0]);
        
    });

	});
</script>