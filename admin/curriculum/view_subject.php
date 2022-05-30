<!--

    Work in Progress | Template by Nicolas Honrade

-->
<?php
	//include("config.php");
	require_once('../../config.php'); 
?>


<!-- Page Content -->
                    
<button type="button" class="btn btn-primary" style="margin-bottom: 1%;" data-bs-toggle="modal" data-bs-target="#myModal">
    Add Subject
</button>

<table id="view_subject" class="display table table-bordered" style="width:100%"> 
    <thead>
        <tr>
            <th hidden>id</th>
            <th class="thborderleft">Name</th>
            <th>Subject Code</th>
            <th>Department</th>
            <th hidden>Year</th>
            <th class="thborderright">Options</th>
        </tr>
    </thead>
    <tbody>  
        <?php 
            
            $sql = "SELECT * FROM subject";
            $res_data = mysqli_query($conn,$sql);
            
            while($row=mysqli_fetch_assoc($res_data))
            {

        ?>
    
        <tr>
            <td hidden><?php echo $row["id"]; ?></td>
            <td><?php echo $row["subject_name"]; ?></td>
            <td><?php echo $row["subject_code"]; ?></td>
            <td><?php echo $row["department"]; ?></td>
            <td hidden><?php echo $row["acad_year_id"]; ?></td>
            <td style="text-align:center">
                <button type="button" class="btn bi bi-pen btn-primary editSub" data-bs-toggle="modal" data-bs-target="#editModal"></button>
                <button type="button" class="btn bi bi-trash btn-danger deleteSub" data-bs-toggle="modal" data-bs-target="#deleteModal"></button>
            </td>
        </tr>
        
        <?php
            }
        ?>
    </tbody>
</table>       

<!-- Modal Add-->
<div class="modal fade" id="myModal"  aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Add Subject</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
			<form action="../admin/curriculum/functions/CRUD_subject.php" method="POST">
            <div class="modal-body">
                <label>Subject Code</label>
                <input name="scode" class="form-control block" required/>
                <label>Subject Name </label>
                <input name="sname" class="form-control block" required/>
				
                <label>Department </label>
				<?php 
					$sql = "SELECT abbreviation FROM `department`";
					$abbreviations = mysqli_query($conn,$sql);
				?>
                <select name="dept" class="form-control block">
                    <option value="" disabled selected> Choose Account Type</option>
                    <?php

					while ($abbreviation = mysqli_fetch_array(
						    $abbreviations,MYSQLI_ASSOC)):;
					?>
					<option value="<?php echo $abbreviation["abbreviation"];?>">
					<?php echo $abbreviation["abbreviation"];?>
					</option>
					<?php endwhile;?>
                </select>
				
                <label>Description </label>
                <input name="desc" class="form-control block"/>
            </div>
            <div class="modal-footer">
                <button type="submit" class="btn btn-primary" name="addSub">Save</button>
            </div>
			</form>
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
			<form action="../admin/curriculum/functions/CRUD_subject.php" method="POST">
            <div class="modal-body">
			<input class="form-control block" type="hidden" name="subjectID" id="subjectID">
                <label>Name </label>
                <input name="subjectName" id="subjectName" class="form-control block" required/>
                <label>Subject Code </label>
                <input name="subjectCode" id="subjectCode" class="form-control block" required/>
				<label>Department </label>
                <input name="department" id="department" class="form-control block" required/>
            </div>
            <div class="modal-footer">
                <button type="submit" class="btn btn-primary" name="editSub">Save</button>
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
                <h5 class="modal-title">Delete Subject</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
			<form action="../admin/curriculum/functions/CRUD_subject.php" method="POST">
            <div class="modal-body p-4">
			<input class="form-control block" type="hidden" name="deleteID" id="deleteID">
                <p>Are you sure you want to delete this subject?</p>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancel</button>
                <button type="submit" class="btn btn-danger" name="deleteSub">Delete</button>
            </div>
			</form>
        </div>
    </div>
</div>

<script>
    var table = $('#view_subject').DataTable({
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
    //script for subject update
	$(document).ready(function(){
		$('.editSub').on('click', function(){
			$('#editModal').modal('show');
			
			$tr = $(this).closest('tr');
			
			var data = $tr.children("td").map(function(){
				return $ (this).text();
			}).get();
			
			console.log(data);
			
			$('#subjectID').val(data[0]);
			$('#subjectName').val(data[1]);
			$('#subjectCode').val(data[2]);
			$('#department').val(data[3]);
			
		});
        //script for subject delete

		$('.deleteSub').on('click', function(){
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